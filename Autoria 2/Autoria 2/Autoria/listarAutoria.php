<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando Autoria</title>
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
    <center>
        <font face="Century Gothic" size="6"><b>Listar Autoria</b><br></font>

        <?php
        include_once 'Autoria.php';
        $ria = new autoria();
        $ria_bd = $ria->listar();
        ?>

        <table>
            <thead>
                <tr>
                    <th>Cod Autor</th>
                    <th>Cod Livro</th>
                    <th>Data de Lançamento</th>
                    <th>Editora</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ria_bd as $ria_mostrar) {
                    ?>
                    <tr>
                        <td><?php echo $ria_mostrar[0]; ?></td>
                        <td><?php echo $ria_mostrar[1]; ?></td>
                        <td><?php echo $ria_mostrar[2]; ?></td>
                        <td><?php echo $ria_mostrar[3]; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

        <br><br>
        <button><a href="menu.html">Voltar</a></button>
    </center>
</body>
</html>