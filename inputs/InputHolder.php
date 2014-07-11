<?php

class InputHolder
{
  private $ID;
  private $inputs;
  
  public function __construct($ID)
  {
    $this->ID = $ID;
    $this->inputs = array();
  }
  
  public function add_inputs($input)
  {
    $this->inputs[] = $input;
  }
  
  public function print_code()
  {
    echo "<div id=\"$this->ID\">";
    
    foreach($this->inputs as $input)
    {
      $input->print_code();
    }
    
    echo "</div>";
  }
}