<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultando</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        /* Form styles */
        form {
            max-width: 500px;
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

        h3 {
            text-align: center;
            color: green;
        }

        button {
            padding: 10px 20px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend><b>Dados Autoria: </b></legend>
            <p>Cod_autor: <input name="txtautor" type="text" size="40" maxlength="40" placeholder="0"></p>
            <p>Cod_livro: <input name="txtlivro" type="text" size="10" placeholder="0"></p>
            <p>Data de lançamento: <input name="txtdata" type="text" size="40" maxlength="40" placeholder="Data"></p>
            <p>Editora: <input name="txtedit" type="text" size="10" placeholder="Digite...."></p>
        </fieldset>

        <br>
        <fieldset id="b">
            <legend><b>Opções: </b></legend>
            <br>
            <input name="btnenviar" type="submit" value="Cadastrar"> &nbsp;&nbsp;
            <input name="limpar" type="reset" value="Limpar">
        </fieldset>
    </form>

    <br>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if (isset($btnenviar)) {
        include_once 'Autoria.php';
        $auto = new autoria();
        $auto->setcod_autor($txtautor);
        $auto->setcod_livro($txtlivro);
        $auto->setdataLancamento($txtdata);
        $auto->seteditora($txtedit);

        echo "<h3><br><br>" . $auto->salva() . "</h3>";
    }
    ?> <br>
    </center>
    <button><a href="menu.html">Voltar</a></button>
</body>
</html>