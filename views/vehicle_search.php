<?php
include_once 'connection/db.class.php';
$mysqli = database();

include_once 'classes/add_vehicle.class.php';


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

<?php
  // if(isset($_GET['view'])){
  //   $vehicle_id = $_GET['vehicle_id'];
  //   $result = select_vehicle_by_id($mysqli, $vehicle_id);
  //   $veh_row = mysqli_fetch_assoc($result);
  //   $veh_id = $veh_row['vehicle_id']; 
  // }
?>

<br><br> 
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="?v=index">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="?v=add_vehicle">Add Vehicle</a></li> -->
              <!-- <li class="breadcrumb-item active" aria-current="page">User Profile</li> -->
            </ol>
      </nav>

<div class="vehicle">  
    <div class="container-fluid"> 
            <div class="card">
                <div class="card-header">
                    <h4 style="color: #ff3b00;"><strong>Registered Vehicles</strong></h4>
                </div>
                <div class="result_div">
                <div class="card-body">
                    <div class="table table-hover table-border">
                        <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Owner Name</th>
                            <th scope="col">Vehicle Name</th>
                            <th scope="col">Vehicle Code</th>
                            <th scope="col">Model</th>
                            <th scope="col">Type</th>
                            <th scope="col">Manufacturer</th>
                            <th scope="col">Purchase Date</th>
                            <th scope="col">Registered Date</th>
                            <th colspan="2">Plate Number</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th  class="text-right">Action</th>
                          </tr>
                    </thead> 
                    <?php

                    $cnt = 1;
                        if(isset($_POST['search'])){
                            $search_val = $_POST['search_term'];
                            $search_res = search_vehicle($mysqli, $search_val);
                        
                                if(mysqli_num_rows($search_res) > 0){
                                    while($search_row = mysqli_fetch_assoc($search_res)){
                                    ?>
                                <tbody>
                                    <tr>
                                    <td><?php echo $cnt  ?></td>
                                        <td><?php echo $search_row['owner_name'] ?></td>
                                        <td><?php echo $search_row['vehicle_name'] ?></td>
                                        <td><?php echo $search_row['vehicle_code'] ?></td>
                                        <td><?php echo $search_row['model']?></td>
                                        <td><?php echo $search_row['vehicle_type']?></td>
                                        <td><?php echo $search_row['manufacturer']?></td>
                                        <td><?php echo $search_row['purchase_date']?></td>
                                        <td><?php echo $search_row['registered_date']?></td>
                                        <td colspan="2"><?php echo $search_row['plate_no']?></td>
                                        <td><?php echo $search_row['owner_phone']  ?></td>                                        
                                        <td><?php echo $search_row['owner_address']?></td>
                                        
                                        <td><a href="?v=visitors_preview&view=1&vehicle_id=<?php echo $search_row['vehicle_id'] ?>" class="btn btn-primary">Preview</a></td>
                                    </tr>
                                </tbody>
                                <?php
                                $cnt ++;
                                    }
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
