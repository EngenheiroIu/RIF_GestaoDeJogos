<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

 body{

margin: 0;
font-size: 30px;

}

.pesquisar{

width: 100%;
height: 60px;
background-color:cadetblue;
color: white;

}

h2{
    position: absolute;
    margin-top: 4px;
    margin-left: 4px;
}

</style>
<body>

<?php 

if(empty($_GET['id'])){

    header('location:historico.php');
}

$id = $_GET['id'];
$cone = mysqli_connect('localhost','root','#97531zawardu246810.','cadastrojogos');
$sql = "SELECT * FROM dados WHERE id=$id";

$query = mysqli_query($cone,$sql);
$retorno = mysqli_fetch_assoc($query);
$data = date("d/m/Y" , strtotime($retorno['data']));


?>

<div class="pesquisar">
    <h2> Jogo </h2>
    </div>
<div class="dados">

<table>
<label for="data">Data</label> </label>
<input type="date" id="data" size="30" name="data" maxlength="100" value="<?php echo $dados=$retorno['data'] ?>"><br>
<label for="times">Times</label>
<input type="text" id="times" size="30" name="times" maxlength="100" value="<?php echo $dados=$retorno['times'] ?>"><br>
<label for="divisao">Divisão</label>
<input type="text" id="divisao" size="30" name="divisao" maxlength="100" value="<?php echo $dados=$retorno['divisao'] ?>"><br>
<label for="gol"> Após o GOL?</label>
<input type="text" placeholder="Após o GOL?" list="gol" name="gol" value="<?php echo $dados=$retorno['gol'] ?>">
<br><br> 

<h3> Partida </h3>
         
<label for="hentrada">Horario Entrada</label> </label>
<input type="number" id="hentrada" size="30" name="hentrada" maxlength="100" value="<?php echo $dados=$retorno['hentrada'] ?>">

<input type="text" placeholder="Método" list="metodo" name="metodo"  value="<?php echo $dados=$retorno['metodo'] ?>">
<br>
<label for="oldentrada">Old Entrada</label>
<input type="number" id="oldentrada" size="30" name="oldentrada" maxlength="100" value="<?php echo $dados=$retorno['oldentrada'] ?>"><br>

<label for="hsaida">Horario Saída</label> </label>
<input type="number" id="hsaida" size="30" name="hsaida" maxlength="100" value="<?php echo $dados=$retorno['hsaida'] ?>">

<label for="oldsaida">Old Saída</label>
<input type="number" id="oldsaida" size="30" name="oldsaida" maxlength="100" value="<?php echo $dados=$retorno['oldsaida'] ?>"><br>

<label for="texposicao">Tempo de Exposição</label> </label>
<input type="number" id="texposicao" size="30" name="texposicao" maxlength="100" value="<?php echo $dados=$retorno['texposicao'] ?>">

<label for="lucro">Lucro</label>
<input type="number" id="lucro" size="30" name="lucro" maxlength="100" value="<?php echo $dados=$retorno['lucro'] ?>"><br><br><br>

  </div>
 </body>
</html>