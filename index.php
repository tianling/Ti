<?php
/**
 * Created by PhpStorm.
 * User: luoxinyu-xy
 * Date: 2017/5/11
 * Time: 17:13
 */

define("BASEDIR",__DIR__);
include(BASEDIR."/Ti/Loader.php");

spl_autoload_register('\\Ti\\Loader::autoload');

//$heap = new SplMinHeap();
//$heap->insert(1);
//$heap->insert(2);
//$heap->insert(3);
//$heap->insert(9);
//
//
//foreach($heap as $he){
//    echo $he."\n";
//}

$db = \Ti\Factory::createDatabase();
//$db->where("id = 1");
//$db->where("name = 2");
//$db->order("id desc");
//$db->limit(10);

//$db->where("id = 1")->where("name = 2")->order("id desc")->limit(10);

$obj = new \Ti\Object();
