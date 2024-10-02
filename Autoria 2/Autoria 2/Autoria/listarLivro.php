<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando Livros</title>
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
        <font face="Century Gothic" size="6"><b>Listar Livros</b><br></font>

        <?php
        include_once 'livro.php';
        $liv = new livro();
        $livro_bd = $liv->listar();
        ?>

        <table>
            <thead>
                <tr>
                    <th>Cod Livro</th>
                    <th>Título</th>
                    <th>Categoria</th>
                    <th>ISBN</th>
                    <th>Idioma</th>
                    <th>QtdePag</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($livro_bd as $livro_mostrar) {
                    ?>
                    <tr>
                        <td><?php echo $livro_mostrar[0]; ?></td>
                        <td><?php echo $livro_mostrar[1]; ?></td>
                        <td><?php echo $livro_mostrar[2]; ?></td>
                        <td><?php echo $livro_mostrar[3]; ?></td>
                        <td><?php echo $livro_mostrar[4]; ?></td>
                        <td><?php echo $livro_mostrar[5]; ?></td>
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