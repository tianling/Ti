<?php
/**
 * Created by PhpStorm.
 * User: luoxinyu-xy
 * Date: 2017/5/19
 * Time: 18:50
 */
namespace Ti;

class FamaleUserStrategy implements UserStrategy
{
    public function showAd()
    {
        echo "Famale AD";
    }

    public function showCategory()
    {
        echo "Famale category";
    }
}