<?php
  abstract class AbstractClass{
    protected abstract function getValue();
    protected abstract function prefixValue($prefix);

    public function printValue(){
       print_r($this->getValue());
    }
  }

  class ChildClass1 extends AbstractClass{
    protected function getValue(){
      $a = [1,2,3,4];
      return $a;
    }

    public function prefixValue($prefix){
      echo $prefix;
    }
  }

  $obj1 = new ChildClass1 ;
  $obj1->printValue();
  $obj1->prefixValue('Aman');

?>