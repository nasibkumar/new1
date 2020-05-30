<?php
if(isset($_POST['sub']))
{
$con=mysqli_connect("localhost","root","","project");
$user=$_POST['u1'];
$pass=$_POST['p1'];
$iam=$_POST['rad'];
$sql="SELECT * FROM `signup` WHERE username='$user'";
$res=mysqli_query($con,$sql);
$num=mysqli_num_rows($res);
if($num==1)
{
    echo "alredy taken";
}
else
{
    $sql1="INSERT INTO `signup`(`username`, `password`, `iam`) VALUES ('$user','$pass','$iam')";
    $res1=mysqli_query($con,$sql1);
    header("location: index.php");
}
}
?>