<?php
include(FORMS . 'inputs/InputHolder.php');
include(FORMS . 'inputs/LabelCombobox.php');
include(FORMS . 'inputs/LabelFilebox.php');
include(FORMS . 'inputs/LabelTextbox.php');
include(FORMS . 'inputs/LabelTextarea.php');
include(FORMS . 'inputs/HiddenInput.php');

class Form
{
  public $name;
  public $action;
  public $method;
  public $title;

  public function __construct($name, $action, $method = 'POST')
  {
    $this->name = $name;
    $this->action = $action;
    $this->input_list = array();
  }
  
  public function add_input($input)
  {
    array_push($this->input_list, $input);
  }

  public function add_header($header)
  {
    $this->header = $header;
  }
  
  public function print_code()
  {
    echo "<form id=\"$this->name\" enctype=\"multipart/form-data\" action=\"$this->action\" method=\"$this->method\">\n";

    if(isset($this->header))
    {
      echo "<header>$this->header</header>";
    }
    
    foreach($this->input_list as $input)
    {
      $input->print_code();
    }
    
    echo '<div><input type="submit" value="send"/></div>' . "\n";
    echo "</form>\n";
  }
}
