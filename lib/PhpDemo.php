<?php

class PhpDemo {
  public function plus($a, $b) {
    return $a + $b;
  }
  public function minus($a, $b) {
    return $a + $b;
  }
  public function hoge($a, $b) {
    return $a;
  }
  public function fuga($a, $b) {
    $c = $this->plus() + $this->minus();
    $c = $this->plus() + $this->minus();
    $c = $this->plus() + $this->minus();
    $c = $this->plus() + $this->minus();
    $c = $this->plus() + $this->minus();
    return $a + $b;
  }
}
