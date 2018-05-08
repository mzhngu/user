<?php
include 'conn.php';
$uid=$_GET["uid"];
$sql="delete from user where uid={$uid}";
echo $sql;
$result=mysql_query($sql) or die("error");
if($result){
    echo "<script>";
    echo "alert('删除成功');";
    echo "window.location.href='index.php';";
    echo "</script>";
}else{
    echo $sql.mysql_error();
}
?>
