<?php
$cod = $_REQUEST['cod'];
$nome = $_REQUEST['nome'];

setcookie("Clientes[$cod]", $nome);

header("location:index.php?page=listar");






