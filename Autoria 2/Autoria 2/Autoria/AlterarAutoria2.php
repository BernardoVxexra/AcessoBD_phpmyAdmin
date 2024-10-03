<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><font face= "Century Gothic" size="6"><b>Alteração de Autorias Cadastrados</b><font size= "4">
        <font face= "Century Gothic" size = "3"><br>
        <fieldset>
            <legend><b> Alterar </b></legend>

            <?php
              $txtcodautor = $_POST["codautor"];
              $txtcodlivro = $_POST["codlivro"];
              include_once 'Autoria.php';
              $auto = new autoria();
              $auto->setcod_autor($txtcodautor);
              $auto->setcod_livro($txtcodlivro);
              $autoria_bd = $auto->alterar();
            ?>
            
            <br><form name="cliente2" method = "POST" action = "">
                <?php
                foreach($autoria_bd as $autoria_mostrar)
                {
              ?>
              
               <input type="hidden" name="txtcodautor" size="5" value='<?php echo $autoria_mostrar[0]?>'>
               <input type="hidden" name="txtcodlivro" size="5" value='<?php echo $autoria_mostrar[1]?>'>
               <b><?php echo "Cod Autor: " . $autoria_mostrar[0]; ?></b>
               <b><?php echo "Cod Livro: " . $autoria_mostrar[1]; ?></b>
               <br><br> <b> <?php echo "Data de Lançamento: " ;?></b>
               <input type = "text" name="txtDataLanca" size="25" value = '<?php echo $autoria_mostrar[2]?>'>
               <br><br> <b> <?php echo "Editora: " ;?></b>
               <input type = "text" name="txteditora" size="25" value = '<?php echo $autoria_mostrar[3]?>'>
             


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
                include_once 'Autoria.php';
                $au = new autoria();
                $au->setcod_autor($txtcodautor);
                $au->setcod_livro($txtcodlivro);
                $au->setdataLancamento($txtDataLanca);
                $au->seteditora($txteditora);
                echo "<br><br><h3>" . $au->alterar2() . "</h3>";
                header("location: AlterarAutoria.php");

            }
            ?>
            <center> <br><br><br><br>
            <button><a href = "menu.html"> Voltar </a></button>
</body>
</html>