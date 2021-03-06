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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <!-- Page Wrapper -->
  <div id="wrapper" style="background-color: #001122" >

    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #112233">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15" >
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3" style="color: gold">Bact Staff </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span style="color: gold">DashBoard </span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading" style="color: gold">
        Session Management
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-link"></i>
          <span>Links</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Link Management</h6>
            <a class="collapse-item" href="addlink.php">Add new Link</a>
            <a class="collapse-item" href="ml.php">Manage Link</a>
            
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span >User Management</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Trainer </h6>
            <a class="collapse-item" href="addtrainer.php">Add Trainer</a>
            <a class="collapse-item" href="mt.php">Manage Trainer </a>
            <a class="collapse-item" href="addstudent.php">add student </a>
            <a class="collapse-item" href="ms.php">Manage students </a>
          </div>
        </div>
      </li>


<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities1">
          <i class="fas fa-fw fa-wrench"></i>
          <span >Groups Management</span>
        </a>
        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Diploma Group </h6>
            <a class="collapse-item" href="addgroup.php">add Group</a>
            <a class="collapse-item" href="managegroup.php">Manage Group </a>
          
          </div>
        </div>
      </li>







      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading" style="color: gold">
        Reports
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      

     <li class="nav-item">
        <a class="nav-link" href="mr.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Manage Report</span></a>
      </li>

      <!-- Nav Item - Tables -->
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
<div class="container">
  <div style="margin: 10px auto;width: 80%;height:auto;
  background-color: rgba(200,200,200,0.2);padding: 30px;
  border-radius: 20px;">
   
     
        <h2 style="text-align: center;">Edit Link Information</h2>
        <hr style="height: 2px;color: white;background-color: white">
      <?php
include'conn.php';
$x='';
if(isset($_GET['id']))
$x=$_GET['id'];

$r=mysqli_query($con,"select * from links where id='$x'");

$row1=mysqli_fetch_array($r);

?>
     

        <form action="editlink.php?id=<?php echo $x; ?>" method="post">
          <label style="color: white">Trainer Name : </label>
       <select name="tn" class="form-control">

        <?php
        include'conn.php';
        $r=mysqli_query($con,"select * from trainers");
       
        while($row=mysqli_fetch_array($r))
        {
          echo'
       <option value="'.$row['name'].'">'.$row['name'].'</option>
         
          ';
        }

        ?>
         
       </select>
       <br>
              <label style="color: white">Group Name : </label>
       <select name="gn" class="form-control">

        <?php
        include'conn.php';
        $r=mysqli_query($con,"select * from groups");
       
        while($row=mysqli_fetch_array($r))
        {
          echo'
       <option value="'.$row['name'].'">'.$row['name'].'</option>
         
          ';
        }

        ?>
         
       </select>
       <br>
                <label>Time : </label>
        <input type="text" name="ti" value="<?php  echo $row1['ti']; ?>" class="form-control"><br>

         <label>Date : </label>
        <input type="text" name="dt" value="<?php  echo $row1['dt']; ?>" class="form-control"><br>

         <label>link : </label>
        <input type="text" name="link" value="<?php  echo $row1['link']; ?>" class="form-control"><br>
        

    <button name="btn" type="submit" class="btn btn-primary btn-lg"> Save Changes <i class="fa fa-save"></i></button> 
    <div style="height: 10px"></div>
        </form>


    <?php


$tname=isset($_POST['tn'])?$_POST['tn']:'';
$gn=isset($_POST['gn'])?$_POST['gn']:'';
$ti=isset($_POST['ti'])?$_POST['ti']:'';
$dt=isset($_POST['dt'])?$_POST['dt']:'';
$link=isset($_POST['link'])?$_POST['link']:'';
if(isset($_POST['btn']))
{
$r=mysqli_query($con,"update links set trainername='$tname', groupname='$gn',ti='$ti',dt='$dt',link='$link' where id='$x'");

if(isset($r))
{
  echo'
<div class="alert alert-success">
  <h3 >Edit Link Successfully</h3>

  <a href="ml.php" class="btn btn-primary"> back to table</a>
</div>
  ';
}

else{
    echo'
<div class="alert alert-danger">
  <h3 >Edit Link failed try agin</h3>
</div>
  ';
}
}
    


    ?>

 
  </div>
</div>
    
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
 


</body>

</html>
