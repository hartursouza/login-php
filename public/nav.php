<?php 
    defined('CONTROL') or die('Acesso negado!');
?>

<hr>
<span>Usuário: <strong><?= $_SESSION['usuario']?></strong></span>
<span>
    <a href="?rota=logout">Sair</a>
</span>
<hr>

<nav>
    <a href="index.php?rota=home">Home</a>
    <a href="index.php?rota=page1">Página 1</a>
    <a href="index.php?rota=page2">Página 2</a>
    <a href="index.php?rota=page3">Página 3</a>
    <a href="index.php?rota=logout">Sair</a>
</nav>