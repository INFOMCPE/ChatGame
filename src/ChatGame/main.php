<?php

namespace ChatGame;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\CallbackTask;
use pocketmine\utils\Random;
use onebone\economyapi\EconomyAPI;
use pocketmine\Player;
use pocketmine\inventory\Inventory;
use pocketmine\Server;
use pocketmine\item\Item;

class main extends PluginBase implements Listener{
	
	public $answer;
	public $work;
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->saveDefaultConfig();
		$this->getServer()->getScheduler()->scheduleRepeatingTask(new CallbackTask(array($this, "game")), $this->getConfig()->get("time"));
		if($this->getServer()->getPluginManager()->getPlugin("EconomyAPI") != null){
               $this->economyapi = $this->getServer()->getPluginManager()->getPlugin("EconomyAPI");
          }else{
               $this->economyapi = null;
               $this->getLogger()->critical("EconomyAPI НЕ НАЙДЕН скачайте плагин сдесь: http://infomcpe.ru/resources/Економика-ВСЯ.20/");
          }
	}
	
    public function game(){
        $rand = new Random();
        $max = $this->getConfig()->get("max");
        $min = $this->getConfig()->get("min");
        switch ($rand->nextRange(1, 22)){
			case 1:
			
             if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 171+1181=?");
			$this->answer = 1352;
			$this->work = 1;
			break;
			
			case 2:
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 193-19=?");
			$this->answer = 174;
			$this->work = 1;
			break;

			case 3:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
            $this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 81840+193=?");
			$this->answer = 82033;
			$this->work = 1;
			break;

			case 4:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 461-67=?");
			$this->answer = 394;
			$this->work = 1;
			break;

			case 5:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 2+2+8-2=?");
			$this->answer = 10;
			$this->work = 1;
			break;

			case 6:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 684+65=?");
			$this->answer = 749;
			$this->work = 1;
			break;

			case 7:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 7903+885=?");
			$this->answer = 8788;
			$this->work = 1;
			break;

			case 8:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 99-65=?");
			$this->answer = 34;
			$this->work = 1;
			break;

			case 9:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 9083-281=?");
			$this->answer = 8802;
			$this->work = 1;
			break;

			case 10:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 976+577=?");
			$this->answer = 1553;
			$this->work = 1;
			break;

			case 11:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 79+79=?");
			$this->answer = 158;
			$this->work = 1;
			break;

			case 12:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 533+689=?");
			$this->answer = 1222;
			$this->work = 1;
			break;

			case 13:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 1901-191=?");
			$this->answer = 1710;
			$this->work = 1;
			break;

			case 14:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 83+82-81=?");
			$this->answer = 84;
			$this->work = 1;
			break;

			case 15:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 919-31=?");
			$this->answer = 888;
			$this->work = 1;
			break;

			case 16:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 9191+5=?");
			$this->answer = 9196;
			$this->work = 1;
			break;

			case 17:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 810+25=?");
			$this->answer = 835;
			$this->work = 1;
			break;

			case 18:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 10÷2=?");
			$this->answer = 5;
			$this->work = 1;
			break;

			case 19:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 15÷3=?");
			$this->answer = 5;
			$this->work = 1;
			break;

			case 20:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 9201+21=?");
			$this->answer = 9222;
			$this->work = 1;
			break;

			case 21:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 123+123=?");
			$this->answer = 246;
			$this->work = 1;
			break;

			case 22:
			
			if($this->getConfig()->get("item") == false){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7:§c от ".$min."$ до".$max."$");
			}
			if($this->getConfig()->get("item") == true){
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Кто первый правильно ответит§7, §6тот получит§7: §9Р§aа§bн§4д§dо§eм§fн§9у§aю §bв§4е§dщ");
 }
			$this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §6Пример§7: §c 890-790=?");
			$this->answer = 100;
			$this->work = 1;
			break;			
		}
    }
    public function onPlayerChatEvent(PlayerChatEvent $event){
        $playere = $event->getPlayer();
        $message = $event->getMessage();
		$random = mt_rand($this->getConfig()->get("min"), $this->getConfig()->get("max"));
        if($this->work == 1){
		    if($message == $this->answer){
			  if($this->getConfig()->get("item") == false){
                $playere->sendMessage("§7(§aЧат-Игра§7) §aПоздравляем§7! §aВы выиграли в §fчат игре §aи получили§c $random $");
                $this->getServer()->broadcastMessage("§7(§aЧат-Игра§7) §aИгрок§f ".$playere->getName()." §aвыиграл в чат игре§7!");
                $this->getLogger()->info("Игрок ".$playere->getName()." Победил в Чат-Игре и получил ".$random."");
              
              if($this->getServer()->getPluginManager()->getPlugin("EconomyPlus") != null){
              	EconomyPlusAPI::addMoney($playere->getName(), $random);
                
                }
                }
                    if($this->getConfig()->get("item") == true){
                  //  $randomi = mt_rand(264, 303, 261, 32, 350, 354, 265, 266);
                    $amount = mt_rand(1,5);
                    $sender = $playere;
                    switch (mt_rand(1,5)){             	
			       case 1:
			    
                    $playere->getInventory()->addItem(Item::get(ITEM::DIAMOND, 0, 1, "§3Алмаз"));
                    $sender->sendMessage("§7(§aЧат-Игра§7) §aПоздравляем§7! §aВы выиграли в §fчат игре §aи получили$f:§3 Алмаз");
                    
                    break;
                    case 2:
                    
                    $playere->getInventory()->addItem(Item::get(ITEM::IRON_BOOTS,0, 1, "§7Железные ботинки"));
                    $sender->sendMessage("§7(§aЧат-Игра§7) §aПоздравляем§7! §aВы выиграли в §fчат игре §aи получили$f:§7 Железные ботинки");
                    break;
                    
                    case 3:
                    
                    $playere->getInventory()->addItem(Item::get(ITEM::STEAK, 0, 2, "§eСтейк"));
                    $sender->sendMessage("§7(§aЧат-Игра§7) §aПоздравляем§7! §aВы выиграли в §fчат игре §aи получили$f2 :§e Стейка");
                    break;
                    
                    case 4:
                    
                    $playere->getInventory()->addItem(Item::get(ITEM::EMERALD, 0, 1, "§aИзумруд"));
                    $sender->sendMessage("§7(§aЧат-Игра§7) §aПоздравляем§7! §aВы выиграли в §fчат игре §aи получили$f :§a Изумруд");
                    break;
                   
                    case 5:
                    
                	$playere->getInventory()->addItem(Item::get(ITEM::EMERALD, 0, 1, "§aИзумруд"));
                    $sender->sendMessage("§7(§aЧат-Игра§7) §aПоздравляем§7! §aВы выиграли в §fчат игре §aи получили$f :§a Изумруд");
                	break;
                    
                    }
                    }
				$this->work = 0;
                $event->setCancelled(true);
			}
        }elseif($this->work == 0){
			if($message == $this->answer){
				$player->sendMessage("§7(§aЧат-Игра§7) §cВ этой чат игре уже выиграли§7, §cувы§7, §cвы не успели §7 : с");
				$event->setCancelled(true);
			}
		}
    }
}
