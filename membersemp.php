<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
  .ul1 li {font-size:20px;
    margin-right:100px; 
  list-style:none;
  margin-left:40px;
  text-decoration:none;}
  .ul1 li a{color:black;
  margin-left:60px;
  text-decoration:none;
  }
  </style>
  <body style="background-image:url('img6.jpg');">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Nasib.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="members.php">Members</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="problems.php">Problems</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php 
$conn=mysqli_connect("localhost","root","","project") or die("failed");
$sql="SELECT * FROM `member`";
$res=mysqli_query($conn,$sql) or die("query unsucess");
if(mysqli_num_rows($res)>0)
{
?>
<br>
<br>
<div style="background-color:rgba(255,255,255,0.5); margin-left:100px; margin-right:180px; padding:50px;">
<ul class="ul1">
<button style="font-size:25px; margin-left:70px;"><a href="add.php" style="text-decoration:none;">ADD</a></button>
<button style="font-size:25px; margin-left:30px;" disabled="disabled">DELETE</a></button>
<button style="font-size:25px; margin-left:30px;" disabled="disabled">UPDATE</a></button>
</li>
</ul>
<table border=5 cellpadding=10px align=center backgroucolor=brown>
<tr>
<th>Employee Name</th><th>Employee id</th>
<th>Employee address</th><th>Employee phone</th>
<th>Employee dept</th>
<?php 
while($row=mysqli_fetch_assoc($res)) 
{
?>
</tr>
<tr><td><?php echo $row['ename']; ?></td>
<td><?php echo $row['eid']; ?></td></td>
<td><?php echo $row['eadd']; ?></td>
<td><?php echo $row['epho']; ?></td>
<td><?php echo $row['edep']; ?></td></tr>
<?php } ?>
</table>
<?php } ?>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>