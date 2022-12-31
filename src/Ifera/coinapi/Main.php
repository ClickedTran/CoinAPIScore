<?php
declare(strict_types = 1);

namespace Ifera\coinapi;

use Ifera\coinapi\listeners\EventListener;
use Ifera\coinapi\listeners\TagResolveListener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

	protected function onEnable(): void{
		$this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
		$this->getServer()->getPluginManager()->registerEvents(new TagResolveListener($this), $this);
	}
}
