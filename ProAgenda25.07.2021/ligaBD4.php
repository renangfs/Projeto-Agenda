<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        body {
             background-color: 	#4F4F4F;
        /*    background-repeat: no-repeat;*/
            background-size: cover;
            background-position: center;
			margin: 0em auto;
            
		}
    </style>
    <title>Lista Database</title>
  </head >
  <body>
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col"><a href="index.php"><button type="button" class="btn btn-light">Voltar</button></a></th>
  </thead>
    <table class="table table-dark table-striped" >
        <thead >
            <tr>
                <th>ID </th>
                <th>Cliente</th>
                <th>Telefone </th>
                <th>Data </th>
                <th>Hora</th>
                <th>Servico </th>
                <th>Msg Adicional </th>
                <th>Valor</th>
            </tr>
        </thead>
        <?php 
        include_once("CNX.php");
        $sql = "SELECT * from cliente;";
        $rs = mysqli_query($cnx,$sql) or die("Erro ao executar a consulta" . mysqli_error($cnx));
        while($dados = mysqli_fetch_assoc($rs)){
        ?>
        <tbody>
            <tr>
                <td><?=$dados["id"]?></td>
                <td><?=$dados["nome"]?></td>
                <td><?=$dados["telefone"]?></td>
                <td><?=$dados["datas"]?></td>
                <td><?=$dados["hora"]?></td>
                <td><?=$dados["servico"]?></td>
                <td><?=$dados["info"]?></td>
                <td><?=$dados["valor"]?></td>
  
            </tr>
            <?php
             }
            ?>
        </tbody>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>