<?php

namespace healthy;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

 public function onEnable(){
$this->getServer()->getLogger()->info("plugin has been enabled");
$this->getLogger()->info("everything is good");
 }
 public function onDisable(){
 $this->getServer()->getLogger()->info("plugin has been disable"); 
  }
public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
switch ($cmd->getName()){
 case 'heal':
  $sender->setHealth(20);
 break;
  }
 }
} 
