--Para Usuario
CREATE TABLE PERSONA(
    id integer,
    nombre varchar(50),
    apPaterno varchar(50),
    apMaterno varchar(50)
);

CREATE TABLE USUARIO(
    id integer,
    usuario varchar(50),
    contrasenia varchar(50),
    saldo integer
);

CREATE TABLE ROL(
    id integer,
    rol varchar(50)
);


CREATE TABLE ROL_USUARIO(
    idRol integer,
    idUsuario integer
);
--Para Cajero

CREATE TABLE FLUJOPROCESO(
    flujo varchar(5),
    proceso varchar(5),
    procesoSiguiente varchar(5),
    tipo varchar(1),
    pantalla varchar(50),
    rol varchar(50)
);

CREATE TABLE FLUJOSEGUIMIENTO(
    flujo varchar(5),
    proceso varchar(5),
    numeroTramite integer,
    usuario varchar(50),
    fechaInicio date,
    horaInicio time,
    fechaFin date,
    horaFin time
);

CREATE TABLE FLUJOCONDICIONANTE(
    flujo varchar(5),
    proceso varchar(5),
    procesoNo varchar(5),
    procesoSi varchar(5)
);

--insercion de los datos
INSERT INTO PERSONA
VALUES (1, 'Cristhian Rodrigo','Alave', 'Sanjines'), (2, 'Luz', 'Chacon', 'Quiniones'), (3, 'Liz', 'Vallejos', 'Mamani');

INSERT INTO USUARIO
VALUES (1, 'Chriss12', '123', 1000), (2, 'Luz12', '123', 1000), (3, 'Liz12', '123', null);

INSERT INTO ROL
VALUES (1, 'usuario'), (2, 'caja');

INSERT INTO ROL_USUARIO
VALUES (1, 1), (1, 2), (2, 3);

INSERT INTO FLUJOPROCESO
VALUES ('F1', 'P1', 'P2', 'I', 'Inicio', 'Usuario'), ('F1', 'P2', 'P3', 'P', 'DatosPersonales', 'Usuario'), ('F1', 'P3', 'P4', 'P', 'IngresaDatos', 'Usuario'), ('F1', 'P4', '-', 'C', 'Verificar', 'Cajero'), ('F1', 'P5', 'P7', 'P', 'Acepta', 'Cajero'),('F1', 'P6', '-', 'P', 'Rechazo', 'Cajero'), ('F1', 'P7', '-', 'F', 'EjecutaAccion', 'Cajero');

INSERT INTO FLUJOSEGUIMIENTO
VALUES('F1', 'P1', 1000, 'Chriss12', '2022-06-06', '10:00', '2022-06-06', '10:30', 'pendiente'), ('F1', 'P2', 1001, 'Luz12', '2022-06-06
', '10:31', '2022-06-06', '12:00', 'pendiente');

INSERT INTO FLUJOPROCESOCONDICIONANTE
VALUES('F1', 'P4', 'P6', 'P5');