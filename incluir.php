<?php
    if(isset($_SESSION['logado'])){ ?>

            <form action="index.php?page=cadastro" method="post">
                <fieldset>
                    <legend>Cadastro de Clientes</legend>
                    <label>Código: <input type="text" name="cod"> </label>
                    <label>Nome: <input type="text" name="nome"> </label>
                    <label><input type="submit" name="submit" value="Cadastrar"> </label>
                </fieldset>
            </form>

<?php
    }else{ ?>
        <h3> Você precisa está logado para cadastrar clientes!!</h3>
<?php } ?>