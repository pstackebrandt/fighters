<?php

class Player {
   public $name;
   protected $health = 100;
   protected $strength = 7;

   function __construct($name)
   {
      $this->name = $name;
   }


}

?>