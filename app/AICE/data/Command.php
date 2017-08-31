<?php

namespace App\AICE\data;
use Illuminate\Database\Eloquent\Model;

class Command extends Model{
    
    public function __construct($command="C",$name="N",$description="説明なし", callable $callback=null) {
        $this->command=$command;
        $this->name=$name;
        $this->description=$description;
        $this->callback=$callback;
    }

    public $command="ぬるぽ";
    public $name="";
    public $description="";
    public $callback;
    
    public function execute(Array $args=[]) {
        return call_user_func($this->callback,$args);
    }
    
}