<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>RandomMonedas</title>

</head>
<body>
    <?php
    
        $monedas = ["DOLAR","EURO","YEN","LIBRA","FRANCO"];

    ?>
    <div class="container">
        <h2>Random Monedas</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="POST">
        Monedas <select name="monedas">
                <?php
                    for($i=1;$i<=20;$i++){

                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>

        Tipo <select name="Tipo">
            <?php     
                for($i=0;$i<count($monedas);$i++){

                echo "<option value='$monedas[$i]'>$monedas[$i]</option>";
                }
            ?>
            </select>

            <input type="submit" value="Lanzar" name="envia" class="btn btn-primary">
        </form>

        <?php 
        
        if(isset($_POST['monedas'])) $monedas = $_POST['monedas'];
        if(isset($_POST['Tipo'])) $Tipo = $_POST['Tipo'];

            if(isset($_POST['envia'])){

                echo "$monedas $Tipo 's <br>";
                

                for($i=1;$i<=$monedas;$i++){

                    $valor = rand(0,1);

                    if($Tipo == "DOLAR" && $valor == 0){
                        
                        echo "<img src='Dolar1.jpg'>";

                    }else if($Tipo == "DOLAR" && $valor == 1){

                        echo "<img src='Dolar2.jpg'>";
                    }
                    
                    if($Tipo == "EURO" && $valor == 0){
                        
                        echo "<img src='Euro1.jpg' width='100px'>";

                    }else if($Tipo == "EURO" && $valor == 1){

                        echo "<img src='Euro2.jpg' width='100px'>";
                    }

                    if($Tipo == "YEN" && $valor == 0){
                        
                        echo "<img src='Yen1.jpg' width='100px'>";

                    }else if($Tipo == "YEN" && $valor == 1){

                        echo "<img src='Yen2.jpg' width='100px'>";
                    }

                    if($Tipo == "LIBRA" && $valor == 0){
                        
                        echo "<img src='Libra1.jpg' width='100px'>";

                    }else if($Tipo == "LIBRA" && $valor == 1){

                        echo "<img src='Libra2.jpg' width='100px'>";
                    }

                    if($Tipo == "FRANCO" && $valor == 0){
                        
                        echo "<img src='Franco1.jpg' width='100px'>";

                    }else if($Tipo == "FRANCO" && $valor == 1){

                        echo "<img src='Franco2.jpg' width='100px'>";
                    }
                    
                }
            }
        
        ?>
    </div>
</body>