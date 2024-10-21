<?php

declare(strict_types=1);

namespace muqsit\beacon;

use muqsit\beacon\timings\BeaconTimings;
use pocketmine\block\tile\TileFactory;
use pocketmine\plugin\PluginBase;
use muqsit\beacon\block\tile\Beacon as BeaconTile;

final class Loader extends PluginBase{

	protected function onEnable() : void{
		BeaconTimings::init($this);
		new BeaconInventoryNetworkListener($this);
		TileFactory::getInstance()->register(BeaconTile::class, ["evdbeacon:beacon"]);
	}
}
