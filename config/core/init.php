<?php
/*

 * This contain all the initial configurations
 * It links all other classes in the project
 * Your required to change the configuration to the one your  on your project( host ,username, password, db)

 * NOTE This file will be included/required in all of the project file so as to access all configuration/classes

*/

//initialize the session
session_start();

//global variable to store config
$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => 'localhost',
        'username' => '',
        'password' => '',
        'db' => ''
    ),
    'remember' =>array(
        'cookie_name' => 'hash',
        'cookie_expiry' => '3600'
    ),
    'session' =>array (
        'session_name' =>'user',
        'token_name' => 'token',
        'session_table' => 'tableName'
    )
);

//auto load all classes when this file is initialized
spl_autoload_register(function($class){
    require_once 'config/controller/'.$class.'.php';
});
