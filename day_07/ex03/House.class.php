<?php
  class house{
    public function introduce(){
      if ($this->getHouseName() != NULL)
        print("House " . $this->getHouseName() . " of " . $this->getHouseSeat() . " : " . $this->getHouseMotto() . PHP_EOL);
      else {
        trigger_error("fatal error");
      }
    }
    public function getHouseName(){
      return "";
    }
    public function getHouseMotto(){
      return "";
    }
    public function getHouseSeat(){
      return "";
    }
  }
?>
