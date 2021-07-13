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
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
            <ul class="navbar-nav ml-auto mb-2 mb-md-0"> 
            <li class="nav-item">            
                <a class="nav-link " href="?v=login"> Login</a>
              </li>         
              <li class="nav-item">
                <a class="nav-link" href="?v=signup">Signup</a> 
              </li>
            </ul>        
        </div>
    </div>
  </nav>
   <!-- onsubmit="return do_search();"<strong>Search Registered Vehicle Here!</strong> -->
    <div class="vehicle">                       
      <form action="?v=view_result" onsubmit="return validation()" name="myForm" method="POST">
            <div class="container" style="align-items: center; color: #ff3b00;">
              <img src="images/logo.jpg " class="img-fluid mx-auto d-block" width="50%" height="50%" alt="">
            </div>
            <br>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="#" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>              
            </div>
            <input type="text" name="search_term"  placeholder="Enter Registered Car Number to Search Here!"/>
          </div>              
          <div class="input-field second-wrap">
            <button class="btn btn-search" name="search" type="submit">SEARCH</button>            
          </div>
        </div>
        <span class="info">Cars, Vans, Minivans, Suv, Trucks</span>
      </form>
    </div>
    <div id="result_div"></div>
    <!-- <script src="js/extention/choices.js"></script> -->
  </body>

  <!-- FOOTER -->
 <footer> 
  <!-- <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2021 Arecent Solutions, inc. &middot; <a href="#">www.tombrowngodwin.com</a> &middot; <a href="#">Terms</a></p>
  </footer> -->   

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
<!-- <script src="../assets/js/vendor/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script> -->
  <script src="../assets/jquery/cdn.jsdelivr.net_npm_jquery@3.2_dist_jquery.min"></script>
  <script src="../assets/js/cdnjs.cloudflare_ajax_lib.min.js"></script>
 <script src="../assets/js/vendor/popper.min.js"></script>
<script src="../assets/jquery/bootstrap.min.js"></script>


<!-- <script type="text/javascript">
  function do_search(){
    var search_term=$("#search_term").val();
    $.ajax
    ({
      type:'post',
      url:'?v=vehicle_search',
      date:{
          search:"search",
          search_term:search_term
      },
      success: function(response)
      {
        document.getElementByID("result_div").innerHTML = response;
      }
    });


    return false;
  }
 
</script> -->

 <!-- Copyright -->
 
<!-- <div class="text-center p-3" style="background-color: #17a2b8; ">
© 2020 Copyright:
<a class="text-light" href="#">tombrowngodwin.com</a>
</div> -->
<!-- Copyright -->
</footer>
</body>
</html>
