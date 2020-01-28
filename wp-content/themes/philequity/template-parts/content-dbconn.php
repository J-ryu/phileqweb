

<?php


/**
 * The template for Flash news section
 *

 */

$DBhost = 'localhost';
$DBuser='admin_ph';
$DBpass='teraquestnow';
$DBName='philequity';

//DB CONNECTION STRING
$conn=mysql_connect ($DBhost, $DBuser, $DBpass) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($DBName); 



?>



