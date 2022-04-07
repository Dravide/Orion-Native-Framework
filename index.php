<?php

/**
 * Orion Framework
 *
 * Build With Practice by Dravide
 */


/**
 * Autoload Vendor Pembantu Pengembangan Aplikasi
 */
require './vendor/autoload.php';


/**
 * Moderator untuk Pengelolaan Galat
 */
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


/**
 * Moderator untuk Router Web
 */
require './apps/routes/web.php';


/**
 * Moderator untuk Query Builder Database
 */
require './apps/database/database.php';


/**
 * Moderator untuk Function Web
 */
require './apps/function/function.php';
