CREATE TABLE Usuario(
    id int(7),
    usuario VARCHAR(50),
    password VARCHAR(50)
)

CREATE TABLE Rol(
    idrol VARCHAR(2),
    descripcion VARCHAR(20)
)

CREATE TABLE Persona(
    id int(7),
    nombre varchar(20),
    apellido varchar(100),
    idrol varchar(2)
)

CREATE TABLE Documentos(
    id int(7),
    ci int(10),
    cnacimiento int(1),
    fechanacimeinto date,
    titulo int(1),
    nombresibla varchar(50)
)

-- datos rol
INSERT INTO Rol VALUES('C','comite');
INSERT INTO Rol VALUES('R','representante');