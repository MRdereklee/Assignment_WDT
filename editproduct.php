<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <title>All Member -- Food.INC</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.html">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">Food.INC</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="admin.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Management
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-comments"></i>
          <span>Manage User</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage User:</h6>
            <a class="collapse-item" href="memberorder.php">Member's Orders</a>
            <a class="collapse-item" href="customerreply.php">Customer Reply</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-tasks"></i>
          <span>Manage Product</span>
        </a>
        <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Product Catogaries:</h6>
            <a class="collapse-item" href="addnewproduct.php">Add Product</a>
            <a class="collapse-item active" href="editproduct.php">Edit Exisiting Product</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Reports
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="allmember_table.php">
          <i class="fas fa-user"></i>
          <span>View All Member</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="allproduct_table.php">
          <i class="fas fa-box-open"></i>
          <span>View All Product</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="php/logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background: #EDFFFC ">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <!-- divider -->
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link" href="index.html" id="">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome Admin</span>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit / Delete Product</h1>

            <!--==================
            PHP CODE
            ===================-->
          <?php
          //Connect to database
          include("php/connection.php");
          $result = mysqli_query($con, "SELECT * FROM cuisine_table ");
           ?>
           <!-- Edit Product Database -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Cuisine Type</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Picture</th>
                      <th>Cuisine Type</th>
                      <th>Cuisine Description</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Picture</th>
                      <th>Cuisine Type</th>
                      <th>Cuisine Description</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <!-- Show Data -->
                  <?php
                  while($row = mysqli_fetch_array($result))
                  {
                  echo  "<tr>";
                  echo  "<td><img src='".$row['cuisine_pic']."' width='100px' height='100px'></td>";
                  echo  "<td>".$row['cuisine_type']."</td>";
                  echo  "<td>".$row['cuisine_description']."</td>";
                  echo  "<td><a href=\"editcuisine.php?id=".$row['cuisine_id']."\">Edit</a></td>";
                  echo  "<td><a href=\"php/deletecuisine.php?id=".$row['cuisine_id']."\" onClick=\"return confirm('Delete ".$row['cuisine_type']." Cuisine?');\">Delete</a></td>";
                  echo  "</tr>";
                  }
                  mysqli_close($con);
                   ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

<?php
include("php/connection.php");
$result = mysqli_query($con, "SELECT * FROM item_table ");
 ?>

          <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Edit / Delete Product</h1>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Item Type</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Picture</th>
                      <th>Item Name</th>
                      <th>Item Description</th>
                      <th>Price</th>
                      <th>Cuisine Type</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Picture</th>
                      <th>Item Name</th>
                      <th>Item Description</th>
                      <th>Price</th>
                      <th>Cuisine Type</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <!-- Show Data -->
                  <?php
                  while($row = mysqli_fetch_array($result))
                  {
                  echo  "<tr>";
                  echo  "<td><img src='".$row['item_picture']."' width='100px' height='100px'></td>";
                  echo  "<td>".$row['item_name']."</td>";
                  echo  "<td>".$row['item_description']."</td>";
                  echo  "<td>".$row['item_price']."</td>";
                  echo  "<td>".$row['cuisine_id']."</td>";
                  echo  "<td><a href=\"edititem.php?id=".$row['item_id']."\">Edit</a></td>";
                  echo  "<td><a href=\"php/deleteitem.php?id=".$row['item_id']."\" onClick=\"return confirm('Delete ".$row['item_name']." details?');\">Delete</a></td>";
                  echo  "</tr>";
                  }
                   ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Food.INC 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
