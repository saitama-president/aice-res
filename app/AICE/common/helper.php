<?php

use App\AICE\service\AIService;

function special_command_list(){
    return app()->make("SpecialCommand");    
}