<?php 
  include('conexion.php');
  session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $Usuario = $_POST['Usuario'];
      $Contraseña = $_POST['Contraseña']; 
    
      $sqladm = "SELECT * FROM `administradores` WHERE `Usuario` = '$Usuario' AND `Contraseña` = '$Contraseña'";
            $result = $conexion->query($sqladm);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         
         
         
         header("location:table.php");
      }else {
         echo("Your Login Name or Password is invalid");
      }
   }
?> 
 
<html lang="es">
<head>
    <link href="assets/css/login.css" rel="stylesheet" />




	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Login</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/user.css" rel="stylesheet" />
     
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/gra-4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
             <a> <img src="assets/img/tiza.png">
                </a>
            </div>

            <ul class="nav">
                 <li class="active">
                    <a href="admin.html">
                       <i class="fa fa-lock"></i>
                        <p>Login</p>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                  <i class="fa fa-map-marker"></i>
                        <p>Ubicacion</p>
                    </a>
                </li>
                 <li>
                    <a href="dashboard.html">
                      <i class="fa fa-bar-chart"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Login</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 <i class="fa fa-lock"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a>
                                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
     
<center>
      <form class="form-login" action="table.php" method="POST">
                <img src="assets/img/as.png">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="Usuario" id="Usuario" aria-describedby="emailHelp">
                    </div>
                    <br>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="Contraseña" id="Contraseña">
                        </div>
  
                        <br>
                        <button type="submit" class="btn btn-danger">Buscar</button>
                
            </form>
               
              
                    
            </div>
                
         </div>
            
      </div>

       
</center>
       
            </div>
        </div>



    </div>
</div>


    
</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


    
</html>
