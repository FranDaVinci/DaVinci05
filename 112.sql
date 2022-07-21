
1.1.3 Consultas sobre una tabla
1.
 
Lista el nombre de todos los productos que hay en la tabla
producto
.
SELECT nombre FROM productos
2.
 
Lista los nombres y los precios de todos los productos de la tabla
producto
.
SELECT nombre, precios FROM productos
3.
 
Lista todas las columnas de la tabla
producto
.
SELECT * FROM producto
4.
 
Lista el nombre de los productos, el precio en euros y el precio en dólares estadounidenses (USD).
SELECT nombre,
 
precio euros, precio*1.2 dolares FROM producto
 
  5.
 
Lista el nombre de los productos, el precio en euros y el precio en dólares estadounidenses (USD). Utiliza los siguientes alias para las columnas:
nombre de producto,euros,dólares.
SELECT nombre AS 'nombre de producto', precio AS euros, precio * 1.17 AS dólares FROM producto
6.
 
Lista los nombres y los precios de todos los productos de la tabla
producto, convirtiendo los nombres a mayúscula.
SELECT UPPER(Nombre),precio as DESCRIPCION FROM productos
7.
 
Lista los nombres y los precios de todos los productos de la tabla
producto
, convirtiendo los nombres a minúscula.
SELECT LOWER(nombre), precio FROM producto;
8.
 
Lista el nombre de todos los fabricantes en una columna, y en otra columna obtenga en mayúsculas los dos primeros caracteres del nombre del fabricante.
SELECT nombre, UPPER(SUBSTR(nombre,1,2)) FROM fabricantes;
9.
 
Lista los nombres y los precios de todos los productos de la tabla
producto
, redondeando el valor del precio.
SELECT nombre, ROUND (precio) FROM product;
10.
 
Lista los nombres y los precios de todos los productos de la tabla
producto
, truncando el valor del precio para mostrarlo sin ninguna cifra decimal.
SELECT nombre ,CONVERT(int,precio)FROM producto;
11.
 
Lista el código de los fabricantes que tienen productos en la tabla
producto
.
SELECT código_fabricante FROM producto;
12.
 
Lista el código de los fabricantes que tienen productos en la tabla
producto
, eliminando los códigos que aparecen repetidos.
  SELECT DISTINCT Código_fabricante FROM fabricante
13.
 
Lista los nombres de los fabricantes ordenados de forma ascendente.
SELECT nombre FROM fabricante ORDER BY nombre ASC
14.
 
Lista los nombres de los fabricantes ordenados de forma descendente.
SELECT nombre FROM fabricante ORDER BY nombre DESC
15.
 
Lista los nombres de los productos ordenados en primer lugar por el nombre de forma ascendente y en segundo lugar por el precio de forma descendente.
SELECT nombre, precio FROM producto ORDER BY nombre ASC , precio DESC;
16.
 
Devuelve una lista con las 5 primeras filas de la tabla
fabricante
.
SELECT * FROM fabricante LIMIT 5;
17.
 
Devuelve una lista con 2 filas a partir de la cuarta fila de la tabla
fabricante
. La cuarta fila también se debe incluir en la respuesta.
SELECT * FROM fabricante LIMIT 3,2;
18.
 
Lista el nombre y el precio del producto más barato. (Utilice solamente las cláusulas
ORDER BY
 y
LIMIT
)
SELECT nombre, precio FROM producto ORDER BY PRECIO DESC LIMIR 1;
19.
 
Lista el nombre y el precio del producto más caro. (Utilice solamente las cláusulas ORDER BY y LIMIT)
SELECT nombre, precio FROM Producto ORDER BY Precio [asc] Limit 1;
20.
 
Lista el nombre de todos los productos del fabricante cuyo código de fabricante es igual a 2.
SELECT nombre FROM fabricante WHERE codigo = 2
  21.
 
Lista el nombre de los productos que tienen un precio m
enor o igual a 120€.
 
SELECT nombre FROM producto WHERE precio<=120
22.
 
Lista el nombre de los productos que tienen un precio mayor o igual a 400€.
 
SELECT nombre FROM producto WHERE precio >= 400
23.
 
Lista el nombre de los productos que
no tienen
 un precio
mayor o igual a 400€.
 
SELECT nombre FROM producto WHERE NOT precio
>=400
 
24.
 
Lista todos los productos que tengan un precio entre 80€ y 300€.
Sin utilizar el operador
BETWEEN
.
SELECT * FROM producto WHERE precio>=80 AND precio<=300;
25.
 
Lista todos los productos que tengan un precio entre 60€ y 200€.
Utilizando el operador
BETWEEN
.
SELECT * FROM producto WHERE precio BETWEEN (60, 200)
26.
 
Lista todos los productos que tengan un precio mayor que 200€ y que el código
de fabricante sea igual a 6.
SELECT * FROM producto WHERE precio>200 AND codigo=6;
27.
 
Lista todos los productos donde el código de fabricante sea 1, 3 o 5. Sin utilizar el operador
IN
.
SELECT * FROM producto WHERE codigo=1 OR codigo=3 OR codigo=5
28.
 
Lista todos los productos donde el código de fabricante sea 1, 3 o 5. Utilizando el operador
IN
.
SELECT * FROM product WHERE codigo in(1,3,5);
  29.
 
Lista el nombre y el precio de los productos en céntimos (Habrá que multiplicar por 100 el valor del precio). Cree un alias para la columna que contiene el precio que se llame
céntimos
.
SELECT nombre,precio*100 AS céntimos FROM producto
30.
 
Lista los nombres de los fabricantes cuyo nombre empiece por la letra
S
.
SELECT nombre FROM fabricante WHERE LIKE‘
s%
’
 
31.
 
Lista los nombres de los fabricantes cuyo nombre termine por la vocal
e
.
SELECT nombre FROM fabricante WHERE LIKE‘
%e
’
 
32.
 
Lista los nombres de los fabricantes cuyo nombre contenga el carácter
w
.
SELECT nombre FROM fabricante WHERE LIKE
‘
%w%
’
 
33.
 
Lista los nombres de los fabricantes cuyo nombre sea de 4 caracteres.
SELECT nombre FROM fabricante WHERE LIKE‘_ _ _ _’
 
34.
 
Devuelve una lista con el nombre de todos los productos que contienen la cadena
Portátil
 en el nombre.
SELECT nombre FROM producto WHERE
nombre LIKE ‘%Portatil%’
 
35.
 
Devuelve una lista con el nombre de todos los productos que contienen la cadena
Monitor
 
en el nombre y tienen un precio inferior a 215 €.
 
SELECT nombre FROM producto W
HERE nombre Like ‘%Monitor%’ AND
 precio<215
36.
 
Lista el nombre y el precio de todos los productos que tengan un precio mayor o
igual a 180€. Ordene el resultado en primer lugar por el precio (en orden
descendente) y en segundo lugar por el nombre (en orden ascendente).
  SELECT nombre, precio FROM productos WHERE Precio >= 180 ORDER BY precio DESC, nombre ASC
1.1.4 Consultas multitabla (Composición interna)
Resuelva todas las consultas utilizando la sintaxis de
SQL1
 y
SQL2
. 1.
 
Devuelve una lista con el nombre del producto, precio y nombre de fabricante de todos los productos de la base de datos.
SELECT nombre,precio, fabricante.nombre FROM producto,fabricante WHERE fabricante.codigo= producto.codigo_fabricante;
2.
 
Devuelve una lista con el nombre del producto, precio y nombre de fabricante de todos los productos de la base de datos. Ordene el resultado por el nombre del fabricante, por orden alfabético.
SELECT nombre, precio, fabricante.nombre FROM producto,fabricante WHERE fabricante.codigo= producto.codigo_fabricante ORDER BY fabricante.nombre ASC;
3.
 
Devuelve una lista con el código del producto, nombre del producto, código del fabricante y nombre del fabricante, de todos los productos de la base de datos.
SELECT código, nombre , fabricante.codigo , fabricante.nombre FROM producto,fabricante WHERE fabricante.codigo= producto.codigo_fabricante
4.
 
Devuelve el nombre del producto, su precio y el nombre de su fabricante, del producto más barato.
Select product.nombre, product.precio, fabricante.nombre From Producto ORDER BY produc.precio [des]
Scribd
En la que confían más de 1 millón de miembros

Prueba Scribd GRATIS durante 30 días para acceder a más de 125 millones de títulos sin anuncios ni interrupciones.
Comenzar prueba gratis

Puede cancelar en cualquier momento.
  5.
 
Devuelve el nombre del producto, su precio y el nombre de su fabricante, del producto más caro.
SELECT producto.nombre, precio, fabricante.nombre FROM producto INNER JOIN fabricante WHERE precio =(SELECT MAX(precio) FROM producto);
6.
 
Devuelve una lista de todos los productos del fabricante Lenovo.
SELECT* FROM fabricante, producto WHERE fabricante.nombre = '%Lenovo%' AND producto.codigo_fabricante = fabricante.codigo
7.
 
Devuelve una lista de todos los productos del fabricante Crucial que tengan un precio mayor q
ue 200€.
 
SELECT * FROM producto, fabricante ON fabricante.codigo=producto.codigo_fabricante WHERE fabricante.nombre='%Crucial%' AND producto.precio>200
8.
 
Devuelve un listado con todos los productos de los fabricantes Asus, Hewlett-Packardy Seagate. Sin utilizar el operador IN.
SELECT * FROM producto, fabricante WHERE producto.codigo_fabricante = fabricante.codigo AND (fabricante.nombre = ASUS OR fabricante.nombre = Hewlett-Packard OR fabricante.nombre = Seagate);
9.
 
Devuelve un listado con todos los productos de los fabricantes Asus, Hewlett-Packardy Seagate. Utilizando el operador IN.
SELECT * From fabricante WHERE nombre IN (Asus, Hewlett-Packardy, Seagate);
10.
 
Devuelve un listado con el nombre y el precio de todos los productos de los fabricantes cuyo nombre termine por la vocal e.
SELECT producto.nombre, producto.precio , FROM producto INNER JOIN fabricante ON fabricante.codigo= producto.codigo_fabricante WHERE fabricante.nombre LIKE(
‘%
e
’
)
   11.
 
Devuelve un listado con el nombre y el precio de todos los productos cuyo nombre de fabricante contenga el carácter w en su nombre.
SELECT nombre, precio ,fabricante.nombre INNER JOIN producto, fabricante ON fabricante.codigo= producto.codigo_fabricante WHERE fabricante.nombre LIKE (
‘%w%’
)
12.
 
Devuelve un listado con el nombre de producto, precio y nombre de fabricante,
de todos los productos que tengan un precio mayor o igual a 180€.
Ordene el resultado en primer lugar por el precio (en orden descendente) y en segundo lugar por el nombre (en orden ascendente)
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto, fabricante WHERE producto.precio >= 180 AND producto.codigo_fabricante = fabricante.codigo ORDER BY producto.precio DESC, producto.nombre ASC
13.
 
Devuelve un listado con el código y el nombre de fabricante, solamente de aquellos fabricantes que tienen productos asociados en la base de datos.
SELECT fabricante.codigo, fabricante.nombre FROM fabricante INNER JOIN producto ON producto.codigo_fabricante = fabricante.codigo;
1.1.5 Consultas multitabla (Composición externa)
Resuelva todas las consultas utilizando las cláusulas
LEFT JOIN
 y
RIGHT JOIN
. 1.
 
Devuelve un listado de
todos los fabricantes
 que existen en la base de datos,  junto con los productos que tiene cada uno de ellos. El listado deberá mostrar también aquellos fabricantes que no tienen productos asociados.
SELECT fabricante.codigo, fabricante.nombre, producto.nombre FROM fabricante LEFT JOIN producto ON fabricante.codigo = producto.codigo_fabricante 
  2.
 
Devuelve un listado donde sólo aparezcan aquellos fabricantes que no tienen ningún producto asociado.
SELECT fabricante.nombre FROM fabricante LEFT JOIN producto ON fabricante.codigo != producto.codigo_fabricante WHERE NOT fabricante.codigo = ANY ( SELECT producto.codigo_fabricante FROM producto) LIMIT 10,2 
3.
 
¿Pueden existir productos que no estén relacionados con un fabricante? Justifique su respuesta.
No pueden existir ya que la relación en el modelo relacional es de 1 a muchos. Esto significa que un producto puede ser creado por un mínimo de 1 fabricante. 
1.1.6 Consultas resumen
1.
 
Calcula el número total de productos que hay en la tabla
productos
.
SELECT COUNT(*). FROM producto.
2.
 
Calcula el número total de fabricantes que hay en la tabla
fabricante
.
SELECT COUNT(*). FROM fabricante.
3.
 
Calcula el número de valores distintos de código de fabricante aparecen en la tabla
productos
.
SELECT count(distinct código_de_fabricante) FROM productos
4.
 
Calcula la media del precio de todos los productos.
SELECT AVG(precio) FROM producto
5.
 
Calcula el precio más barato de todos los productos.
SELECT MIN(precio) FROM producto 
6.
 
Calcula el precio más caro de todos los productos.
SELECT MAX(precio) FROM producto 
  7.
 
Lista el nombre y el precio del producto más barato.
SELECT nombre, precio FROM producto ORDER BY precio ASC LIMIT 1 
8.
 
Lista el nombre y el precio del producto más caro.
SELECT nombre, precio FROM producto ORDER BY precio DESC LIMIT 1 
9.
 
Calcula la suma de los precios de todos los productos.
SELECT SUM(precio) FROM producto 
10.
 
Calcula el número de productos que tiene el fabricante
Asus
.
SELECT COUNT(producto.codigo) FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Asus' 
11.
 
Calcula la media del precio de todos los productos del fabricante
Asus
.
SELECT AVG(producto.precio) FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Asus' 
12.
 
Calcula el precio más barato de todos los productos del fabricante
Asus
.
SELECT MIN(producto.precio) FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Asus' 
13.
 
Calcula el precio más caro de todos los productos del fabricante
Asus
.
SELECT MAX(producto.precio) FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Asus' 
14.
 
Calcula la suma de todos los productos del fabricante
Asus
.
SELECT SUM(producto.precio) FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Asus' 
  15.
 
Muestra el precio máximo, precio mínimo, precio medio y el número total de productos que tiene el fabricante
Crucial
.
SELECT MAX(producto.precio), MIN(producto.precio), AVG(producto.precio), COUNT(producto.codigo) FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Crucial' 
16.
 
Muestra el número total de productos que tiene cada uno de los fabricantes. El listado también debe incluir los fabricantes que no tienen ningún producto. El resultado mostrará dos columnas, una con el nombre del fabricante y otra con el número de productos que tiene. Ordene el resultado descendentemente por el número de productos.
SELECT fabricante.nombre, COUNT(producto.codigo) FROM fabricante LEFT JOIN producto ON producto.codigo_fabricante = fabricante.codigo GROUP BY fabricante.codigo ORDER BY 2 DESC 
17.
 
Muestra el precio máximo, precio mínimo y precio medio de los productos de cada uno de los fabricantes. El resultado mostrará el nombre del fabricante junto con los datos que se solicitan.
SELECT fabricante.nombre, MAX(producto.precio), MIN(producto.precio), AVG(producto.precio) FROM fabricante, producto WHERE producto.codigo_fabricante = fabricante.codigo GROUP BY fabricante.codigo 
18.
 
Muestra el precio máximo, precio mínimo, precio medio y el número total de
productos de los fabricantes que tienen un precio medio superior a 200€. No es
necesario mostrar el nombre del fabricante, con el código del fabricante es suficiente.
SELECT codigo_fabricante, MAX(precio), MIN(precio), AVG(precio), COUNT(*) FROM producto GROUP BY codigo_fabricante HAVING AVG(precio) > 200 
19.
 
Muestra el nombre de cada fabricante, junto con el precio máximo, precio mínimo, precio medio y el número total de productos de los fabricantes que
tienen un precio medio superior a 200€.
Es necesario mostrar el nombre del fabricante.
  SELECT fabricante.nombre, MAX(producto.precio), MIN(producto.precio), AVG(producto.precio), COUNT(*) FROM product,fabricante WHERE producto.codigo_fabricante = fabricante.codigo AND AVG(producto.precio) > 200GROUP BY fabricante.codigo
20.
 
Calcula el número de productos que tienen un precio mayor o igual a 180€.
 
SELECT COUNT(*) FROM producto WHERE precio >= 180 
21.
 
Calcula el número de productos que tiene cada fabricante con un precio mayor o
igual a 180€.
 
SELECT fabricante.nombre, COUNT(*) FROM producto INNER JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE producto.precio >= 180 GROUP BY producto.codigo_fabricante 
22.
 
Lista el precio medio los productos de cada fabricante, mostrando solamente el código del fabricante.
SELECT AVG(precio), codigo_fabricante FROM producto GROUP BY codigo_fabricante
 23.
 
Lista el precio medio los productos de cada fabricante, mostrando solamente el nombre del fabricante.
SELECT AVG(precio), fabricante.nombre FROM producto,fabricante WHERE producto.codigo_fabricante = fabricante.codigo GROUP BY fabricante.nombre 
24.
 
Lista los nombres de los fabricantes cuyos productos tienen un precio medio
mayor o igual a 150€.
 
SELECT AVG(precio), fabricante.nombre FROM producto,fabricante WHERE producto.codigo_fabricante = fabricante.codigo AND AVG(precio) >= 150GROUP BY fabricante.nombre
25.
 
Devuelve un listado con los nombres de los fabricantes que tienen 2 o más productos.
SELECT fabricante.nombre, COUNT(producto.codigo) FROM fabricante, producto WHERE fabricante.codigo = producto.codigo_fabricante AND COUNT(producto.codigo) >= 2 GROUP BY fabricante.codigo
  26.
 
Devuelve un listado con los nombres de los fabricantes y el número de productos
que tiene cada uno con un precio superior o igual a 220 €. No
es necesario mostrar el nombre de los fabricantes que no tienen productos que cumplan la condición. Ejemplo del resultado esperado:
nombre total
Lenovo 2 Asus 1 Crucial 1
SELECT fabricante.nombre, COUNT(producto.codigo) FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE producto.precio >= 220 GROUP BY fabricante.codigo ORDER BY 2 DESC 
27.
 
Devuelve un listado con los nombres de los fabricantes y el número de productos que tiene cada uno con un precio
superior o igual a 220 €. El listado debe
mostrar el nombre de todos los fabricantes, es decir, si hay algún fabricante que
no tiene productos con un precio superior o igual a 220€ deberá aparecer en el
listado con un valor igual a 0 en el número de productos. Ejemplo del resultado esperado:
nombre total
Lenovo 2 Crucial 1
  nombre total
Asus 1 Huawei 0 Samsung 0 Gigabyte 0 Hewlett-Packard 0 Xiaomi 0 Seagate 0
(SELECT fabricante.nombre, COUNT(producto.codigo) FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE producto.precio >= 220 GROUP BY fabricante.codigo) UNION (SELECT fabricante.nombre, 0 FROM fabricante WHERE fabricante.codigo NOT IN ( SELECT fabricante.codigo FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE producto.precio >= 220 GROUP BY fabricante.codigo)) ORDER BY 2 DESC 
28.
 
Devuelve un listado con los nombres de los fabricantes donde la suma del precio
de todos sus productos es superior a 1000 €.
 
SELECT fabricante.nombre, SUM(producto.precio) FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante GROUP BY fabricante.codigo HAVING SUM(producto.precio) > 1000 
29.
 
Devuelve un listado con el nombre del producto más caro que tiene cada fabricante. El resultado debe tener tres columnas: nombre del producto, precio y
  nombre del fabricante. El resultado tiene que estar ordenado alfabéticamente de menor a mayor por el nombre del fabricante.
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto INNER JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE producto.precio = ( SELECT MAX(precio) FROM producto WHERE codigo_fabricante = fabricante.codigo ) ORDER BY fabricante.nombre ASC 
1.1.7 Subconsultas (En la cláusula
WHERE
)
1.1.7.1 Con operadores básicos de comparación
1.
 
Devuelve todos los productos del fabricante
Lenovo
. (Sin utilizar
INNER JOIN
).
SELECT * FROM producto WHERE codigo_fabricante = ( SELECT codigo FROM fabricante WHERE nombre = 'Lenovo') 
2.
 
Devuelve todos los datos de los productos que tienen el mismo precio que el producto más caro del fabricante
Lenovo
. (Sin utilizar
INNER JOIN
).
SELECT * FROM producto WHERE precio = ( SELECT MAX(precio) FROM producto WHERE producto.codigo_fabricante = ( SELECT codigo FROM fabricante WHERE nombre = 'Lenovo')) 
3.
 
Lista el nombre del producto más caro del fabricante
Lenovo
.
SELECT producto.nombre FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Lenovo' AND producto.precio = ( SELECT MAX(precio) FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Lenovo') 
4.
 
Lista el nombre del producto más barato del fabricante
Hewlett-Packard
.
SELECT producto.nombre FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Hewlett-Packard' AND producto.precio = ( SELECT MIN(precio) FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Hewlett-Packard') 
  5.
 
Devuelve todos los productos de la base de datos que tienen un precio mayor o igual al producto más caro del fabricante
Lenovo
.
SELECT * FROM producto WHERE precio >= ( SELECT MAX(precio) FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Lenovo') 
6.
 
Lista todos los productos del fabricante
Asus
 que tienen un precio superior al precio medio de todos sus productos.
SELECT * FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Asus' AND producto.precio > ( SELECT AVG(precio) 1.1.7.2 Subconsultas con
ALL
 y
ANY
 
8.
 
Devuelve el producto más caro que existe en la tabla
producto
 sin hacer uso de
MAX
,
ORDER BY
 ni
LIMIT
.
SELECT * FROM producto WHERE precio >= ALL ( SELECT precio FROM producto) 
9.
 
Devuelve el producto más barato que existe en la tabla
producto
 sin hacer uso de
MIN
,
ORDER BY
 ni
LIMIT
.
SELECT * FROM producto WHERE precio <= ALL ( SELECT precio FROM producto) 
10.
 
Devuelve los nombres de los fabricantes que tienen productos asociados. (Utilizando
ALL
 o
ANY
).
SELECT nombre FROM fabricante WHERE codigo = ANY ( SELECT codigo_fabricante FROM producto) 
11.
 
Devuelve los nombres de los fabricantes que no tienen productos asociados. (Utilizando
ALL
 o
ANY
).
SELECT nombre FROM fabricante WHERE codigo != ALL ( SELECT codigo_fabricante FROM producto) 1.1.7.3 Subconsultas con
IN
 y
NOT IN
 
Scribd
En la que confían más de 1 millón de miembros

Prueba Scribd GRATIS durante 30 días para acceder a más de 125 millones de títulos sin anuncios ni interrupciones.
Comenzar prueba gratis

Puede cancelar en cualquier momento.
  12.
 
Devuelve los nombres de los fabricantes que tienen productos asociados. (Utilizando
IN
 o
NOT IN
).
SELECT nombre FROM fabricante WHERE codigo IN (SELECT codigo_fabricante FROM producto) 
13.
 
Devuelve los nombres de los fabricantes que no tienen productos asociados. (Utilizando
IN
 o
NOT IN
).
SELECT nombre FROM fabricante WHERE codigo NOT IN (SELECT codigo_fabricante FROM producto) 1.1.7.4 Subconsultas con
EXISTS
 y
NOT EXISTS
 
14.
 
Devuelve los nombres de los fabricantes que tienen productos asociados. (Utilizando
EXISTS
 o
NOT EXISTS
).
SELECT nombre FROM fabricante WHERE EXISTS ( SELECT codigo_fabricante FROM producto WHERE producto.codigo_fabricante = fabricante.codigo) 
15.
 
Devuelve los nombres de los fabricantes que no tienen productos asociados. (Utilizando
EXISTS
 o
NOT EXISTS
).
SELECT nombre FROM fabricante WHERE NOT EXISTS ( SELECT codigo_fabricante FROM producto WHERE producto.codigo_fabricante = fabricante.codigo) 1.1.7.5 Subconsultas correlacionadas
16.
 
Lista el nombre de cada fabricante con el nombre y el precio de su producto más caro.
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto INNER JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE producto.precio = ( SELECT MAX(precio) FROM producto WHERE codigo_fabricante = fabricante.codigo ) 
17.
 
Devuelve un listado de todos los productos que tienen un precio mayor o igual a la media de todos los productos de su mismo fabricante.
  SELECT * FROM producto AS p1 WHERE precio >= (SELECT AVG(precio) FROM producto AS p2 WHERE p1.codigo_fabricante = p2.codigo_fabricante) 
18.
 
Lista el nombre del producto más caro del fabricante
Lenovo
.
SELECT producto.nombre FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Lenovo' AND producto.precio = ( SELECT MAX(precio) FROM producto WHERE codigo_fabricante = fabricante.codigo) 
1.1.8 Subconsultas (En la cláusula
HAVING
)
7.
 
Devuelve un listado con todos los nombres de los fabricantes que tienen el mismo número de productos que el fabricante
Lenovo
.
 
SELECT fabricante.nombre, COUNT(producto.codigo) FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante GROUP BY fabricante.codigo HAVING COUNT(producto.codigo) >= ( SELECT COUNT(producto.codigo) FROM fabricante INNER JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE fabricante.nombre = 'Lenovo')
*EJERCICIOS 26 DE ENERO 2. Gestión de empleados
1.2.1 Modelo entidad/relación
  1.2.2 Base de datos para MySQL
DROP
 
DATABASE
 
IF
 
EXISTS
 empleados;
CREATE
 
DATABASE
 empleados CHARACTER 
SET
 utf8mb4;
USE
 empleados;
CREATE
 
TABLE
 departamento ( codigo INT UNSIGNED AUTO_INCREMENT
PRIMARY
 
KEY
, nombre VARCHAR(100)
NOT
 
NULL
, presupuesto DOUBLE UNSIGNED
NOT
 
NULL
, gastos DOUBLE UNSIGNED
NOT
 
NULL
 );
CREATE
 
TABLE
 empleado ( codigo INT UNSIGNED AUTO_INCREMENT
PRIMARY
 
KEY
, nif VARCHAR(9)
NOT
 
NULL
 
UNIQUE
, nombre VARCHAR(100)
NOT
 
NULL
, apellido1 VARCHAR(100)
NOT
 
NULL
, apellido2 VARCHAR(100), codigo_departamento INT UNSIGNED,
FOREIGN
 
KEY
 (codigo_departamento)
REFERENCES
 departamento(codigo) );
INSERT
 
INTO
 departamento
VALUES
(1, 'Desarrollo', 120000, 6000);
INSERT
 
INTO
 departamento
VALUES
(2, 'Sistemas', 150000, 21000);
INSERT
 
INTO
 departamento
VALUES
(3, 'Recursos Humanos', 280000, 25000);
INSERT
 
INTO
 departamento
VALUES
(4, 'Contabilidad', 110000, 3000);
INSERT
 
INTO
 departamento
VALUES
(5, 'I+D', 375000, 380000);
INSERT
 
INTO
 departamento
VALUES
(6, 'Proyectos', 0, 0);
INSERT
 
INTO
 departamento
VALUES
(7, 'Publicidad', 0, 1000);
INSERT
 
INTO
 empleado
VALUES
(1, '32481596F', 'Aarón', 'Rivero', 'Gómez', 1);
INSERT
 
INTO
 empleado
VALUES
(2, 'Y5575632D', 'Adela', 'Salas', 'Díaz', 2);
INSERT
 
INTO
 empleado
VALUES
(3, 'R6970642B', 'Adolfo', 'Rubio', 'Flores', 3);
INSERT
 
INTO
 empleado
VALUES
(4, '77705545E', 'Adrián', 'Suárez',
NULL
, 4);
INSERT
 
INTO
 empleado
VALUES
(5, '17087203C', 'Marcos', 'Loyola', 'Méndez', 5);
INSERT
 
INTO
 empleado
VALUES
(6, '38382980M', 'María', 'Santana', 'Moreno', 1);
INSERT
 
INTO
 empleado
VALUES
(7, '80576669X', 'Pilar', 'Ruiz',
NULL
, 2);
INSERT
 
INTO
 empleado
VALUES
(8, '71651431Z', 'Pepe', 'Ruiz', 'Santana', 3);
INSERT
 
INTO
 empleado
VALUES
(9, '56399183D', 'Juan', 'Gómez', 'López', 2);
INSERT
 
INTO
 empleado
VALUES
(10, '46384486H', 'Diego','Flores', 'Salas', 5);
INSERT
 
INTO
 empleado
VALUES
(11, '67389283A', 'Marta','Herrera', 'Gil', 1);
INSERT
 
INTO
 empleado
VALUES
(12, '41234836R', 'Irene','Salas', 'Flores',
NULL
);
INSERT
 
INTO
 empleado
VALUES
(13, '82635162B', 'Juan Antonio','Sáez', 'Guerrero',
NULL
);
1.2.3 Consultas sobre una tabla
1.
 
Lista el primer apellido de todos los empleados.
SELECT apellido1 FROM empleado;
  2.
 
Lista el primer apellido de los empleados eliminando los apellidos que estén repetidos.
SELECT DISTINCT apellido1 FROM empleado;
3.
 
Lista todas las columnas de la tabla
empleado
.
SELECT * FROM empleado;
4.
 
Lista el nombre y los apellidos de todos los empleados.
SELECT nombre, apellido1, apellido2 FROM empleado;
5.
 
Lista el código de los departamentos de los empleados que aparecen en la tabla
empleado
.
SELECT código_departamento FROM empleado;
6.
 
Lista el código de los departamentos de los empleados que aparecen en la tabla
empleado
, eliminando los códigos que aparecen repetidos.
SELECT DISTINCT código_departamento FROM empleado;
7.
 
Lista el nombre y apellidos de los empleados en una única columna.
SELECT
CONCAT(‘’,nombre,apellido1,apellido2)FROM empleado;
 
8.
 
Lista el nombre y apellidos de los empleados en una única columna, convirtiendo todos los caracteres en mayúscula.
SELECT UPPER(CONCAT(
‘’,
nombre,apellido1,apellido2)) FROM empleado;
9.
 
Lista el nombre y apellidos de los empleados en una única columna, convirtiendo todos los caracteres en minúscula.
SELECT LOWER 
(CONCAT(‘’,nombre,apellido1,apellido2)) FROM empleado;
 
10.
 
Lista el código de los empleados junto al nif, pero el nif deberá aparecer en dos columnas, una mostrará únicamente los dígitos del nif y la otra la letra.
SELECT código,left(nif,8),right(nif,1)
  FROM empleado;
11.
 
Lista el nombre de cada departamento y el valor del presupuesto actual del que dispone. Para calcular este dato tendrá que restar al valor del presupuesto inicial (columna
presupuesto
) los gastos que se han generado (columna
gastos
). Tenga en cuenta que en algunos casos pueden existir valores negativos. Utilice un alias apropiado para la nueva columna columna que está calculando.
SELECT nombre,presupuesto-(gastos) As presupuesto_actual FROM departamento;
12.
 
Lista el nombre de los departamentos y el valor del presupuesto actual ordenado de forma ascendente.
SELECT nombre,presupuesto AS presupuesto_actual FROM departamento ORDEN BY presupuesto_actual ASC;
13.
 
Lista el nombre de todos los departamentos ordenados de forma ascendente.
SELECT nombre FROM departamento ORDER BY nombre ASC;
14.
 
Lista el nombre de todos los departamentos ordenados de forma desscendente.
SELECT nombre FROM departamento ORDER BY nombre DESC;
15.
 
Lista los apellidos y el nombre de todos los empleados, ordenados de forma alfabética tendiendo en cuenta en primer lugar sus apellidos y luego su nombre.
SELECT apellido1, apellido2, nombre FROM empleado ORDEN BY apellido1 ASc, c
oalesce(apellido2,””) ASC, nombre ASC;
16.
 
Devuelve una lista con el nombre y el presupuesto, de los 3 departamentos que tienen mayor presupuesto.
SELECT nombre, presupuesto FROM departamento ORDER BY presupuesto DESC LIMIT 3;
17.
 
Devuelve una lista con el nombre y el presupuesto, de los 3 departamentos que tienen menor presupuesto.
SELECT nombre, presupuesto FROM departamento ORDER BY presupuesto DESC ASC 3;
  18.
 
Devuelve una lista con el nombre y el gasto, de los 2 departamentos que tienen mayor gasto.
SELECT nombre, gastos FROM departamento ORDER BY gastos desc LIMIT 2;
19.
 
Devuelve una lista con el nombre y el gasto, de los 2 departamentos que tienen menor gasto.
SELECT nombre, gastos FROM departamento ORDER BY gastos ASC LIMIT 2;
20.
 
Devuelve una lista con 5 filas a partir de la tercera fila de la tabla
empleado
. La tercera fila se debe incluir en la respuesta. La respuesta debe incluir todas las columnas de la tabla
empleado
.
SELECT * FROM empleado LIMIT 2,5;
21.
 
Devuelve una lista con el nombre de los departamentos y el presupuesto, de aquellos que tienen un presupuesto mayor o igual a 150000 euros.
SELECT nombre, presupuesto FROM departamento WHERE presupuesto>= 150000;
22.
 
Devuelve una lista con el nombre de los departamentos y el gasto, de aquellos que tienen menos de 5000 euros de gastos.
SELECT nombre, presupuesto FROM departamento WHERE presupuesto<5000;
23.
 
Devuelve una lista con el nombre de los departamentos y el presupesto, de aquellos que tienen un presupuesto entre 100000 y 200000 euros. Sin utilizar el operador
BETWEEN
.
SELECT nombre, presupuesto FROM departamento WHERE presupuesto>100000 AND presupuesto<200000;
24.
 
Devuelve una lista con el nombre de los departamentos que
no
 tienen un presupuesto entre 100000 y 200000 euros. Sin utilizar el operador
BETWEEN
.
SELECT nombre, presupuesto FROM departamento WHERE NOT presupuesto>100000 AND presupuesto<200000;
  25.
 
Devuelve una lista con el nombre de los departamentos que tienen un presupuesto entre 100000 y 200000 euros. Utilizando el operador
BETWEEN
.
SELECT nombre, presupuesto FROM departamento WHERE presupuesto BETWEEN 100000 AND 200000;
26.
 
Devuelve una lista con el nombre de los departamentos que
no
 tienen un presupuesto entre 100000 y 200000 euros. Utilizando el operador
BETWEEN
.
SELECT nombre, presupuesto FROM departamento WHERE NOT presupuesto BETWEEN 100000 AND 200000;
27.
 
Devuelve una lista con el nombre de los departamentos, gastos y presupuesto, de aquellos departamentos donde los gastos sean mayores que el presupuesto del que disponen.
SELECT nombre, gastos, presupuestos FROM departamento WHERE gastos>presupuestos;
28.
 
Devuelve una lista con el nombre de los departamentos, gastos y presupuesto, de aquellos departamentos donde los gastos sean menores que el presupuesto del que disponen.
SELECT nombre, gastos, presupuesto FROM departamento WHERE gastos < presupuesto;
29.
 
Devuelve una lista con el nombre de los departamentos, gastos y presupuesto, de aquellos departamentos donde los gastos sean iguales al presupuesto del que disponen.
SELECT nombre, gastos, presupuesto FROM departamento WHERE gastos = presupuesto;
30.
 
Lista todos los datos de los empleados cuyo segundo apellido sea
NULL
.
SELECT * FROM empleado WHERE apellido2 is null;
31.
 
Lista todos los datos de los empleados cuyo segundo apellido
no sea
 
NULL
.
SELECT * FROM empleado WHERE apellido2 is not null;
32.
 
Lista todos los datos de los empleados cuyo segundo apellido sea
López
.
  SELECT * FROM empleado WHERE apellido2= Lopez;
33.
 
Lista todos los datos de los empleados cuyo segundo apellido sea
Díaz
 o
Moreno
. Sin utilizar el operador
IN
.
SELECT * FROM empleado WHERE apellido2= Diaz or apellido2=Moreno;
34.
 
Lista todos los datos de los empleados cuyo segundo apellido sea
Díaz
 o
Moreno
. Utilizando el operador
IN
.
SELECT * FROM empleado WHERE apellido2
in(“Diaz”," Moreno”)
;
35.
 
Lista los nombres, apellidos y nif de los empleados que trabajan en el departamento
3
.
SELECT nombre, apellido1, apellido2, nif FROM empleado WHERE código_departamento=3;
36.
 
Lista los nombres, apellidos y nif de los empleados que trabajan en los departamentos
2
,
4
 o
5
.
SELECT nombre, apellido1, apellido2, nif FROM empleado WHERE código_departamento in (2,4,5);
1.2.4 Consultas multitabla (Composición interna)
Resuelva todas las consultas utilizando la sintaxis de
SQL1
 y
SQL2
. 1.
 
Devuelve un listado con los empleados y los datos de los departamentos donde trabaja cada uno.
SELECT departamento.nombre FROM empleado, departamento WHERE empleado.codigo_departamento = departamento.codigo AND nif = "38382980M";
2.
 
Devuelve un listado con los empleados y los datos de los departamentos donde trabaja cada uno. Ordena el resultado, en primer lugar por el nombre del departamento (en orden alfabético) y en segundo lugar por los apellidos y el nombre de los empleados.
  SELECT * FROM empleado, departamento WHERE empleado.codigo_departamento = departamento.codigo ORDER BY departamento.nombre ASC, apellido1 ASC, apellido2 ASC, empleado.nombre ASC;
3.
 
Devuelve un listado con el código y el nombre del departamento, solamente de aquellos departamentos que tienen empleados.
SELECT departamento.codigo, departamento.nombre FROM empleado, departamento WHERE empleado.codigo_departamento = departamento.codigo AND NOT empleado.nombre = "NULL";
4.
 
Devuelve un listado con el código, el nombre del departamento y el valor del presupuesto actual del que dispone, solamente de aquellos departamentos que tienen empleados. El valor del presupuesto actual lo puede calcular restando al valor del presupuesto inicial (columna
presupuesto
) el valor de los gastos que ha generado (columna
gastos
).
SELECT departamento.codigo, departamento.nombre, (presupuesto - gastos) as presupuesto_actual FROM empleado, departamento WHERE empleado.codigo_departamento = departamento.codigo;
5.
 
Devuelve el nombre del departamento donde trabaja el empleado que tiene el nif
38382980M
.
SELECT departamento.nombre FROM empleado, departamento WHERE empleado.codigo_departamento = departamento.codigo AND nif = "38382980M";
  6.
 
Devuelve el nombre del departamento donde trabaja el empleado
Pepe Ruiz Santana
.
SELECT departamento.nombre FROM empleado , departamento WHERE departamento.codigo=empleado.codigo_departamento AND
empleado.nombre=”Pepe” AND empleado.apellido1=”Ruiz” AND empleado.apellido2 =”Santana”;
 
7.
 
Devuelve un listado con los datos de los empleados que trabajan en el departamento de
I+D
. Ordena el resultado alfabéticamente.
SELECT empleado.* FROM empleado, departamento WHERE departamento.codigo=empleado.codigo_departamento AND
departamento.nombre=”I+D” ORDER BY empleado
.nombre ABC;
8.
 
Devuelve un listado con los datos de los empleados que trabajan en el departamento de
Sistemas
,
Contabilidad
 o
I+D
. Ordena el resultado alfabéticamente.
SELECT empleado.* FROM empleado INNER JOIN departamento ON departamento.codigo=empleado.codigo_departamento WHERE
departamento.nombre=”
Sistemas
”
 OR
departamento.nombre=”Contabilidad” OR departamento.nombre=”I+D”
 ORDER BY empleado.nombre ABC;
9.
 
Devuelve una lista con el nombre de los empleados que tienen los departamentos que
no
 tienen un presupuesto entre 100000 y 200000 euros.
SELECT empleado.nombre FROM empleado, departamento FROM departamento.codigo=empleado.codigo_departamento AND departamento.presupuesto NOT BETWEEN 100000 AND 200000
10.
 
Devuelve un listado con el nombre de los departamentos donde existe algún empleado cuyo segundo apellido sea
NULL
. Tenga en cuenta que no debe mostrar nombres de departamentos que estén repetidos.
SELECT departamento.nombre FROM empleado, departamento FROM departamento.codigo=empleado.codigo_departamento AND empleado.apellido2 IS NULL;
1.2.5 Consultas multitabla (Composición externa)
Resuelva todas las consultas utilizando las cláusulas
LEFT JOIN
 y
RIGHT JOIN
.
Scribd
En la que confían más de 1 millón de miembros

Prueba Scribd GRATIS durante 30 días para acceder a más de 125 millones de títulos sin anuncios ni interrupciones.
Comenzar prueba gratis

Puede cancelar en cualquier momento.
  1.
 
Devuelve un listado con
todos los empleados
 junto con los datos de los departamentos donde trabajan. Este listado también debe incluir los empleados que no tienen ningún departamento asociado.
SELECT empleado.codigo, empleado.nombre, empleado.apellido1, departamento.nombre FROM empleado LEFT JOIN departamento ON departamento.codigo = empleado.codigo_departamento
2.
 
Devuelve un listado donde sólo aparezcan aquellos empleados que no tienen ningún departamento asociado.
SELECT departamento.codigo, empleado.nombre, empleado.apellido1, empleado.apellido2, departamento.nombre FROM empleado LEFT JOIN departamento ON departamento.codigo != empleado.codigo_departamento WHERE NOT EXISTS (SELECT NULL FROM departamento WHERE departamento.codigo = empleado.codigo_departamento)
3.
 
Devuelve un listado donde sólo aparezcan aquellos departamentos que no tienen ningún empleado asociado.
SELECT departamento.nombre
  FROM departamento LEFT JOIN empleado ON departamento.codigo = empleado.codigo_departamento WHERE NOT EXISTS (SELECT NULL FROM departamento WHERE departamento.codigo = empleado.codigo_departamento)
4.
 
Devuelve un listado con todos los empleados junto con los datos de los departamentos donde trabajan. El listado debe incluir los empleados que no tienen ningún departamento asociado y los departamentos que no tienen ningún empleado asociado. Ordene el listado alfabéticamente por el nombre del departamento.
SELECT * FROM empleado RIGHT JOIN departamento ON empleado.codigo_departamento = departamento.codigo ORDER BY departamento.nombre ASC
5.
 
Devuelve un listado con los empleados que no tienen ningún departamento asociado y los departamentos que no tienen ningún empleado asociado. Ordene el listado alfabéticamente por el nombre del departamento.
SELECT * FROM departamento right JOIN empleado ON empleado.codigo_departamento = departamento.codigo
  WHERE departamento.codigo IS NULL ORDER BY departamento.nombre ASC
1.2.6 Consultas resumen
1.
 
Calcula la suma del presupuesto de todos los departamentos.
SELECT SUM(presupuesto) FROM departamento;
2.
 
Calcula la media del presupuesto de todos los departamentos.
SELECT AVG(presupuesto) FROM departamento;
3.
 
Calcula el valor mínimo del presupuesto de todos los departamentos.
SELECT MIN(presupuesto) FROM departamento;
4.
 
Calcula el nombre del departamento y el presupuesto que tiene asignado, del departamento con menor presupuesto.
SELECT nombre, MIN(presupuesto)FROM departamento;
5.
 
Calcula el valor máximo del presupuesto de todos los departamentos.
SELECT MAX(presupuesto) FROM departamento;
6.
 
Calcula el nombre del departamento y el presupuesto que tiene asignado, del departamento con mayor presupuesto.
SELECT nombre, MAX(presupuesto) FROM departamento;
7.
 
Calcula el número total de empleados que hay en la tabla
empleado
.
SELECT COUNT(*) FROM empleado;
8.
 
Calcula el número de empleados que
no tienen
 
NULL
 en su segundo apellido.
SELECT COUNT(*) FROM empleado WHERE apellido2 is not null;
  9.
 
Calcula el número de empleados que hay en cada departamento. Tienes que devolver dos columnas, una con el nombre del departamento y otra con el número de empleados que tiene asignados.
SELECT código_departamento, COUNT(*) FROM empleado GROUP BY codigo_departamento;
10.
 
Calcula el nombre de los departamentos que tienen más de 2 empleados. El resultado debe tener dos columnas, una con el nombre del departamento y otra con el número de empleados que tiene asignados.
SELECT código_departamento, COUNT(*) FROM empleado GROUP BY codigo_departameno HAVING COUNT(*)=2;
11.
 
Calcula el número de empleados que trabajan en cada uno de los departamentos. El resultado de esta consulta también tiene que incluir aquellos departamentos que no tienen ningún empleado asociado.
SELECTcount(*)FROM empleado GROUP BY codigo_departamento;
12.
 
Calcula el número de empleados que trabajan en cada unos de los departamentos que tienen un presupuesto mayor a 200000 euros.
SELECT count(empleado.cod_depa) FROM empleado, departamento WHERE
empelado.cod_depa = depa.cod AND presupuesto ˃ 200000;
 
1.2.7 Subconsultas
1.2.7.1 Con operadores básicos de comparación
1.
 
Devuelve un listado con todos los empleados que tiene el departamento de
Sistemas
. (Sin utilizar
INNER JOIN
).
SELECT * FROM empleado where codigo_departamento = 2;
2.
 
Devuelve el nombre del departamento con mayor presupuesto y la cantidad que tiene asignada.
  SELECT nombre, presupuesto FROM departamento WHERE presupuesto = (SELECT MAX(presupuesto) FROM departamento);
3.
 
Devuelve el nombre del departamento con menor presupuesto y la cantidad que tiene asignada.
SELECT nombre, presupuesto FROM departamento WHERE presupuesto = (SELECT MIN(presupuesto) FROM departamento); 1.2.7.2 Subconsultas con
ALL
 y
ANY
 
4.
 
Devuelve el nombre del departamento con mayor presupuesto y la cantidad que tiene asignada. Sin hacer uso de
MAX
,
ORDER BY
 ni
LIMIT
.
SELECT * FROM departamento WHERE presupuesto >= ALL(SELECT presupuesto FROM departamento)
 
5.
 
Devuelve el nombre del departamento con menor presupuesto y la cantidad que tiene asignada. Sin hacer uso de
MIN
,
ORDER BY
 ni
LIMIT
.
SELECT * FROM departamento WHERE presupuesto <= All(SELECT presupuesto FROM departamento)
6.
 
Devuelve los nombres de los departamentos que tienen empleados asociados. (Utilizando
ALL
 o
ANY
).
SELECT nombre FROM departamento WHERE codigo = ANY (SELECT codigo_departamento FROM empleado)
7.
 
Devuelve los nombres de los departamentos que no tienen empleados asociados. (Utilizando
ALL
 o
ANY
).
SELECT nombre FROM departamento WHERE codigo != ALL (SELECT codigo_departamento FROM empleado) 1.2.7.3 Subconsultas con
IN
 y
NOT IN
 
8.
 
Devuelve los nombres de los departamentos que tienen empleados asociados. (Utilizando
IN
 o
NOT IN
).
  SELECT nombre FROM departamento WHERE codigo IN(SELECT codigo_departamento FROM empleado)
9.
 
Devuelve los nombres de los departamentos que no tienen empleados asociados. (Utilizando
IN
 o
NOT IN
).
SELECT nombre FROM departamento WHERE codigo NOT IN(SELECT codigo_departamento FROM empleado) 1.2.7.4 Subconsultas con
EXISTS
 y
NOT EXISTS
 
10.
 
Devuelve los nombres de los departamentos que tienen empleados asociados. (Utilizando
EXISTS
 o
NOT EXISTS
).
SELECT nombre FROM departamento WHERE EXISTS (SELECT codigo_departamento FROM empleado WHERE empleado.codigo_departamento = departamento.codigo)
11.
 
Devuelve los nombres de los departamentos que tienen empleados asociados. (Utilizando
EXISTS
 o
NOT EXISTS
).
SELECT nombre FROM departamento WHERE NOT EXISTS (SELECT codigo_departamento FROM empleado WHERE empleado.codigo_departamento = 