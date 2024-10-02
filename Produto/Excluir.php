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
    <center><font face="Century Gothic" size="6"><b>Excluindo Produtos</b><font size="4"></center>
    <br>
    <font size="4">

    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend><b>Informe o nome do Produto Desejado: </b></legend>
            <p>ID: <input name="txtid" type="text" size="20" maxlength="5" placeholder="ID do Produto"></p>
            <br><br><center>
                <input name="btnenviar" type="submit" value="Excluir"> &nbsp;&nbsp;
                <input name="limpar" type="reset" value="Limpar">
            </center>
        </fieldset>
    </form>
    <br>
    <fieldset id="b">
        <legend><b>Resultado: </b></legend>

        <?php
        extract($_POST, EXTR_OVERWRITE);
        if (isset($btnenviar)) {
            include_once 'Produtos.php';
            $p = new Produtos();
            $p->setId($txtid);
            echo "<h3><br><br>" . $p->exclusao() . "</h3>";
        }
        ?> <br>
    </fieldset>
    </center>
    <button><a href="menu2.html">Voltar</a></button>
</body>
</html>