<?php

class Variables
{
  public $variables;

  function __construct()
  {
    $this->variables = array();
  }

  function set_variable($name, $value)
  {
    $this->variables[$name] = $value;
  }

  function get_variable($name)
  {
    return $this->variables[$name];
  }

  function dump_vars()
  {
    print_r($this->variables);
  }

  function foreach_var()
  {
    foreach( array_keys($this->variables) as $key)
    {
      yield $key;
    }
  }

}

?>
