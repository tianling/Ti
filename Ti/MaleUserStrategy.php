<?php
/**
 * Created by PhpStorm.
 * User: luoxinyu-xy
 * Date: 2017/5/19
 * Time: 21:56
 */

namespace Ti;

class MaleUserStrategy implements UserStrategy
{
    public function showAd()
    {
        echo "Male AD";
    }

    public function showCategory()
    {
        echo "Male category";
    }
}