<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use App\AICE\data\Message;
use App\AICE\service\AIService;

class AnswerController extends Controller {

    public function answer() {

        $text = request("text");
        
        //パースする
        
        $ai=new \App\AICE\service\AIService();
        
        $result=$ai->parseQuery($text);
        
        
        $m =new Message();
        
        $m->name="cat";
        $m->message=$result;
        $m->face="cry";
        

        return response()->json($m);
    }
    
}
