<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 23.04.16
 * Time: 22:18
 */

//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

require_once __DIR__ . '/models/News.php';

$items = News::getAll();

include __DIR__ . '/views/index.php';

//echo "<pre>";
//var_dump($items);
//echo "</pre>";
