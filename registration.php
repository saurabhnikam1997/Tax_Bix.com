<?php
    session_start();
    include 'Register.php';
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Description -->
    <meta name="description" content="">
    <meta name="author" content="Themeland">

    <!-- Title  -->
    <title>Tax-Bix Suvidha Kendra Digital-Ocean</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/logo/logo_ox.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
</head>

<body>
    <!--====== Preloader Area Start ======-->
    <div id="preloader">
        <!-- Digimax Preloader -->
        <div id="digimax-preloader" class="digimax-preloader">
            <!-- Preloader Animation -->
            <div class="preloader-animation">
                <!-- Spinner --> 
                <div class="spinner"></div>
                <!-- Loader -->
                <div class="loader">
                    <span data-text-preloader="T" class="animated-letters">T</span>
                    <span data-text-preloader="A" class="animated-letters">A</span>
                    <span data-text-preloader="X" class="animated-letters">X</span>
                    <span data-text-preloader="-" class="animated-letters">-</span>
                    <span data-text-preloader="B" class="animated-letters">B</span>
                    <span data-text-preloader="I" class="animated-letters">I</span>
                    <span data-text-preloader="X" class="animated-letters">X</span>
                </div>
                <p class="fw-5 text-center text-uppercase">Loading</p>
            </div>
            <!-- Loader Animation -->
            <div class="loader-animation">
                <div class="row h-100">
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Preloader Area End ======-->

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main overflow-hidden">
        <!-- ***** Header Start ***** -->
        <header id="header">
            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand" style="background-color: rgb(253, 253, 247);">
                <div class="container header">
                    <p id="slogan">'One Nation, One Tax, One Market'</p>
                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="index.html">
                        <img class="navbar-brand-regular" src="assets/img/logo/Taxbixlogo.png" alt="brand-logo">
                        <img class="navbar-brand-sticky" src="assets/img/logo/Taxbixlogo.png" alt="sticky brand-logo">
                    </a>
                    <div class="ml-auto"></div>
                    <!-- Navbar -->
                    <ul class="navbar-nav items">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="about.html">About <i class="fas fa-angle-down ml-1"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                                <li class="nav-item"><a href="services.html" class="nav-link">Our Services</a></li>
                                <li class="nav-item"><a href="team.html" class="nav-link">Our Team</a></li>
                                <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.researchgate.net/profile/Nishant-Ghuge/publication/301477841_INDIAN_TAX_STRUCTURE-_AN_ANALYTICAL_PERSPECTIVE/links/57161c4a08ae730bc5ae3e88/INDIAN-TAX-STRUCTURE-AN-ANALYTICAL-PERSPECTIVE.pdf" target="_blank" class="nav-link">Download</a>
                        </li>
                        <li class="nav-item">
                            <a href="services.html" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="registration.php" class="nav-link current">Registration</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="training.html">Training <i class="fas fa-angle-down ml-1"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="training-content.html" class="nav-link">Content Of Course</a></li>
                                <li class="nav-item"><a href="services.html" class="nav-link">Live Seminar</a></li>
                                <li class="nav-item"><a href="info.html" class="nav-link">Information Guide</a></li>
                                <li class="nav-item"><a href="pricing.html" class="nav-link">Training Fees</a></li>
                                <li class="nav-item"><a href="contact.html" class="nav-link">Training Benifits</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <!-- Navbar Toggler -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="fas fa-bars toggle-icon m-0"></i>
                            </a>
                        </li>
                    </ul>
                
                    <!-- Navbar Action Button -->
                    
                    <ul class="navbar-nav-action">
                        <li class="nav-item ml-1">
                            <a href="login.html" class="btn ml-lg-auto btn-bordered-black"><i class="fas fa-user contact-icon mr-md-2"></i> Login</a>
                        </li>
                    </ul>
                </div>
                
                <img class="logo2" src="assets/img/logo/logo_ox.png" alt="brand-logo">
                <img class="logo3" src="assets/img/logo/make_in_india.png" alt="brand-logo"> 
                <img class="logo1" src="assets/img/logo/swachh_bharat.png" alt="brand-logo">
                <p class="contact-text">Contact Us +91 8788302032 <br> <a id="con-link" href="info@taxbixsuvidhakendra.com">info@taxbixsuvidhakendra.com</a></p>
            </nav>
        </header>
        <!-- ***** Header End ***** -->
<!-- ***** Registration page***** -->
<section id="review" class="section review-area ptb_100">
    <div class="container reg-form col-lg-12 col-md-6 col-sm-4">
        <div class="wrapper wrapper--w790">
            <div class="row">
                <h1 class="reg-title">Franchise Registration</h1>
             <div class="form-row"> 
                
                <form class="regform" method="POST" action="Register.php" enctype="multipart/form-data" ><?php include('errors.php'); ?>
                  
                  <div class="form-row">
                      <div class="form-group col-md-6">
                       <label for="inputEmail4">First Name</label>
                       <input type="text" class="form-control" name="fname" id="inputEmail4" placeholder="First Name">
                      </div>
                      <div class="form-group col-md-6">
                       <label for="inputEmail4">Last Name</label>
                       <input type="text" class="form-control" name="lname" id="inputEmail4" placeholder="Last Name">
                      </div>           
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">EMAIL ID</label>
                      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="EMAIL ID">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">WHATSAPP NO</label>
                      <input type="text" class="form-control" name="wno" id="inputPassword4" placeholder="WHATSAPP NO">
                    </div>
                  </div>
                 <div class="form-row">
                    
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">ADDRESS</label>
                      <input type="text" class="form-control" name="address" id="inputPassword4" placeholder="ADDRESS">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">State</label>
                      <select name="state" id="state" class="form-control">
                            <option value="select">Select State</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                            </select>
                    </div>
                  </div>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">DISTRICT</label>
                      <input type="text" class="form-control" name="city" id="inputPassword4" placeholder="DISTRICT">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">TALUKA</label>
                      <input type="text" class="form-control" name="taluka" id="inputEmail4" placeholder="TALUKA">
                    </div>
                  </div>
                <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">PIN CODE</label>
                          <input type="text" class="form-control" name="pin_cod" id="inputPassword4" placeholder="PIN CODE">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Business Name</label>
                          <input type="text" class="form-control" name="bus_name" id="inputPassword4" placeholder="Business Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Username</label>
                          <input type="text" class="form-control" name="username" id="inputPassword4" placeholder="Username">
                        </div>
                        <div class="form-group col-md-6">
                       <label for="inputPassword4">CONTACTS NO</label>
                       <input type="text" class="form-control" name="contact" id="inputPassword4" placeholder="CONTECT NO">
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Password</label>
                          <input type="password" class="form-control" name="pswd" id="inputPassword4" placeholder="Password">
                        </div>
                         <div class="form-group col-md-6">
                          <label for="inputPassword4">Confirm Password</label>
                          <input type="password" class="form-control" name="cpswd" id="inputPassword4" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                     <button type="submit" id="submit" name="submit" class="btn btn-primary">Sign in</button>
                    </div>
                  </form>

              </div>  
            </div>
        </div>
    </div>
</section>

<!-- ***** Review Area End ***** -->

<section class="section cta-area bg-overlay ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <!-- Section Heading -->
                        <div class="section-heading text-center m-0">
                            <h2 class="text-white">Looking for the best digital agency &amp; marketing solution?</h2>
                            <p class="text-white d-none d-sm-block mt-4">Lets join us and explore your business. We provide you best and suitable solution for your business growth by keeping safe from all tax related hesitations.</p>
                            <p class="text-white d-block d-sm-none mt-4">Lets join us and explore your business. We provide you best and suitable solution for your business growth by keeping safe from all tax related hesitations.</p>
                            <a href="contact.html" class="btn btn-bordered-white mt-4">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <!--====== Footer Area Start ======-->
 <footer class="section footer-area">
    <!-- Footer Top -->
    <div class="footer-top ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-uppercase mb-2">About Us</h3>
                        <ul>
                            <li class="py-2"><a class="text-black-50" href="#">Company Profile</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Testimonials</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Careers</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Partners</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Affiliate Program</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-uppercase mb-2">Services</h3>
                        <ul>
                            <li class="py-2"><a class="text-black-50" href="#">GST Registration</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">ISO Certification</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Digital Signature</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Import Export License</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Food License</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Trade Mark Registration</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Private Limited Registration</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Udyam Registration</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-uppercase mb-2">Support</h3>
                        <ul>
                            <li class="py-2"><a class="text-black-50" href="#">Frequently Asked</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Terms &amp; Conditions</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Privacy Policy</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Help Center</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-uppercase mb-2">Follow Us</h3>
                        <p class="mb-2">We are always availabe for you. One can easily found us and follow us on Social Media</p>
                        <!-- Social Icons -->
                        <ul class="social-icons list-inline pt-2">
                            <li class="list-inline-item px-1"><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item px-1"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item px-1"><a href="#"><i class="fab fa-google-plus"></i></a></li>
                            <li class="list-inline-item px-1"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item px-1"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copyright Area -->
                    <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                        <!-- Copyright Left -->
                        <div class="copyright-left">&copy; Copyrights 2021 Tax-Bix All rights reserved.</div>
                        <!-- Copyright Right -->
                        <div class="copyright-right">Designed & Developed<i class="fas fa-heart"></i> By <a href="#">Innovationshub</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== Footer Area End ======-->

<!--====== Modal Search Area Start ======-->
<div id="search" class="modal fade p-0">
    <div class="modal-dialog dialog-animated">
        <div class="modal-content h-100">
            <div class="modal-header" data-dismiss="modal">
                Search <i class="far fa-times-circle icon-close"></i>
            </div>
            <div class="modal-body">
                <form class="row">
                    <div class="col-12 align-self-center">
                        <div class="row">
                            <div class="col-12 pb-3">
                                <h2 class="search-title mb-3">What are you looking for?</h2>
                                <p>We are always availabe for you. One can easily found us and follow us on Social Media</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 input-group">
                                <input type="text" class="form-control" placeholder="Enter your keywords">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 input-group align-self-center">
                                <button class="btn btn-bordered mt-3">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--====== Modal Search Area End ======-->

<!--====== Modal Responsive Menu Area Start ======-->
<div id="menu" class="modal fade p-0">
    <div class="modal-dialog dialog-animated">
        <div class="modal-content h-100">
            <div class="modal-header" data-dismiss="modal">
                Menu <i class="far fa-times-circle icon-close"></i>
            </div>
            <div class="menu modal-body">
                <div class="row w-100">
                    <div class="items p-0 col-12 text-center"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== Modal Responsive Menu Area End ======-->

</div>


<!-- ***** All jQuery Plugins ***** -->

<!-- jQuery(necessary for all JavaScript plugins) -->
<script src="assets/js/jquery/jquery-3.5.1.min.js"></script>

<!-- Bootstrap js -->
<script src="assets/js/bootstrap/popper.min.js"></script>
<script src="assets/js/bootstrap/bootstrap.min.js"></script>

<!-- Plugins js -->
<script src="assets/js/plugins/plugins.min.js"></script>

<!-- Active js -->
<script src="assets/js/active.js"></script>
</body>



<!-- Mirrored from theme-land.com/digimx/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 08:08:49 GMT -->
</html>
