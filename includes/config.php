<?php

require_once ('MysqliDb.php');

$db = new MysqliDb (Array (
                'host' => 'mysql3.gigahost.dk',
                'username' => 'code786', 
                'password' => 'justdoIt786!',
                'db'=> 'code786_sqltest1',
                'port' => 3306,
                'charset' => 'utf8'));

?>