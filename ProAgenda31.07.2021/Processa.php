
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="CSS3+.css"><!--importando CSS-->
    <script src="JS.js"></script><!--importando JS-->
</head>
<body>
<?php
include_once("CNX.php");

$nome = filter_input(INPUT_POST, "nomep" , FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, "telefonep" , FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, "datap" , FILTER_SANITIZE_STRING);
$hora = filter_input(INPUT_POST, "horap" , FILTER_SANITIZE_STRING);
$servico = filter_input(INPUT_POST, "servico" , FILTER_SANITIZE_STRING);
$valor = filter_input(INPUT_POST, "result" , FILTER_SANITIZE_STRING);
$msg = filter_input(INPUT_POST, "texto" , FILTER_SANITIZE_STRING);
$condi = filter_input(INPUT_POST, "condi" , FILTER_SANITIZE_STRING); 
$convert = filter_input(INPUT_POST, "convert" , FILTER_SANITIZE_STRING); 

//echo "$condi<br>";
//echo "$servico<br>";
//echo "$msg<br>";
//echo "$valor<br>";
//echo "$data<br>";
//echo "$hora<br>";
//echo "$nome<br>";
//echo "$telefone<br>";

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
                $condi="0";}       
          if($esc == 'negativonegativo'){
                $condi="1";} //variavel chave para liberar os dados para o BD
           
if($condi == 1){//para o funcionamento correto é necessario 2 registros previos em horarios diferentes
    echo "<script>alert('Agendamento feito com Sucesso!!!')
    alert('caso queira desagendar ligue (99) 99999-9999')</script>";
    $result_usuario = "INSERT INTO cliente VALUES (default,'$nome','$telefone','$data','$hora','$servico','$valor','$msg')";
    $resultado_usuario = mysqli_query($cnx, $result_usuario);
    //echo "Enviado   1";
    }
else{
    if($condi == 0 )
        //echo "NÃO ENVIADO  2";
        echo "<script>
        alert('Data ou Hora INDISPONIVEIS <br> esconha um dia/hora diferentes')
        window.location='HTML1.php';
        </script>";
        }
?>

            <div class="final" >
                <div>
                    <h1> Agendamento feito com Sucesso!</h1>
                    <div>
                        <h3>Nome:   <input type="text" name="nomep" readonly value="<?=$nome?>"/>  
                        Telefone:   <input type="text" name="telefonep" readonly value="<?=$telefone?>"/></h3>
                    </div>
                    <div>
                        <h3>Data:   <input type="text" name="convert" readonly value="<?=$convert?>"/>  
                            Hora:   <input type="text" name="horap" readonly value="<?=$hora?>"/></h3>     
                    </div>
                    <div>
                        <h3>Serviço:    <input type="text" name="servico" readonly value="SERVICO"/>  
                            Valor:    <input type="text" name="result" readonly value="<?=$valor?>"/></h3>
                    </div>
                    <div >
                        <h3>Mensagem:    <input size="20" name="texto" type="text" rows="7" cols="30"readonly value="<?=$msg?>"/></h3>             
                    </div>
                </div>
            </div>
    </form>
</body>
</html>
