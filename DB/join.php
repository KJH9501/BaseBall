<doctype html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>sign up page</title>
  </head>
  <body>
    <form name="join" method="post" action= "membersave.php">
      <h1>정보를 입력해주세요!</h1>
      <table border="1">
        <tr>
          <td>ID</td>
          <td><input type="text" size="30" name="id"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" size="30" name="pwd"></td>
        </tr>
        <tr>
          <td>name</td>
          <td><input type="text" size="12" maxlength="10" name="name"></td>
        </tr>
        <tr>
          <td>직업</td>
          <td><input type="text" size="30" name="position"></td>
        </tr>
      </table>
      <input type=submit value="submit"><input type=reset value="rewrite">

      <input type="button" value="뒤로가기"onclick="javascripｔ:history.go(-1)">
    </form>
  </body>
  </html>
