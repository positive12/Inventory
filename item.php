<?php include('page/session.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="refresh" content="900;url=index.php" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Inventory System</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="item.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Item Area</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
        
        
        
        <!--============================= MODAL BUTTONS   =========================================================================== -->
        <div>
            <a class="btn btn-success" href="#" data-toggle="modal" data-target="#logoutModals">Add server</a>
            <a class="btn btn-success" href="#" data-toggle="modal" data-target="#addnet">Add Netwotk Cabinet </a>
           </br></br>
        </div>
        
         
        <!-- ============================= DataTables Example ============================================================================-->
        <div class="card mb-3">
          <div class="card-header">
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Server Name</th>
                    <th>IP Address</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Server Name</th>
                    <th>IP Address</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  
                  
                 <?php
                      require'page/connect.php';

                    $show = ("SELECT * From server ORDER BY s_name");
                    $shows= mysqli_query ($db, $show);
                      while ($row = mysqli_fetch_assoc($shows)){
                        echo "<tr>";
                           echo "<td> ".$row['s_name']." </td>";
                           echo "<td> ".$row['s_ipadd']." </td>";
                           echo "<td> ".$row['s_username']." </td>";
                           echo "<td> ".$row['s_password']." </td>";
                           echo "<td> ".$row['s_status']." </td>";
                           echo '<td><div align="center">'.'<a rel="facebox" href=authoredit.php?id=' . $row["s_id"] .' ><img  src="image/edit.png" width="25" ></a>'.'   '.'<a onclick="return confirmDelete(this);"  href=page/delete.php?id=' . $row["s_id"] .' ><img src="image/delete.png" width="25" ></a>'.' </div></td>';
                        echo "</tr>";
                      }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2018</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>





  <!--==============================  Add Server Modal  ===========================================================================================================0-->

  <div class="modal fade" id="logoutModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Server</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                
                <?php include"page/add.php"?>
                
                <form action="item.php" method="post">
                  <div class="form-group">
                    <input type="text" name="sitem" class="form-control" placeholder="Server Name" required>

                  </div>
                  <div class="form-group">
                    <input type="text" name="sip" id="ip"  class="form-control"  placeholder="Ip Address" required pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" >
                  </div>
                  <div class="form-group">
                    <input type="text" name="susername" value="" class="form-control" placeholder="Username" required>
                  </div>

                  <div class="form-group">
                    <input type="text" name="spassword" class="form-control" placeholder="Password" required>
                  </div>

                  <div class="form-group">
                    <input type="text" name="pin" class="form-control" placeholder="PinCode" required>
                  </div>

                  <div class="form-group">
                     <select name="sstatuss" class="form-control form-control1" required>
                             <option selected="true" disabled="disabled"><p>Choose Category</p></option>
                            <option name="Active" value="Active">Active</option>
                            <option name="Deactivated" value="Deactivated">Deactivated</option>
                          </select>
                  </div>

                  <div class="form-group">
                     <select name="rack" class="form-control form-control1" required>
                            <option selected="true" disabled="disabled"><p>Choose Rack</p></option>
                            <option value="Rack 1">Rack 1</option>
                            <option value="Rack 2">Rack 2</option>
                            <option value="Rack 3">Rack 3</option>
                            <option value="Rack 4">Rack 4</option>
                            <option value="Rack 5">Rack 5</option>
                            <option value="Rack 6">Rack 6</option>
                            <option value="Rack 7">Rack 7</option>
                            <option value="Rack 8">Rack 8</option>
                            <option value="Rack 9">Rack 9</option>
                            <option value="Rack 10">Rack 10</option>
                            <option value="Rack 11">Rack 11</option>
                            <option value="Rack 12">Rack 12</option>
                            <option value="Rack 13">Rack 13</option>
                          </select>
                  </div>
                  
                  <div class="form-group">
                   
                    <select name="snum" class="form-control form-control1" required>
                            <option value="" selected="true" disabled="disabled"><p>Choose Server</p></option>
                            <?php
                              include('page/connect.php');
                                $server = ("SELECT * FROM servers");
                                 $servers = mysqli_query($db, $server);
                                  $checking = mysqli_num_rows ($servers);
                                  
                                 if($checking > 0){
                                      while($rows = mysqli_fetch_assoc($servers)){
                                      echo '<option value="'.$rows['server'].'">'.$rows['server'].'</option>';
                                  }}else{
                                    echo'<option value="">Add server First</option>'; 
                                 }
                            
                             ?>
                          </select>
                  </div>
                  
                  
                  <div class="form-group">
                    <select name="scategory" class="form-control form-control1" required>
                             <option value="" selected="true" disabled="disabled"><p>Choose Category</p></option>
                            <option name="RDCC" value="RDCC">RDCC</option>
                            <option name="LiteCloud" value="LiteCloudloud">LiteCloud</option>
                            <option name="Equicredit" value="Equicredit">Equicredit</option>
                          </select>
                  </div>
                  <div class="form-group">
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="add" class= "btn btn-secondary" value="Add IP "></input>
          <a href= "item.php"><button class="btn btn-secondary" type="button">Cancel</button></a>
          <input type="submit" name="addbtns" class="btn btn-secondary" value="ADD Server"></input>

          </form>
        </div>
      </div>
    </div>
  </div>


<!-- ===================================== Add Network modal ================================================================ -->

  <div class="modal fade" id="addnet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Network Cabinet</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                
                <?php include"page/addnet.php"?>
                <?php include"page/error.php" ?>
                
                <form action="item.php" method="post">
                  <div class="form-group">
                    <input type="text" name="cnumber" class="form-control" value ="<?php echo $cnumber; ?>" placeholder="Network Cabinet" required>
                  </div>
              </div>
            </div>
          </div>
        </div>
          <div class="modal-footer">
            <input type="submit" name="addnets" class="btn btn-primary"/>
            <a class="btn btn-primary" href="item.php">Logout</a>
          </div>
        </form> 
      </div>
    </div>
  </div>

  <!-- ===================================== Logout modal ================================================================ -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
  <script>
        $("#form").submit(function(e){
        e.preventDefault();
        //call your method

        });
   </script>
  <script>
      function confirmDelete(link) {
         if (confirm("Are you sure you want to delete?")) {
            doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
         }
         return false;
      }

      function confirmDeletes(link) {
         if (confirm("Are you sure you want to delete?")) {
            doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
         }
         return false;
      }
  </script>


</body>

</html>