<meta charset="UTF-8">
<?php
include_once 'conn.php';
$username=$_POST["username"];
$psw=$_POST["psw"];
$sql="select * from user where username='{$username}' and psw='{$psw}'";
$result=  mysql_query($sql);
if($check=  mysql_fetch_array($result)){
    echo "<script>";
    echo "window.location.href='index.php'";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('密码错误');";
    echo "window.location.href='login.php';";
    echo "</script>";
}

?>
