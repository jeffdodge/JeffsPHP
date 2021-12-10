<?php

class Person
{
  var $first_name;
  var $last_name;

  function full_name()
  {
    echo $this->first_name . " " . $this->last_name;
  }
}

$customer = new Person();
$customer->first_name = "Jeff";
$customer->last_name = "Dodge";

$customer->full_name();
