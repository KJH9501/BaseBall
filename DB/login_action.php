<?php
session_start();

$id = $_POST['id'];
$pwd = $_POST['pw'];
$mysqli = mysqli_connect("localhost", "root", "autoset", "test");

$check = "SELECT * FROM member WHERE id= '$id'";
$result = $mysqli -> query($check);
if($result->num_rows == 1) {
  $row = $result -> fetch_array(MYSQLI_ASSOC);
  if($row['pwd'] == $pwd) {
    $_SESSION['id'] = $id;
    $_SESSION['pw'] = $pwd;
    $_SESSION['name'] = $name;
    if(isset($_SESSION['id']))
    {
      header('Location: ./login.php');
    }
    else{
      echo "세션 저장 실패";
    }
  }
  else {
    echo "wrong id ordd pw";
  }
}
else{
  echo "wrong id or pw";
}


?>
