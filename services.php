 <!DOCTYPE html>
<html>
<head>
    <title>JTC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            
            <ul class="list-unstyled components">
                <p>Dashboard</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="front.php">Products</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Services</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Vendors</a>
                        </li>
                        <li>
                            <a href="services.php">Consultancy</a>
                        </li>
                        <li>
                            <a href="#">Something</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Wishlist</a>
                </li>
                <li>
                    <a href="#">Orders</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <div id ="query" class="md-form mb-4 brown-textarea active-brown-textarea-2">
                        <i class="fas fa-pencil-alt prefix"></i>
                       <!-- <div class="input-group-prepend">
                            <span class="input-group-text">Got queries? Ask away!</span>
                        </div>-->
                        <textarea id ="queries" class="md-textarea form-control" rows=3 placeholder="Got queries? Ask away!" aria-label="With textarea"></textarea>
                    </div>
                    <div>
                        <button type=button class="btn btn-outline-light">
                            <span>Submit</span>        
                        </button>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class = "navbar navbar-expand-lg navbar-custom">
                <div class="container-fluid">
                   <span class="navbar-brand mb-0 h1">
                    <button class="btn btn-primary mx-0" id="sidebarCollapse"> 
                    <i class="fas fa-bars"></i>
                    </button>     
                    <!--<span>Dashboard</span>-->
                    <img src="jindal1.jpg" alt="Jindal Logo" style="width:50px;height:50px"></span>
                   <!--<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"></button>
                   <span class="navbar-toggler-icon"></span>
                   </button>-->
                   <form class="form-inline my-2 my-lg-0" action="#">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                   <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                   </form>
                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item mt-2 ml-4">
                            <a class="nav-link" href="signup.html"><span class="glyphicon glyphicon-user"></span>Sign-up </a>
                         </li>
                         <li class="nav-item mt-2 ml-4">
                            <a class="nav-link" href="login.html"><span class="glyphicon glyphicon-log-in"></span>Log In</a>
                         </li>
                    </ul>
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
                    <!--<button type="button" id="sidebarCollapse" class="btn-primary" >
                        <i class="fas fa-align-left"></i>
                        <span>Dashboard</span>
                    </button>-->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="img1.jpg" alt="work1"/>
                          </div>
                          <div class="carousel-item">
                            <img src="img2.jpg" alt="work2"/>
                          </div>
                          <div class="carousel-item">
                            <img src="img3.jpg" alt="work3"/>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                        
                    </div>
      
        
		
		
  <center>
    
                            <h4>Consultancy</h4>
							<p> details of how it works (content/buisness team) </p>
                     
                      <div class="login">
                <form name="form1" method="post" action="sender.php">
                  <table style="margin-top:10px; margin-left:300px;">
                    <tr>
                      <td><strong>Name</strong></td>
                    </tr>
                    <tr>
        <td><span id="sprytextfield1">
                        <label>
                        <input type="varchar" name="varname" id="varname" >
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span>
          <label></label></td>
                    </tr>
                   
                    
                    <tr>
                      <td><strong>Location</strong></td>
                    </tr>
                    <tr>
                     <td><span id="sprytextfield3">
                        <label>
                        <input type="varchar" name="varlocation" id="varlocation">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
		<td><strong>Phone Number</strong></td>
                    <tr>
                     <td><span id="sprytextfield4">
                        <label>
                        <input type="varchar" name="varphone" id="varphone">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
                      <td><strong>Start Date</strong></td>
                    
                    <tr>
                     <td><span id="sprytextfield5">
                        <label>
                        <input type="date" name="varsdate" id="varsdate">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
		<td><strong>End Date</strong></td>
                
                    <tr>
                     <td><span id="sprytextfield6">
					 
                        <label>
                        <input type="date" name="varedate" id="varedate">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
		<td><strong>Specifications</strong></td>
                                    <tr>
                     <td><span id="sprytextfield7">
					 
                        <label>
						<textarea  cols="50" rows="10" input type="varchar" name="vardetails" id="vardetails">
                        </textarea>
						</label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
 	<td><strong>Budget</strong></td>
                    <tr>
                     <td><span id="sprytextfield4">
                        <label>
                        <input type="varchar" name="varphone" id="varphone">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
          
 
                    <tr>
                      <td><label>
                
                          <input type="submit" class="btn btn-secondary" name="button" id="button" value="Request date">
                       
                      </label></td>
                    </tr>
                  </table>
      </form>
              </div>
               </center>
	  
	  
	  
	  
	  
	  
	  
	  
	  
		
		
		
    <!--<section class="footer">--> 
    <div class="foot">
    <footer class="container py-5 ">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h5>Useful Links</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>Company</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">About</a></li>
              <li><a class="text-muted" href="#">Contact Us</a></li>
              <li><a class="text-muted" href="#">Career</a></li>
              <li><a class="text-muted" href="#">Affiliate</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Business</a></li>
              <li><a class="text-muted" href="#">Education</a></li>
              <li><a class="text-muted" href="#">Government</a></li>
              <li><a class="text-muted" href="#">Gaming</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>Contact and Follow us on</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#"><p><i class="fa fa-facebook-official"></i>Facebook</p></a></li>
              <li><a class="text-muted" href="#"><p><i class="fa fa-youtube-play"></i>Youtube</p></a></li>
              <li><a class="text-muted" href="#"><p><i class="fa fa-linkedin"></i>LinkedIn</p></a></li>
              <li><a class="text-muted" href="#"><p><i class="fa fa-twitter-square"></i>Twitter</a></p></li>
            </ul>
          </div>
        </div>
        </div>
      </footer>
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#"> JindalTradingCo.com</a>
      </div>
      </div>
      <!--</section>-->
       
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!--<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>-->
    <script type="text/javascript">
       
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
 





  
  