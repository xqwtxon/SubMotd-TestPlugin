<?php

declare(strict_types=1);

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

	public function onEnable() : void{
	    /**
	     * FOR PLUGIN DEVELOPERS:
	     * Do not use Network->internalSetName(), this kindly mostly bug on PocketMine-MP RakLib, The Query is displaying the ipv4/ipv6. It break backwards compability and behaivor of the game. Take a example how developers can do with it.
	     * 
	     * FOR INTERNAL DEVELOPERS:
	     * Please help me to fix this internalSetName() to protect these agains the BC Break.
	     */
		$this->getServer()->getNetwork()->setName("Motd");
		$this->getServer()->getNetwork()->setLanName("SubMotd");
		$this->getLogger()->info("Plugin Test for SubMotd Support");
	}
}
