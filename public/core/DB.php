<?php
class DB{
    private static $_instance = null;
    private $_dbo, $_query, $_error = false, $_result, $_count = 0, $_lastInsertID=null;

    public function __construct()
    {
        try{
            $this->_dbo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
        }catch (PDOException $e){
            die($e);
        }
    }

    public static function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new DB();
        }
        return self::$_instance;
    }
}