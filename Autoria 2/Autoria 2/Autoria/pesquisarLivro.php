<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        
        form {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        legend {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"], input[type="reset"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #3e8e41;
        }

        /* Table styles */
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

        /* Button styles */
        button {
            display: block;
            margin: 20px auto 0; /* Center the button horizontally and vertically */
            padding: 10px 20px;
            background-color: #007bff; /* Blue */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>
    <center><font face="Century Gothic" size="6"><b>Consultando Livros</b><font size="4"></center>
    <br>
    <font size="4">

    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend><b>Informe o nome do Livro: </b></legend>
            <p> Nome: <input name="txtlivro" type="text" size="40" maxlength="40" placeholder="Nome do Livro">
            <br><br><center>
                <input name="btnenviar" type="submit" value="Consultar"> &nbsp;&nbsp;
                <input name="limpar" type="reset" value="Limpar">
            </center>
        </fieldset>
        <br>
        <fieldset id="b">
            <legend><b> Resultado: </b></legend>

            <?php
            extract($_POST, EXTR_OVERWRITE);
            if (isset($btnenviar)) {
                include_once 'livro.php';
                $liv = new livro();
                $liv->setTitulo($txtlivro . '%');
                $livro_bd = $liv->consultar();
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>Cod_Livro</th>
                            <th>Titulo</th>
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
                <?php
            }
            ?>
        </fieldset>
    </form>
    </center>
    <br><br><br><br>
    <button><a href="menu.html">Voltar</a></button>
</body>
</html>