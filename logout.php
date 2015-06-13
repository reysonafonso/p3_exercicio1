<?php
unset($_COOKIE['clientes']);
unset($_SESSION['logado']);

header("location:index.php?page=listar");