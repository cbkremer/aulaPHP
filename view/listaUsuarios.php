<?php
    require_once '../controller/CUsuario.php';
    $cadUsuario = new CUsuario();
    $listaUsuarios = $cadUsuario->getUsuarios();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usuários</title>
    </head>
    <body>
       <h2>Lista de Usuários</h2>
       <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Usuário</th>
                    <th>Usuário</th>
                    <th>Perfil Acesso</th>
                    <th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaUsuarios as $user) : ?>
                    <tr>
                        <td><?php echo $user['idUsuario']; ?></td>
                        <td><?php echo $user['nomeUsuario']; ?></td>
                        <td><?php echo $user['usuario']; ?></td>
                        <td><?php echo $user['perfilAcesso']; ?></td>
                        <td>Editar | Deletar</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
       </table>
       <br/>
       <input type="button" value="Voltar" onclick="location.href='cadUsuario.php'">
    </body>
</html>