<?php

declare(strict_types=1);

class DataManager
{
   /**
    * Save player to file.
    * @param int $id The player id.
    */
   public static function savePlayer(string $id, Player $obj)
   {
      $objData = serialize($obj);
      $fp = fopen('player_' . $id . '.txt', 'w');
      fwrite($fp, $objData);
      fclose($fp);
   }

   public static function loadPlayer(string $id)
   {
      $objData = file_get_contents('player_' . $id . '.txt');
      $obj = unserialize($objData);
      return $obj;
   }
}
