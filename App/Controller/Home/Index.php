<?php
/**
 * Created by PhpStorm.
 * User: luoxinyu-xy
 * Date: 2017/5/11
 * Time: 17:46
 */
namespace App\Controller\Home;

class Index
{
    protected $strategy;

    static function test()
    {
        echo __METHOD__;
    }

    public function index()
    {
        if(isset($_GET['famale'])){
            $strategy = new \Ti\FamaleUserStrategy();
        }else{
            $strategy = new \Ti\MaleUserStrategy();
        }

        $this->setStrategy($strategy);
        $this->strategy->showAd();


    }

    public function setStrategy(\Ti\UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}