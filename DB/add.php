<?
	session_start();

	$mysqli = mysqli_connect("localhost", "root", "autoset", "test");

	$check = "INSERT INTO messages VALUES (null, '$_SESSION[name]', '$_POST[message]')";
	$result = $mysqli -> query($check);


?>
<table>
<?
	$check = "SELECT * FROM messages";
	$result = $mysqli -> query($check);

	while($rows = mysqli_fetch_assoc($result)){?>
		<tr><td><? echo($row[1]) ?></td>
		<td><? echo($row[2]) ?></td></tr>
<?	}
?>
</table>
