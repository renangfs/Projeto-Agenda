<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Agendamento</title>
    <style>
      .alert-successxx{
        color:#0f5132;
        background-color:#d1e7dd;
        border-color:#badbcc
        }
      .btnss-dark{display:block;
        width:100%;padding:.375rem .75rem;
        font-size:1rem;
        font-weight:400;
        line-height:1.5;color:#212529;
        background-clip:padding-box;
        border:1px solid #ced4da;
        -webkit-appearance:none;
        -moz-appearance:none;
        appearance:none;
        border-radius:.25rem;
        transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        color:#fff;
        background-color:#212529;
        border-color:#212529}
    
        body {
            background-image: url("img/bg3.jpg");
            background-size: cover;
            background-position:center;
		   	max-width: 60em;
			margin: 1em auto;
		}
    </style>
  </head>
  <body>

  <?php //pegando data atual com php
          $datamin = date('Y-m-d');
          //echo "$datamin";
      ?>
  
    
    <h1 align="center"></h1>
    <body class="bg-light">
    
        <div class="container">
          <main><label><img class="d-block mx-auto mb-4" align="left" src="img/server.svg" alt="" width="50" height="40"><a href="ligaBD4.php"><button align="left" type="button" class="btn btn-dark">Ir ao Banco de Dados</button></a></label>
            <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="img/calendar2-check-fill.svg" alt="" width="120" height="110">
             
              <p class="lead"><h3>Bem-vindo ao Agendamento rapido</h3><br><font color="#B40431">***</font></p>
            </div>
             <form method="get" action="ligasalao.php"> 
             <div align="left">
              <div class="col-md-7 col-lg-8">
                <h5 class="mb-3">Agendamento</h5>
                <form class="needs-validation" novalidate>
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label for="firstName" class="form-label">Nome</label>
                      <input type="text" class="form-control" name="nome"  placeholder="Digite seu nome..." required>
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
        
                    <div class="col-sm-6">
                      <label class="form-label">Telefone</label>
                      <input type="text" class="form-control" id="num" name="telefone" onkeyup="mascara_num()" maxlength="15" placeholder="(99) 99999-9999 " required  >
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                   
            
             <div align="left">
              <div class="col-md-7 col-lg-8">
                <h5 class="mb-3">Data e Hora</h5>
                <form class="needs-validation" novalidate>
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label for="firstName" class="form-label">Data</label>
                      <input type="date" class="form-control" id="date1" name="datas" format="MM/DD/YYYY" placeholder="MM/DD/YYYY" min="<?=$datamin?>" required><!--colocando minimo na data atual-->
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
        
                    <div class="col-sm-6">
                    <label for="firstName" class="form-label">Hora</label>
                    <select name="hora" class="form-control" required>
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
                    </select>
                    <form method="get" action="salaoFD.php">
                    <?php 
          include_once("conn.php");

              $data = filter_input(INPUT_GET, "datas" , FILTER_SANITIZE_STRING);
              $hora = filter_input(INPUT_GET, "hora" , FILTER_SANITIZE_STRING);

              $sql = "SELECT datas,hora FROM cliente;";// consultando o banco de dados atraves do PHP 
              $rs = mysqli_query($conn,$sql) or die("Erro ao executar a consulta" . mysqli_error($conn));// pegando resultado da consulta ao banco de dados
              $sim = "antes";// variável de para evitar erros
              $não = "antes";// variável de para evitar erros
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
              $condi="1";}//variavel chave para liberar os dados para o BD
              //echo " $data ás $hora esta não esta disponivel";
          else{ 
              $condi="2";} //variavel chave para liberar os dados para o BD
              //echo " $data ás $hora esta disponivel<br> para agendamento*"
              
       ?>
        
      </form>                
                      </div>
                    </div>
                    <br>

                    <h5> Serviços </h5>

                    <div class="container">
                        <div class="row">
                          <div class="col-sm">
                            <label ><h1  class="form-control">Cabelo [10,00] <input id="cabelo" type="checkbox" name="ch[]" value="10,00" /></h1>
                          </div>
                          <div class="col-sm">
                            <label ><h1 class="form-control">Manicure [20,00]<input id="manicure" type="checkbox" name="ch[]" value="20,00" /></h1><br>
                          </div>
                        </div>
                      </div>
                      
                      <h5> Informaçoes adicionais </h5>
                      <div >
                        <textarea class="form-control" name="texto" rows="5" cols="50" placeholder="Digite aqui sua mensagem" ></textarea ><br>
                      </div><br>
                         
                        
                        
                        <label class="form-control"><h5>Valor total:
                            <input type="text" class="btn btn-light"  name="result" readonly id="result" value="R$: 0,00"  required/></h5></label>        
                            <input  class="btn btnss-dark"  type="submit"  name="enviar" value="Agendar">                 
                    </div>
                </form><br>
                      
                    


    <!-- Optional JavaScript; choose one of the two! -->
    

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
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
      function mascara_num(){
                  var num = document.getElementById('num') 
                  if(num.value.length == 1 ){
                   num.value ="("+ num.value}
                   if(num.value.length == 3 ) {
                   num.value += ") "}
                   if(num.value.length == 10 ) {
                   num.value += "-"
                  }}
                  
                  const picker = document.getElementById('date1');
                  picker.addEventListener('input', function(e){
                  var day = new Date(this.value).getUTCDay();
                  if([0,1].includes(day)){
                    e.preventDefault();
                    this.value = '';
                    alert('Domingo e segunda não estão disponiveis escolha entre (TERÇA-SABADO)');
                  }
                });
        
        </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <scrip src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></scrip>
    <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></scrip>
    -->
  </body>
</html>