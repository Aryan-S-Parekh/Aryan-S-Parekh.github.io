<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome JS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
  <!--<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>-->
  <!--  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>-->
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  </head>

<body>
  
       

            <nav class = "navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                   <span class="navbar-brand mb-0 h1">
                    <i class="fas fa-bars" id="sidebarCollapse"></i>
                    <!--<span>Dashboard</span>-->
                    <img src="jindal1.jpg" alt="Jindal Logo" style="width:50px;height:50px"></span>
                   <!--<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"></button>
                   <span class="navbar-toggler-icon"></span>
                   </button>-->
                   <form class="form-inline my-2 my-lg-0" action="#">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                   <button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                   </form>
                   
                    <ul class="navbar-nav ml-auto">
                         <li class ="nav-item">
                         <a class="nav-link" href="https://www.instagram.com/jindaltradingcompany/"><img src="insta.png" alt="Instagram" style="width:40px;height:40px"></a>
                         </li>
                         <li class ="nav-item">
                        
                         <a class="nav-link" href="#"><img src="linkedin.png" alt="LinkedIn" style="width:40px;height:40px"></a>
                         </li>
                         <li class ="nav-item">
                        
                          <a class="nav-link" href="#"><img src="facck.png" alt="LinkedIn" style="width:40px;height:40px"></a>
                          </li>
                          <li class ="nav-item">
                        
                            <a class="nav-link" href="#"><img src="email2.png" alt="LinkedIn" style="width:40px;height:40px"></a>
                            </li>
                    </ul>
                    </div>
                </div>
                    </nav>
                  
     <div class="login">
        <div class="login-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle" onclick="login()">Customer</button>
                <button type="button" class="toggle" onclick="register()">Vendor</button>
            </div>

            <form id="login" class="input-group">

                <input type="text" class="input-field" placeholder="Email-id" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
                <input type="number" class="input-field" placeholder="Phone No." required>
               

                <button type="submit" class="submit-btn">Log In</button>

            </form>
            <form id="login" class="input-group">

                <input type="text" class="input-field" placeholder="Email-id" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
                <input type="number" class="input-field" placeholder="Phone No." required>
                
                <button type="submit" class="submit-btn">Log In</button>

            </form>

        </div>
    </div>

   
  <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.stle.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.stle.left = "0px";
        }
        $(document).ready(function () {
          
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
   
</body>

</html>