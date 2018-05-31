<?php
if(isset($_POST["submit"]))
{
     $servername = "localhost";
     $username = "webuser";
     $password = "szq995511";

     // 创建连接
     $conn = new mysqli($servername, $username, $password);
     // 检测连接
     if ($conn->connect_error) {
         die("连接失败: " . $conn->connect_error);
     }
     echo "连接成功";
     // 设置编码，防止中文乱码
     mysqli_query($conn , "set names utf8");

     $usr=$_POST["upusername"];
     $pwd=$_POST["uppassword"];
     $name=$_POST["upname"];
//向表test.user插入数据
     $sql = "insert into test.user values('$name','$usr','$pwd');";
     $stmt=$dbh->query("select username from user where username='$usr';");
     if(empty($row[0]))//判断是否存在
        {
            $dbh->exec($sql);
            $dbh = null;
    ?>
            <script>
            alert ("注册成功！");
            window.location.href="index.php";
            </script>
    <?php
        }
        else
        {
            $dbh = null;
    ?>
            <script>
            alert ("用户名已存在！");
            </script>
    <?php
        }
    }
    ?>
