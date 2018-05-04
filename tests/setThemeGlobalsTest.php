<?php

require dirname( __DIR__ ) . '/inc/functions-globals.php';

class setThemeGlobalsTest extends PHPUnit_Framework_TestCase
{

    /**
     * @expectedException BadFunctionCallException
     */
    public function testNoArgumentRaisesException()
    {
        setThemeGlobals();
    }

    public function testForGlobals()
    {
        $result = setThemeGlobals('development');
        $this->assertArrayHasKey('pre_path', $GLOBALS, 'the pre_path global was not found');
        $this->assertArrayHasKey('pre_crumbs', $GLOBALS, 'the pre_crumbs global was not found');
    }

    public function testResultForLocalEnvironment()
    {
        $result = setThemeGlobals('internal');
        $this->assertEquals($GLOBALS['pre_path'], '');
	    $this->assertEquals($GLOBALS['pre_crumbs']['Learn medieval Latin'], '/');
    }

    public function testResultForDevelopmentEnvironment()
    {
        $result = setThemeGlobals('development');
        $this->assertEquals($GLOBALS['pre_path'], '');
	    $this->assertEquals($GLOBALS['pre_crumbs']['Learn medieval Latin'], '/');
    }

    public function testResultForExternalTNA() {
        $result = setThemeGlobals('external');
	    $this->assertEquals($GLOBALS['pre_crumbs']['Help with your research'], '/help-with-your-research/');
	    $this->assertEquals($GLOBALS['pre_crumbs']['Reading old documents'], '/help-with-your-research/reading-old-documents/');
	    $this->assertEquals($GLOBALS['pre_crumbs']['Learn medieval Latin'], '/help-with-your-research/reading-old-documents/latin/');
        $this->assertEquals($GLOBALS['pre_path'], '/help-with-your-research/reading-old-documents/latin');
    }


}
