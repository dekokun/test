<?php

class DemoTest extends PHPUnit_Framework_TestCase{
  protected $demo;

  protected function setUp() {
    $this->demo = new PhpDemo();
  }

  public function test_demo1() {
    $this->assertEquals(1, 1);
  }
}
