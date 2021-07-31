<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="CSS3.css"><!--importando CSS-->
    <script src="JS.js"></script><!--importando JS-->
</head>
<body>
<form method="POST" action="Processa.php">    
<?php //PEGANDO DADOS DO HTML1 E HTML2
    $nome = filter_input(INPUT_POST, "nomep" , FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, "telefonep" , FILTER_SANITIZE_STRING);
    $data = filter_input(INPUT_POST, "datap" , FILTER_SANITIZE_STRING);
    $hora = filter_input(INPUT_POST, "horap" , FILTER_SANITIZE_STRING);
    $valor = filter_input(INPUT_POST, "result" , FILTER_SANITIZE_STRING);
    $msg = filter_input(INPUT_POST, "texto" , FILTER_SANITIZE_STRING); 
    $condi = filter_input(INPUT_POST, "condi" , FILTER_SANITIZE_STRING);   
    $convert = implode(" / ",array_reverse(explode("-",$data)));

?>
    
        <a href="HTML1.php"><button type="button" class="BTN1">Alterar</button></a>
            <div class="final" >
                <div>
                    <div>
                        <h3>Nome:   <input type="text" name="nomep" readonly value="<?=$nome?>"/>  
                        Telefone:   <input type="text" name="telefonep" readonly value="<?=$telefone?>"/></h3>
                    </div>
                    <div>
                        <h3>Data:   <input type="text" name="convert" readonly value="<?=$convert?>"/>  
                            Hora:   <input type="text" name="horap" readonly value="<?=$hora?>"/></h3>
                        <div class="subliminar">
                            <input type="text"  name="datap" readonly value="<?=$data?>"/><!-- Pegando data e passando para passar para Processa.php-->
                            <input type="text"  name="condi" readonly value="<?=$condi?>"/><!-- Pegando data e passando para passar para Processa.php-->

                        </div>        
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

            <input  class="BTN2"  type="submit" value="Agendar">   
    </form>
</body>
</html>