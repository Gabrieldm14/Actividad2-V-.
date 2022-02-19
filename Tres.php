<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Agenda</title>
    
</head>
<body>

     
            <div >
          
                    <aside>

                        <h1>Tu Agenda Online</h1>
                        
                        <img src="agenda.png" alt="agenda" width= "100%" height="250">
                    
                    </aside>
           
                    <form class="was-validated" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha*</label>
                        <input type="date" id="dia" name="fecha" class="form-control" required></input>
                        <div class="valid-feedback">Valido.</div>
                </div>
                <div class="mb-3">
                    <label for="cita" class="form-label">Cita</label>
                    <textarea class="form-control" id="evento" rows="1" name="evento" placeholder="Cita y reserva tu horario..." required></textarea>
                    <div class="valid-feedback">Valido.</div> 
                    <label for="hora" class="form-label">Hora</label>
                        <input type="time" name="hora" class="form-control"></input>
                       
                </div>
                <h4>Hábito diario</h4>
                <div class="form-check">
                    
                    <input class="form-check-input" type="radio" id="habito" name="habito" value="Gimnasio" checked>
                    <label class="form-check-label" for="habitos">Gimnasio 1h 30min</label>
                    
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="habito" name="habito" value="descanso">
                    <label class="form-check-label" for="habitos">Descanso</label>
                </div>
                <div class="mb-3">
                    <label for="cita" class="form-label">Cursos</label>
                        <select name="cursos" class="form-control">
                            <option value="INGLES">INGLES</option>
                            <option value="IMW">IMW</option>
                            <option value="GTB">GTB</option>
                            <option value="GTB">ADE</option>
                        </select>
                        Horario
                        <input type="time" name="horario" class="form-control"></input>
                </div>
                
               
                <button type="submit" class="btn btn-primary mb-5" name="enviar">Enviar datos</button>    
            </form>
        </div>
    <div >
        <div >
        <?php

        $fecha = $cita = $hora = $cursos = $horario = $habito = "";

      function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
  }
            if(isset($_POST['fecha'])) $fecha = $_POST['fecha'];
            if(isset($_POST['cita'])) $cita= $_POST['cita'];
            if(isset($_POST['hora'])) $hora = $_POST['hora'];
            if(isset($_POST['cursos'])) $cursos = $_POST['cursos'];
            if(isset($_POST['horario'])) $horario = $_POST['horario'];
            if(isset($_POST['habito'])) $habito = $_POST['habito'];
           


            if(isset($_POST['envia'])){

                $formatoFecha = date("d/m/Y", strtotime($fecha));
                echo "<h3>Agenda Online: '$formatoFecha'</h3>";
                echo "<br>";

                echo"<h4>Citas:</h4>";
                echo" <div>
                    <ul>
                        <li>$cita a las $hora</li>
                        <li>Tienes $cursos a las $horario</li>
                        <li>Y $habito</li>
                    </ul>
                    </div>
                ";

                
                
            }
            
        ?>  
        
   

</body>
</html>