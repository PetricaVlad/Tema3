<?php 
$action=$_POST['action'];
require_once("dbconnection.php");
if(isset($_POST['submit']))
{
if(empty($action))
{
echo "Completeaza toate campurile";
}
else
{
$query ="insert into todo(nume) values('$action')";
$result=mysqli_query($con,$query);
if($result)
{
header("location:index.php");
}
else
{
echo "Nu se poate introduce in baza de date";
}
}
}
else
{
header("location:index.php");
}
if(isset($_POST['update']))
{
$id=$_GET['id'];
echo "<script> alert('".$id."')</script>";
$name=$_POST['input_field'];
echo $name;
$query="update todo set nume='".$name."'where id='".$id."'";
$result=mysqli_query($con,$query);
if($result)
{
header("location:index.php");
}
else
{
echo "Nu se poate actualiza in tabel";
}
}
else
{
header("location:index.php");
}
if(isset($_GET['DelID']))
{
$id=$_GET['DelID'];
$query="delete from todo where id='".$id."'";
$result=mysqli_query($con,$query);
if($result)
{
header("location:index.php");
}
else
{
echo "Nu se poate sterge acest task";
}
}
?>
