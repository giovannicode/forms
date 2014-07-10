<?php

class LabelTextbox
{
  private $name;
  private $label;
  private $events;
  
  
  public function __construct($name, $label)
  {
    $this->name = $name;
    $this->label = $label;
  }
  
  public function add_js_onchange($function_name)
  {
     $this->events['onchange'] = $function_name;
  }
  
  public function print_code()
  {
    echo "<div><label for=\"$this->name\">$this->label</label><input type=\"text\" id=\"$this->name\" name=\"$this->name\" ";
    echo "onchange=\"" . $this->events['onchange'] . "(this)\"/>";
    echo "</div>\n";
  }
}
