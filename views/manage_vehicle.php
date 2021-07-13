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
              <!-- <a class="navbar-brand" href="#">Autosearch</a> -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <ul class="navbar-nav  mb-2 mb-md-0"> 
              <li class="nav-item">
                    <a class="nav-link" href="?v=manage_vehicle">Manage Vehicle</a> 
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="?v=vehicle_type">Add Type</a> 
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?v=add_vehicle">Add Vehicle</a> 
                  </li>                
            </ul> 
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
   
    <div class="vehicle">  
        <div class="container-fluid"> 
          <br><br>
                <div class="card">
                    <div class="card-header">
                        <h4 style="color: #ff3b00;"><strong>Manage Registered Vehicles</strong></h4>
                    </div>
                    <div class="card-body">
                        <div class="table table-hover table-border table-responsive"> 
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Vehicle Name</th>
                                <th>Model</th>
                                <th>Type</th>
                                <th>Manufacturer</th>
                                <th>Purchase Date</th>
                                <th>Registered Date</th>
                                <th>Plate Number</th>
                                <th>Vehicle Code</th>
                                <th>Owner Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                              </tr>
                          </thead>
                          <?php
                            $cnt = 1;
                            $result = select_vehicle($mysqli);
                              if(mysqli_num_rows($result) > 0){
                                while($rows = mysqli_fetch_assoc($result)){
                                  $vehicle_name    = $rows['vehicle_name'];
                                  $model           = $rows['model'];
                                  //$vehicle_type    = $rows['vehicle_type'];
                                      $veh_type_res = select_vehicle_type_by_id($mysqli,$type_id = $rows['vehicle_type']);
                                        $veh_type_row = mysqli_fetch_assoc($veh_type_res);
                                           $vehicle_type = $veh_type_row['name'];

                                  
                                  $manufacturer    = $rows['manufacturer'];
                                  $purchase_date   = $rows['purchase_date'];
                                  $registered_date = $rows['registered_date'];
                                  $plate_no        = $rows['plate_no'];
                                  $vehicle_code    = $rows['vehicle_code'];
                                  $owner_name      = $rows['owner_name'];
                                  $owner_phone     = $rows['owner_phone'];
                                  $owner_address   = $rows['owner_address'];

                                  // echo $vehicle_name;
                                  // exit;
                                 ?> 
                            <tbody>
                            <tr>
                                    <td><?php echo $cnt ?></td>
                                    <td><?php echo $vehicle_name ?></td>
                                    <td><?php echo $model ?></td>
                                    <td><?php echo $vehicle_type?></td>
                                    <td><?php echo $manufacturer ?></td>
                                    <td><?php echo $purchase_date ?></td>
                                    <td><?php echo $registered_date ?></td>
                                    <td><?php echo $plate_no?></td>
                                    <td><?php echo $vehicle_code ?></td>
                                    <td><?php echo $owner_name ?></td>
                                    <td><?php echo $owner_phone ?></td>
                                    <td><?php echo $owner_address?></td>
                                    <td><a href="?v=vehicle_preview&view=1&vehicle_id=<?php echo $rows['vehicle_id'] ?>" class="btn btn-success">Details</a></td>                                    
                                  </tr>
                            </tbody>
                            <?php  
                        $cnt ++;
                            }
                          }
                        ?>  
                          </table>              
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- <script src="js/extention/choices.js"></script> -->

</body>
</html>
