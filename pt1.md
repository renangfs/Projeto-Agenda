<h1 align="center"> Projeto-Agenda <h1>
     
       <!DOCTYPE html>
      <html lang="pt-br">
        <head>
          <title>horario</title>
          <meta charset="utf-8"/>
        </head>
        <body>

          <?php //pegando data atual com php
              $datamin = date('Y-m-d');
              //echo "$datamin";
          ?>

          <form method="get" action="ligahorario.php"> 
              <h3> Selecione o dia e a hora desejada </h3>
              <input type="date" name="datas" min="<?=$datamin?>" required><!--colocando minimo na data atual-->

              <select name="hora" required>
                 <option value="">--:--</option>
                 <option value="10:00:00">10:00</option>
                 <option value="11:00:00">11:00</option>
                 <option value="12:00:00">12:00</option>
              </select>

          <?php 
              include_once("horario2.php");

                  $data = filter_input(INPUT_GET, "datas" , FILTER_SANITIZE_STRING);
                  $hora = filter_input(INPUT_GET, "hora" , FILTER_SANITIZE_STRING);

                  $sql = "SELECT id,datas,hora FROM datahora";// consultando o banco de dados atraves do PHP 
                  $rs = mysqli_query($conn,$sql) or die("Erro ao executar a consulta" . mysqli_error($conn));// pegando resultado da consulta ao banco de dados
                  $sim = "antes";// variável de para evitar erros
              while($dados = mysqli_fetch_assoc($rs)){;// estrutura de repetição por associação

                  if($data.$hora == $dados['datas'].$dados['hora']){// estrutura condicional procurando data e hora no BD
                       //echo "positivo";
                       $sim = "positivo";}   
                   else{
                      //echo "negativo";
                      $não = "negativo";}
                  }  
              if($sim == "antes"){//condicional caso ache alguma data ja agendada
                      $sim = "negativo";}
                      $esc=$sim.$não;
              if ($esc == "positivonegativo"){// condicional para msg
                  $condi="1";//variavel chave para liberar os dados para o BD
                  echo " $data ás $hora esta <font color='red'>não esta disponivel<font>";}
              else{ 
                  $condi="2";//variavel chave para liberar os dados para o BD
                  echo " $data ás $hora <font color='#3CB371'>esta disponivel<font>";
           } ?>
          <input type="submit" value="Agendar">
         </form>
        </body>
      </html>     
   <h3 align="center">  Envia dados para o BD usando PHP <h3>
  
                    <?php
              include_once("horario2.php");
              include_once("datahora.php");

              //echo "$data<br>";
              //echo "$hora";

              if($condi == 2){

              $result_usuarios = "INSERT INTO datahora VALUES (default,'$data','$hora')";                
              $resultado_usuarios = mysqli_query($conn,$result_usuarios);
              echo "<h1 color='#3CB371'>Agendamento efetuado com SUCESSO</h1>";}
              else{
                  if($condi == 1){?>
                  <a href="datahora.php">voltar</a>
              <?php }} ?>
              
   <h3 align="center"> Criando conecção ao Banco de dados <h3>

                        <?php

            $servidor = "127.0.0.1";
            $usuario = "root";
            $senha = "";
            $dbname = "horario";

            //Cria conexão
            $conn = mysqli_connect($servidor,$usuario,$senha,$dbname);
            ?>

