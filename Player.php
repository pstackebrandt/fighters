<?php

declare(strict_types=1);

class Player
{
   public $name;
   protected $health = 100;
   protected $strength = 7;

   function __construct(string $name)
   {
      $this->name = $name;
   }

   function getHealth(): int
   {
      return $this->health;
   }

   function getStrength(): int
   {
      return $this->strength;
   }

   function getAttackValue(): int
   {
      return $this->getStrength();
   }

   function attack(int $value): string
   {
      $this->health -= $value;

      return "$this->name hat $value Gesundheit verloren.";
   }
}
