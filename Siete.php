<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Document</title>
    
</head>

<?php


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
  }
  $nameError = "";

    if ((isset($_GET["enviar"])) && (empty($_GET["nombre"]))) { 
        $nameError = "<span style='color:red'>El campo nombre es requerido</span>";
        // sin campos rellenos
    }else{
        $nameError="";
    }

if (isset($_GET['enviar']) && ($nameError==""))
{
    
    $nombre = test_input($_GET["nombre"]);
    $apellido = test_input($_GET["apellido"]);
    $edad = test_input($_GET["edad"]);
    $genero = test_input($_GET["genero"]);
    $email = test_input($_GET['email']);
    echo "<div class='container'>";
    echo "El participador del sorteo : <br/>Nombre: $nombre <br/> Apellido: $apellido <br/>";
    echo "edad: $edad sexo $genero se le notificara en su $email en los proximos dias <br/>";
 


}
else
{
?>
<div class="container ">

  <h1>Datos Covid o Variante</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
    <div class="form-group">
            Nombre:<input type="text" class="form-control" name="nombre">
            <span>* <?php echo $nameError;?></span>
            <br>
            Apellido:<input type="text" class="form-control" name="apellido">
            Edad:<input type="text" class="form-control" name="calle">
            Genero:<input type="text" class="form-control" name="codigo">
          <br>
                 <div class="form-check">
                    <input class="form-check-input" type="radio" id="habito" name="habito" value="descanso">
                    <label class="form-check-label" for="habitos">Contagiado</label>
                 </div>
                 <div class="form-check">
                    <input class="form-check-input" type="radio" id="habito" name="habito" value="descanso">
                    <label class="form-check-label" for="habitos">Sin Contagiar</label>
                 </div><br> <br>
                 <div class="mb-3">
                    <label for="cita" class="form-label">Secuelas Covid o varianate</label>
                    <textarea class="form-control" id="evento" rows="1" name="evento" placeholder="Problemas respiratorios,cardiacos..." required></textarea>
                       
                </div>
            <div class="mb-3">
                    <label class="form-label">Vacunas</label>
                        <select name="vacunas" class="form-control">
                            <option value="0/3">0/3</option>
                            <option value="1/3">1/3</option>
                            <option value="2/3">2/3</option>
                            <option value="3/3">3/3</option>
                        </select>
            </div>
    <br>
    <p> <input class="btn btn-primary" type='submit' name="enviar" value="Enviar" > </p>
    </form>
</div>
<?php
}
?>
</body>
</html>