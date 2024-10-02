<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando Autor</title>
</head>
<body>
    <center>
        <font face = "Century Gothic" size = "6">
            <b>Listar Autor</b><br>
        </font>

        <?php
        include_once 'Autor.php';
        $a = new Autor();
        $autor_bd=$a->listar();
        ?>

        <?php
        foreach($autor_bd as $autor_mostrar){
            ?>
            <br><br>
            <b><?php echo $autor_mostrar[0]; ?></b>   &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $autor_mostrar[1]; ?>      &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $autor_mostrar[2]; ?>      &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $autor_mostrar[3]; ?>      &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $autor_mostrar[4]; ?> 
            <?php
        }
            echo "<br> <br> <button> <a href = 'menu.html'> Voltar </a>"; ?>
    </center>
</body>
</html>