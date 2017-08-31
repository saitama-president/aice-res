<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\AICE\data\Command;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        /*
            インスタンス登録
         *          */
        $this->app->instance('SpecialCommand', 
            [
                new Command("now","現在時刻","今何時か答えます"
                    ,function(){return date("Y-m-d H:i:s");}),
                new Command("hello","挨拶","あいさつします"
                    ,function(){return "こんにちは";}),
                new Command("status","ステータス","現在のAIエージェントのステータスを表示します"
                    ,function(){return "正常";}),
                new Command("profile","プロフィール","AIのプロフィールを表示します"
                    ,function(){return "たぬき";}),
            ]
            );
        
        
    }
}
