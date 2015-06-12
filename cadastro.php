<?php

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];

if(setcookie("clientes[nome]", $nome))
    header("location:index.php?page=listar");
else
    echo "Erro ao setar cookie";



