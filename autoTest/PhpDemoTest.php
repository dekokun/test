<?php

class PhpDemoTest extends PHPUnit_Framework_TestCase{
  protected $demo;

  protected function setUp() {
    $this->demo = new PhpDemo();
  }

  public function test_demo1() {
    $this->assertEquals(1, 1);
  }

  public function test_demo2() {
    $result = $this->demo->plus(1, 2);
    $expect = 3;
    $this->assertEquals($result, $expect);
  }
}
