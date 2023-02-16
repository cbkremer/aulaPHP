<?php
    if(isset($_POST['salvar'])){
        //coletar dados do post
        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $idUsuario = $_POST['idUsuario'];
        $perfilAcesso = $_POST['perfilAcesso'];
        
        $pdo = require_once '../pdo/Connection.php';
        $sql = "update usuario set nomeUsuario = ?, perfilAcesso = ?, usuario = ? where idUsuario = ?";
        $sth = $pdo->prepare($sql);
        $sth->bindParam(1, $nome,PDO::PARAM_STR);
        $sth->bindParam(2, $perfilAcesso,PDO::PARAM_STR);
        $sth->bindParam(3, $usuario,PDO::PARAM_STR);
        $sth->bindParam(4, $idUsuario,PDO::PARAM_INT);
        $sth->execute();
        unset($sth);
        unset($pdo);
        header("location: ../view/listaUsuarios.php");
    }
?>