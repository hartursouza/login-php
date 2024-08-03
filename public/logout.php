<?php 
    defined('CONTROL') or die('Acesso negado!');

    // efetuar o logout
    session_destroy();

    // voltar a página inicial
    header('location: index.php?rota=login');
?>