<?php
    session_start();
    include_once 'connection/db.class.php';
    $mysqli = database();
    include_once 'classes/users.class.php';
    $user_id = $_SESSION['user_id'];
    if(!isset($_SESSION['user_id'])){
        header("Location: ?v=index");
        exit();
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
   <br><br><br>
      <div class="container">
          <div class="row gutters-md">
              <div class="col-md-2">
              
              </div>
              <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                          <form action="includes/vehicle_type.php" method="POST">
                                <div class="container" style="align-items: center; color: #ff3b00;">
                                  <h2 style="align-items: center;">Create Vehicle Type Here!</h2>
                                </div>
                                <br>
                                <div class="container">
                                <div class="form-group">
                                    <label for="name">Enter Vehicle Type</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Vehicle Type">
                                </div>       
                                <div class="form-group">
                                    <label for="manufacturer">Vehicle Manufacturer</label>
                                    <input type="text" name="manufacturer" class="form-control" placeholder="Vehicle Manufacturer">
                                </div>
                            </div>
                           <div class="card-footer">
                           <input type="submit" name="submit" class="btn btn-primary" value="Add Vehicle Type">
                          </form>
                           </div>
                        </div>
                  </div>
              </div>
              <div class="col-md-2">
              
              </div>
          </div>
      </div>
    <!-- <script src="js/extention/choices.js"></script> -->

</body>
</html>
