<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class aiueo extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        //var_dump(special_command_list());
        $ai= new \App\AICE\service\AIService();
        
        $result=$ai->parseQuery("#now aaaa");
        var_dump($result);
        $this->assertTrue(true);
    }
}
