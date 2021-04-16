<?
session_start();

$user = $_SESSION['name'];
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php echo( $user ) ?> - Chatting</title>
<script src="prototype.js"></script>
</head>
<body>

<div id="chat" style="height:400px;overflow:auto;">
</div>

<script>
function addmessage()
{
  new Ajax.Updater( 'test', 'add.php',
  {
     method: 'post',
     parameters: $('chatmessage').serialize(),
     onSuccess: function() {
       $('messagetext').value = '';
     }
  } );
}
</script>

<form id="chatmessage">
<textarea name="message" id="messagetext">
</textarea>
</form>

<button onclick="addmessage()">Add</button>

<script>
function getMessages()
{
  new Ajax.Updater( 'test', 'messages.php', {
    onSuccess: function() { window.setTimeout( getMessages, 1000 ); }
  } );
}
getMessages();
</script>

</body>
<html>
