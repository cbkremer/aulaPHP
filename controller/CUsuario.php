<?php

class CUsuario{
    public function inserir(){
        if(isset($_POST['salvar'])){
            //coletar dados do post
            $nome = $_POST['nome'];
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            $perfilAcesso = $_POST['perfilAcesso'];
            
            $pdo = require_once '../pdo/Connection.php';
            $sql = "insert into usuario values (null,?,?,?,?)";
            $sth = $pdo->prepare($sql);
            $sth->bindParam(1, $nome,PDO::PARAM_STR);
            $sth->bindParam(2, $usuario,PDO::PARAM_STR);
            $sth->bindParam(3, $perfilAcesso,PDO::PARAM_STR);
            $sth->bindParam(4, $senhaEc,PDO::PARAM_STR);
            $senhaEc = password_hash($senha,PASSWORD_DEFAULT);
            $sth->execute();
            unset($sth);
            unset($pdo);
        }
    }
}