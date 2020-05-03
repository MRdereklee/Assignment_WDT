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

  <title>New Cusine -- Food.INC</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <style>
  .btn_submit {
  font-weight: 600px;
  letter-spacing: 1px;
  text-transform: uppercase;
  background: #27AF99;
  border: 0;
  border-radius: 3px;
  padding: 11px 30px;
  color: #fff;
  transition: 0.3s;
  margin: 0px 10px 0 0
}

  .btn_submit:hover {
  background: #219280;
  cursor: pointer;
}
  </style>
</head>

<body id="page-top">
  <!--===================
  PHP CODE
  ===================--->
  <?php
  include("php/connection.php");
  $result = mysqli_query($con, "SELECT * FROM cuisine_table ORDER BY cuisine_type ASC");
   ?>
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
            <a class="collapse-item active" href="addnewproduct.php">Add Product</a>
            <a class="collapse-item" href="editproduct.php">Edit Exisiting Product</a>
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
              <a class="nav-link" href="admin.html" id="">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome Admin</span>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Add Product</h1><br>
          <h2 class="h4 mb-4 text-gray-700">Add New Cusine</h2>

          <!-- New Cusine Form -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Cusine Information Form</h6>
            </div>
            <div class="card-body">
              <form action="php/insert_cusine.php" method="post" enctype="multipart/form-data">
                <p>Product Name:</p>
                <input class="card col-sm-12 form-control " type="text" name="p_name" required="required"><br>
                <p>Product Description:</p>
                <textarea class="card col-sm-12 form-control" name="p_description" required="required" style="height:100px;"></textarea><br>
                <p>Photo upload:</p>
                <input class="card" type="file" name="photo" id="photo" required="required"/><br>
                <button type="submit" class="btn_submit">Add</button>
                <button type="reset" class="btn_submit">Reset</button>
              </form>
            </div>
          </div>
          <br>
        <h2 class="h4 mb-4 text-gray-800">Add New Food</h2>
        <!-- New Food Form -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cusine Information Form</h6>
          </div>
          <div class="card-body">
            <form action="php/insert_item.php" method="post" enctype="multipart/form-data">
              <p>Item Name:</p>
              <input class="card col-sm-12 form-control " type="text" name="item_name" required="required"><br>
              <p>Item's Cuisine</p>
              <select name="item_cuisine" class="card">
                <?php
                while ($row = mysqli_fetch_array($result))
                {
                echo "<option value='".$row['cuisine_id']."'>".$row['cuisine_type']."</option>";
                }
                ?>
              </select>
              <p>Item's Description:</p>
              <textarea class="card col-sm-12 form-control" name="item_description" required="required" style="height:100px;"></textarea><br>
              <p>Item's Price:</p>
              <input class="card col-sm-12 form-control " type="text" name="item_price" required="required"><br>
              <p>Photo upload:</p>
              <input class="card" type="file" name="photo" id="photo" required="required"/><br>
              <button type="submit" class="btn_submit">Add</button>
              <button type="reset" class="btn_submit">Reset</button>
            </form>
          </div>
        </div>

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Food.INC</span>
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
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
