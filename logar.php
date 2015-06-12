<?php
$usuarios = array("reyson"=>"132206", "wesley"=>"123");

foreach ($usuarios as $usuario=>$senha) {
    if($usuario == $_REQUEST['usuario'] and $senha == $_REQUEST['senha']) {
        $_SESSION['logado'] = true;
        header("location:index.php?page=incluir");
    }else{
        echo "Usuario e senha inválidos<br/>";
    }
}