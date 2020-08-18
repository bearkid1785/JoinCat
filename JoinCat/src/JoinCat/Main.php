<?php

namespace JoinCat;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class Main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents ($this, $this);
	}

	public function onPlayerJoin(PlayerJoinEvent $event){
		$tag = ("§6§l[§f§l 서버§6§l ]§f§l");
		$player = $event->getPlayer();
		if(! $player->isOP()){
			$player->sendMessage($tag . "안녕하세요 오늘은 광질을 하시는거 어때요??");
	}

	if ( $player->isOP()){
		$tag = ("§6§l[§f§l 서버§6§l ]§f§l");
		$player = $event->getPlayer();
		$player->sendMessage($tag . "안녕! 오늘은 악성유저를 처벌하는게 어때요?");
	}
}
}
