<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
        
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
    </style>
</head>
<body>
    <section>
        <center><font face="Century Gothic" size="6"><b>Relação de Produtos Cadastrados</b></font><br><font size="4"></center>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Estoque</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once 'Produtos.php';
                $p = new Produtos();
                $pro_bd = $p->listar();
                foreach ($pro_bd as $pro_mostrar) {
                    ?>
                    <tr>
                        <td><?php echo $pro_mostrar[0]; ?></td>
                        <td><?php echo $pro_mostrar[1]; ?></td>
                        <td><?php echo $pro_mostrar[2]; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <br><br><button><a href='menu2.html'>Voltar</a></button>
    </section>
</body>
</html>