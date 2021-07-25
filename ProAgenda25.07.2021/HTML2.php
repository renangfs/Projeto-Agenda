<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="CSS2.css"><!--importando CSS-->
    <script src="JS.js"></script><!--importando JS-->
</head>
<body>
<?php //PEGANDO DADOS DO HTML1 E HTML2
    include_once("CNX.php");
    $nome = filter_input(INPUT_POST, "nomep" , FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, "telefonep" , FILTER_SANITIZE_STRING);
    $data = filter_input(INPUT_POST, "datap" , FILTER_SANITIZE_STRING);
    $hora = filter_input(INPUT_POST, "horap" , FILTER_SANITIZE_STRING);
    //echo "$data<br>";
    //echo "$hora<br>"; 

    $sql = "SELECT datas,hora FROM cliente;";// consultando o banco de dados atraves do PHP 
              $rs = mysqli_query($cnx,$sql) or die("Erro ao executar a consulta" . mysqli_error($cnx));// pegando resultado da consulta ao banco de dados
              $sim = "antes";// variável auxiliare para evitar erros
              $não = "antes";// variável auxiliare para evitar erros
          while($dados = mysqli_fetch_assoc($rs)){;// estrutura de repetição por associação

             if($data.$hora == $dados['datas'].$dados['hora']){// estrutura condicional procurando data e hora no BD
                //echo "positivo";
                $sim = "positivo";}   
            else{
                //echo "negativo";
                $não = "negativo";}
              }  
          if($sim == "antes"){//condicional se não encontrar nenhuma data positiva
                $sim = "negativo";}
                $esc=$sim.$não;
          if ($sim == "positivo"){//condicional caso ache alguma data ja agendada
                $condi="1";
                echo "<script>
                alert('Data ou Hora indisponiveis esconha um dia/hora diferentes')
                window.location='HTML1.php';
                </script>";}//variavel chave para liberar os dados para o BD
                //echo " $data ás $hora esta não esta disponivel";
          if($esc == 'negativonegativo'){
                $condi="2";} //variavel chave para liberar os dados para o BD
                //echo " $data ás $hora esta disponivel<br> para agendamento*"
?>
<form method="POST" action="HTML3.php">     
    
        <a href="HTML1.php"><button type="button" class="BTN1">Voltar</button></a>
        <input type="text" name="nomep" class="subliminar" readonly  value="<?=$nome?>"/><!--capturando dados do HTML1 e HTML2 para o HTML3-->
        <input type="text" name="telefonep" class="subliminar" readonly  value="<?=$telefone?>"/>  <!--capturando dados do HTML1 e HTML2 para o HTML3-->
        <input type="text" name="datap" class="subliminar" readonly  value="<?=$data?>"/>  <!--capturando dados do HTML1 e HTML2 para o HTML3-->
        <input type="text" name="horap" class="subliminar" readonly  value="<?=$hora?>"/>  <!--capturando dados do HTML1 e HTML2 para o HTML3-->
        <input type="text" name="condi" class="subliminar" readonly  value="<?=$condi?>"/>  <!--capturando dados do HTML1 e HTML2 para o HTML3-->
        <div class="all" required>
            <div class="format">
                <input id="idcheck1" name="ch[]" value="10,00" class="classcheck" type="checkbox" ><!-- id //nome//valor//classe//tipo-->
                <label for="idcheck1">Teste1</label>
            </div>    
            <div class="format">
                <input id="idcheck2" name="ch[]" value="20,00"class="classcheck" type="checkbox"><!-- id //nome//valor//classe//tipo-->
                <label for="idcheck2">Teste2</label><br>

            </div>
        <input type="text" class="resultado" name="result" readonly id="result" value="R$: 0,00"/>  

        </div>
        
        <div class="texto">
            <label class="txtfocus" for="idtexto"><h5> Informações adicionais: </h5></label><br>
            <textarea class="txtfocus" name="texto" id="idtexto" rows="5" cols="30" placeholder="Digite aqui sua mensagem"></textarea >
        </div>
        <!--<a href="HTML3.php"><button type="button" class="BTN1">Continuar</button></a>--> 
        <input  class="BTN1"  type="submit" value="Continuar">     
<form>

</body>
<script>
String.prototype.formatMoney = function() {
    var v = this;

    if(v.indexOf('.') === -1) {
        v = v.replace(/([\d]+)/, "$1,00");
    }

    v = v.replace(/([\d]+)\.([\d]{1})$/, "$1,$20");
    v = v.replace(/([\d]+)\.([\d]{2})$/, "$1,$2");
    v = v.replace(/([\d]+)([\d]{3}),([\d]{2})$/, "$1.$2,$3");

    return v;
};
String.prototype.toFloat = function() {
    var v = this;

    if (!v) return 0;
    return parseFloat(v.replace(/[\D]+/g, '' ).replace(/([\d]+)(\d{2})$/, "$1.$2"));
};
(function(){
    "use strict";

    var $chs = document.querySelectorAll('input[name="ch[]"]'),
        $result = document.getElementById('result'),
        chsArray = Array.prototype.slice.call($chs);

    chsArray.forEach(function(element, index, array){
        element.addEventListener("click", function(){
            var v = this.value,
                result = 0;
            v = v.toFloat();

            if (this.checked === true) {
                result = $result.value.toFloat() + parseFloat(v);
            } else {
                result = $result.value.toFloat() - parseFloat(v);
            }

            $result.value = "R$ " + String(result).formatMoney();
        });
    });

}());
</script>
</html>

        