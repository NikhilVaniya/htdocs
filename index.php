<?php
	$servername='127.0.0.1';
	$username='root';
	$password='root';
	$dbname = "Instagram";
	$conn=mysqli_connect($servername,$username,$password,"$dbname");
		if(!$conn){
			die('Could not Connect MySql Server:' .mysql_error());
		}
	$sql="select * from user_info";
	$res= mysqli_query($conn,$sql);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Student By Php</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  
      <!--<link rel="stylesheet" href="login.css" />-->
</head>
<body class="hold-transition sidebar-mini layout-fixed bg-dark">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Add Student's</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nikhil Vaniya</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
            <a href="#" class="nav-link active">
              
              <p>
                Add Student

              </p>
            </a>
            
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->



            <h1 class="m-0 text-center">Add Student</h1>
 
		  	
  			<div class="card-body ">
			  	<form method="POST" action="../da.php">
				  	<input type="text" class="form-control" name="username" placeholder="Usernamre" required></br>
				  	<input type="text" class="form-control" name="password" id="txtpass" placeholder="Enter Password" required><br>
  					<input type="submit" name="submit" class="btn btn-primary w-100" value="Add Student" ></br>
  					
  				</form>
  			</div>
  			
  			<!--<div class="login_form_container ">
  				<form method="POST" action="../da.php">
  				<div class="login_form">
		  			<h2>Add</h2>
  					<div class="input_group">
  						<i class="fa fa-user"></i>
  					<input
  					type="text"
  					name="username"
  					placeholder="Username"
  					class="input_text"
		  			autocomplete="off"
  					/>
  					</div>
  				<div class="input_group">
  					<i class="fa fa-unlock-alt"></i>
  			<input
  			type="password"
  			name="password"
  			placeholder="Password"
  			class="input_text"
  			autocomplete="off"
  			/>
  					</div>
  						<div class="button_group" id="login_button">
							<input type="submit" name="submit" class="btn btn-primary w-100" value="Add Student" >
  						</div>
  							
  				</div>
  				</form>
  			</div>-->
  				<table class="table table-bordered mt-3 ">
  					<tr class="bg-info text-dark">
  						<th>Id
  						<th>Username
  						<th>Password
  						<th>Delate
  						<!--<th>Edit/Update -->
  						
  					</tr>
  					
						<?php
							while($row= mysqli_fetch_assoc($res))
							{
								echo "<tr>"."<td class='text-light'>".$row['Id'].
											"<td class='text-light'>".$row['Username'].
											"<td class='text-light'>".$row['Password'].
									 		"<td> <form method='GET' action='delate.php?id=$row[Id]'>".
									 		"<input type='text' name='id1' value='$row[Id]' hidden>".
									 		"<input type='submit' name='submit1' class='btn btn-danger' value='Delate' >".
									 		"</form>"/*.
									 		"<td> <form method='GET' action='update1.php?id=$row[Id]& u=$row[Username]& p=$row[Password]'>".
									 		"<input type='text' name='id1' value='$row[Id]' >".
									 		"<input type='text' name='u' value='$row[Username]' >".
									 		"<input type='text' name='p' value='$row[Password]' >".
									 		"<input type='submit' name='submit1' class='btn btn-primary' value='Edit/Update' >".
									 		"</form>"*/
									 		;
							}
						
  						?>
  						
  				</table>
<!-- main end -->
</div>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>