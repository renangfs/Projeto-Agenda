<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="CSS.css"><!--importando CSS-->
    <script src="JS.js"></script><!--importando JS-->
</head>
<body class="principal">
<?php //pegando data atual com php
    $datamin = date('Y-m-d');
    //echo "$datamin";
?>
 
        <label>Nome: 
        <input type="text" class="classNome" placeholder="Digite seu nome..." required></label><br><br>
        <label>Telefone: (21)
        <input type="text"  id="num" onkeyup="mascara_num()" maxlength="10" class="classTelefone" placeholder="XXXXX-XXXX" required></label><br><br>
        <label for="firstName"  class="input">Data:
        <input type="date" class="classData"  format="MM/DD/YYYY" placeholder="MM/DD/YYYY" min="<?=$datamin?>" required></label><br><br>
        <label>Hora: <select class="classHora" name="hora" required>
                    <option value="">--:--</option>
                    <option value="09:00:00">09:00</option>
                    <option value="10:00:00">10:00</option>
                    <option value="11:00:00">11:00</option>
                    <option value="12:00:00">12:00</option>
                    <option value="13:00:00">13:00</option>
                    <option value="14:00:00">14:00</option>
                    <option value="15:00:00">15:00</option>
                    <option value="16:00:00">16:00</option>
                    <option value="17:00:00">17:00</option>
                    <option value="12:00:00">18:00</option>
                    <option value="18:00:00">19:00</option>
                    <option value="20:00:00">20:00</option>
                    <option value="21:00:00">21:00</option>
            </select></label><br><br>
    

    <a href="PHP2.php"><button type="button" class="BTN1">Continuar</button></a>

</body>
</html>

        
