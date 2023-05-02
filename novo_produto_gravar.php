<?php
    # novo_usuario_gravar.php
    require('models/Model.php');
    require('models/Produto.php');


    $prod = $_POST['produto'] ?? false;
    $preco = $_POST['preco'] ?? false;
   

    if (!$prod || !$preco) {
        header('location:novo_produto.php');
        die;
    }

    

    $prod = new Produto();
    $prod->create([
        'produto' => $prod,
        'preco' => $preco,
    ]);

    header('location:produtos.php');


