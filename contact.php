
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Royal hospital | contact us</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/favicon.ico">

    <!-- Style CSS -->
    <style>
        .map-container-2{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:100%;
}
.map-container-2 iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
.body{
    height:100%;
    width:100%;
}
.html{
    height:100%;
    width:100%;
}
    </style>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medilife-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Top Header Area -->
    

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="index.php"><img src="img/royal.png" alt="Logo"></a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                               <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="about-us.html">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="direction.html">Locate us</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.php">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="hms/doctor/index.php">Doctor's Login</a>
                                        </li>
                                    </ul>
                                    <!-- Appointment Button -->
                                    <a href="hms/user-login.php" class="btn medilife-appoint-btn ml-30">For <span>Booking</span> Click here</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Contact</h3>
                        <p>Send us email we shall contact you back</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcumb Area End ***** -->

    <section class="medilife-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <h5 class="mb-50">Get in touch</h5>

                       <form id ="contact-form" name="contact-form" action="mail.php" method="POST"  onsubmit="return validateForm()" >
                            <div class="form-group">
                                <input type="text" class="form-control" name="fullname" id="contact-name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="emailId"  id="contact-email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="subject" class="form-control" name="subject"  id="contact-subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                        
                        </form>
                        <div class="center-on-small-only">
                        <a class="btn btn-primary" onclick="validateForm()">Send</a>
                    </div> <div class="status" id="status"></div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">


                        <!-- Contact Card -->
                        <div class="medilife-contact-card mb-50">

                            <div class="single-contact d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <i class="icon-doctor"></i>
                                </div>
                                <div class="contact-meta">
                                    <p>Address: P.O BOX 254 <br>40404, Rongo </p>
                                </div>
                            </div>

                            <div class="single-contact d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <i class="icon-doctor"></i>
                                </div>
                                <div class="contact-meta">
                                    <p>Phone: +254 704 895 391</p>
                                </div>
                            </div>

                            <div class="single-contact d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <i class="icon-doctor"></i>
                                </div>
                                <div class="contact-meta">
                                    <p>Email: royalmedicalcenter@gmail.com</p>
                                </div>
                            </div>


                            <div class="contact-social-area">
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>

                        </div>
                        

                        <!-- medilife Emergency Card -->
                        <div class="medilife-emergency-card bg-img bg-overlay" style="background-image: url(img/bg-img/about1.jpg);">
                            <i class="icon-smartphone"></i>
                            <h2>For Emergency calls</h2>
                            <h3>+254 729 104 801</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 
  <!--Google map-->
   <section>
<div id="map-container-google-2" class="map-area mb-100" style="height: 200%" align="center" >
    <div class="row">
    <div class="col-12">
   <center></center> <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d63831.484706585936!2d34.56381610830558!3d-0.7594942333504018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x182b49f50c23c6c7%3A0xc8b71702239f3dc9!2sROYAL%20MEDICAL%20CLINIC%20AND%20MATERNITY%20HOME%2C%20Rongo!3m2!1d-0.7595801999999999!2d34.598835699999995!5e0!3m2!1sen!2ske!4v1584009770890!5m2!1sen!2ske" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>
    </div>
    </div>
</div>
</section> 

<!--Google Maps-->
    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-100">
        <!-- Main Footer Area -->
        
        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="bottom-footer-content">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <center> <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Royal medical center  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">John Nguni Muthoka</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script src="js/map-active.js"></script>
    <script>

function validateForm() {
    document.getElementById('status').innerHTML = "Sending...";
    document.getElementById('contact-form').submit();

}
    </script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e6beead8d24fc2265877c4f/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>