<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="CSS1.css"><!--importando CSS-->
    <script src="JS.js"></script><!--importando JS-->
</head>
<body>
<?php //pegando data atual com php
    $datamin = date('Y-m-d');
    //echo "$datamin";
?>
<form method="POST" action="HTML2.php" class="principal"> 
        <label>Nome: 
        <input type="text" name="nomep" class="classNome" placeholder="Digite seu nome..." required></label><br><br>
        <label>Telefone:
        <input type="text" name="telefonep"  id="num" onkeyup="mascara_num()" maxlength="15" class="classTelefone" placeholder="00000-0000" required></label><br><br>
        <label for="firstName"  class="input">Data:
        <input type="date" name="datap" class="classData"  format="MM/DD/YYYY" placeholder="MM/DD/YYYY" min="<?=$datamin?>" required></label><br><br>
        <label>Hora: <select class="classHora" name="horap" required>
                    <option value="">--:--</option>

                    <option value="10:00:00">10:00</option>
                    <option value="11:00:00">11:00</option>
                    <option value="12:00:00">12:00</option>
                    <option value="13:00:00">13:00</option>
                    <option value="14:00:00">14:00</option>
                    <option value="15:00:00">15:00</option>
                    <option value="16:00:00">16:00</option>
                    <option value="17:00:00">17:00</option>
                    <option value="18:00:00">18:00</option>
                    <option value="19:00:00">19:00</option>
                    <option value="20:00:00">20:00</option>
                    <option value="21:00:00">21:00</option>
            </select></label><br><br>

<input  class="BTN1" type="submit" value="Continuar">

</form>
<form class="principal2"method="POST" action="HTML1.php"> 
    <table border="1">
    <thead>
            <tr>
                <th>&nbsp;&nbsp;&nbsp;Hora&nbsp;&nbsp;&nbsp; </th>
                <th>&nbsp;&nbsp;&nbsp;Disponibilidade&nbsp;&nbsp;&nbsp; </th>
            </tr>
    </thead>
    <?php 
            $datapesq = filter_input(INPUT_POST, "datapesq" , FILTER_SANITIZE_STRING);

            $dez = "&nbsp;&nbsp;&nbsp;10:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <font color='Lightgreen'>Disponivel</font>";
            $onze = "&nbsp;&nbsp;&nbsp;11:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color='Lightgreen'>Disponivel</font>";
            $doze = "&nbsp;&nbsp;&nbsp;12:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <font color='Lightgreen'>Disponivel</font>";
            $treze = "&nbsp;&nbsp;&nbsp;13:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <font color='Lightgreen'>Disponivel</font>";
            $catorze = "&nbsp;&nbsp;&nbsp;14:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <font color='Lightgreen'>Disponivel</font>";
            $quinze = "&nbsp;&nbsp;&nbsp;15:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <font color='Lightgreen'>Disponivel</font>";
            $dezesseis = "&nbsp;&nbsp;&nbsp;16:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <font color='Lightgreen'>Disponivel</font>";
            $dezessete = "&nbsp;&nbsp;&nbsp;17:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <font color='Lightgreen'>Disponivel</font>";
            $dezoito = "&nbsp;&nbsp;&nbsp;18:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <font color='Lightgreen'>Disponivel</font>";
            $dezenove = "&nbsp;&nbsp;&nbsp;19:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <font color='Lightgreen'>Disponivel</font>";
            $vinte = "&nbsp;&nbsp;&nbsp;20:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <font color='Lightgreen'>Disponivel</font>";
            $vinteUm = "&nbsp;&nbsp;&nbsp;21:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <font color='Lightgreen'>Disponivel</font>";

            include_once("CNX.php");
            $sql = "SELECT datas, hora FROM cliente
            Where '$datapesq' = datas;";
            $rs = mysqli_query($cnx,$sql) or die("Erro ao executar a consulta" . mysqli_error($cnx));
            while($dados = mysqli_fetch_assoc($rs)){
                if ($dados["hora"] == "10:00:00"){
                    $dez = "&nbsp;&nbsp;&nbsp;10:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color='red'>Indisponivel</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                if ($dados["hora"] == "11:00:00"){
                    $onze = "&nbsp;&nbsp;&nbsp;11:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color='red'>Indisponivel</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                if ($dados["hora"] == "12:00:00"){
                    $doze = "&nbsp;&nbsp;&nbsp;12:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color='red'>Indisponivel</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                if ($dados["hora"] == "13:00:00"){
                    $treze = "&nbsp;&nbsp;&nbsp;13:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color='red'>Indisponivel</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                if ($dados["hora"] == "14:00:00"){
                    $catorze = "&nbsp;&nbsp;&nbsp;14:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color='red'>Indisponivel</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                if ($dados["hora"] == "15:00:00"){
                    $quinze = "&nbsp;&nbsp;&nbsp;15:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color='red'>Indisponivel</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                if ($dados["hora"] == "16:00:00"){
                    $dezesseis = "&nbsp;&nbsp;&nbsp;16:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color='red'>Indisponivel</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                if ($dados["hora"] == "17:00:00"){
                    $dezessete = "&nbsp;&nbsp;&nbsp;17:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color='red'>Indisponivel</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                if ($dados["hora"] == "18:00:00"){
                    $dezoito = "&nbsp;&nbsp;&nbsp;18:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color='red'>Indisponivel</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                if ($dados["hora"] == "19:00:00"){
                    $dezenove = "&nbsp;&nbsp;&nbsp;19:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color='red'>Indisponivel</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                if ($dados["hora"] == "20:00:00"){
                    $vinte= "&nbsp;&nbsp;&nbsp;20:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color='red'>Indisponivel</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                if ($dados["hora"] == "21:00:00"){
                    $vinteUm = "&nbsp;&nbsp;&nbsp;21:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color='red'>Indisponivel</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
            }
    ?>

    <table border="1" >
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
    <table>
        <tr>
        <td><input type="date" name="datapesq" class="classDatapesq"  format="MM/DD/YYYY" placeholder="MM/DD/YYYY" min="<?=$datamin?>" value="<?=$datapesq?>"></td>
        <td>&nbsp;&nbsp;&nbsp;<button id="recarregar" type="submit" ><img src="imagens/recarregar.ico"></button></td>
        </tr> 
    </table>
    
</form>
    
</body>
</html>