<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>Petshop Online Website</title>
  
  <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->
        
<!--*********************************************START OF NAVIGATION BAR****************************************--> 
<body>
          
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;"> 
                <!--      <img src="images/logo.jpg"  width="15% "/> --> Online Pet Purchase and Adoption System</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available Products</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                                                               
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

<!--*********************************************START SLIDER************************************************-->

<div class="container-fluid">
    <br>
        <div class="col-md-9 wow fadeInDown">
        

<!--*********************************************Food PACKAGES************************************************-->
 
<img src="./images/PET.jpg" alt="Image Description" style="width: 500px; height: 450px;">&nbsp;&nbsp;&nbsp;&nbsp;
<img src="./images/PET2.png" alt="Image Description" style="width: 500px; height: 450px;">


               
            </div>

        <div class="col-md-3" >
            <div class="panel panel-default wow fadeInDown">
              <!-- Default panel contents -->
            
              <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Welcome To Our Petpurchase&nbsp;<i class="glyphicon glyphicon-calendar"></i> <?php echo date('M d, Y');?></div>
            
            </div>
         
            <div class="panel panel-default wow fadeInDown">
              <!-- Default panel contents -->
              <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Petshop On Special Offer </div>
              <ul class="list-group">
               
                <li class="list-group-item wow fadeInDown">Dog - <span style="color:#8B8B00; font-weight:bold;">500 to 600 </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                 <li class="list-group-item wow fadeInDown">Pig - <span style="color:#8B8B00; font-weight:bold;">150 to 300 </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                  <li class="list-group-item wow fadeInDown">Bird  - <span style="color:#8B8B00; font-weight:bold;">300 to 450 </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                  
                   <li class="list-group-item wow fadeInDown">Cat- <span style="color:#8B8B00; font-weight:bold;">200 to 350 </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                 

            
              </ul>
              <a href="available.php" class="btn btn-success btn-sm pull-right wow fadeInDown">Click here to View More</a>
            </div>
            <br>
                <div class="panel panel-default wow fadeInDown">
                    
                </div>

                    <div class="recent-work-wrap class="wow fadeInDown"">
                        <img class="img-responsive wow fadeInDown" src="images/map.jpg" alt="">
                       
                            <div class="recent-work-inner">
                               
                            </div> 
                    </div>
                </div>  
        </div>

        
</div><!--/.container-->
<br><br>

<!--*************************************************** FOOTERS **********************************************-->
<footer id="footer" class="midnight-blue wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
               &copy; 2023 <a target="_blank" href="#" title="#"></a>. All Rights Reserved
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right wow fadeInDown">
                        <li class="wow fadeInDown"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        
                        <li class="wow fadeInDown"><a href="contacts.php"><i class="fa fa-phone"></i> Contacts</a></li>
                        <li class="wow fadeInDown"><a href="#loginModal" data-toggle="modal" data-target="#loginModal"><i class="fa fa-lock"></i> Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
 <!----loginModal----->
<?php include('loginModal.php');?>      
                     
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>