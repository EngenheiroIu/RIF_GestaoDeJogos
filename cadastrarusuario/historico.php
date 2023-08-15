<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Análise de Jogos</title>
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

    form{

      position: absolute;
      margin-top: 12px;
    }
    
    table{

      width: 100%;
      text-align:left;
      font-size:40px;

    }

    button{

      cursor: pointer;
    }
    tr:hover {
     
      background-color: whitesmoke;
    }

    a{
      text-decoration: none;
      color: black;
    }

    </style>
<body>
 
     <div class="pesquisar">
      <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
 
        <label for="pesquisar"> Digite o Jogo: </label>
        <input type="text" name="pesquisar" size="80">

        <button type="submit">Pesquisar</button>

      </form>
     </div>
     
     <table>
<tr>
  <th>Data :</th>
  <th>Times :</th>
  <th>Resultado  : <th>
</tr>
<?php 



$conexao = mysqli_connect('localhost','root','#97531zawardu246810.','cadastrojogos');
if($_SERVER['REQUEST_METHOD']=='POST'){

$dados = $_POST['pesquisar'];

$sql = "SELECT * FROM dados WHERE times LIKE '%$dados%'";
$query = mysqli_query($conexao,$sql);

while($resultado=mysqli_fetch_assoc($query)){
$id = $resultado['id'];
$data = date("d/m/Y",strtotime($resultado['data']));
$times = $resultado['times'];
$lucro = $resultado['lucro'];

echo "<tr>";
echo "<td>";
echo "<a href='exibir.php?id=".$id."'>".$data."</a>";
echo "<td>";


echo "<a href='exibir.php?id=".$id."'>".$times."</a>";
echo "<td>";


echo "<a href='exibir.php?id=".$id."'>".$lucro."</a>";
echo "<td>";
echo "<tr>";

}

}
$conexao->close();
?>
</table>
</body>
</html>
   



  
  
