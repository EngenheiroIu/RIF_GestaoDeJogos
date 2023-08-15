<?php  
    if( isset($_POST['cadastrar'])){

        $data = $_POST['data'];
        $times = $_POST['times'];
        $divisao = $_POST['divisao'];
        $gol = $_POST['gol'];
        $metodo = $_POST['metodo'];
        $hentrada = $_POST['hentrada'];
        $oldentrada = $_POST['oldentrada'];
        $hsaida = $_POST['hsaida'];
        $oldsaida = $_POST['oldsaida'];
        $texposicao = $_POST['texposicao'];
        $lucro = $_POST['lucro'];
        
    }
   $conexao = new mysqli( "localhost","root","#97531zawardu246810.","cadastrojogos");

   if(!$conexao){
    echo " Erro ao cadastrar".mysqli_connect_error();
   }
      echo "Conexao com sucesso!";


      $sql = "INSERT INTO cadastrojogos.dados(data, times, divisao, gol, metodo,hentrada, oldentrada, hsaida, oldsaida, texposicao, lucro ) VALUES( '$data','$times', '$divisao','$gol','$metodo', '$hentrada',' $oldentrada','$hsaida ','$oldsaida ', '$texposicao','$lucro')";
   
      $resultado = mysqli_query($conexao,$sql);
   
 ?>
