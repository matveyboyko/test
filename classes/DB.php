<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 25.04.16
 * Time: 21:11
 */
class DB
{
    public function __construct()
    {
        $db = mysql_connect('localhost', 'test_db', '123');
        mysql_select_db('test_db', $db);
    }

    public function query($sql, $class = "stdClass")
    {
        $res = mysql_query($sql);
        if($res === false)
            return false;

        $ret = [];
        while($row = mysql_fetch_object($res, $class))
            $ret[] = $row;

        return $ret;
    }

}