<?php

class PhpDemoTest extends PHPUnit_Framework_TestCase{
  protected $demo;

  protected function setUp() {
    $this->demo = new PhpDemo();
  }

  /**
  * @test
  */
  public function standard_test() {
    $this->assertEquals(1, 1);
  }

  /**
  * @test
  */
  public function plus() {
    $result = $this->demo->plus(1, 2);
    $expect = 3;
    $this->assertEquals($result, $expect);
  }
}
