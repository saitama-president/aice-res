<?php

namespace App\AICE\service;

use \App\AICE\data\Command;

class AIService{
        
    public function __construct() {
        ;
    }
    
    public function parseQuery($text){
        
        $text= trim($text);
        
        //スペシャルコマンドを検索する
        foreach(special_command_list() as $command){
            if(preg_match("/#({$command->command})/",$text)){
                //スペシャルコマンド実行
                return $command->execute([]);
            }
        }
        
        return $text;
    }
    
 
}