<?php
/**
 * Script para probar el contenido de las variables php de servidor
 * 
 * @author Miguel Díaz Estrada <dev@migueltonic.pe>
 * @package tools
 * @subpackage pruebas
 */

echo "HTTP_HOST<br/>".$_SERVER['HTTP_HOST'];

echo "<hr/>";

echo "REQUEST_URI<br/>".$_SERVER['REQUEST_URI'];

echo "<hr/>";

echo "QUERY_STRING<br/>".$_SERVER['QUERY_STRING'];

echo "<hr/>";

echo "THE_REQUEST<br/>".$_SERVER['THE_REQUEST']."GET /string-string-digits? HTTP/1.1";

echo "<hr/>";

echo "REQUEST_FILENAME<br/>".$_SERVER['REQUEST_FILENAME'];

echo "<hr/>";

$CCL_HOST = ( substr_count($_SERVER['HTTP_HOST'],".")==2 )? substr($_SERVER['HTTP_HOST'],strpos($_SERVER['HTTP_HOST'],".")+1) : $_SERVER['HTTP_HOST'];

echo $CCL_HOST;

echo "agregado cambio desde copia local"

?>