<?php
  class Targaryen{
    public function getBurned(){
      if ($this->resistsFire() == "True")
        return "emerges naked but unarmed";
      else
        return "burns alive";
  }
  public function resistsFire(){
    return False;
  }
}
?>
