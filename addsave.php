<?php
if(isset($_POST['sub10']))
{
  $conn=mysqli_connect("localhost","root","","project");
  $name=$_POST['name2'];
  $id=$_POST['id'];
  $add=$_POST['add'];
  $pho=$_POST['pho'];
  $dept=$_POST['dept'];
  $sql="INSERT INTO `member`(`ename`, `eid`, `eadd`, `epho`, `edep`) VALUES ('$name','$id','$add','$pho','$dept')" or die('fail');
  $res=mysqli_query($conn,$sql) or die("fail");
  header("Location: membersmanger.php");
}
?>