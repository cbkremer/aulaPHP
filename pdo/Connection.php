<?php
/* 
esta classe serve para estabelecer a conexão com o banco de dados
*/
require_once('Config.php');
class Connection{
    public static function getConnection($host, $dbName, $userName, $pass){
        //era pra ser dsnkkkk
        $dns = "mysql:host=$host;dbName=$dbName;charset=UTF8";
        try{
            $option = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
            return new PDO($dns,$userName,$pass,$option);
        }
        catch(PDOException $ex){
            die($ex->getMessage());
        }
    }
}
return Connection::getConnection($host,$dbName,$user,$pass);