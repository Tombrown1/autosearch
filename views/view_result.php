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

      <script>
          function validation(){
            var name = document.forms['myForm']['search_term'].value;
              if(name == ""){
                return false;
              }
          }
      </script>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top">
      <div class="container-fluid">
              <a class="navbar-brand" href="?v=index"><img src="images/logo.jpg" class="img-fluid" width="10%" height="10%" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            <!-- <div class="form-inline">
                <input type="search" class="form-control mr-md-2" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
            </div> -->
    </div>
  </nav>
   <br><br> 
    
          <div class="result"> 
                  <form action="?v=view_result" onsubmit=" return validation()" name="myForm" method="post">
                  <br><br> 
                  <div class="inner-form">
                        <div class="input-field first-wrap">
                        <div class="svg-wrapper">
                            <svg xmlns="#" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                            </svg>              
                        </div>
                        <input type="search" name="search_term" class="form-control mr-md-2" placeholder="Search" aria-label="Search">                        
                        </div>
                        <div class="input-field second-wrap">
                        <button class="btn btn-search" type="submit" name="search">Search</button>
                      </div>                      
                    </div>
                            <div class="container">  
                                <?php
                        if(isset($_POST['search'])){
                          $search_val = $_POST['search_term'];
                          $search_res = search_vehicle($mysqli, $search_val);
                            if(mysqli_num_rows($search_res)>0){
                              while( $search_row = mysqli_fetch_assoc($search_res)){
                          ?>                    
                        <div class="col-md-12 m-auto">
                        
                          <p>
                          <!-- <ul class="list-group">
                              <li class="list-group"><span><a href="#"><?php echo $search_row['owner_name'] ?></a></li>
                              <li class="list-group"><span><?php echo $search_row['vehicle_name'] ?></span></li>
                              <li class="list-group"><span><?php echo $search_row['vehicle_code'] ?></span></li>
                              <li class="list-group"><span><?php echo $search_row['plate_no'] ?></span></li>
                              <li class="list-group"><span>Details</span></li>
                          </ul> -->
                          </p>

                          
                           <!-- <div class="card">
                             <p>
                             <div class="card-body">
                              <span>Registered Code: </span><span><a href="#"><?php echo $search_row['vehicle_code'] ?></a></span> <br>
                              <span>Vehicle Name: </span><span><?php echo $search_row['vehicle_name'] ?></span> <br>
                              <span>Vehicle Model: </span><span><?php echo $search_row['model'] ?></span> <br>
                              <span>Plate Number: </span><span><?php echo $search_row['plate_no'] ?></span> <br>
                            </div>
                            <div class="card-footer">
                            <a href="?v=visitors_preview&view=1&vehicle_id=<?php echo $search_row['vehicle_id'] ?>" class="btn btn-link">More Detail</a> 
                            </div>
                            </p>  
                           </div>             
                                      -->


                            <!-- displaying results without card     -->
                            <p>
                            <span>Registered Code: </span><span><a href="#"><?php echo $search_row['vehicle_code'] ?></a></span> <br>
                              <span>Vehicle Name: </span><span><?php echo $search_row['vehicle_name'] ?></span> <br>
                              <span>Vehicle Model: </span><span><?php echo $search_row['model'] ?></span> <br>
                              <span>Plate Number: </span><span><?php echo $search_row['plate_no'] ?></span> <br>
                              <a href="?v=visitors_preview&view=1&vehicle_id=<?php echo $search_row['vehicle_id'] ?>" class="btn btn-link">More Detail</a> 
                            </p>
                            </div> 
                          <?php 
                           }
                            }
                        }
                    ?>
                    </div>  
                  </form>
          </div>
          
  
    <!-- <script src="js/extention/choices.js"></script> -->

</body>
</html>
