<?php 

namespace Users;
class GestorUsuarios{
    //private static $lista = [];
    private static $instance;
    public const REGEXMAIL = "/^[_a-zA-Z0-9-]([_a-zA-Z0-9-])@[a-zA-Z0-9-]([a-zA-Z0-9-])([a-zA-Z]{2,3})$/";
    public const REGEXPASS ="/^(?=.[a-z])(?=.[A-Z])(?=.\d)[a-zA-Z\d]{8,}$/";
    public const REGEXNOMBRE = "/^[A-Za-z]((\s)?((\'|\-|\.)?([A-Za-z])))*$/";
    public static function singleton() {
        if(!isset(self::$instance)) {
            self::$instance = new \Users\GestorUsuarios();
        }
        return self::$instance;
    }
    

    
}

?>