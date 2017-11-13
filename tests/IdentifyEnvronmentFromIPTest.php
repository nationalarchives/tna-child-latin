<?php

require dirname(__DIR__) . '/src/identifyEnvironmentFromIP.php';

class ChildTemplateTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException BadFunctionCallException
     */

    public function testCallWithoutArgumentRaisesException()
    {
        identifyEnvironmentFromIP();
    }

    /**
     * @expectedException BadFunctionCallException
     */

    public function testCallWithSingleArgumentRaisesException()
    {
        identifyEnvironmentFromIP('255.255.1.0');
    }

    public function testDevelopmentIPs()
    {
        $environment = identifyEnvironmentFromIP('10.0.2.2', '10.0.2.2');
        $this->assertEquals($environment, 'development');
    }

    public function testLocalIPs()
    {
        $environment = identifyEnvironmentFromIP('255.255.192.5', '10.0.2.2');
        $this->assertEquals($environment, 'internal');
    }

    public function testOtherIPs()
    {
        $environment = identifyEnvironmentFromIP('255.255.192.5', '255.244.142.6');
        $this->assertEquals($environment, 'external');
    }


}
