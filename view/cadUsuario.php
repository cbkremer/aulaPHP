<?php
    require_once '../controller/CUsuario.php';
    $cadUsuario = new CUsuario();    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de usuários</title>
    </head>
    <body>
        <h1>Cadastro de Usuários</h1>
        <form action="../controller/deletarUser.php" method="POST">
            <input type="text" name="nome" placeholder="Nome aqui...">
            <br/><br/>
            <select name="perfilAcesso">
                <option value="">Selecione...</option>
                <option value="admin">Administrador</option>
                <option value="user">Usuário</option>
            </select>
            <br/><br/>
            <input type="text" name="usuario" placeholder="User aqui...">
            <br/><br/>
            <input type="password" name="senha" minlength="8" 
                   placeholder="Senha aqui...">
            <br/><br/>
            <input type="submit" name="salvar" value="Salvar">
            <input type="reset" value="Limpar">
            <input type="button" value="Voltar" 
                   onclick="location.href='../index.php'">
            <input type="button" value="Lista Usuários" 
                   onclick="location.href='listaUsuarios.php'">
        </form>
    </body>
</html>