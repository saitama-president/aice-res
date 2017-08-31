<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use App\AICE\data\Message;


class AnswerController extends Controller {

    public function answer() {

        $text = request("text");
        
        //パースする
        
        $ai=new \App\AICE\service\AIService();
        
        $result=$ai->parseQuery($text);
        
        
        $m =new Message();
        $m->message=$result;

        return response()->json($m);
    }
    
}
