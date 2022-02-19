<!DOCTYPE html>
<html lang="es">
<head>
<title>Cuatro</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php


$num = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
function multp($num) {
    for ($i=1; $i<=10; $i++){
        echo "<br>$num x $i  =".$i*$num;
        }
    }
if (isset($_GET['enviar']))
{
    $num = test_input($_GET["numero"]);
   
    multp ($num);

    echo "<br><br><a class='btn btn-primary text-white text-decoration-none' href='Cuatro.php'>Regresar</a>";

}
else
{
?>  


<div class="container mt-3">

    <h2>Tabla de multiplicar de</h2>
  
    <form class="was-validated" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
  
    <div class="row">
        <div class="col-xs-3 mb-3 mt-3">
                <label id="numero">Ecribe un numero:</label>
                <br>
                <input type="number" class="form-control" name="numero" placeholder="1,2,3,4,5..." required>
                <div class="valid-feedback">Valido.</div>
               
        </div>
    </div >
  
      <button type="submit" class="btn btn-primary mb-5 " name="enviar">Enviar</button>
    </form>
</div>

<?php
}
?>
</body>
</html>