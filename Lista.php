<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="CSS4.css"><!--importando CSS-->
    <script src="JS.js"></script><!--importando JS-->
</head>
<body>
    <form method="POST" action="lista.php">
        <table border="1">
            <thead >
                    <tr >
                        <th>&nbsp;&nbsp;&nbsp;Hora&nbsp;&nbsp;&nbsp; </th>
                        <th>&nbsp;&nbsp;&nbsp;Disponibilidade&nbsp;&nbsp;&nbsp; </th>
                    </tr>
            </thead>
            <?php 
                    $datapesq = filter_input(INPUT_POST, "datapesq" , FILTER_SANITIZE_STRING);
                    $dez = "&nbsp;&nbsp;&nbsp;10:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Disponivel";
                    $onze = "&nbsp;&nbsp;&nbsp;11:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Disponivel";
                    $doze = "&nbsp;&nbsp;&nbsp;12:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Disponivel";
                    $treze = "&nbsp;&nbsp;&nbsp;13:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Disponivel";
                    $catorze = "&nbsp;&nbsp;&nbsp;14:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Disponivel";
                    $quinze = "&nbsp;&nbsp;&nbsp;15:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Disponivel";
                    $dezesseis = "&nbsp;&nbsp;&nbsp;16:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Disponivel";
                    $dezessete = "&nbsp;&nbsp;&nbsp;17:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Disponivel";
                    $dezoito = "&nbsp;&nbsp;&nbsp;18:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Disponivel";
                    $dezenove = "&nbsp;&nbsp;&nbsp;19:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Disponivel";
                    $vinte = "&nbsp;&nbsp;&nbsp;20:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Disponivel";
                    $vinteUm = "&nbsp;&nbsp;&nbsp;21:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Disponivel";

                    include_once("CNX.php");
                    $sql = "SELECT datas, hora FROM cliente
                    Where '$datapesq' = datas;";
                    echo $datapesq;
                    $rs = mysqli_query($cnx,$sql) or die("Erro ao executar a consulta" . mysqli_error($cnx));
                    while($dados = mysqli_fetch_assoc($rs)){
                        if ($dados["hora"] == "10:00:00"){
                            $dez = "&nbsp;&nbsp;&nbsp;10:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indisponivel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        }
                        if ($dados["hora"] == "11:00:00"){
                            $onze = "&nbsp;&nbsp;&nbsp;11:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indisponivel";
                        }
                        if ($dados["hora"] == "12:00:00"){
                            $doze = "&nbsp;&nbsp;&nbsp;12:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indisponivel";
                        }
                        if ($dados["hora"] == "13:00:00"){
                            $treze = "&nbsp;&nbsp;&nbsp;13:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indisponivel";
                        }
                        if ($dados["hora"] == "14:00:00"){
                            $catorze = "&nbsp;&nbsp;&nbsp;14:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indisponivel";
                        }
                        if ($dados["hora"] == "15:00:00"){
                            $quinze = "&nbsp;&nbsp;&nbsp;15:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indisponivel";
                        }
                        if ($dados["hora"] == "16:00:00"){
                            $dezesseis = "&nbsp;&nbsp;&nbsp;16:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indisponivel";
                        }
                        if ($dados["hora"] == "17:00:00"){
                            $dezessete = "&nbsp;&nbsp;&nbsp;17:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indisponivel";
                        }
                        if ($dados["hora"] == "18:00:00"){
                            $dezoito = "&nbsp;&nbsp;&nbsp;18:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indisponivel";
                        }
                        if ($dados["hora"] == "19:00:00"){
                            $dezenove = "&nbsp;&nbsp;&nbsp;19:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indisponivel";
                        }
                        if ($dados["hora"] == "20:00:00"){
                            $vinte= "&nbsp;&nbsp;&nbsp;20:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indisponivel";
                        }
                        if ($dados["hora"] == "21:00:00"){
                            $vinteUm = "&nbsp;&nbsp;&nbsp;21:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indisponivel";
                        }
                    }
            ?>

        <table border="1">
            <tr>
                <td><?=$dez?></td>
            </tr>    
            <tr>
                <td><?=$onze?></td>
            </tr>  
            <tr>
                <td><?=$doze?></td>
            </tr>
            <tr>
                <td><?=$treze?></td>
            </tr>    
            <tr>
                <td><?=$catorze?></td>
            </tr>  
            <tr>
                <td><?=$quinze?></td>
            </tr> 
            <tr>
                <td><?=$dezesseis?></td>
            </tr>    
            <tr>
                <td><?=$dezessete?></td>
            </tr>  
            <tr>
                <td><?=$dezoito?></td>
            </tr> 
            <tr>
                <td><?=$dezenove?></td>
            </tr>    
            <tr>
                <td><?=$vinte?></td>
            </tr>  
            <tr>
                <td><?=$vinteUm?></td>
            </tr> 
            
            
        </table>
        <input type="date" name="datapesq"  format="MM/DD/YYYY" placeholder="MM/DD/YYYY" value="2021-07-29">
        <input type="submit" value="Continuar">
        <button id="close" class="closing"><img src="imagens/recarregar.ico" /></button>
    </form>
</body>
</html>