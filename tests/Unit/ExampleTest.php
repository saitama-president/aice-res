<?php

namespace Tests\Unit;


use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\AICE\service\SpecialCommandService;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true,"ぬるぽっぽ");
    }
    
    public function testSpecialCommands(){
      
      foreach(special_command_list() as $command){
        var_dump($command);
      }
      $this->assertTrue(true);
    }
}
