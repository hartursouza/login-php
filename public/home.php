<?php 
    defined('CONTROL') or die('Acesso negado!');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h3>Estou dentro da home</h3>
    <hr>
    <span>Usuário: <strong><?= $_SESSION['usuario']?></strong></span>
    <span>
        <a href="index.php?rota=logout">Sair</a>
    </span>
    <hr>
    [conteúdo]
</body>

</html>
<?php 
    session_destroy();
?>