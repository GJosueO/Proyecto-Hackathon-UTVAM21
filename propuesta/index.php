<?php 
  include('conexion.php');
  $sqladm ='SELECT * FROM administradores';
  $resul = $conexion->query($sqladm); 
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicons.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Perfil Usuario</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
     <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="assets/css/login.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
	<body >
<div class="container">
	 <?php 
        
        
            if (isset($_POST['mostrar'])) {

            $Usuario = $_POST['nombre']; 
            $Contraseña = $_POST['apellidop'];
           

           $sqladm = "SELECT * FROM `administradores` WHERE `Usuario` = '$Usuario' AND `Contraseña` = '$Contraseña'";
            $resul = $conexion->query($sqladm);
            if ($resul ==1) {
            	header('Location:uesr.html');
            }
            
            } else {
      echo("error");
    }
    $conexion->close();
        ?>

		
			<form class="form-login" action="index.php" method="POST">
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
  
  
  						<button type="submit" class="btn btn-danger">Buscar</button>
				
			</form>
		
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

    

</html>
