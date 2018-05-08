<?php

$server="localhost";
$db_user="root";
$db_psw="";
$link=  mysql_connect($server, $db_user, $db_psw);
if($link){
//    echo "success";
}
mysql_select_db("user");
?>
