<?php
# documentos_novo.php
require('twig_carregar.php');
echo '<pre>';
var_dump($_POST);

var_dump($_FILES);
echo '</pre>';

if($_SERVER['REQUEST_METHOD'] == 'POST' && !$_FILES['arquivo']['error']){
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'uploads/' . $_FILES['arquivo']['name']);
}

    echo $twig->render('documentos_novo.html');

