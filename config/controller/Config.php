<?php
/*
 * This class provide access to the resources on init.php
 *
 * */
class Config {
    public static function get($path=null){
        if($path){
            $config = $GLOBALS['config'];
            //convert $path into an array
            $path = explode('/', $path);
            //Check each element of an array
            foreach($path as $bit){
                //assign the value from init eg.mysql = array( host => localhost), so this will return localhost
                if(isset($config[$bit])){
                    $config = $config[$bit];
                }
            }
            return $config;
        }
        return false;
        }
    }
