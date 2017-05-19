<?php
/**
 * Created by PhpStorm.
 * User: luoxinyu-xy
 * Date: 2017/5/17
 * Time: 10:55
 */
namespace Ti\Database;

use Ti\TiDatabase;

class MySql implements TiDatabase
{
    protected $conn;

    public function _connect($host,$user,$password,$port,$dbname)
    {
        $host = $host.":".$port;
        $conn = mysql_connect($host,$user,$password);
        mysql_select_db($dbname,$conn);

        $this->conn = $conn;
    }

    public function query($sql)
    {
        $res = mysql_query($sql,$this->conn);

        return $res;
    }

    public function close()
    {
        mysql_close($this->conn);
    }
}