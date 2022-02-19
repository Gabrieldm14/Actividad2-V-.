<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inscripcion sorteo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<?php


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
  }
  $nameError = "";

    if ((isset($_POST["enviar"])) && (empty($_POST["nombre"]))) { 
        $nameError = "<span style='color:red'>El campo nombre es requerido</span>";
        // sin campos rellenos
    }else{
        $nameError="";
    }

if (isset($_POST['enviar']) && ($nameError==""))
{
    
    $nombre = test_input($_POST["nombre"]);
    $apellido = test_input($_POST["apellido"]);
    $edad = test_input($_POST["edad"]);
    $genero = test_input($_POST["genero"]);
    $email = test_input($_POST['email']);
    echo "<div class='container'>";
    echo "El participador del sorteo : <br/>Nombre: $nombre <br/> Apellido: $apellido <br/>";
    echo "edad: $edad sexo $genero se le notificara en su $email en los proximos dias <br/>";
 


}
else
{
?>
<div class="container">
   <h1>Sorteo</h1><br>
    <img src="sorteo.jpg" alt="sorteo" width= "1100" height="250">
    <br>
    <br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="form-group">
            Nombre:<input type="text" class="form-control" name="nombre">
            <span>* <?php echo $nameError;?></span>
            <br>
            Apellido:<input type="text" class="form-control" name="apellido">
            Edad:<input type="text" class="form-control" name="calle">
            Genero:<input type="text" class="form-control" name="codigo">
            Em@il:<input type="email" class="form-control" name="email">
    <br>
    <p> <input class="btn btn-primary" type='submit' name="enviar" value="Enviar" > </p>
    </form>
</div>
<?php
}
?>
</body>
</html>
