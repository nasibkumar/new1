<?php
if(isset($_POST['sub1']))
{
$con=mysqli_connect("localhost","root","","project");
$user=$_POST['u2'];
$pass=$_POST['p2'];
$sql="SELECT * FROM `signup` WHERE username='$user' && password='$pass' && iam='man'";
$res=mysqli_query($con,$sql);
$num=mysqli_num_rows($res);
if($num==1)
{
    header("Location: membersmanger.php");
}
$sql1="SELECT * FROM `signup` WHERE username='$user' && password='$pass' && iam='emp'";
$res2=mysqli_query($con,$sql1);
$num=mysqli_num_rows($res2);
if($num==1)
{
    header("Location: membersemp.php");
}
else
{
    echo "<script type='text/javascript'> alert('Wrong password or username'); </script>";
}
}
?>

