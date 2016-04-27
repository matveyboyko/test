<?php

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 27.04.16
 * Time: 21:05
 */

require_once __DIR__ . '/../classes/DB.php';

class News
{
    public $id;
    public $title;
    public $text;

    public static function getAll()
    {
        $db = new DB;
        return $db->query('SELECT * FROM news', 'News');
    }
}