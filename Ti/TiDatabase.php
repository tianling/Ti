<?php
/**
 * Created by PhpStorm.
 * User: luoxinyu-xy
 * Date: 2017/5/17
 * Time: 16:24
 */
namespace Ti;

interface TiDatabase
{
    public function _connect($host,$user,$password,$port,$dbname);

    public function query($sql);

    public function close();
}
