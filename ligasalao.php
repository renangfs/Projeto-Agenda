
  <?php
      include_once("index.php");
      include_once("conn.php");

     $nome = filter_input(INPUT_GET, "nome" , FILTER_SANITIZE_STRING);
     $telefone = filter_input(INPUT_GET, "telefone" , FILTER_SANITIZE_STRING);
     $msg = filter_input(INPUT_GET, "texto" , FILTER_SANITIZE_STRING);
     $valor = filter_input(INPUT_GET, "result" , FILTER_SANITIZE_STRING);
     

      //echo "$data<br>";
      //echo "$hora<br>";
      //echo "$condi";
      $convert = implode("/",array_reverse(explode("-",$data)));
      if($condi == 2){//para o funcionamento correto é necessario 2 registros previos em horarios diferentes

      $result_usuarios = "INSERT INTO cliente VALUES (default,'$nome','$telefone','$data','$hora','servico','$msg','$valor')";                
      $resultado_usuarios = mysqli_query($conn,$result_usuarios);
      echo "<script>
      alert('Seu Agendamento  foi marcado no dia $convert às $hora');
      alert('Caso queira canselar o agendamento ligue (21)96847-4254');
      alert('Guarde seu dia e hora [$convert às $hora]');
      </script>";
    }
      else{
          if($condi == 1 )
          echo "<script>
          alert('Data ou Hora indisponiveis esconha $servico um dia/hora diferemtes');
          </script>";}
       
    ?>



      