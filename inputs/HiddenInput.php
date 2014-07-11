<?php

class HiddenInput
{
  private $name;
  private $value;
  
  function __construct($name, $value)
  {
    $this->name = $name;
    $this->value = $value;
  }
  
  function print_code()
  {
    echo "<input type=\"hidden\" name=\"$this->name\" value=\"$this->value\"/>";
  }
}