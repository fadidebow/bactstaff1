<?php
session_start();
$_SESSION['gn']='';

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="admindash/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="admindash/css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">
  .f{
    background-color: gold;color: black
  }

  .f:hover{
   
    color: gold;
    padding: 10px;
     background-color: #001122;
     border-radius: 4px;
     border:1px solid gold;
    transition: .5s ease;

  }
</style>
</head>

<body id="page-top" style="background-color: #001122">

  
    <!-- End of Sidebar -->
<div class="container">
  <div style="margin: 10px auto;width: 400px;height:auto">
    <img src="admindash/img/1.png" style="width: 390px;height: 150px;">
    <br>
    <h2 style="color: gold;text-align: center;"> <i class="fa fa-heart" style="color: gold"></i> Join Bact Join Success <i class="fa fa-heart" style="color: gold"></i></h2>

    <div class="container-fluid">
      <div style="height: 20px;"></div>
      
      <div class="card" style="background-color: gold;color: black" >
        <div class="card-heading" >
          <hr>
          <h1 class="text-center">Join US </h1>
          <hr>
        </div>
        <div class="card-body">
          <form action="userlogin.php" method="post">
            <input type="email" name="e" class="form-control"><br>
           <input type="password" name="p" class="form-control"><br>

           <input type="submit" value="SignIn" name="btn" class="btn btn-lg btn-block" style="background-color: gold;border:1px solid black;color: black;" >
          </form>
        </div>
        <div class="card-footer">
          <h5>Programmed By Fadi Debow</h5>
        </div>
      </div>


      <?php
include'admindash/conn.php';




$em=isset($_POST['e'])?$_POST['e']:'';
$em=mysqli_real_escape_string($con,$em);
$pass=isset($_POST['p'])?$_POST['p']:'';
$pass=mysqli_real_escape_string($con,$pass);


if(isset($_POST['btn']))
{


  $re=mysqli_query($con,"select * from students where stuemail='$em' and password='$pass'");

  if(mysqli_num_rows($re) > 0)
  {$row=mysqli_fetch_array($re);
    $_SESSION['gn']=$row['groupname'];
  header("Location: userhome.php");
  }

  else{
    echo'
    <div class="alert alert-danger" style="margin-top: 20px;"> 
    <h1>you are not member</h1> </div>
    ';
  }

}




?>





    </div>
  </div>
</div>
    
  <!-- Bootstrap core JavaScript-->
  <script src="admindash/vendor/jquery/jquery.min.js"></script>
  <script src="admindash/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="admindash/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="admindash/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="admindash/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="admindash/js/demo/chart-area-demo.js"></script>
  <script src="admindash/js/demo/chart-pie-demo.js"></script>

</body>

</html>
