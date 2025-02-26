<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="style.css">
    
            <title>Keila Zeret Hernández León</title>
        </head>
        <body>
        <link href="https://fonts.cdnfonts.com/css/apes-on-parade" rel="stylesheet"> 
        <link href="https://fonts.cdnfonts.com/css/ningst-sparkle" rel="stylesheet">
            <nav class="navbar navbar-ligth" style="background-color: #84c047;">
            <div class="container">
                <a class="navbar-brand" href="index.html" style="color:#ecf39e;">Inicio</a>
                <!--boton de inicio que lleva a si mismo, de color blanco-->
                <!--a continuación es el menú drowdownd para poner las ligas a las prácticas -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="nav navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="./index.html" id="navbarNavDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">Producción 1980s</a>
                            <!--Lo que sigue son los menos que se va a desplegar hacia abajo, cada uno tendra el nombre de su práctica, ejemplo, práctica 1 se llamara su nombre+el numero de la practica xx terminando con HTML-->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/keilaleon/keila01.php" style="color: #000;">El castillo en el cielo</a><br>
                                <a class="dropdown-item" href="/keilaleon/keila02.php" style="color: #000;">Mi vecino Totoro</a><br>
                                <a class="dropdown-item" href="/keilaleon/keila03.php" style="color: #000;">La tumba de las luciérnagas</a><br>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">Producción 1990s</a>
                            <!--Lo que sigue son los menos que se va a desplegar hacia abajo, cada uno tendra el nombre de su práctica, ejemplo, práctica 1 se llamara su nombre+el numero de la practica xx terminando con HTML-->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="./Kei04.html" style="color: #000;">Susurro del corazón</a><br>
                                <a class="dropdown-item" href="./Kei05.html" style="color: #000;">La princesa Mononoke</a><br>
                                <a class="dropdown-item" href="./Kei06.html" style="color: #000;">Olas del océano</a><br>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">Producción 2000s</a>
                            <!--Lo que sigue son los menos que se va a desplegar hacia abajo, cada uno tendra el nombre de su práctica, ejemplo, práctica 1 se llamara su nombre+el numero de la practica xx terminando con HTML-->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="./Kei07.html" style="color: #000;">El viaje de Chihiro</a><br>
                                <a class="dropdown-item" href="./Kei08.html" style="color: #000;">El castillo ambulante</a><br>
                                <a class="dropdown-item" href="./Kei09.html" style="color: #000;">Ponyo</a><br>
                                <a class="dropdown-item" href="./Kei10.html" style="color: #000;">Final</a>
                            </div>
                        </li>
                </ul>
                </div>
            </div>
            </nav>
            <div class="container1 text-center" >
                <h1 class="display-4" style="font-family:'Apes On Parade', sans-serif; color: #0d8eb2;">Meter Datos</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formulario">
                   <label for="Pelicula">Pelicula</label>
                   <input type="text" id="Pelicula" name="Pelicula" requiered><br>
                   <label for="Año">Año</label>
                   <input type="text" id="Año" name="Año" requiered><br>
                   <label for="Subgenero">Subgenero</label>
                   <input type="text" id="Subgenero" name="Subgenero" requiered><br>
                   <label for="Calificacion">Calificacion</label>
                   <input type="text" id="Calificacion" name="Calificacion" requiered><br>
                   <label for="Clasificacion">Clasificacion</label>
                   <input type="text" id="Clasificacion" name="Clasificacion" requiered><br>
                    
                   <input type="submit" value="Agregar registro">
                </form>

                <?php
                $username = "root";
                $password = "";
                $servername = "localhost";
                $database = "ghibli";

                $conexion = new mysqli( $servername,$username, $password, $database);
                if ($conexion->connect_error) {
                    die("Conexion Fallida: " . $conexion->connect_error);
                }
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    //Se obtienen los datos del formulario
                    $Nombre = $_POST["Pelicula"]; //tal caul aparece en subase de datos lo que va en comillas
                    $Nombre = $_POST["Año"];
                    $Nombre = $_POST["Subgenero"];
                    $Nombre = $_POST["Calificacion"];
                    $Nombre = $_POST["Clasificacion"];
                    
                    $sql = "INSERT INTO Personajes (Pelicula, Año, Subgenero, Calificacion, Clasificacion) VALUES ($Pelicula, $Año, $Subgenero, $Calificacion, $Clasificacion)";
                    if($conexion->query[$sql]==TRUE){
                        echo "<p class='success'>Nuevo pelicula agregada con exito. </p>";
                    }else{
                        echo "<p class='error'>Error al agregar la pelicula: " . $conexion->error . "</p>";
                    }
                }
                ?>

                    
                    
            </div>
        </body>
    </html>