<?php
   # /usuarios.php
   require('verifica_login.php');
   require('twig_carregar.php');
   
   require('models/Model.php');
   require('models/Produto.php');

   $prod = new Produto();

   echo $twig->render('produtos.html', [
       'produtos' => $prod,
   ]);
