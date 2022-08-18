<?php

declare(strict_types=1);

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

	public function onEnable() : void{
		$this->getServer()->getNetwork()->setName("Motd", "SubMotd"); // this should works...
		$this->getLogger()->info("Plugin Test for SubMotd Support");
	}
}
