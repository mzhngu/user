<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>主页面</h1>
        <a href="addUser.php">添加用户</a>
        <?php
        include_once 'conn.php';
        $sql = "select * from user where pri=1";
        $result = mysql_query($sql);
        $rows=array();//
        while ($row = mysql_fetch_assoc($result)) {
            $rows[] = $row;
        }
        ?>
        <table border="1">
            <tr>
                <td>用户名</td>
                <td>操作</td>
            </tr>
            <?php
            foreach ($rows as $row) {
                $uid=$row["uid"];
            ?>
            <tr>
                <td><?php echo $row["username"]; ?></td>
                <td><a href="delUserPro.php?uid=<?php echo $uid; ?>">删除</a></td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>
