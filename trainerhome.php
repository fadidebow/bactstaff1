
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

  
    <!-- End of Sidebar -->
<div class="container-fluid ml-0" style="height: 100vh;">



  <div class="row">
    <div class="col-md-3 ml-0" style="border-right :1px solid gold;
    height: 100vh">
      <div style="height:70px;"></div>
      <h3 style="color:gold">Report Section</h3>
      <a href="rep.php" class="btn btn-lg btn-warning">Upload Report </a>
    </div>


    <div class="col-md-9">
      
  <div style="height: 20px;"></div>


  <h1 class="text-center" style="color: gold;">Choose Group</h1>
  <div style="height: 1px; background-color: gold;"></div>
  <div style="height: 30px;"></div>

  <?php
  include 'admindash/conn.php';


$r=mysqli_query($con,"select * from groups");
       
        while($row=mysqli_fetch_array($r))
        {
          echo'
       <a href="glinks.php?gn='.$row['name'].'" class="btn btn-lg btn-warning mr-5 text-uppercase">'.$row['name'].'</a>
         
          ';
        }

  ?>








  


</div>
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
