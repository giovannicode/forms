<?php

class LabelFilebox
{

  private $name;
  private $label;
  
  function __construct($name, $label)
  {
    $this->name = $name;
    $this->label = $label;
  }
  
  public function print_code()
  {
    echo "<div><label for=\"$this->name\">$this->label</label><input type=\"file\" name=\"$this->name\"/></div>\n"; 
  }
}