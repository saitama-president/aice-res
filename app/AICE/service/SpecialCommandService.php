<?php

namespace App\AICE\service;

use \App\AICE\data\Command;
use App\AICE\view\Message;

class SpecialCommandService{
    
    public $commands=[
        
    ];
        
    public function __construct() {
        ;
    }
    
    public function getProfile(){
        return new Message();
        
    }
    public function getStatus(){
        return new Message();
    }
    
    
 
}