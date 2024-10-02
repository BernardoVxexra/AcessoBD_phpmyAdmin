<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <center><font face="Century Gothic" size="6"><b>Consultando Produtos</b><font size="4"></center>
    <br>
    <font size="4">
    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend><b>Informe o nome do Produto: </b></legend>
            <p>Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Produto"></p>
            <br><br><center>
                <input name="btnenviar" type="submit" value="Consultar"> &nbsp;&nbsp;
                <input name="limpar" type="reset" value="Limpar">
            </center>
        </fieldset>
        <br>
        <fieldset id="b">
            <legend><b>Resultado: </b></legend>
            <?php
            extract($_POST, EXTR_OVERWRITE);
            if (isset($btnenviar)) {
                include_once 'Produtos.php';
                $pes = new Produtos();
                $pes->setNome($txtnome . '%'); // o . % serve para busca aproximada
                $pesquisa_bd = $pes->consultar();
                if (count($pesquisa_bd) > 0) {
                    ?>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Estoque</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($pesquisa_bd as $pesquisa_mostrar) {
                                ?>
                                <tr>
                                    <td><?php echo $pesquisa_mostrar[0]; ?></td>
                                    <td><?php echo $pesquisa_mostrar[1]; ?></td>
                                    <td><?php echo $pesquisa_mostrar[2]; ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                } else {
                    echo "<p>Nenhum produto encontrado.</p>";
                }
            }
            ?>
        </fieldset>
    </form>
    </center>
    <br><br><br><br>
    <button><a href="menu2.html">Voltar</a></button>
</body>
</html>