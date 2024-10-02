<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        legend {
            font-weight: bold;
        }

        input[type="text"] {
            padding: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"], input[type="reset"] {
            padding: 5px 10px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        button {
            padding: 5px 10px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <center>
        <font face="Century Gothic" size="6"><b>Alteração de Produtos Cadastrados</b></font><br>
        <font size="4"></font>
    </center>
    <br>
    <font size="3">
        <form name="cliente" method="POST" action="Alterar2.php">
            <fieldset>
                <legend><b>Informe o ID do produto cadastrado: </b></legend>
                <p>ID: <input name="txtid" type="text" size="20" maxlength="5" placeholder="Id do produto"></p>
                <br><br>
                <center>
                    <input name="btnenviar" type="submit" value="consultar"> &nbsp;&nbsp;
                    <input name="limpar" type="reset" value="limpar">
                </center>
            </fieldset>
        </form>

        <center> &nbsp;&nbsp;&nbsp;&nbsp;
            <button><a href="menu2.html">Voltar</a></button>
        </center>
    </font>
</body>
</html>