<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><font face= "Century Gothic" size="6"><b>Alteração de Produtos Cadastrados</b><font size= "4">
        <font face= "Century Gothic" size = "3"><br>
        <fieldset>
            <legend<b> Alterar </b></legend>

            <?php
              $txtid=$_POST["txtid"];
              include_once 'Produtos.php';
              $p = new Produtos();
              $p->setId($txtid);
              $pro_bd = $p->alterar();
            ?>
            
            <br><form name="cliente2" method = "POST" action = "">
                <?php
                foreach($pro_bd as $pro_mostrar)
                {
              ?>
              
               <input type="hidden" name="txtid" size="5" value='<?php echo $pro_mostrar[0]?>'>
               <b><?php echo "ID: " . $pro_mostrar[0]; ?></b>
               <br><br> <b> <?php echo "Nome: " ;?></b>
               <input type = "text" name="txtnome" size="25" value = '<?php echo $pro_mostrar[1]?>'>
               <input type = "text" name="txtestoq" size="10" value='<?php echo $pro_mostrar[2]?>'>
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
                include_once 'Produtos.php';
                $pro = new Produtos();
                $pro->setNome($txtnome);
                $pro->setEstoque($txtestoq);
                $pro->setId($txtid);
                echo "<br><br><h3>" . $pro->alterar2() . "</h3>";
                header("location: Alterar.php");

            }
            ?>
            <center> <br><br><br><br>
            <button><a href = "menu2.html"> Voltar </a></button>
</body>
</html>