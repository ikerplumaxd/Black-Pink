CREATE DATABASE BlackAndPink;
USE BlackAndPink;
CREATE TABLE datos(
NomCompleto text NOT NULL,
Año int(11) NOT NULL,
Mes int(11) NOT NULL,
Día int(11) NOT NULL,
Correo text NOT NULL,
HM text NOT NULL,
Telefono int(11) NOT NULL,
Contraseña text NOT NULL
);
CREATE TABLE sugerencias(
NomCompleto text NOT NULL,
Correo text NOT NULL,
Sugerencia text NOT NULL
);
INSERT INTO sugerencias VALUES('','','');
