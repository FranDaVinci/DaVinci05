DROP DATABASE IF EXISTS tienda; 
CREATE DATABASE tienda CHARACTER SET utf8mb4; 
USE tienda; 

CREATE TABLE fabricante ( 
  codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL 
); 

CREATE TABLE producto ( 
  codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  nombre VARCHAR(100) NOT NULL, 
  precio DOUBLE NOT NULL, 
  codigo_fabricante INT UNSIGNED NOT NULL, 
  FOREIGN KEY (codigo_fabricante) REFERENCES fabricante(codigo) 
); 

INSERT INTO fabricante VALUES(1, 'Asus'); 
INSERT INTO fabricante VALUES(2, 'Lenovo'); 
INSERT INTO fabricante VALUES(3, 'Hewlett-Packard'); 
INSERT INTO fabricante VALUES(4, 'Samsung'); 
INSERT INTO fabricante VALUES(5, 'Seagate'); 
INSERT INTO fabricante VALUES(6, 'Crucial'); 
INSERT INTO fabricante VALUES(7, 'Gigabyte'); 
INSERT INTO fabricante VALUES(8, 'Huawei'); 
INSERT INTO fabricante VALUES(9, 'Xiaomi');
 
INSERT INTO producto VALUES(1, 'Disco duro SATA3 1TB', 86.99, 5); 
INSERT INTO producto VALUES(2, 'Memoria RAM DDR4 8GB', 120, 6); 
INSERT INTO producto VALUES(3, 'Disco SSD 1 TB', 150.99, 4); 
INSERT INTO producto VALUES(4, 'GeForce GTX 1050Ti', 185, 7); 
INSERT INTO producto VALUES(5, 'GeForce GTX 1080 Xtreme', 755, 6); 
INSERT INTO producto VALUES(6, 'Monitor 24 LED Full HD', 202, 1); 
INSERT INTO producto VALUES(7, 'Monitor 27 LED Full HD', 245.99, 1); 
INSERT INTO producto VALUES(8, 'Portátil Yoga 520', 559, 2); 
INSERT INTO producto VALUES(9, 'Portátil Ideapd 320', 444, 2); 
INSERT INTO producto VALUES(10, 'Impresora HP Deskjet 3720', 59.99, 3); 
INSERT INTO producto VALUES(11, 'Impresora HP Laserjet Pro M26nw', 180, 3); 

select nombre from producto; /*1 Lista el nombre de todos los productos que hay en la tabla producto. */
select nombre, precio from producto; /*2 Lista los nombres y los precios de todos los productos de la tabla producto. */
select * from producto; /*3 Lista todas las columnas de la tabla producto. */
SELECT nombre, (precio/22.09), (precio/19.54) FROM producto; /*4 Lista el nombre de los productos, el precio en euros y el precio en dólares estadounidenses (USD). */

CREATE VIEW PRODUCTOS AS SELECT nombre as 'NOMBRE PRODUCTO', (precio/22.09) AS 'EURO', (precio/19.54) AS 'DOLLAR' FROM producto; /*5 Lista el nombre de los productos, el precio en euros y el precio en dólares estadounidenses (USD). Utiliza los siguientes alias para las columnas: nombre de producto, euros, dólares. , Y CREANDO UNA VISTA A MI ANTOJO*/

SELECT UPPER (nombre), precio FROM producto; /*6 Lista los nombres y los precios de todos los productos de la tabla producto, convirtiendo los nombres a mayúscula. */
SELECT LOWER (nombre), precio FROM producto; /*7 Lista los nombres y los precios de todos los productos de la tabla producto, convirtiendo los nombres a minúscula. */
SELECT nombre, UPPER(SUBSTR(nombre, 1, 2)) FROM fabricante; /*8 Lista el nombre de todos los fabricantes en una columna, y en otra columna obtenga en mayúsculas los dos primeros caracteres del nombre del fabricante. */
SELECT nombre, ROUND(precio) FROM producto; /*9 Lista los nombres y los precios de todos los productos de la tabla producto, redondeando el valor del precio. */
SELECT nombre, TRUNCATE(precio, 0) FROM producto; /**********10 Lista los nombres y los precios de todos los productos de la tabla producto, truncando el valor del precio para mostrarlo sin ninguna cifra decimal. */
SELECT codigo_fabricante FROM producto; /*11 Lista el código de los fabricantes que tienen productos en la tabla producto.  */
SELECT DISTINCT codigo_fabricante FROM producto; /*12 Lista el código de los fabricantes que tienen productos en la tabla producto, eliminando los códigos que aparecen repetidos. */
SELECT NOMBRE FROM FABRICANTE ORDER BY NOMBRE ASC; /*13 Lista los nombres de los fabricantes ordenados de forma ascendente*/
SELECT NOMBRE FROM FABRICANTE ORDER BY NOMBRE DESC; /*14 Lista los nombres de los fabricantes ordenados de forma descendente. */
SELECT nombre, precio FROM producto ORDER BY nombre ASC, precio DESC; /*15 Lista los nombres de los productos ordenados en primer lugar por el nombre de forma ascendente y en segundo lugar por el precio de forma descendente.  */
SELECT * FROM FABRICANTE LIMIT 5; /*16 Devuelve una lista con las 5 primeras filas de la tabla fabricante.*/
SELECT * FROM FABRICANTE LIMIT 3, 2; /*17 Devuelve una lista con 2 filas a partir de la cuarta fila de la tabla fabricante. La cuarta fila también se debe incluir en la respuesta. */
SELECT NOMBRE, PRECIO FROM PRODUCTO ORDER BY PRECIO ASC LIMIT 1; /*18 Lista el nombre y el precio del producto más barato. (Utilice solamente las cláusulas ORDER BY y LIMIT) */
SELECT NOMBRE, PRECIO FROM PRODUCTO ORDER BY PRECIO DESC LIMIT 1; /*19 Lista el nombre y el precio del producto más caro. (Utilice solamente las cláusulas ORDER BY y LIMIT)  */
SELECT * FROM PRODUCTO WHERE CODIGO_FABRICANTE = 2; /*20 Lista el nombre de todos los productos del fabricante cuyo código de fabricante es igual a 2. */
SELECT NOMBRE FROM PRODUCTO WHERE PRECIO <= 120; /*21 Lista el nombre de los productos que tienen un precio menor o igual a 120€.  */
SELECT NOMBRE FROM PRODUCTO WHERE PRECIO >= 400; /*22 Lista el nombre de los productos que tienen un precio mayor o igual a 400€. */
SELECT NOMBRE FROM PRODUCTO WHERE NOT PRECIO >= 400; /*23 Lista el nombre de los productos que no tienen un precio mayor o igual a 400€. */
SELECT * FROM PRODUCTO WHERE PRECIO >=80 AND PRECIO <= 300;/*24 Lista todos los productos que tengan un precio entre 80€ y 300€. Sin utilizar el operador BETWEEN. */
SELECT * FROM PRODUCTO WHERE PRECIO BETWEEN 60 AND 200;/*25 Lista todos los productos que tengan un precio entre 60€ y 200€. Utilizando el operador BETWEEN. */
SELECT * FROM PRODUCTO WHERE PRECIO >200 AND CODIGO_FABRICANTE = 6; /*26 Lista todos los productos que tengan un precio mayor que 200€ y que el código de fabricante sea igual a 6. */
SELECT * FROM PRODUCTO WHERE CODIGO_FABRICANTE = 1 OR CODIGO_FABRICANTE = 3 OR CODIGO_FABRICANTE = 5; /*27 Lista todos los productos donde el código de fabricante sea 1, 3 o 5. Sin utilizar el operador IN. */
SELECT * FROM PRODUCTO WHERE CODIGO_FABRICANTE IN (1, 3, 5); /*28 Lista todos los productos donde el código de fabricante sea 1, 3 o 5. Utilizando el operador IN. */
SELECT NOMBRE, PRECIO * 100 AS CENTIMOS FROM PRODUCTO; /*29 Lista el nombre y el precio de los productos en céntimos (Habrá que multiplicar por 100 el valor del precio). Cree un alias para la columna que contiene el precio que se llame céntimos. */
SELECT NOMBRE FROM FABRICANTE WHERE NOMBRE LIKE 'S%'; /*30 Lista los nombres de los fabricantes cuyo nombre empiece por la letra S. */
SELECT NOMBRE FROM FABRICANTE WHERE NOMBRE LIKE '%E'; /*31 Lista los nombres de los fabricantes cuyo nombre termine por la vocal e. */
SELECT NOMBRE FROM FABRICANTE WHERE NOMBRE LIKE '%W%'; /*32 Lista los nombres de los fabricantes cuyo nombre contenga el carácter w. */
SELECT NOMBRE FROM FABRICANTE WHERE NOMBRE LIKE '____'; /*33 Lista los nombres de los fabricantes cuyo nombre sea de 4 caracteres. */
SELECT NOMBRE FROM PRODUCTO WHERE NOMBRE LIKE '%PORTATIL%'; /*34 Devuelve una lista con el nombre de todos los productos que contienen la cadena Portátil en el nombre. */
SELECT NOMBRE FROM PRODUCTO WHERE NOMBRE LIKE '%MONITOR%' AND PRECIO < 215; /*35 Devuelve una lista con el nombre de todos los productos que contienen la cadena Monitor en el nombre y tienen un precio inferior a 215 €. */
SELECT NOMBRE, PRECIO FROM PRODUCTO WHERE PRECIO >= 180 ORDER BY PRECIO DESC, NOMBRE ASC; /*36 Lista el nombre y el precio de todos los productos que tengan un precio mayor o igual a 180€. Ordene el resultado en primer lugar por el precio (en orden descendente) y en segundo lugar por el nombre (en orden ascendente). */

/*Consultas resumen*/

SELECT COUNT(*) FROM PRODUCTO; /*1 Calcula el número total de productos que hay en la tabla productos. */
SELECT COUNT(*) FROM FABRICANTE; /*2 Calcula el número total de fabricantes que hay en la tabla fabricante. */
SELECT COUNT(DISTINCT CODIGO_FABRICANTE) FROM PRODUCTO; /*3 Calcula el número de valores distintos de código de fabricante aparecen en la tabla productos. */
SELECT AVG(PRECIO) FROM PRODUCTO; /*4 Calcula la media del precio de todos los productos. */
SELECT MIN(PRECIO) FROM PRODUCTO; /*5 Calcula el precio más barato de todos los productos. */
SELECT MAX(PRECIO) FROM PRODUCTO; /*6 Calcula el precio más caro de todos los productos. */
SELECT NOMBRE, PRECIO FROM PRODUCTO ORDER BY PRECIO ASC LIMIT 1; /*7 Lista el nombre y el precio del producto más barato. */
SELECT NOMBRE, PRECIO FROM PRODUCTO ORDER BY PRECIO DESC LIMIT 1; /*8 Lista el nombre y el precio del producto más caro. */
SELECT SUM(PRECIO) FROM PRODUCTO; /*9 Calcula la suma de los precios de todos los productos.*/

SELECT COUNT(PRODUCTO.CODIGO) FROM FABRICANTE 
INNER JOIN PRODUCTO ON FABRICANTE.CODIGO = PRODUCTO.CODIGO_FABRICANTE 
WHERE FABRICANTE.NOMBRE = 'ASUS'; /*10 Calcula el número de productos que tiene el fabricante Asus*/

SELECT AVG(PRODUCTO.PRECIO)
FROM FABRICANTE INNER JOIN PRODUCTO
ON FABRICANTE.CODIGO = PRODUCTO.CODIGO_FABRICANTE
WHERE FABRICANTE.NOMBRE = 'ASUS'; /*11 Calcula la media del precio de todos los productos del fabricante Asus. */

SELECT MIN(PRODUCTO.PRECIO)
FROM FABRICANTE INNER JOIN PRODUCTO
ON FABRICANTE.CODIGO = PRODUCTO.CODIGO_FABRICANTE
WHERE FABRICANTE.NOMBRE = 'ASUS'; /*12 Calcula el precio más barato de todos los productos del fabricante Asus. */

SELECT MAX(PRODUCTO.PRECIO)
FROM FABRICANTE INNER JOIN PRODUCTO
ON FABRICANTE.CODIGO = PRODUCTO.CODIGO_FABRICANTE
WHERE FABRICANTE.NOMBRE = 'ASUS'; /*13 Calcula el precio más caro de todos los productos del fabricante Asus. */

SELECT SUM(PRODUCTO.PRECIO)
FROM FABRICANTE INNER JOIN PRODUCTO
ON FABRICANTE.CODIGO = PRODUCTO.CODIGO_FABRICANTE
WHERE FABRICANTE.NOMBRE = 'ASUS'; /*14 Calcula la suma de todos los productos del fabricante Asus*/

SELECT MAX(PRODUCTO.PRECIO), MIN(PRODUCTO.PRECIO), AVG(PRODUCTO.PRECIO),
COUNT(PRODUCTO.PRECIO) FROM FABRICANTE INNER JOIN PRODUCTO
ON FABRICANTE.CODIGO = PRODUCTO.CODIGO_FABRICANTE
WHERE FABRICANTE.NOMBRE = 'CRUCIAL';/*15 Muestra el precio máximo, precio mínimo, precio medio y el número total de productos que tiene el fabricante Crucial. */

SELECT FABRICANTE.NOMBRE, COUNT(PRODUCTO.CODIGO)  
FROM FABRICANTE LEFT JOIN PRODUCTO 
ON PRODUCTO.CODIGO_FABRICANTE = FABRICANTE.CODIGO
GROUP BY FABRICANTE.CODIGO ORDER BY 2 DESC; /*16 Muestra el número total de productos que tiene cada uno de los fabricantes. El listado también debe incluir los fabricantes que no tienen ningún producto. El resultado mostrará dos columnas, una con el nombre del fabricante y otra con el número de productos que tiene. Ordene el resultado descendentemente por el número de productos. */

SELECT FABRICANTE.NOMBRE, MAX(PRODUCTO.PRECIO), MIN(PRODUCTO.PRECIO), AVG(PRODUCTO.PRECIO)
FROM FABRICANTE INNER JOIN PRODUCTO
ON PRODUCTO.CODIGO_FABRICANTE = FABRICANTE.CODIGO GROUP BY FABRICANTE.CODIGO;/*17 Muestra el precio máximo, precio mínimo y precio medio de los productos de cada uno de los fabricantes. El resultado mostrará el nombre del fabricante junto con los datos que se solicitan. */

SELECT CODIGO_FABRICANTE, MAX(PRECIO), MIN(PRECIO), AVG(PRECIO),
COUNT(*) FROM PRODUCTO GROUP BY CODIGO_FABRICANTE HAVING AVG(PRECIO)>200;/*18 Muestra el precio máximo, precio mínimo, precio medio y el número total de productos de los fabricantes que tienen un precio medio superior a 200€. No es necesario mostrar el nombre del fabricante, con el código del fabricante es suficiente. */

SELECT FABRICANTE.NOMBRE, MAX(PRODUCTO.PRECIO), MIN(PRODUCTO.PRECIO), AVG(PRODUCTO.PRECIO),
COUNT(*) FROM PRODUCTO INNER JOIN FABRICANTE ON PRODUCTO.CODIGO_FABRICANTE = FABRICANTE.CODIGO
GROUP BY FABRICANTE.CODIGO HAVING AVG(PRODUCTO.PRECIO)>200;/*19Muestra el nombre de cada fabricante, junto con el precio máximo, precio mínimo, precio medio y el número total de productos de los fabricantes que tienen un precio medio superior a 200€. Es necesario mostrar el nombre del fabricante.  */

SELECT COUNT(*) FROM PRODUCTO WHERE PRECIO >= 180; /*20 Calcula el número de productos que tienen un precio mayor o igual a 180€. */

SELECT FABRICANTE.NOMBRE, COUNT(*) FROM PRODUCTO INNER JOIN
FABRICANTE ON PRODUCTO.CODIGO_FABRICANTE = FABRICANTE.CODIGO
WHERE PRODUCTO.PRECIO >=180 GROUP BY PRODUCTO.CODIGO_FABRICANTE; /*21 Calcula el número de productos que tiene cada fabricante con un precio mayor o igual a 180€. */

SELECT AVG(PRECIO), CODIGO_FABRICANTE FROM PRODUCTO GROUP BY CODIGO_FABRICANTE;/*22 Lista el precio medio los productos de cada fabricante, mostrando solamente el código del fabricante. */

/****Aqui es igual que al 21 pero con abreviaturas para escribir menos********/
SELECT F.NOMBRE, COUNT(*) FROM PRODUCTO P INNER JOIN
FABRICANTE F ON P.CODIGO_FABRICANTE = F.CODIGO
WHERE P.PRECIO >= 180 GROUP BY P.CODIGO_FABRICANTE;

 
 /*1 Devuelve una lista con el nombre del producto, precio y nombre de fabricante de todos los productos de la base de datos. */
SELECT P.nombre, P.precio, F.nombre FROM producto P,fabricante F WHERE F.codigo = P.codigo_fabricante;

/*2 Devuelve una lista con el nombre del producto, precio y nombre de fabricante de todos los productos de la base de datos.
Ordene el resultado por el nombre del fabricante, por orden alfabético. */
SELECT P.NOMBRE, P.PRECIO, F.NOMBRE FROM PRODUCTO P, FABRICANTE F WHERE F.codigo = P.codigo_fabricante ORDER BY F.nombre ASC;

/*3 Devuelve una lista con el código del producto, nombre del producto, código del fabricante y nombre del fabricante,
de todos los productos de la base de datos. */
SELECT P.CODIGO, P.NOMBRE, F.CODIGO, F.NOMBRE FROM PRODUCTO P, FABRICANTE F WHERE F.CODIGO = P.CODIGO_FABRICANTE;
SELECT P.CODIGO, P.NOMBRE, F.CODIGO, F.NOMBRE FROM PRODUCTO P INNER JOIN FABRICANTE F WHERE F.CODIGO = P.CODIGO_FABRICANTE;

/*4 Devuelve el nombre del producto, su precio y el nombre de su fabricante, del producto más barato. */
SELECT P.NOMBRE, P.PRECIO, F.NOMBRE FROM PRODUCTO P, FABRICANTE F WHERE F.CODIGO = P.CODIGO_FABRICANTE ORDER BY P.PRECIO ASC LIMIT 1;

/*5 Devuelve el nombre del producto, su precio y el nombre de su fabricante, del producto más caro. */
SELECT P.NOMBRE, P.PRECIO, F.NOMBRE FROM PRODUCTO P INNER JOIN FABRICANTE F 
WHERE F.CODIGO = P.CODIGO_FABRICANTE ORDER BY P.PRECIO DESC LIMIT 1;

/*6 Devuelve una lista de todos los productos del fabricante Lenovo. */
SELECT F.NOMBRE, P.NOMBRE FROM PRODUCTO P, FABRICANTE F WHERE F.CODIGO = P.CODIGO_FABRICANTE AND F.NOMBRE='LENOVO' ;

/*7 Devuelve una lista de todos los productos del fabricante Crucial que tengan un precio mayor que 200€. */
SELECT F.NOMBRE, P.NOMBRE, P.PRECIO FROM PRODUCTO P, FABRICANTE F 
WHERE F.CODIGO = P.CODIGO_FABRICANTE LIKE F.NOMBRE = 'CRUCIAL' AND P.PRECIO> 200;

/*8 Devuelve un listado con todos los productos de los fabricantes Asus, Hewlett-Packardy Seagate. Sin utilizar el operador IN. */
SELECT F.NOMBRE, P.NOMBRE FROM PRODUCTO P, FABRICANTE F WHERE F.CODIGO = P.CODIGO_FABRICANTE AND
(F.nombre = 'ASUS' OR F.nombre= 'Hewlett-Packard' OR F.nombre = 'Seagate');

/*9 Devuelve un listado con todos los productos de los fabricantes Asus, Hewlett-Packardy Seagate. Utilizando el operador IN. */
SELECT F.NOMBRE, P.NOMBRE FROM PRODUCTO P INNER JOIN FABRICANTE F WHERE F.NOMBRE IN ('ASUS','Hewlett-Packard','SEAGATE');

/*10 Devuelve un listado con el nombre y el precio de todos los productos de los fabricantes cuyo nombre termine por la vocal e. */
SELECT F.NOMBRE, P.NOMBRE, P.PRECIO FROM PRODUCTO P INNER JOIN FABRICANTE F WHERE F.NOMBRE LIKE '%E';

/*11 Devuelve un listado con el nombre y el precio de todos los productos cuyo nombre de fabricante contenga el carácter w en su nombre. */
SELECT F.NOMBRE, P.NOMBRE, P.PRECIO FROM PRODUCTO P INNER JOIN FABRICANTE F WHERE F.NOMBRE LIKE '%W%';

/*12 Devuelve un listado con el nombre de producto, precio y nombre de fabricante, de todos los productos que tengan un precio mayor o igual a 180€.
Ordene el resultado en primer lugar por el precio (en orden descendente) y en segundo lugar por el nombre (en orden ascendente) */
SELECT P.NOMBRE, P.PRECIO, F.NOMBRE FROM PRODUCTO P INNER JOIN FABRICANTE F 
WHERE P.precio >= 180 AND P.codigo_fabricante = F.codigo ORDER BY P.precio DESC, P.nombre ASC;

/*13 Devuelve un listado con el código y el nombre de fabricante, solamente de aquellos fabricantes que tienen productos asociados en la base de datos */
SELECT distinct F.CODIGO, F.NOMBRE FROM PRODUCTO P INNER JOIN FABRICANTE F WHERE F.CODIGO = P.CODIGO_FABRICANTE;

/*CONSULTAS EXTERNAS */

/*Devuelve un listado de todos los fabricantes que existen en la base de datos, junto con los productos que tiene cada uno de ellos.
El listado deberá mostrar también aquellos fabricantes que no tienen productos asociados. */
SELECT F.NOMBRE, P.NOMBRE FROM FABRICANTE F LEFT JOIN PRODUCTO P ON F.CODIGO = P.CODIGO_FABRICANTE;

/*1 Devuelve un listado donde sólo aparezcan aquellos fabricantes que no tienen ningún producto asociado. */
SELECT fabricante.nombre, producto.nombre FROM fabricante 
LEFT JOIN producto ON fabricante.codigo = producto.codigo_fabricante;
/* CON CLAUSULA WHERE */

/* Devuelve todos los productos del fabricante Lenovo. (Sin utilizar INNER JOIN). */
SELECT F.NOMBRE, P.NOMBRE FROM FABRICANTE F, PRODUCTO P WHERE F.NOMBRE='LENOVO';

/*Devuelve todos los datos de los productos que tienen el mismo precio que el producto más caro del fabricante Lenovo. (Sin utilizar INNER JOIN). */
 
 SELECT fabricante.nombre FROM fabricante LEFT JOIN producto ON fabricante.codigo != producto.codigo_fabricante 
 WHERE NOT fabricante.codigo = ANY ( SELECT producto.codigo_fabricante FROM producto) LIMIT 10,2;
 
 /*2 Devuelve todos los datos de los productos que tienen el mismo precio que el producto más caro del fabricante Lenovo. (Sin utilizar INNER JOIN). */
 SELECT * FROM producto WHERE precio = ( SELECT MAX(precio) FROM producto 
 WHERE producto.codigo_fabricante = ( SELECT codigo FROM fabricante WHERE nombre = 'Lenovo'));
 
 /*3 Lista el nombre del producto más caro del fabricante Lenovo*/
 SELECT producto.nombre FROM fabricante INNER JOIN producto 
 ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Lenovo' 
 AND producto.precio = ( SELECT MAX(precio) FROM fabricante INNER JOIN producto 
 ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Lenovo');
 
 /*4  Lista el nombre del producto más barato del fabricante Hewlett-Packard*/
 SELECT producto.nombre FROM fabricante INNER JOIN producto 
 ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Hewlett-Packard' 
 AND producto.precio = ( SELECT MIN(precio) FROM fabricante INNER JOIN producto 
 ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Hewlett-Packard');

 














/*examen SQL
*/
select name from country order by name; /*1 */
select name, code from country where name like '%a'; /*2 */ 
select name from country where Population > 200000; /*3 */
select sum(population) as "Población de Oceanía" from country where Continent = "Oceania"; /*4 */
select name, max(surfacearea) from country where continent = "Africa"; /*5 */
select count(name) from country where continent = 'Europe';/*6 */
select country.localname from country inner join countrylanguage where code = countrycode and language = "spanish" and isofficial = true; /*7 */
select country.name, city.name from country inner join city on country.capital=city.id order by country.name asc; /*8 */
select country.localname from country inner join countrylanguage where code = countrycode and language not in ("spanish"); /*9 */
select district as 'Distrito', sum(Population) as "Total de población en cada distrito" from city group by district; /*10 *


/**************************************************************************Mas sentencias de otros ejercicios
***************************************************************************************************************/
SELECT NOMBRE FROM tblusuarios; /*1*/
SELECT MAX(SALDO) FROM tblusuarios WHERE SEXO = 'M'; /*2*/
SELECT NOMBRE, TELEFONO FROM tblusuarios WHERE MARCA = 'NOKIA' OR MARCA= 'BLACKBERRY' OR MARCA= 'SONY';
SELECT NOMBRE, TELEFONO FROM tblusuarios WHERE MARCA IN ('NOKIA','BLACKBERRY','SONY'); /*3 Y LA LINES DE ARRIBA ES EXACTAMENTE IGUAL*/
SELECT COUNT(USUARIO) FROM tblusuarios WHERE ACTIVO = 0 OR SALDO = 0; /*4 LA LINES DE ABAJO ES IGUAL*/
SELECT COUNT(USUARIO) AS "USUARIOS SIN SALDO O INACTIVOS" FROM tblusuarios WHERE ACTIVO = 0 OR SALDO = 0; 
SELECT USUARIO AS "USUARIOS DE NIVEL 1, 2 Y 3" FROM tblusuarios WHERE NIVEL = 1 OR NIVEL = 2 OR NIVEL = 3; /*5*/
SELECT TELEFONO FROM tblusuarios WHERE SALDO <= 300; /*6*/
SELECT SUM(SALDO) FROM tblusuarios WHERE COMPAÑIA = "NEXTEL"; /*7*/
SELECT COUNT(USUARIO) FROM tblusuarios WHERE COMPAÑIA = 'MOVISTAR'; /*8*/
SELECT nivel, COUNT(*) FROM tblUsuarios GROUP BY nivel;/*9*/
SELECT USUARIO AS "USUARIOS DE NIVEL 2" FROM tblusuarios WHERE NIVEL = 2;/*10*/
SELECT USUARIO FROM tblusuarios WHERE EMAIL LIKE '%GMAIL%';
SELECT NOMBRE, TELEFONO FROM tblusuarios WHERE MARCA = 'LG' OR MARCA= 'SAMSUNG' OR MARCA= 'MOTOROLA';

/*
otro ejercicio completo
*******************************************************************************************************************
*************************************************************************************************************/



CREATE TABLE EMPLEADOS (
DNI VARCHAR (12),
NOMBRE VARCHAR (30) NOT NULL,
SEXO CHAR(1) NOT NULL,
FECHA_NACIMIENTO DATE NOT NULL,
FECHA_INCORPORACION DATE NOT NULL,
SALDO_EMPLEADO FLOAT NOT NULL,
COMISION_EMPLEADO FLOAT NOT NULL,
CARGO_EMPLEADO VARCHAR (15) NOT NULL,
JEFE_ID VARCHAR (12),
CODIGO_DEPARTAMENTO VARCHAR (4) NOT NULL,
PRIMARY KEY (DNI),
FOREIGN KEY (CODIGO_DEPARTAMENTO) REFERENCES DEPARTAMENTOS (CODIGO_DEPARTAMENTO)
);
ALTER TABLE EMPLEADOS ADD foreign key (JEFE_ID) references EMPLEADOS (DNI);

CREATE TABLE DEPARTAMENTOS (
CODIGO_DEPARTAMENTO VARCHAR (4),
NOMBRE_DEPARTAMENTO VARCHAR (20) NOT NULL, 
CIUDAD VARCHAR (15),
CODIGO_DIRECTOR VARCHAR (12),
PRIMARY KEY (CODIGO_DEPARTAMENTO)
);
INSERT INTO DEPARTAMENTOS VALUES (1001, 'PROGRAMACION','CORDOBA', 00001);
INSERT INTO DEPARTAMENTOS VALUES (1002, 'ROBOTICA','CORDOBA', 00002);
INSERT INTO DEPARTAMENTOS VALUES (1003, 'INGENIERIA','CORDOBA', 00003);
INSERT INTO DEPARTAMENTOS VALUES (1004, 'GESTION','MADRID', 00004);
DROP TABLE EMPLEADOS;

INSERT INTO EMPLEADOS VALUES(123456, 'FRANCISCO', 'V', '1984/06/12', '2022/09/03', 2200, 380.50, 'PROGRAMADOR', 0001, 1001);
INSERT INTO EMPLEADOS VALUES(123455, 'MARIA', 'M', '1994/08/02', '2022/09/03', 2200, 180.50, 'INGENIERA', 0003, 1003);
INSERT INTO EMPLEADOS VALUES(123457, 'ALVARO', 'V', '1993/06/12', '2022/09/03', 2200, 180.50, 'PROGRAMADOR', 0001, 1002);
INSERT INTO EMPLEADOS VALUES(123458, 'LUIS', 'V', '1989/06/12', '2022/09/03', 2200, 180.50, 'PROGRAMADOR', 0001, 1001);
INSERT INTO EMPLEADOS VALUES(123459, 'SANDRA', 'M', '1992/02/02', '2022/09/03', 2200, 280.50, 'ADMINISTRATIVA', 0001, 1004);
INSERT INTO EMPLEADOS VALUES(123450, 'CAROLINA', 'M', '1984/07/07', '2022/09/03', 2200, 180.50, 'INGENIERA', 0003, 1003);
INSERT INTO EMPLEADOS VALUES(123451, 'ANTONIO', 'V', '1994/06/12', '2022/09/03', 2200, 180.50, 'PROGRAMADOR', 0001, 1001);
INSERT INTO EMPLEADOS VALUES(123452, 'IRON MAN', 'V', '1987/06/12', '2022/09/03', 2200, 330.50, 'INGENIERO', 0001, 1003);
INSERT INTO EMPLEADOS VALUES(123453, 'MICKEY', 'V', '1986/06/12', '2022/09/03', 2200, 220.50, 'INGENIERO', 0003, 1003);
INSERT INTO EMPLEADOS VALUES(123454, 'ALICIA', 'M', '1999/09/11', '2022/09/03', 2200, 800.50, 'ADMINISTRATIVA', 0001, 1004);
UPDATE EMPLEADOS SET COMISION_EMPLEADO = 5000 WHERE DNI = 123456;
SELECT * FROM EMPLEADOS;
SELECT * FROM DEPARTAMENTOS;
SELECT * FROM EMPLEADOS WHERE CARGO_EMPLEADO = 'ADMINISTRATIVA';
SELECT NOMBRE, SALDO_EMPLEADO FROM EMPLEADOS;
SELECT * FROM EMPLEADOS WHERE CARGO_EMPLEADO = 'PROGRAMADOR' ORDER BY NOMBRE;
SELECT NOMBRE_DEPARTAMENTO FROM DEPARTAMENTOS;
SELECT NOMBRE, CARGO_EMPLEADO FROM EMPLEADOS ORDER BY SALDO_EMPLEADO;
SELECT SALDO_EMPLEADO, COMISION_EMPLEADO FROM EMPLEADOS WHERE CARGO_EMPLEADO = 'PROGRAMADOR' ORDER BY COMISION_EMPLEADO;
SELECT COMISION_EMPLEADO FROM EMPLEADOS; 
SELECT NOMBRE FROM EMPLEADOS WHERE NOMBRE NOT LIKE '%MA%'; /*15*/
SELECT * FROM EMPLEADOS WHERE COMISION_EMPLEADO > SALDO_EMPLEADO; /*11*/
SELECT * FROM EMPLEADOS WHERE COMISION_EMPLEADO > SALDO_EMPLEADO; 
SELECT (SALDO_EMPLEADO+500000) FROM EMPLEADOS WHERE CODIGO_DEPARTAMENTO = 1001; /*10*/
select nombre, max(SALDO_EMPLEADO) as 'Salario mayor' from empleados;
select NOMBRE_DEPARTAMENTO from DEPARTAMENTEOS where lower(NOMBRE_DEPARTAMENTO) not in ('ROBOTICA', 'PROGRAMACION');
select NOMBRE, SALDO_EMPLEADO, COMISION_EMPLEADO from EMPLEADOS where SALDO_EMPLEADO between (COMISION_EMPLEADO/2) and COMISION_EMPLEADO;
select CODIGO_DEPARTAMENTO, avg(SALDO_EMPLEADO) from empleados group by CODIGO_DEPARTAMENTO;
select max(SALDO_EMPLEADO) as 'Salario mayor', min(SALDO_EMPLEADO) as 'Salario menor', max(SALDO_EMPLEADO) - min(SALDO_EMPLEADO) as 'Diferencia' from empleados;
select max(NOMBRE) as 'Mayor alfabeticamente' from empleados;


/******************************************************************************************************
Otro ejercicio
*/


CREATE DATABASE BANCO;
USE BANCO;
CREATE TABLE CLIENTES (
DNI CHAR (6),
NOMBRE CHAR (15) NOT NULL,
PRIMARY KEY (DNI)
);
CREATE TABLE CUENTAS (
NUMERO INT,
SALDO FLOAT NOT NULL,
CLIENTE CHAR (6) NOT NULL,
PRIMARY KEY (NUMERO),
FOREIGN KEY (CLIENTE) REFERENCES CLIENTES (DNI)
);
CREATE TABLE PRESTAMOS (
ID INT,
PRINCIPAL INT NOT NULL,
PLAZO_EN_MESES INT NOT NULL,
CLIENTE CHAR (6) NOT NULL,
FECHA_COMIENZO DATE NOT NULL,
PRIMARY KEY (ID),
FOREIGN KEY (CLIENTE) REFERENCES CLIENTES (DNI)
);

INSERT INTO CLIENTES VALUES (123456, 'Luis');
INSERT INTO CLIENTES VALUES (123457, 'Carlos');
INSERT INTO CLIENTES VALUES (123458, 'Antonio');
INSERT INTO CLIENTES VALUES (123459, 'Fran');

SELECT * FROM CLIENTES;
INSERT INTO CUENTAS VALUES (001, 10000, 123456);
INSERT INTO CUENTAS VALUES (002, 20000, 123457);
INSERT INTO CUENTAS VALUES (003, 30000, 123458);
INSERT INTO CUENTAS VALUES (004, 10000, 123459);
INSERT INTO CUENTAS VALUES (005, 15000, 123456);
INSERT INTO PRESTAMOS VALUES (101, 15000, 10, 123456, '2022/06/06');
select nombre from clientes where dni = 123458;
SELECT * FROM prestamos;
insert into clientes values (123457, 'PACO'), (123458, 'HELEN');
select dni from clientes;
drop database banco;
INSERT INTO PRESTAMOS VALUES (101, 1000, 12, 123456, '2022/06/06'), (102, 2000, 10, 123457, '2022/05/07' ),
(103, 5000, 10, 123458, '2021/05/07' ), (104, 6000, 9, 123459, '2021/05/07' ), (105, 10000, 24, 123456, '2021/05/07' );
SELECT CLIENTE FROM CUENTAS WHERE SALDO > 10000;
INSERT INTO CUENTAS VALUES (6, 30000, 123456);
SELECT CLIENTE FROM CUENTAS WHERE SALDO > 11000 AND SALDO < 40000;
SELECT CLIENTE FROM CUENTAS WHERE SALDO BETWEEN 11000 AND 40000;
SELECT DNI FROM CLIENTES WHERE NOMBRE LIKE "FRAN";
SELECT DNI FROM CLIENTES WHERE NOMBRE NOT LIKE "FRAN";
INSERT INTO CLIENTES VALUES (123450, 'Ángel'); 
SELECT DNI FROM CLIENTES WHERE NOMBRE LIKE 'AN%';
SELECT (SALDO * 1.25) AS SALDO_INCREMENTO FROM CUENTAS WHERE SALDO > 20000;
SELECT  FECHA_COMIENZO AS 'Fecha Comiendo Mierda' FROM PRESTAMOS;
SELECT DNI FROM CLIENTES WHERE NOMBRE ='LUIS' OR NOMBRE = 'CARLOS';
SELECT DNI FROM CLIENTES WHERE NOMBRE IN ('LUIS','CARLOS','ANTONIO');
SELECT DNI FROM CLIENTES WHERE NOMBRE NOT IN ('LUIS','CARLOS','ANTONIO');
UPDATE CLIENTES SET NOMBRE = 'FRANCISCO' WHERE NOMBRE = 'FRAN';
DELETE FROM CLIENTES WHERE DNI = 12356;
SELECT DISTINCT CLIENTE FROM CUENTAS WHERE SALDO < 19000; /*PARA NO REPETIR CUENTAS QUE TIENES ESE MINIMO DE DINERO*/

select cliente, count(saldo) from cuentas group by cliente having count(saldo) > 1;
select cliente, max(saldo) from cuentas group by cliente;
select cliente, max(saldo) from cuentas group by cliente having max(saldo) > 19000;

select clientes.nombre, max(cuentas.saldo) from clientes inner join cuentas on 
clientes.dni = cuentas.cliente group by cuentas.cliente;


/*Otro ejercicio*/
SELECT * FROM CLIENTE WHERE ID_CLIENTE = 1 ;
ALTER TABLE CLIENTE MODIFY FECHA_REG TIMESTAMP DEFAULT LOCALTIME;
DESC PRODUCTOS;
ALTER TABLE PRODUCTOS MODIFY FECHA_VENTA TIMESTAMP DEFAULT LOCALTIME;
ALTER TABLE PRODUCTOS MODIFY DESCRIPCION VARCHAR (100) NOT NULL UNIQUE;
ALTER TABLE PRODUCTOS CHANGE FECHA_VENTA FECHA_REG TIMESTAMP DEFAULT LOCALTIME;
INSERT INTO PRODUCTOS VALUES ('p002' , 'lavadora2 10kg' , 1500 , 50 , '2015/02/05' );
ALTER TABLE PRODUCTOS DROP ESTADO;
SELECT * FROM productos;
ALTER TABLE CLIENTE ADD PRIMARY KEY (ID_CLIENTE);






SELECT NOMBRE FROM tblusuarios; /*1*/
SELECT MAX(SALDO) FROM tblusuarios WHERE SEXO = 'M'; /*2*/
SELECT NOMBRE, TELEFONO FROM tblusuarios WHERE MARCA = 'NOKIA' OR MARCA= 'BLACKBERRY' OR MARCA= 'SONY';
SELECT NOMBRE, TELEFONO FROM tblusuarios WHERE MARCA IN ('NOKIA','BLACKBERRY','SONY'); /*3 Y LA LINES DE ARRIBA ES EXACTAMENTE IGUAL*/
SELECT COUNT(USUARIO) FROM tblusuarios WHERE ACTIVO = 0 OR SALDO = 0; /*4 LA LINES DE ABAJO ES IGUAL*/
SELECT COUNT(USUARIO) AS "USUARIOS SIN SALDO O INACTIVOS" FROM tblusuarios WHERE ACTIVO = 0 OR SALDO = 0; 
SELECT USUARIO AS "USUARIOS DE NIVEL 1, 2 Y 3" FROM tblusuarios WHERE NIVEL = 1 OR NIVEL = 2 OR NIVEL = 3; /*5*/
SELECT TELEFONO FROM tblusuarios WHERE SALDO <= 300; /*6*/
SELECT SUM(SALDO) FROM tblusuarios WHERE COMPAÑIA = "NEXTEL"; /*7*/
SELECT COUNT(USUARIO) FROM tblusuarios WHERE COMPAÑIA = 'MOVISTAR'; /*8*/
SELECT nivel, COUNT(*) FROM tblUsuarios GROUP BY nivel;/*9*/
SELECT USUARIO AS "USUARIOS DE NIVEL 2" FROM tblusuarios WHERE NIVEL = 2;/*10*/
SELECT USUARIO FROM tblusuarios WHERE EMAIL LIKE '%GMAIL%';
SELECT NOMBRE, TELEFONO FROM tblusuarios WHERE MARCA = 'LG' OR MARCA= 'SAMSUNG' OR MARCA= 'MOTOROLA';
select usuario, telefono from tblusuarios where compañia = 'iusacell';
select avg(saldo) from tblusuarios where marca = 'nokia';
select usuario, telefono from tblusuarios where compañia = 'iusacell' or compañia = 'axel';
select email from tblusuarios where email not like '%yahoo.com';
SELECT DISTINCT marca FROM tblUsuarios ORDER BY marca DESC;
SELECT DISTINCT compañia FROM tblUsuarios ORDER BY RAND();
SELECT usuario FROM tblUsuarios WHERE nivel IN(0, 2);
SELECT AVG(saldo) FROM tblUsuarios WHERE marca = 'LG';
SELECT usuario FROM tblUsuarios WHERE nivel IN(1, 3);
SELECT nombre, telefono FROM tblUsuarios WHERE marca <> "BLACKBERRY";
SELECT usuario FROM tblUsuarios WHERE nivel = 3;
SELECT usuario FROM tblUsuarios WHERE nivel = 0;
SELECT sexo, COUNT(*) FROM tblUsuarios GROUP BY sexo;
SELECT usuario, telefono FROM tblUsuarios WHERE compañia = "AT&T";
SELECT usuario FROM tblUsuarios WHERE NOT activo;
SELECT MIN(saldo) FROM tblUsuarios WHERE sexo = 'H';
SELECT telefono FROM tblUsuarios WHERE saldo > 300;
SELECT marca, COUNT(*) FROM tblUsuarios GROUP BY marca;
SELECT nombre, telefono FROM tblUsuarios WHERE marca <> "LG";
SELECT DISTINCT compañia FROM tblUsuarios ORDER BY compañia ASC;
SELECT SUM(saldo) FROM tblUsuarios WHERE compañia = 'UNEFON';
SELECT email FROM tblUsuarios WHERE email LIKE "%hotmail.com";
SELECT nombre FROM tblUsuarios WHERE NOT activo OR saldo <= 0;






















/*1*/
select * from empleados where cargoE = 'Secretaria';
/*2*/
select * from empleados where cargoE = 'Vendedor' order by nomEmp asc;
/*3*/
select nombreDPto from departamentos;
/*4*/
select nomEmp, salEmp, comisionE from empleados where comisionE <= (salEmp * 0.3);
/*5*/
select nomEmp from empleados where nomEmp not like '%Ma%';
/*6*/
select nombreDpto from departamentos where nombreDpto not in ('VENTAS', 'INVESTIGACIÓN', 'MANTENIMIENTO');
/*7*/
select empleados.nomEmp, departamentos.nombreDpto, empleados.salEmp from empleados, departamentos
where empleados.codDepto=departamentos.codDepto and empleados.nomEmp like 'M%' and (empleados.salEmp > 800000 or empleados.comisionE > 0)
and departamentos.nombreDpto = 'VENTAS';
/*8*/
select codDepto, sexEmp, count(*) from empleados group by codDepto, sexEmp;
/*9*/
select codDepto, avg(salemp) from empleados group by codDepto;
/*10*/
select nomEmp, nDIEmp, salEmp from empleados where salEmp >= (select avg(salEmp) from empleados);

