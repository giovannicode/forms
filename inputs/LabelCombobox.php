<?php

class LabelCombobox
{
  private $name;
  private $label;
  private $options;
  private $events;
  
  public function __construct($name, $label)
  {
    $this->name = $name;
    $this->label = $label;
  }
  
  public function add_options($options)
  {
    $this->options = $options;
  }
  
  public function add_js_onchange($function_name)
  {
     $this->events['onchange'] = $function_name;
  }
  
  public function print_code()
  {
    echo "<div><label for=\"$this->name\">$this->label</label>";
    echo "<select name=\"$this->name\" ";
    echo "onchange=\"" . $this->events['onchange'] . "\">";
    echo "$this->events";
    
    foreach($this->options as $option)
    {
      echo "<option value=\"$option[0]\">$option[1]</option>";
    }
    
    echo "</select></div>";
  }
}