<?php
unset($_SESSION['logado']);
unset($_COOKIE['clientes[]']);
header("location:index.php?page=listar");