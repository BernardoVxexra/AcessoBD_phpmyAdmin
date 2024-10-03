<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><font face= "Century Gothic" size="6"><b>Alteração de Autores Cadastrados</b><font size= "4">
        <font face= "Century Gothic" size = "3"><br>
        <fieldset>
            <legend><b> Alterar </b></legend>

            <?php
              $txtid = $_POST["txtid"];
              include_once 'Autor.php';
              $a = new Autor();
              $a->setCodigo($txtid);
              $autor_bd = $a->alterar();
            ?>
            
            <br><form name="cliente2" method = "POST" action = "">
                <?php
                foreach($autor_bd as $autor_mostrar)
                {
              ?>
              
               <input type="hidden" name="txtid" size="5" value='<?php echo $autor_mostrar[0]?>'>
               <b><?php echo "ID: " . $autor_mostrar[0]; ?></b>
               <br><br> <b> <?php echo "Nome: " ;?></b>
               <input type = "text" name="txtnome" size="25" value = '<?php echo $autor_mostrar[1]?>'>
               <input type = "text" name="txtsobrenome" size="10" value='<?php echo $autor_mostrar[2]?>'>
               <br><br> <b> <?php echo "Email: " ;?></b>
               <input type = "text" name="txtemail" size="25" value = '<?php echo $autor_mostrar[3]?>'>
               <br><br> <b> <?php echo "Nasc: " ;?></b>
               <input type = "text" name="txtnasc" size="25" value = '<?php echo $autor_mostrar[4]?>'>

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
                include_once 'Autor.php';
                $aut = new Autor();
                $aut->setNome($txtnome);
                $aut->setSobrenome($txtsobrenome);
                $aut->setCodigo($txtid);
                $aut->setEmail($txtemail);
                $aut->setNasc($txtnasc);
                echo "<br><br><h3>" . $aut->alterar2() . "</h3>";
                header("location: AlterarAutor.php");

            }
            ?>
            <center> <br><br><br><br>
            <button><a href = "menu.html"> Voltar </a></button>
</body>
</html>