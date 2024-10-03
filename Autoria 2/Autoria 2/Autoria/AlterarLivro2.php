<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><font face= "Century Gothic" size="6"><b>Alteração de Livros Cadastrados</b><font size= "4">
        <font face= "Century Gothic" size = "3"><br>
        <fieldset>
            <legend><b> Alterar </b></legend>

            <?php
              $txtlivro=$_POST["livro"];
              include_once 'livro.php';
              $liv = new livro();
              $liv->setCod_livro($txtlivro);
              $livro_bd = $liv->alterar();
            ?>
            
            <br><form name="cliente2" method = "POST" action = "">
                <?php
                foreach($livro_bd as $livro_mostrar)
                {
              ?>
              
               <input type="hidden" name="txtlivro" size="5" value='<?php echo $livro_mostrar[0]?>'>
               <b><?php echo "ID: " . $livro_mostrar[0]; ?></b>
               <br><br> <b> <?php echo "Titulo: " ;?></b>
               <input type = "text" name="txttitulo" size="25" value = '<?php echo $livro_mostrar[1]?>'>
               <br><br> <b> <?php echo "Categoria: " ;?></b>
               <input type = "text" name="txtcategoria" size="10" value='<?php echo $livro_mostrar[2]?>'>
               <br><br> <b> <?php echo "ISBN: " ;?></b>
               <input type = "text" name="txtisbn" size="25" value = '<?php echo $livro_mostrar[3]?>'>
               <br><br> <b> <?php echo "Idioma: " ;?></b>
               <input type = "text" name="txtidioma" size="25" value = '<?php echo $livro_mostrar[4]?>'>
               <br><br> <b> <?php echo "QtdePag: " ;?></b>
               <input type = "text" name="txtpag" size="25" value = '<?php echo $livro_mostrar[5]?>'>

               <br><br><br><center>
                <input name="btnalterar" type="submit" value="Alterar">
            <?php
                }

                ?>
                </form>
            </fieldset>
            <?php
            extract($_POST, EXTR_OVERWRITE);
            if(isset($btnalterar))
            {
                include_once 'livro.php';
                $li = new livro();
                $li->setCategoria($txtcategoria);
                $li->setCod_livro($txtlivro);
                $li->setIdioma($txtidioma);
                $li->setQtdePag($txtpag);
                $li->setISBN($txtisbn);
                $li->setTitulo($txttitulo);
                
                echo "<br><br><h3>" . $li->alterar2() . "</h3>";
                header("location: AlterarLivro.php");

            }
            ?>
            <center> <br><br><br><br>
            <button><a href = "menu.html"> Voltar </a></button>
</body>
</html>