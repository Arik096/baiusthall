<?php

//sql211.epizy.com
//epiz_23793784_baiust_hall
//epiz_23793784
//bVVS9kLvr
$db_host="localhost"; //localhost server
$db_user="root"; //database username
$db_password=""; //database password
$db_name="baiust_hall"; //database name

try
{
 $db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
 $e->getMessage();
}

?>
