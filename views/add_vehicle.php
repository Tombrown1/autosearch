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

     if(isset($_GET['update'])){
            $operation_msg = "Edit Vehicle Record";
          }else{
            $operation_msg = "Registered Vehicle Here!";
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
        <div class="container">
            <div class="row gutters-md">
                <div class="col-md-2">
                
                </div>
                <div class="col-md-8">
                    
            <div class="card">
                <div class="card-body">                 
            <?php
            if(isset($_GET['update'])){
              $vehicle_id = $_GET['vehicle_id'];
              $result = select_vehicle_by_id($mysqli, $vehicle_id);
              $edit_row = mysqli_fetch_assoc($result);
             
            ?>
               <!-- Vehicle Edit Form Begins Here! -->
                <form action="includes/update_vehicle.php" method="POST">
            <div class="container" style="align-items: center; color: #ff3b00;">
              <h2 style="align-items: center;"><?php echo $operation_msg?></h2>
            </div>
            <br>
        <div class="container">
              <input type="hidden" name="vehicle_id" value="<?php echo $edit_row['vehicle_id'] ?>">
            <div class="form-group">               
                <input type="text" name="vehicle_name" class="form-control" value="<?php echo $edit_row['vehicle_name']?>" required>
            </div>       
            <div class="form-group">
                <!-- <label for="model">Vehicle Model</label> -->
                <input type="text" name="model" class="form-control" value="<?php echo $edit_row['model']?>" required>
            </div>
            <div class="form-group">                
                <select name="vehicle_type" class="form-control">
                    <option value="vehicle_type">Select Vehicle Type</option>
                    <?php
                    $result = select_vehicle_type($mysqli);
                      if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                          $type_id = $row['type_id'];
                          $name = $row['name'];

                          // $sel_res = select_vehicle_type_by_id($mysqli,$type_id = $edit_row['vehicle_type']);
                          // $checked = false;
                          //   if(mysqli_num_rows($sel_res)>0){
                          //     while($sel_row = mysqli_fetch_assoc($sel_res)){
                          //       $veh_type_id = $sel_row['type_id'];
                          //       $name = $sel_row['name'];

                          //       // if($veh_type_id == $type_id){
                          //       //   $checked = true;
                          //       //   break;
                          //       // }
                          //     }
                          //   }

                        ?>
                      <option value="<?php echo $type_id?>" <?php if($type_id == $edit_row['vehicle_type']){ echo "selected";} ?> ><?php echo $name ?></option>
                    <?php 
                    }
                      }

                      
                ?>
                </select>
            </div>
            <div class="form-group">
                <!-- <label for="manufacturer">Vehicle Manufacturer</label> -->
                <input type="text" name="manufacturer" class="form-control" value="<?php echo $edit_row['manufacturer']?>" required>
            </div>       
            <div class="form-group">
                <!-- <label for="purchase_date">Purchase Date</label> -->
                <input type="text" name="purchase_date" class="form-control" value="<?php echo $edit_row['purchase_date']?>" required>
            </div>
            <div class="form-group">
                <!-- <label for="registered_date">Registered Date</label> -->
                <input type="text" name="registered_date" class="form-control" value="<?php echo $edit_row['registered_date']?>" required>
            </div>
            <div class="form-group">
                <!-- <label for="plate_no">Vehicle Plate Number</label> -->
                <input type="text" name="plate_no" class="form-control" value="<?php echo $edit_row['plate_no']?>" required>
            </div>       
            <div class="form-group">
                <!-- <label for="vehicle_code">Vehicle Code</label> -->
                <input type="text" name="vehicle_code" class="form-control" value="<?php echo $edit_row['vehicle_code']?>" required>
            </div>
            <div class="form-group">
                <!-- <label for="owner_name">Vehicle Owner Name</label> -->
                <input type="text" name="owner_name" class="form-control" value="<?php echo $edit_row['owner_name']?>" required>
            </div>       
            <div class="form-group">
                <!-- <label for="owner_phone">Phone Number</label> -->
                <input type="text" name="owner_phone" class="form-control" value="<?php echo $edit_row['owner_phone']?>" required>
            </div>
            <div class="form-group">
                <!-- <label for="owner_address">Owner Address</label> -->
                <input type="text" name="owner_address" class="form-control" value="<?php echo $edit_row['owner_address']?>" required>
            </div>       
            <div class="form-group">
                <!-- <label for="date">Date Added</label> -->
                <input type="date" name="date" class="form-control" value="<?php echo $edit_row['date']?>" required>
            </div>
        </div>
       <div class="card-footer">
        <input type="submit" name="submit" class="btn btn-primary" value="Update Vehicle">
        </form>
       </div>
          <?php  
            }else{
              ?>
              <!-- Add Vehicle Form Begins Here! -->
              <form action="includes/add_vehicle.php" method="POST">
            <div class="container" style="align-items: center; color: #ff3b00;">
              <h2 style="align-items: center;"><?php echo $operation_msg?></h2>
            </div>
            <br>
        <div class="container">
            <div class="form-group">
                <!-- <label for="vehicle_name">Vehicle Name</label> -->
                <input type="text" name="vehicle_name" class="form-control" placeholder="Vehicle Name" required>
            </div>       
            <div class="form-group">
                <!-- <label for="model">Vehicle Model</label> -->
                <input type="text" name="model" class="form-control" placeholder="Vehicle Model" required>
            </div>
            <div class="form-group">                
                <select name="vehicle_type" class="form-control">
                    <option value="vehicle_type">Select Vehicle Type</option>
                    <?php
                    $result = select_vehicle_type($mysqli);
                      if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                          $type_id = $row['type_id'];
                          $name = $row['name'];
                        ?>
                      <option value="<?php echo $type_id?>"><?php echo $name ?></option>
                    <?php 
                    }
                      }

                      
                ?>
                </select>
            </div>
            <div class="form-group">
                <!-- <label for="manufacturer">Vehicle Manufacturer</label> -->
                <input type="text" name="manufacturer" class="form-control" placeholder="Vehicle Manufacturer" required>
            </div>       
            <div class="form-group">
                <!-- <label for="purchase_date">Purchase Date</label> -->
                <input type="text" name="purchase_date" class="form-control" placeholder="Purchase Date" required>
            </div>
            <div class="form-group">
                <!-- <label for="registered_date">Registered Date</label> -->
                <input type="text" name="registered_date" class="form-control" placeholder="Registered Date" required>
            </div>
            <div class="form-group">
                <!-- <label for="plate_no">Vehicle Plate Number</label> -->
                <input type="text" name="plate_no" class="form-control" placeholder="Vehicle Plate Number" required>
            </div>       
            <div class="form-group">
                <!-- <label for="vehicle_code">Vehicle Code</label> -->
                <input type="text" name="vehicle_code" class="form-control" placeholder="Vehicle Code" required>
            </div>
            <div class="form-group">
                <!-- <label for="owner_name">Vehicle Owner Name</label> -->
                <input type="text" name="owner_name" class="form-control" placeholder="Vehicle Owner Name" required>
            </div>       
            <div class="form-group">
                <!-- <label for="owner_phone">Phone Number</label> -->
                <input type="text" name="owner_phone" class="form-control" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <!-- <label for="owner_address">Owner Address</label> -->
                <input type="text" name="owner_address" class="form-control" placeholder="Owner Address" required>
            </div>       
            <div class="form-group">
                <!-- <label for="date">Date Added</label> -->
                <input type="date" name="date" class="form-control" placeholder="Date Added" required>
            </div>
        </div>
          <div class="card-footer">
          <input type="submit" name="submit" class="btn btn-primary" value="Add Vehicle">
          </form>
          </div>
           <?php   
            }
        ?>  
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
