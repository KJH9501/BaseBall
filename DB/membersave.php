<html>
   <meta charset="utf-8">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1" />
<?php

header('Content-Type: text/html; charset=utf-8');

$host = 'localhost';
$user = 'root';
$pw = 'autoset';
$dbName = 'test';
$mysqli = new mysqli($host, $user, $pw, $dbName);


 $id=$_POST['id'];
 $password=($_POST['pwd']);
 $name=$_POST['name'];
 $position=$_POST['position'];


 $sql = "insert into member (id, pwd, name, position)";
 $sql = $sql. "values('$id','$password','$name','$position')";
 if($mysqli->query($sql)){
  echo 'success inserting <p/>';
  echo $name.'님 가입 되셨습니다.<p/>';
 }else{
  echo '중복된 계정입니다.';
 }
mysqli_close($mysqli);


?>
<input type="button" value="로그인화면으로 이동" onclick="location='../registrater.html'">
</html>
