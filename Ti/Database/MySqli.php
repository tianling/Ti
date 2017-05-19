<?php
/**
 * Created by PhpStorm.
 * User: luoxinyu-xy
 * Date: 2017/5/17
 * Time: 10:56
 */

namespace Ti\Database;

use Ti\TiDatabase;

class MySqli implements TiDatabase
{
    protected $conn;

    public function _connect($host,$user,$password,$port,$dbname)
    {
        $conn = mysqli_connect($host,$user,$password,$dbname,$port);

        $this->conn = $conn;
    }

    public function query($sql)
    {
        $res = mysqli_query($this->conn,$sql);

        return $res;
    }

    public function close()
    {
        mysqli_close($this->conn);
    }
}