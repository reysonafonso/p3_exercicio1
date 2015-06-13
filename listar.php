<table border = 1>
    <th>Código</th>
    <th>Cliente</th>
    <?php
    foreach ($_COOKIE['Clientes'] as $cod=>$nome) {
        echo "<tr><td>$cod</td>";
        echo "<td>$nome</td></tr>";
    }

?>
</table>
