<?php

require dirname( __DIR__ ) . '/inc/functions-activities.php';

class activitiesTest extends PHPUnit_Framework_TestCase
{

    public function testExample()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);
    }

    public function test_activity_form_element()
    {
        $this->assertTrue(function_exists('activity_form_element'));
    }
    public function test_practice_form_element()
    {
        $this->assertTrue(function_exists('practice_form_element'));
    }
    public function test_advanced_activity()
    {
        $this->assertTrue(function_exists('advanced_activity'));
    }
    public function test_advanced_practice()
    {
        $this->assertTrue(function_exists('advanced_practice'));
    }
}
