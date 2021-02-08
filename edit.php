<?php
require_once("dbconnection.php");
$id=$_GET['GetID'];
$query="select * from todo where id='".$id."'";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result))
{
$id1=$row['id'];
$nume1=$row['nume'];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>php+sql</title>
</head>
<body>
<h1>Interfata actualizare
<form action="server.php?id=<?php echo $id1?>" method="POST">
<input type="text" placeholder="Action" name="input_field"
value="<?php echo $nume1?>">
<button name="update">Actualizare</button>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
