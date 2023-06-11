<?php
session_start();
require "login/connection.php";
if(!isset($_SESSION['email'])) 
{ 
    header("location:login/home.php");
} 

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Scholarship program</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/rrr1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/variables.css" rel="stylesheet">



  <link href="assets/css/main.css?v=<?php echo time(); ?>" rel="stylesheet">
  <link href="assets/css/reg.css?v=<?php echo time(); ?>" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <h1>Scholar<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>


        <li><a class="nav-link scrollto" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="about.html#about">About</a></li>
          <li><a class="nav-link scrollto" href="Goal.html">Our Goals</a></li>
          <li><a class="nav-link scrollto" href="Sched.php">Schedules</a></li>
          <li><a class="nav-link scrollto" href="FAQ.html">FAQ</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="login/login-user.php">Get Started</a>

    </div>
  </header><!-- End Header -->

  


  <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="assets/img/hero-carousel/1.1.png" class="img-fluid animated">
      <h2>Be part of our family on <span>Scholar</span><span>.</span></h2>
      <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
    </div>
  </section>

  <div class="bordered">

  <div class="content-form">
  <h4>Academic Year 2022-2023</h4>
  <h3>Guidelines for Registration on scholarship program.</h3>
  <h2>Welcome to <span>Scholar.ph</span></h2>

  <center>
  <hr class="line">
  </center>
  </div>

  <div class="texts">

  <h4>Paano mag Apply?</h4>
  <p style="color: rgb(72, 86, 100);">Ang mga mag-aaral na nag-aaplay para sa scholarship sa unang pagkakataon <b>(Fresh Students)</b> ay kailangang <b>Magparehistro</b> sa portal bilang bagong aplikante sa pamamagitan ng pagbibigay ng tumpak at napatunayang impormasyon tulad ng nakalimbag sa kanilang mga dokumento sa <b>Form ng Pagpaparehistro ng Mag-aaral</b>.</p>


  <p style="margin-top: 2%;color: rgb(72, 86, 100);">Ang <b>registration form</b> ay kinakailangang punan ng mga magulang/tagapag-alaga ng mga mag-aaral na wala pang 18 taong gulang sa petsa ng pagpaparehistro.</p>

  <p style="margin-top: 3%;color: rgb(72, 86, 100);">Bago simulan ang proseso ng pagpaparehistro, <b>pinapayuhan ang mga mag-aaral / Magulang / tagapag-alaga na panatilihing madaling gamitin ang mga sumusunod na dokumento:</b></p>

  <ul style="font-size: meduim;color: rgb(72, 86, 100);">
    <li> Registration Form na galing sa school </li>
    <li> Card or Grade ng huling pinasukang paaralan(Latest grade) </li>
    <li> Voters Certificate</li>
    <li> Kahit anong Valid ID</li>
    <li> Indigency</li>
    </ul>

  </div>




    <hr style="text-align: center;">


  <p style="color: red;margin-top: 3%"><b>Important Note:</b></p>
  <ul style="font-size: meduim;color: red;">
    <li><b>Pagkatapos isumite ang aplikasyon, ang aming Volunteer ay makikipag-ugnayan sa iyo sa ibinigay na numero ng mobile sa pamamagitan ng SMS o TAWAG. Kung sakaling magtagal ang Volunteer para makipag-ugnayan sa iyo, maaari kang tumawag sa aming portal contact number.</b>  </li>
    <li><b>Tanging Pangalan ng Institusyon at Mga Detalye ng Kurso ang pinapayagang baguhin/baguhin pagkatapos ng matagumpay na pagpaparehistro kapag hiniling sa Portal. Pagkatapos isumite ang Registration Form, walang ibang pagbabago ang papayagan.</b>  </li>
    <li> <b>Sa matagumpay na pagpaparehistro sa Vishwajeet.org Portal para sa Pre-Matric at Post-Matric Scholarship Scheme para sa mag-aaral. Ang mga aplikante ay hinihiling na regular na suriin ang kanilang mobile SMS at makatanggap ng tawag sa oras.</b>  </li>
    </ul>

  <hr style="text-align: center; margin-bottom: -5%;">

    <!--form -->
    <center>
    <div class="container1" >
        <header style="color: rgb(72, 86, 100);">Scholarship Online Registration</header>

        <form action="database.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title" style="font-size: large; color: rgb(72, 86, 100);"><b>Personal Details</b></span>

                    <div class="fields">
                    <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="lastname" placeholder="Enter your Lastname" required>
                        </div>

                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" name="firstname" placeholder="Enter your First name" required>
                        </div>

                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" name="middlename" placeholder="Enter your Middle name" required>
                        </div>

                        <div class="input-field">
                            <label>Suffix</label>
                            <select name="suffix" required>
                                <option disabled selected>Select Status</option>
                                <option>Jr.</option>
                                <option>Sr.</option>
                                <option>III.</option>
                                <option>II.</option>
                                <option>N/A</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="birthday" placeholder="Enter your birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Place of Birth</label>
                            <input type="text" name="placebirth" placeholder="Enter your Place birth" required>
                        </div>

                        <div class="input-field">
                            <label>Civil Status</label>
                            <select name="civil" required>
                                <option disabled selected>Select Status</option>
                                <option>Single</option>
                                <option>In a relationship</option>
                                <option>Married</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Course</label>
                            <input type="text" name="course" placeholder="Enter your Course" required>
                        </div>

                        <div class="input-field">
                            <label>Year Level</label>
                            <input type="text" name="yearlvl" placeholder="Enter your Year level" required>
                        </div>

                        <div class="input-field">
                            <label>School Year</label>
                            <input type="text" name="schoolyear" placeholder="Enter School year" required>
                        </div>

                        <div class="input-field">
                            <label>Email Address</label>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text" name="phone" placeholder="Enter mobile number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                        </div>

                        <div class="input-field">
                            <label>Status of Application</label>
                            <select name="status_app" required>
                                <option disabled selected>Select Status</option>
                                <option>New</option>
                                <option>Renewal</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Age</label>
                            <input type="text" name="age" placeholder="Enter your Age" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title" style="font-size: large; color: rgb(72, 86, 100);"><b>Educational attainment</b></span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Elementary</label>
                            <input type="text" name="Elem" placeholder="Enter your Elementary school" required>
                        </div>

                        <div class="input-field">
                            <label>Academic Honors (if any)</label>
                            <input type="text" name="honor1" placeholder="Enter your Academic Honors" required>
                        </div>

                        <div class="input-field">
                            <label>Year Graduated</label>
                            <input type="text" name="graduated1" placeholder="Enter Year Graduated" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                        </div>

                        <div class="input-field">
                            <label>Junior High School </label>
                            <input type="text" name="junior" placeholder="Enter your Junior High school" required>
                        </div>

                        <div class="input-field">
                            <label>Academic Honors (if any)</label>
                            <input type="text" name="honor2" placeholder="Enter your Academic Honors" required>
                        </div>

                        <div class="input-field">
                            <label>Year Graduated (if graduated)</label>
                            <input type="text" name="graduated2" placeholder="Enter Year Graduated" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                        </div>

                        <div class="input-field">
                            <label>Senior High School</label>
                            <input type="text" name="senior" placeholder="Enter your Senior High school" required>
                        </div>

                        <div class="input-field">
                            <label>Academic Honors (if any)</label>
                            <input type="text" name="honor3" placeholder="Enter your Academic Honors" required>
                        </div>

                        <div class="input-field">
                            <label>Year Graduated (if graduated)</label>
                            <input type="text" name="graduated3" placeholder="Enter Year Graduated" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                        </div>

                        <div class="input-field">
                            <label>College </label>
                            <input type="text" name="college" placeholder="Enter your College school" required>
                        </div>

                        <div class="input-field">
                            <label>Academic Honors (if any)</label>
                            <input type="text" name="honor4" placeholder="Enter your Academic Honors" required>
                        </div>

                        <div class="input-field">
                            <label>Year Graduated (if graduated)</label>
                            <input type="text" name="graduated4" placeholder="Enter Year Graduated" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                        </div>


                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title" style="font-size: large; color: rgb(72, 86, 100);"><b>Address Details</b></span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Barangay</label>
                            <input type="text" name="brgy" placeholder="Enter your Brgy" required>
                        </div>

                        <div class="input-field">
                            <label>Municipality</label>
                            <input type="text" name="city" placeholder="Enter your city" value="Aurora" required>
                        </div>

                        <div class="input-field">
                            <label>Provice</label>
                            <input type="text" name="provice" placeholder="Enter your provice" value="Isabela" required>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title" style="font-size: large; color: rgb(72, 86, 100);"><b>Family Details</b></span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father's Last Name</label>
                            <input type="text" name="lastfather" placeholder="Enter last name" required>
                        </div>

                        <div class="input-field">
                            <label>Father's First Name</label>
                            <input type="text" name="firstfather" placeholder="Enter fist name" required>
                        </div>

                        <div class="input-field">
                            <label>Father's Middle Name</label>
                            <input type="text" name="middlefather" placeholder="Enter middle name" required>
                        </div>

                        <div class="input-field">
                            <label>Monthly Income</label>
                            <input type="text" name="fincome" placeholder="Enter Monthly Income" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" name="foc" placeholder="Enter Occupation" required>
                        </div>

                        
                        <div class="input-field">
                            <label>Mother's Last Name</label>
                            <input type="text" name="lastm" placeholder="Enter last name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother's First Name</label>
                            <input type="text" name="firstm" placeholder="Enter fist name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother's Middle Name</label>
                            <input type="text" name="middlem" placeholder="Enter middle name" required>
                        </div>

                        <div class="input-field">
                            <label>Monthly Income</label>
                            <input type="text" name="mincome" placeholder="Enter Monthly Income" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" name="moc" placeholder="Enter Occupation" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>

                        <button class="sumbit" type="submit" name="submit">
                            <span class="btnText" type="submit" name="submit">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>

      
      
      

      </center>
    </form>
  </div>
</div>

    <!--End form -->

  </div>





  </div>
    
  </div>







    </section><!-- End Featured Services Section -->



  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Scholar</h3>
              <p>
                Aurora Isabela <br>
                <strong>Phone:</strong> MPDC Office: 09175397149<br>
                <strong>Phone:</strong> HRM Office: 09171493583<br>
                <strong>Email:</strong> Scholarship00123@gmail.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Blogs</a></li>
             <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Scholar</span></strong>. All Rights Reserved
          </div>

        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>