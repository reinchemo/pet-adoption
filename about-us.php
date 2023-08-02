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
                        <!--      <img src="images/logo.jpg"  width="15% "/> --> Petpurchase online system</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li class="active" ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available Products</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
       <li id="page_about">
    <div class="title-wrapper">
        <center>
        <h2>About Us</h2>
    </div>
    <h4></h4>
    <p style="text-align:justify;">
    Welcome to our pet and purchase web system! We are dedicated to connecting pet enthusiasts with their ideal companions. Whether you're looking for a playful puppy, a graceful kitten, or any other adorable pet, we have a wide selection to choose from. Our platform ensures a secure and enjoyable purchasing experience, where you can find trusted breeders and sellers who prioritize the well-being of their animals. We are here to make your journey to pet ownership smooth and fulfilling. Thank you for choosing us to be a part of your pet-loving adventure!
    </p>
    
  
    
    <div class="v_space"></div>
    
    <div class="title-wrapper">
      
    </div><center>
    <div class="two_third">
        <h2>Mission</h2>
            <p style="text-align:justify;">
            Our mission is to create a seamless online platform that brings joy and happiness to pet lovers everywhere. We strive to provide a safe and trusted marketplace where responsible breeders and sellers can connect with compassionate individuals seeking to enrich their lives with a new furry or feathered friend. We are committed to promoting responsible pet ownership, ensuring the well-being of animals, and fostering loving homes for pets of all kinds.</p>
    </div>
    <div class="one_third_last">
        <h2>Vision</h2>
         <p style="text-align:justify;">
         Our vision is to be the leading online destination for pet enthusiasts, setting the standard for ethical pet acquisition and care. We aim to continually expand our platform, offering a diverse range of pets and pet-related services to cater to the unique needs and preferences of our valued users. By fostering a community of caring individuals, we envision a world where pets are cherished, and their happiness is a priority for every pet owner. Together, we strive to create lasting connections and countless heartwarming stories between people and their beloved animal companions.
        </p>
    </div>
    </div>
    <br>
     <br>
      <br>

   
<h2>Location</h2><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31912.105414237212!2d36.97195735!3d-1.15107875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1690885122114!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="clear"></div>
</li>
        
<!--*************************************************** FOOTERS **********************************************-->
  
    <?php include('includes/footer.php');?>

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