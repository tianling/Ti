<?php
/**
 * Created by PhpStorm.
 * User: luoxinyu-xy
 * Date: 2017/5/12
 * Time: 18:55
 */
namespace Ti;

class Database
{
    protected static $db;

    private function __construct()
    {

    }

    static function getInstance()
    {
        if(self::$db){
            return self::$db;
        }else{
            self::$db = new self();
            return self::$db;
        }

    }

    public function where($where)
    {
        return $this;
    }

    public function order($order)
    {
        return $this;
    }

    public function limit($limit)
    {
        return $this;
    }
}