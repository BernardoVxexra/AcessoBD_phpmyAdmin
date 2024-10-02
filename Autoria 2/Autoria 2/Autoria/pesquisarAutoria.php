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
            max-width: 555px;
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

       
        button {
           
            background-color: #4CAF50;
            color: white;
            padding: 15px 42px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top:  20px; /* Espaço entre o formulário e o botão */
            cursor: pointer;
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <center><font face="Century Gothic" size="6"><b>Consultando Autoria</b><font size="4"></center>
    <br>
    <font size="4">

    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend><b>Informe o nome da Editora: </b></legend>
            <p>Editora: <input name="txtauto" type="text" size="40" maxlength="40" placeholder="Digite..."></p>
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
                include_once 'Autoria.php';
                $auto = new autoria();
                $auto->seteditora($txtauto . '%');
                $autoria_bd = $auto->consultar();
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>Cod_autor</th>
                            <th>Cod_livro</th>
                            <th>Data de lançamento</th>
                            <th>Editora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($autoria_bd as $autoria_mostrar) {
                            ?>
                            <tr>
                                <td><?php echo $autoria_mostrar[0]; ?></td>
                                <td><?php echo $autoria_mostrar[1]; ?></td>
                                <td><?php echo $autoria_mostrar[2]; ?></td>
                                <td><?php echo $autoria_mostrar[3]; ?></td>
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