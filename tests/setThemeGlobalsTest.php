<?php

require dirname(__DIR__) . '/src/setThemeGlobals.php';

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
        $result = setThemeGlobals('local');
        $this->assertEquals($GLOBALS['pre_path'], '');
        $this->assertEquals($GLOBALS['pre_crumbs']['Site home title'], '/');
    }

    public function testResultForDevelopmentEnvironment()
    {
        $result = setThemeGlobals('development');
        $this->assertEquals($GLOBALS['pre_path'], '');
        $this->assertEquals($GLOBALS['pre_crumbs']['Site home title'], '/');
    }

    public function testResultForExternalTNA() {
        $result = setThemeGlobals('external');
        $this->assertEquals($GLOBALS['pre_path'], '/about/site-home-title');
    }


}
