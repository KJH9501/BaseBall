<?
   include"session.php";   //session.php파일을 포함

   ?>
<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8">
    <title>DB</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
  	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  </head>

<body>
    <div data-role="page">
      <div data-role="header">
        <h1>WELCOME</h1>
      </div>
      <div data-role="content">
        <div>

          <?php


      $host = 'localhost';
      $user = 'root';
      $pw = 'autoset';
      $dbName = 'test';
      $mysqli = new mysqli($host, $user, $pw, $dbName);
      $memberId = $_SESSION['id'];
      $memberPw = $_SESSION['pw'];
      $sql = "SELECT * FROM member WHERE id = '$memberId' AND pwd = '$memberPw'";

      $res = $mysqli->query($sql);


          $row = $res->fetch_array(MYSQLI_ASSOC);

          if ($row != null) {
              $_SESSION['userid'] = $row['name'];
              echo $_SESSION['userid'].'님 안녕하세요<p/>';
              echo '<a href="logout.php">로그아웃 하기</a>';
          }

          if($row == null){

           echo("<script>location.href='starterror.php';</script>");



          }


  ?>

        </div>
        <h2 align = "center">Menu</h2>
        <ul data-role="listview" data-inset="true" data-divider-theme="b">
          <li><a href="../picher.html " rel = "external" >야구세상(투수편)</a></li><br>
          <li><a href="../hitter.html " rel = "external" >야구세상(타자편)</a></li><br>
          <li><a href="index.php " >자유게시판</a></li><br>
          <li><a href="chat/index.php " rel="external" >실시간채팅방 입장</a></li><br>
        </ul>
      </div>

      <div data-role="footer" data-position="fixed">
        <h3 align = "center">Made by Jeong Hoon</h3>
      </div>

    </div>



  </body>
</html>
