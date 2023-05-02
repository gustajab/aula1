<?php
    # /produtos.php
    require('verifica_login.php');
    require('twig_carregar.php');
    
    require('models/Model.php');
    require('models/Produto.php');

    $id = $_GET['id_produtos'] ?? false;

    $usr = new Produto();
    $info = $usr->getById($id);
    
   
    

    echo $twig->render('produtos_ver.html', [
        'prod' => $info,
    ]);