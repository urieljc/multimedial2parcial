CREATE TABLE FlujoProceso(
    FlujoP varchar(3),
    Proceso varchar(3),
    ProcesoSiguiente varchar(3),
    Tipo varchar(3),
    Pantalla varchar(100),
    Rol varchar(3)
)

CREATE TABLE FlujoProcesoCondicional(
    FlujoP varchar(3),
    Proceso varchar(3),
    ProcesoSi varchar(3),
    ProcesoNo varchar(3)
)

CREATE TABLE FlujoProcesoSeguimiento(
    FlujoP varchar(3),
    Proceso varchar(3),
    NroTramite int(100),
    idUsuario int(7),
    FechaInicio date,
    FechaFin date
)

INSERT INTO FlujoProceso VALUES('F1','P3','P4','P','formularioHabilitacion','R');
INSERT INTO FlujoProceso VALUES('F1','P1','P2','I','inicio','C');
INSERT INTO FlujoProceso VALUES('F1','P4','P5','P','formularioPapeles','R');
INSERT INTO FlujoProceso VALUES('F1','P2','P3','P','pantallaFecha','C');
INSERT INTO FlujoProceso VALUES('F1','P5','null','C','papeles','C');
INSERT INTO FlujoProceso VALUES('F1','P6','null','F','negativa','C');
INSERT INTO FlujoProceso VALUES('F1','P7','P8','P','habilitacion','C');
INSERT INTO FlujoProceso VALUES('F1','P8','P9','P','FrenteHabilitacion','R');
INSERT INTO FlujoProceso VALUES('F1','P9','null','F','cierre','C');

INSERT INTO FlujoProcesoCondicional VALUES('F1','P5','P7','P6');
