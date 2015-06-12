<table border = 1>
    <th>Cliente</th>
    <?php
if (isset($_COOKIE['clientes'])){
    foreach ($_COOKIE['clientes'] as $cli_nome) {
        echo "<tr><td>$cli_nome</td>";
    }
}
?>
</table>
