<?php
include(FORM_CODE . 'InputHolder.php');
include(FORM_CODE . 'LabelCombobox.php');
include(FORM_CODE . 'LabelFilebox.php');
include(FORM_CODE . 'LabelTextbox.php');
include(FORM_CODE . 'LabelTextarea.php');
include(FORM_CODE . 'HiddenInput.php');

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
