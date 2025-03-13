<?php
 ob_start();
?>
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
    
            <title>RELACIONES</title>
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
                                <a class="dropdown-item" href="/keilaleon/keila04.php" style="color: #000;">Susurro del corazón</a><br>
                                <a class="dropdown-item" href="/keilaleon/keila05.php" style="color: #000;">La princesa Mononoke</a><br>
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

            <style>
                .container1{
                    margin: 0 auto;
                    justify-content: center;
                    align-items: center;
                    width: 50%;
                    background-color:rgba(13, 142, 178, 0.58);
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0,0,0,0.2);
                    color: black;
                }
                h1{
                    font-family:'Apes On Parade', sans-serif;
                    text-align: center;
                    color: #0d8eb2;
                    margin-bottom: 15px;  
                } 
                <!--No uso ahora este, sino el de abajo-->
                h2{
                    font-family:'Apes On Parade', sans-serif;
                    text-align: center;
                    color: white;
                    margin-bottom: 15px; 
                }
                .jumbotron{
                    margin: 1.5%;
                    align-items: center;
                    background-color: white;
                }
                form{
                    display: flex;
                    flex-direction: column;
                }
                label{
                    font-size: 16px;
                    margin-bottom: 5px;
                }
                input[type= "text"] {
                    padding: 8px;
                    margin-bottom: 10px;
                    border: none;
                    border-radius: 5px;
                    font-size: 16px;
                    background-color: white;
                    color: black;
                }
                input [type="submit"]{
                    padding: 10px;
                    background-color: white;
                    border-radius: 5px;
                    cursor: pointer;
                    transition: background 0.3s;
                }
                input[type="submit"]: hover {
                    background-color: white;
                }
                
                table{
                            width:100%;
                            border-collapse: collapse;
                            margin-top: 50px;
                            border-radius: 50px;
                        }
                        th, td{
                            padding: 10px;
                            text-align:left;
                            border-bottom: 1px solid #ddd;
                        }
                        tr:nth-child(even){
                            background-color: pink;
                            color: black;
                        }
                        tr:nth-child(odd){
                            background-color: white;
                            color: black;
                        }
                        th{
                            background-color: pink; <!-- ese es el color de antes 84c047-->
                            color: white;
                        }
            </style>
            
            <div class="jumbotron">
            <h1 class="display-4" style="font-family:'Apes On Parade',sans-serif; font-size: 40px ; color: black;">PAGINA DE MOSTRAR DATOS RELACIONADOS</h1>

            <div class="container1">
            <form method="POST" id="formulario">
                <label for="numero_control">Numero de control:</label>
                <input type="text" id="numero_control" name="numero_control" required><br>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br>
                <label for="apellido_paterno">Apellido paterno:</label>
                <input type="text" id="apellido_paterno" name="apellido_paterno" required><br>
                <label for="apellido_materno">Apellido materno:</label>
                <input type="text" id="apellido_materno" name="apellido_materno" required><br>
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" required><br>
                <label for="colonia">Colonia:</label>
                <input type="text" id="colonia" name="colonia" required><br>
                <label for="especialidad">Especialidad:</label>
                <input type="text" id="especialidad" name="especialidad" required><br>
                <label for="genero">Genero:</label>
                <input type="text" id="genero" name="genero" required><br>
                <label for="correo">Correo:</label>
                <input type="text" id="correo" name="correo" required><br>
                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono" required><br>
                <label for="fecha_ingreso">Fecha ingreso:</label>
                <input type="date" id="fecha_ingreso" name="fecha_ingreso" required><br>
                
                <input type="submit" value="Agregar Registro">
            </form>
            </div>
        
                <?php
                error_reporting(E_ALL);
                ini_set('display_errors', 1);

                $username = "root";
                $password = "";
                $servername = "localhost";
                $database = "escuela";

                $conexion = new mysqli( $servername,$username, $password, $database);
                if ($conexion->connect_error) {
                    die("Conexion Fallida: " . $conexion->connect_error);
                }
                function insertarAlumno($conexion) //agrego esto, el jueves-------------------------------------------------------------
                {
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        var_dump($_POST);//nueva linea
                        //Se obtienen los datos del formulario
                        $numero_control = $conexion->real_escape_string ($_POST["numero_control"]); //tal caul aparece en subase de datos lo que va en comillas
                        $nombre = $conexion->real_escape_string ($_POST["nombre"]);
                        $apellido_paterno = $conexion->real_escape_string ($_POST["apellido_paterno "]);
                        $apellido_materno = $conexion->real_escape_string ($_POST["apellido_materno "]);
                        $edad = $conexion->real_escape_string ($_POST["edad"]);
                        $colonia = $conexion->real_escape_string ($_POST["colonia"]);
                        $especialidad = $conexion->real_escape_string ($_POST["especialidad"]);
                        $genero = $conexion->real_escape_string ($_POST["genero"]);
                        $correo = $conexion->real_escape_string ($_POST["correo"]);
                        $telefono = $conexion->real_escape_string ($_POST["telefono"]);
                        $fecha_ingreso = $conexion->real_escape_string ($_POST["fecha_ingreso"]);
                        
                        $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, edad, colonia, especialidad, genero, correo, telefono, fecha_ingreso) 
                        VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', '$colonia', '$especialidad', '$genero', '$correo', '$telefono', '$fecha_ingreso')";

                        if($conexion->query($sql)==TRUE){
                            echo "<p class='success'> Agregada con exito. </p>"; //esto lo quito Ivette
                            header ("Location: " . $_SERVER['PHP_SELF']);
                            exit();//nuevas 2 filas
                        }else{
                            echo "<p class='error'>Error al agregar la pelicula: " . $conexion->error . "</p>";
                        }
                    }
                }
                        $conexion-> close ();
                ?>

                        </div>
                    </div>
             </table><!--este y div no lo tiene el profe-->
        </body>
    </html>