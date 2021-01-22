
<?php
session_start();


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

<body id="page-top" style="background-color: #001122;margin: 0px;">

  <div style="height: 40px;"></div>
    <!-- End of Sidebar -->
<div class="container">


<div style="background-color: rgba(255,255,255,0.5); margin: 70px auto;width: 600px;padding: 20px;border: 1px solid gold;border-radius: 10px;">

    <h3 class="text-center text-warning">Upload You Weakly Report </h3>
 
    <h2 class="text-warning">Trainer Name : <?php echo $_SESSION['n']; ?></h2>
    


<form action="rep.php" method="post" enctype="multipart/form-data">
  <input type="file" name="rep" class="form-control"><br>
  <input type="submit" value="UPLOAD " name="btn" class="btn btn-warning btn-lg">
</form>



<?php

include 'admindash/conn.php';
$repname=isset($_FILES['rep']['name'])?$_FILES['rep']['name']:'';
$rep=isset($_FILES['rep']['tmp_name'])?$_FILES['rep']['tmp_name']:'';
$dt=date("Y-m-d");

$filename=$_SESSION['n'].'_'.$dt;

if(isset($_POST['btn']))
{

move_uploaded_file($rep, "uploads/$filename");


  $r=mysqli_query($con,"insert into reports(trainername,rep,dt)
    values('".$_SESSION['n']."','$filename','$dt')");

  if(isset($r))
{
  echo'
<div class="alert alert-success">
  <h3 >Upload Report Successfully</h3>
</div>
  ';
}

else{
    echo'
<div class="alert alert-danger">
  <h3 >Upload Report failed try agin</h3>
</div>
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
