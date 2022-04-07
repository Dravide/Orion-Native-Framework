<?php

$config = array(
    'driver'    => 'mysql', // Db driver
    'host'      => 'localhost',
    'database'  => 'ujian',
    'username'  => 'root',
    'password'  => 'd312r4',
    'charset'   => 'utf8', // Optional
    'collation' => 'utf8_unicode_ci', // Optional
    'prefix'    => 'cb_', // Table prefix, optional
);

new \Pixie\Connection('mysql', $config, 'QB');
