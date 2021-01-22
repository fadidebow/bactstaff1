
<?php
ob_start();

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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
 
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

<link href="../css/bootstrap.css" rel="stylesheet">
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

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
<div class="container-fluid" style="background-color: rgba(255,255,255,0.9);">
  <div style="height: 10px;"></div>

  <div class="table-responsive">
    <table class="table" id="x">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
         <th>Group Name</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>
    </thead>

    <tbody>


      <?php

      include'conn.php';

      $res=mysqli_query($con,"select * from students");
      while($row=mysqli_fetch_array($res))
      {
        echo'
<tr>
  <td>'.$row['id'].'</td>
  <td>'.$row['stuname'].'</td>
  <td>'.$row['stuemail'].'</td>
  <td>'.$row['password'].'</td>
   <td>'.$row['groupname'].'</td>
  <td><a href="ms.php?id='.$row['id'].'" class="btn btn-danger">Delete</a></td>
  <td><a href="editstu.php?id='.$row['id'].'" class="btn btn-primary">Update</a></td>

</tr>
        ';
      }



if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $t=mysqli_query($con,"delete from students where id='$id'");
  if(isset($t))
    header("Location: mt.php");
  #  echo '<meta http-equiv="refresh" content="0;url=mt.php">';
}


      ?>
      
    </tbody>
    
  </table>
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
   <script src="../js/bootstrap.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#x').DataTable();
} );
</script>

</body>

</html>

<?php
ob_end_flush();
?>
