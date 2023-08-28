<?php

namespace skyss0fly\DiscordBook;

use pocketmine\plugin\PluginBase;
use pocketmine\src\item\WritableBookBase;

class Main extends PluginBase {

public function onLoad(): void {
$this->saveDefaultConfig();
  
}

  public function onBookWrite() {
$bookid = $this->getDataFolder("Data" . YAML)->get("Books".children("ID"));
    $1 = 1 //id generator
 while ($bookid // === id in bookid ){
// tbh this is a new project idk what to do lol. ill look more at the book api and stuff before i work more on this
      $1 = $1 + 1 // id generator
    }
  }
}
