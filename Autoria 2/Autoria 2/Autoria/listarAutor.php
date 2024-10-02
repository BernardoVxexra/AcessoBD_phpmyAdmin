<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando Autor</title>
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
        <font face="Century Gothic" size="6"><b>Listar Autor</b><br></font>

        <?php
        include_once 'Autor.php';
        $a = new Autor();
        $autor_bd = $a->listar();
        ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Nascimento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($autor_bd as $autor_mostrar) {
                    ?>
                    <tr>
                        <td><?php echo $autor_mostrar[0]; ?></td>
                        <td><?php echo $autor_mostrar[1]; ?></td>
                        <td><?php echo $autor_mostrar[2]; ?></td>
                        <td><?php echo $autor_mostrar[3]; ?></td>
                        <td><?php echo $autor_mostrar[4]; ?></td>
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