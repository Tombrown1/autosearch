<?php
    session_start();
    include_once 'connection/db.class.php';
    $mysqli = database();
    include_once 'classes/users.class.php';
    include_once 'classes/add_vehicle.class.php';
    include_once 'classes/vehicle_type.class.php';
    $user_id = $_SESSION['user_id'];
    if(!isset($_SESSION['user_id'])){
        header("Location: ?v=index");
        exit();
    }

      if(isset($_GET['view'])){
        $vehicle_id = $_GET['vehicle_id'];
        $result = select_vehicle_by_id($mysqli, $vehicle_id);
        $vehicle_row = mysqli_fetch_assoc($result);
      }
    
  ?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="#">
    <title>Autosearch</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" >
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
  </head>
  <body>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top">
      <div class="container-fluid">
              <a class="navbar-brand" href="#">Autosearch</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!-- <ul class="navbar-nav  mb-2 mb-md-0"> 
              <li class="nav-item">
                    <a class="nav-link" href="?v=manage_vehicle">Manage Vehicle</a> 
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="?v=vehicle_type">Add Type</a> 
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?v=add_vehicle">Add Vehicle</a> 
                  </li>                
            </ul>  -->
            <ul class="navbar-nav ml-auto mb-2 mb-md-0"> 
            <li class="nav-item">
                <a class="nav-link" href="#">Welcome <?php echo $_SESSION['user_name'] ?></a> 
              </li>
            <li class="nav-item">            
                <a class="nav-link active" href="?v=logout"> Logout </a>
              </li>         
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Signup</a> 
              </li> -->
            </ul>        
        </div>
    </div>
  </nav>
   <br><br> 
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="?v=manage_vehicle">Home</a></li>
              <li class="breadcrumb-item"><a href="?v=add_vehicle">Add Vehicle</a></li>
              <!-- <li class="breadcrumb-item active" aria-current="page">User Profile</li> -->
            </ol>
          </nav>
    <div class="vehicle">  
        <div class="container ">  
            <div class="row gutters-md">
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p>
                            <img src="images/Mercedes-Benz-G-Wagon-2021.jpg" class="img-fluid " alt="">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4 style="color: #ff3b00;"><strong>Vehicle Details</strong></h4>
                    </div>
                    <div class="card-body">                       
                        <div class="row">
                            <div class="col-sm-4">
                                <h5 class="mb-0"><strong>Owner Name</strong></h5>
                            </div>
                            <div class="col-sm-8">
                                <h6><?php echo $vehicle_row['owner_name'] ?></h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h5 class="mb-0"><strong>Vehicle</strong></h>
                            </div>
                            <div class="col-sm-8">
                                <h6><?php echo $vehicle_row['vehicle_name'] ?></h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h5 class="mb-0"><strong>Model</strong></h5>
                            </div>
                            <div class="col-sm-8">
                                <h6><?php echo $vehicle_row['model'] ?></h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h5 class="mb-0"><strong>Vehicle Type</strong></h5>
                            </div>
                            <div class="col-sm-8">
                                <h6><?php 
                                  $veh_type_res = select_vehicle_type_by_id($mysqli,$type_id = $vehicle_row['vehicle_type']);
                                        $veh_type_row = mysqli_fetch_assoc($veh_type_res);
                                        $vehicle_type = $veh_type_row['name'];                                        
                                     echo  $vehicle_type;
                                
                                ?></h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h5 class="mb-0"><strong>Manufacturer</strong></h>
                            </div>
                            <div class="col-sm-8">
                                <h6><?php echo $vehicle_row['manufacturer'] ?></h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h5 class="mb-0"><strong>Purchase Date</strong></h5>
                            </div>
                            <div class="col-sm-8">
                                <h6><?php echo $vehicle_row['purchase_date'] ?></h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h5 class="mb-0"><strong>Registered Date</strong></h5>
                            </div>
                            <div class="col-sm-8">
                                <h6><?php echo $vehicle_row['registered_date'] ?></h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h5 class="mb-0"><strong>Plate Number</strong></h>
                            </div>
                            <div class="col-sm-8">
                                <h6><?php echo $vehicle_row['plate_no'] ?></h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h5 class="mb-0"><strong>Vehicle Code</strong></h5>
                            </div>
                            <div class="col-sm-8">
                                <h6><?php echo $vehicle_row['vehicle_code'] ?></h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h5 class="mb-0"><strong>Owner Phone</strong></h>
                            </div>
                            <div class="col-sm-8">
                                <h6><?php echo $vehicle_row['owner_phone'] ?></h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h5 class="mb-0"><strong>Owner Address</strong></h5>
                            </div>
                            <div class="col-sm-8">
                                <h6><?php echo $vehicle_row['owner_address'] ?></h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="?v=add_vehicle&update=1&vehicle_id=<?php echo $vehicle_row['vehicle_id'] ?>" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                            <!-- <div class="col-sm-8">
                                <a href="#" class="btn btn-danger">Delete</a>
                            </div> -->
                        </div>
                    </div>
                </div>
                </div>
            </div>
      </div>   
    </div>
    <!-- <script src="js/extention/choices.js"></script> -->

</body>
</html>
