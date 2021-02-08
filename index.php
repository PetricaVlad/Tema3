<?php
require_once("dbconnection.php");
$query="select * from todo";
$result=mysqli_query($con,$query);
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
<h1 text-black text-center py-3">Adauga task nou</h1>
</div>
<div class="card-body">
<form action="server.php" method="POST">             
<input type="text" class="from-control" placeholder="Insereaza task" name="action">
<button class="btn-primary" name="submit">Salvare</button>
</form>
</div>
<div class="card-title">
<h3 text-black text-center py-3">Ce trebuie sa fac azi?</h3>
</div>
<table>
<tr>
<td>#</td>
<td>Denumire</td>
<td>Editeaza</td>
<td>Editeaza</td>
</tr>
<?php                        
while($row=mysqli_fetch_assoc($result))
{
$id=$row['id'];
$name=$row['nume'];                               
?>
<tr>
<td><?php echo $id ?></td>
<td><?php echo $name ?></td>
<td><a href="edit.php?GetID=<?php echo $id?>">Editeaza</a></td>
<td><a href="server.php?DelID=<?php echo $id?>">Sterge</a></td>
</tr>
<?php
}
?>
</table>
</div>
</div>
</div>
</div>
</body>
</html>
