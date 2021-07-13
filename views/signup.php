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
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
            <ul class="navbar-nav ml-auto mb-2 mb-md-0">
            <li class="nav-item">            
                <a class="nav-link active" href="?v=index">Home</a>
              </li>
              <li class="nav-item">            
                <a class="nav-link active" href="?v=login"> Login</a>
              </li>         
              
            </ul>        
        </div>
    </div>
  </nav>
    <br><br>
        <div class="container">                  
           <div class="row gutters-md">
                <div class="col-md-3">
                    <!-- <img src="images/vehicle_bg.jpeg" class="img-responsive" alt=""> -->
                </div> 
               
                  <div class="col-md-6 mb-3">
                      <div class="card">
                          <div class="card-header">                           
                              <h2 style="color: #ff3b00;">Signup Here!</h2>
                          </div>                        
                          <div class="card-body">                       
                          <form action="includes/signup.php" method="POST">                          
                                <div class="form-group">
                                    <label for="user_name">User Name</label>
                                    <input type="text" name="user_name" class="form-control" placeholder="User Name" required>
                                </div>       
                                <div class="form-group">
                                    <label for="user_email">Email</label>
                                    <input type="email" name="user_email" class="form-control" placeholder="Email" required>
                                </div>            
                                <div class="form-group">
                                    <label for="user_pass">Password</label>
                                    <input type="password" name="user_pass" class="form-control" placeholder="Password" required>
                                </div>       
                                <div class="form-group">
                                    <label for="user_phone">Phone Number</label>
                                    <input type="text" name="user_phone" class="form-control" placeholder="Phone Number" required>
                                </div> 
                          </div>
                          <div class="card-footer">
                          <input type="submit" name="submit" class="btn btn-primary" value="Signup">
                                                      
                          </form>
                          </div>
                      </div>  
                    </div>
                  <div class="col-md-3">
                    <!-- <img src="images/vehicle_bg.jpeg" class="img-responsive" alt=""> -->
                  </div>
           </div>
        </div>   
    
    <!-- <script src="js/extention/choices.js"></script> -->

</body>
</html>
