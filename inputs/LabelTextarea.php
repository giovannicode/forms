<?php
class LabelTextarea
{
  private $name;
  private $label;
  private $rows;
  private $columns;
  
  function __construct($name, $label, $rows, $columns)
  {
    $this->name = $name;
    $this->label = $label;
    $this->rows = $rows;
    $this->columns = $columns;
  }
  
  function print_code()
  {
    echo "<div><label for=\"$this->name\">$this->label</label><textarea name=\"$this->name\" rows=\"$this->rows\" cols=\"$this->columns\"></textarea></div>\n";
  }
}
?>