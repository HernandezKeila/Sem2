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
                                <a class="dropdown-item" href="./Kei03.html" style="color: #000;">La tumba de las luciérnagas</a><br>
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
            <div class="jumbotron text-center" style="background-color: white;">
                <h1 class="display-4" style="font-family:'Apes On Parade', sans-serif; color: #0d8eb2;">Studio Ghibli</h1>
                <?php 
                $username = "root";
                $password = "";
                $servername = "localhost";
                $database = "ghibli";

                $conexion = new mysqli( $servername,$username, $password, $database);
                if ($conexion->connect_error) {
                    die("Conexion Fallida: " . $conexion->connect_error);
                }
                $sql = "SELECT * FROM peliculas"; //aqui agregan el nombre de la tabla que estan usando, en mi caso fue nfleast//
                $resultado = $conexion-> query($sql);
                if($resultado->num_rows >0){
                    echo "<table>";
                    echo "<tr><th>Id</th><th>Pelicula</th><th>Año</th><th>Subgenero</th><th>Calificacion</th><th>Clasificacion</th></tr>";
                    while($row = $resultado->fetch_assoc()){
                        echo "<tr><td>" . $row ["Id"] . "</td><td>" . $row ["Pelicula"] . "</td><td>" . $row ["Año"] . "</td><td>" . $row ["Subgenero"] . "</td><td>" . $row ["Calificacion"] . "</td><td>" . $row ["Clasificacion"] . "</td></tr>";
                    }
                    echo "</table>";
                }else{
                    echo "No se encontraron registros en la base de datos";
                }
                $conexion->close();
                ?>

                    
                    
            </div>
        </body>
    </html>