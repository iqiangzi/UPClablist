<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <!-- meta使用viewport以确保页面可自由缩放 -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
     <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
     <link rel="stylesheet" type="text/css" href="all.css" />
</head>
<body>

<div data-role="page" id="pageone">
     <!--  头部   -->
     <div data-role="header">
          <h1>实验室管理系统</h1>
          <div data-role="navbar">
               <ul>
                    <li><a href="#pagethree">登陆</a></li>
                    <li><a href="#pageone">查询</a></li>
                    <li><a href="#">借用</a></li>
               </ul>
          </div>
     </div>
<!-- 查询页面AAAAAAAAAAAAAAAA -->
  <div data-role="main" class="ui-content">

       <div data-role="main" class="ui-content">
           <a href="#myPopup" data-rel="popup"
           class="ui-btn ui-btn-inline ui-corner-all">查询指南</a>
           <!--  查询弹窗   -->
                <div data-role="popup" id="myPopup"
                class="ui-content" data-overlay-theme="b">
                     <p>第一步 一些注意事项。</p>
                     <p>第二步 该功能的使用说明。</p>
                 </div>
    <a href="#pagetwo" class="ui-btn">开始查询</a>

     </div>
  </div>

  <div data-role="footer">
    <h1>底部文本</h1>
  </div>
</div>
<!-- 查询页面BBBBBBBBBBBB -->
<div data-role="page" id="pagetwo">
     <!--  头部   -->
     <div data-role="header">
          <h1>实验室管理系统</h1>
          <div data-role="navbar">
               <ul>
                    <li><a href="#pagethree">登陆</a></li>
                    <li><a href="#pageone">查询</a></li>
                    <li><a href="#">借用</a></li>
               </ul>
          </div>
     </div>

  <div data-role="main" class="ui-content" >
       <?php
       $servername = "localhost";
       $username = "root";
       $password = "70F9d374ef92";

       // 创建连接
       $conn = new mysqli($servername, $username, $password);
       // 检测连接
       if ($conn->connect_error) {
           die("连接失败: " . $conn->connect_error);
       }
       echo "连接成功";
       // 设置编码，防止中文乱码
       mysqli_query($conn , "set names utf8");

       $sql = "SELECT STOCK_name, STOCK_now, STOCK_sum
               FROM webuser_tbl";
               mysqli_select_db( $conn, 'webuser' );
       $retval = mysqli_query( $conn, $sql );
       if(! $retval )
       {
           die('无法读取数据: ' . mysqli_error($conn));
       }
       echo "<table data-role='table' data-mode='columntoggle' class='ui-responsive' data-column-btn-text='显示'>";
       echo "<thead>
       <tr>
       <th data-priority='1'>名称</th>
       <th data-priority='2'>总量</th>
       <th data-priority='1'>余量</th>
       </tr>
          </thead>";
          echo "<tbody>";
       while($row = mysqli_fetch_assoc($retval))
       {
           echo "<tr><th> {$row['STOCK_name']}</th> ".
                "<th>{$row['STOCK_sum']} </th> ".
                "<th>{$row['STOCK_now']} </th> ".
                "</tr>";
       }
       echo "</tbody>";
       echo "</table>";
       mysqli_close($conn);

        ?>
    <a href="#pageone" data-role="button">申请借用</a>
  </div>

  <div data-role="footer">
    <h1>底部文本</h1>
  </div>
</div>

<!--登陆页面AAAAAAAAAAAA -->
<div data-role="page" id = "pagethree">
     <!--  头部   -->
     <div data-role="header">
          <h1>实验室管理系统</h1>
          <div data-role="navbar">
               <ul>
                    <li><a href="#pagethree">登陆</a></li>
                    <li><a href="#pageone">查询</a></li>
                    <li><a href="#">借用</a></li>
               </ul>
          </div>
     </div>
     <div data-role="main" class="ui-content">
          <form method="post" action="login.php">账号：
               <input type="text" name="username"><br/><br/>密码：
               <input type="password" name="password">
               <input type="submit" value="登录" name="sub">
          </form>
          <a href="#myPopup2" data-rel="popup"
          class="ui-btn ui-btn-inline ui-corner-all">注册</a>

          <!--  注册弹窗 这个地方看起来很不安全！！  -->
          <div data-role="popup" id="myPopup2"
          class="ui-content" data-overlay-theme="b">
          <form method="post" action="signup.php">
               <div class="ui-field-contain">
                    <label for="Rname">姓名:</label>
                    <input type="text" name="name" id="upname">
                    <br/>
                    <label for="Rname">登陆账号:</label>
                    <input type="text" name="username" id="upusername">
                    <br/>
                    <label for="Rpassword">密码:</label>
                    <input type="password" name="password" id="uppassword">
                    <br/>
                    <label for="Repassword">重复密码:</label>
                    <input type="password" name="password" id="uprepassword">


                    <p><input type="submit" name="submit" value="注册"></p>


               </div>
          </form>
         </div>
         <div data-role="footer">
           <h1>底部文本</h1>
         </div>


</div>
</div>

</body>
</html>
