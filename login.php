<?PHP

  if(!isset($_POST["submit"])){
    exit("错误执行");
  }//检测是否有submit操作

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
  $usr=$_POST["username"];
  $pwd=$_POST["password"];
  $name=$_POST["name"];
  if ($name && $passowrd){//如果用户名和密码都不为空
       $sql = "select * from user where username = '$name' and password='$passowrd'";//检测数据库是否有对应的username和password的sql
       $result = mysql_query($sql);//执行sql
       $rows=mysql_num_rows($result);//返回一个数值
       if($rows){//0 false 1 true
          header("refresh:0;url=index.php");//如果成功跳转至welcome.html页面
          exit;
       }else{
        echo "用户名或密码错误";
        echo "
          <script>
              setTimeout(function(){window.location.href='index.php';},1000);
          </script>

        ";//如果错误使用js 1秒后跳转到登录页面重试;
       }


  }else{//如果用户名或密码有空
        echo "表单填写不完整";
        echo "
           <script>
              setTimeout(function(){window.location.href='index.php';},1000);
           </script>";

            //如果错误使用js 1秒后跳转到登录页面重试;
  }

  mysql_close();//关闭数据库
?>
