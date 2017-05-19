<?php
/**
 * Created by PhpStorm.
 * User: luoxinyu-xy
 * Date: 2017/5/17
 * Time: 10:56
 */
namespace Ti\Database;

use Ti\TiDatabase;

class PDO implements TiDatabase
{
    protected $conn;

    public function _connect($host,$user,$password,$port,$dbname)
    {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname;port=$port",$user,$password);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function close()
    {
        unset($this->conn);
    }

}