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
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" a href="bootstrap.css">
</head>
<body class="bg-dark">
<div class="container">
<div class="row">
<div class="col-lg-6 m-auto">
<div class="card mt-5">
<div class="card-title">
<h1 class="bg-success text-white text-center py-3">Interfata actualizare>
</div>
<div class="card-body">
<form action="server.php?id=<?php echo $id1?>" method="POST">
<input type="text" class="from-control mb-2" placeholder="Action" name="input_field"
value="<?php echo $nume1?>">
<button class="btn-primary" name="update">Actualizare</button>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
