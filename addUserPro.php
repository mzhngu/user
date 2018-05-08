<meta charset="UTF-8">
<?php
include_once 'conn.php';
$username=$_POST["new_username"];
$psw=$_POST["new_userpsw"];
$sql="insert into user(username,psw,pri) values('{$username}','{$psw}',1)";
$result=  mysql_query($sql);
if($result){
    echo "<script>";
    echo "alert('添加成功');";
    echo "window.location.href='index.php';";
    echo "</script>";
}else{
    echo $sql.mysql_error();
}
?>
