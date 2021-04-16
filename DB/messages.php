<table>
<?
$mysqli = mysqli_connect("localhost", "root", "autoset", "test");

$check = "SELECT * FROM messages order by message_id desc";
$result = $mysqli -> query($check);



	while($rows = mysqli_fetch_assoc($result)){?>
		<tr><td><? echo($row[1]) ?></td>
		<td><? echo($row[2]) ?></td></tr>
<?	}
?>
</table>
