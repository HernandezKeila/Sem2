CREATE TABLE alumnos ( 
  id INT PRIMARY KEY AUTO_INCREMENT,
  numero_control VARCHAR (10) UNIQUE NOT NULL,
  nombre VARCHAR (50) NOT NULL,
  apellido_paterno VARCHAR (50) NOT NULL,
  apellido_materno VARCHAR (50),
  id_edad INT NOT NULL,
  id_colonia INT NOT NULL,
  id_especialidad INT NOT NULL,
  id_genero INT NOT NULL,
  correo VARCHAR(15) UNIQUE,
  telefono VARCHAR (15),
  fecha_ingreso DATE NOT NULL,
  FOREIGN KEY (id_edad) REFERENCES edades (id),
  FOREIGN KEY (id_colonia) REFERENCES colonias (id),
  FOREIGN KEY (id_especialidad) REFERENCES especialidades (id),
  FOREIGN KEY (id_genero) REFERENCES generos (id)
  );



//esta es otra nueva//

  CREATE TABLE edades(
    id INT PRIMARY KEY AUTO_INCREMENT,
    edad INT NOT NULL UNIQUE
  );
  CREATE TABLE colonias(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_colonias VARCHAR (100) UNIQUE NOT NULL
  );
  CREATE TABLE especialidades(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_especialidad VARCHAR (100) UNIQUE NOT NULL
  );
  CREATE TABLE generos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_genero VARCHAR (50) UNIQUE NOT NULL
  );



  INSERT INTO edades (edad) VALUES (14),(15),(16),(17),(18),(19);

  INSERT INTO colonias (nombre_colonias) VALUES
('Jarachina Norte'),('Jarachina Sur'),('Granjas'),('Vista hermosa'),('Esfuerzo'),('Fresnos'),('Progreso'),('Bugambilias'),('Ventura'),('Loma Real'),('Campestre'),('Vista Alta');

INSERT INTO especialidades(nombre_especialidad) VALUES ('Programación'), ('Mantenimiento Industrial'), ('Mantenimiento de Computo'),('Adminitracion de resursos humanos'), ('Cibersiguridad'), ('Logistica'),('Preparacion de alimentos'),('Electronica'),('Construccion'),('Mecatronica'),('Comercio internacional'),('Hoteleria');

INSERT INTO generos (nombre_genero) VALUES ('Hombre'), ('Mujer'), ('Otro');

