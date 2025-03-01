<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <!-- Custom CSS for Beautification -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f9fa;
      color: #333;
    }

    .hero_area {
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      color: #fff;
      padding: 20px 0;
    }

    .navbar-brand img {
      height: 50px;
    }

    .navbar-nav .nav-item .nav-link {
      color: #fff !important;
      font-weight: 500;
    }

    .navbar-nav .nav-item .nav-link:hover {
      color: #ffdd57 !important;
    }

    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .card-header {
      background-color: #343a40;
      color: #fff;
      border-radius: 10px 10px 0 0;
    }

    .card-body {
      padding: 20px;
    }

    .card-body h3 {
      color: #2575fc;
      margin-top: 20px;
    }

    .card-body h4 {
      color: #6a11cb;
      margin-top: 15px;
    }

    .card-body ul {
      list-style-type: disc;
      padding-left: 20px;
    }

    .card-body ul li {
      margin-bottom: 10px;
    }

    .card-body a {
      color: #2575fc;
      text-decoration: none;
    }

    .card-body a:hover {
      text-decoration: underline;
    }

    .info_section {
      background-color: #343a40;
      color: #fff;
      padding: 40px 0;
    }

    .info_section h5 {
      color: #ffdd57;
    }

    .info_section a {
      color: #fff;
      text-decoration: none;
    }

    .info_section a:hover {
      color: #ffdd57;
    }

    .footer_section {
      background-color: #2575fc;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    .footer_section a {
      color: #ffdd57;
      text-decoration: none;
    }

    .footer_section a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
              <img src="images/logo.png" alt="">
            </a>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="financialAid.php">Financial Aid</a>
                  </li>
    
                  <!-- Legal Aid Dropdown -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="legalAidDropdown" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      Legal Aid
                    </a>
                    <div class="dropdown-menu" aria-labelledby="legalAidDropdown">
                      <a class="dropdown-item" href="documentation.php">Documentation</a>
                      <a class="dropdown-item" href="contactLawyer.php">Contact a Lawyer</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="legalAidDropdown" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      Emotional Support
                    </a>
                    <div class="dropdown-menu" aria-labelledby="legalAidDropdown">
                      <a class="dropdown-item" href="pshychologists.php">Pshychologists</a>
                      <a class="dropdown-item" href="contactLawyer.php">Mental Health Resources</a>
                      <a class="dropdown-item" href="contactLawyer.php">Support Groups</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="doctor.php"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="testimonial.php">Mentor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Community Forum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Setting</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Profile</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- about section -->

  <div class="container mt-5">
    <h1 class="text-center mb-4 display-4 font-weight-bold text-primary">Victim Compensation Programs</h1>
  
    <!-- Program Cards -->
    <div class="card shadow-lg mb-5">
      <div class="card-header bg-dark text-white">
        <h2 class="card-title mb-0">Available Programs</h2>
      </div>
      <div class="card-body">
  
        <!-- CICB Program -->
        <div class="mb-5">
          <h3 class="text-primary mb-4">Criminal Injuries Compensation Board (CICB)</h3>
          <div class="row">
            <div class="col-md-6">
              <h4 class="text-secondary">Eligibility:</h4>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Injured as a result of a violent crime, or family members of deceased victims.</li>
                <li class="list-group-item">Injuries can be physical or psychological.</li>
                <li class="list-group-item">Crime must have occurred in Ontario.</li>
                <li class="list-group-item">Police report must have been made (charges and convictions not necessary).</li>
                <li class="list-group-item">Must apply within two years of the incident date (extensions possible).</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h4 class="text-secondary">Documents Needed:</h4>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Application Form</li>
                <li class="list-group-item">Police Report</li>
                <li class="list-group-item">Medical Records</li>
                <li class="list-group-item">Proof of Expenses</li>
                <li class="list-group-item">Proof of Relationship</li>
              </ul>
            </div>
          </div>
          <div class="mt-4">
            <h4 class="text-secondary">Application Process:</h4>
            <ol class="list-group list-group-numbered">
              <li class="list-group-item">Contact CICB: 416-326-2900 or 1-800-372-7463, info.cicb@ontario.ca</li>
              <li class="list-group-item">Complete and Submit Application</li>
              <li class="list-group-item">Review and Decision</li>
            </ol>
          </div>
          <div class="mt-4">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#cicbExample" aria-expanded="false" aria-controls="cicbExample">
              View Example Case
            </button>
            <div class="collapse mt-3" id="cicbExample">
              <div class="card card-body">
                <h5>Jane Doe's Application</h5>
                <p><strong>Part 1: Applicant Information</strong></p>
                <ul>
                  <li>Name: Jane Doe</li>
                  <li>Address: 123 Main Street, Toronto, ON, M1A 2B3</li>
                  <li>Phone Number: (416) 555-1234</li>
                  <li>Email Address: jane.doe@example.com</li>
                  <li>Date of Birth: January 1, 1980</li>
                </ul>
                <!-- Add more details as needed -->
              </div>
            </div>
          </div>
        </div>
        <hr class="my-5">
  
        <!-- FAFHV Program -->
        <div class="mb-5">
          <h3 class="text-success mb-4">Financial Assistance for Families of Homicide Victims (FAFHV) Program</h3>
          <div class="row">
            <div class="col-md-6">
              <h4 class="text-secondary">Eligibility:</h4>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Homicide occurred on or after January 1, 2016.</li>
                <li class="list-group-item">Applicant was the victim’s parent or spouse at the time of death.</li>
                <li class="list-group-item">Homicide occurred in Ontario, and applicant resides in Ontario.</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h4 class="text-secondary">Documents Needed:</h4>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Application Form</li>
                <li class="list-group-item">Death Certificate</li>
                <li class="list-group-item">Proof of Relationship</li>
                <li class="list-group-item">Proof of Residency</li>
                <li class="list-group-item">Police Report</li>
              </ul>
            </div>
          </div>
          <div class="mt-4">
            <h4 class="text-secondary">Application Process:</h4>
            <ol class="list-group list-group-numbered">
              <li class="list-group-item">Contact FAFHV: 1-855-467-4344 or 416-212-9164</li>
              <li class="list-group-item">Complete and Submit Application</li>
              <li class="list-group-item">Review and Decision within 90 days</li>
            </ol>
          </div>
          <div class="mt-4">
            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#fafhvExample" aria-expanded="false" aria-controls="fafhvExample">
              View Example Case
            </button>
            <div class="collapse mt-3" id="fafhvExample">
              <div class="card card-body">
                <h5>John Doe's Application</h5>
                <p><strong>Part 1: Applicant Information</strong></p>
                <ul>
                  <li>Name: John Doe</li>
                  <li>Address: 789 Maple Avenue, Ottawa, ON, K1A 0B1</li>
                  <li>Phone Number: (613) 555-6789</li>
                  <li>Email Address: john.doe@example.com</li>
                  <li>Date of Birth: February 15, 1975</li>
                </ul>
                <!-- Add more details as needed -->
              </div>
            </div>
          </div>
        </div>
        <hr class="my-5">
  
        <!-- VQRP Program -->
        <div class="mb-5">
          <h3 class="text-danger mb-4">Victim Quick Response Program (VQRP)</h3>
          <div class="row">
            <div class="col-md-6">
              <h4 class="text-secondary">Eligibility:</h4>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Victim of violent crime (homicide, attempted murder, serious assault, etc.).</li>
                <li class="list-group-item">Applications for emergency expenses must be within 45 days, counseling within 90 days.</li>
                <li class="list-group-item">Crime occurred in Ontario, funds used in Ontario.</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h4 class="text-secondary">Documents Needed:</h4>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Application Form</li>
                <li class="list-group-item">Police Report</li>
                <li class="list-group-item">Proof of Expenses</li>
                <li class="list-group-item">Proof of No Other Financial Resources</li>
              </ul>
            </div>
          </div>
          <div class="mt-4">
            <h4 class="text-secondary">Application Process:</h4>
            <ol class="list-group list-group-numbered">
              <li class="list-group-item">Contact VQRP: 1-888-579-2888</li>
              <li class="list-group-item">Referral through police or victim support agency</li>
              <li class="list-group-item">Work with a caseworker to complete and submit the application</li>
              <li class="list-group-item">Review and Decision</li>
            </ol>
          </div>
          <div class="mt-4">
            <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#vqrpExample" aria-expanded="false" aria-controls="vqrpExample">
              View Example Case
            </button>
            <div class="collapse mt-3" id="vqrpExample">
              <div class="card card-body">
                <h5>Sarah Smith's Application</h5>
                <p><strong>Part 1: Applicant Information</strong></p>
                <ul>
                  <li>Name: Sarah Smith</li>
                  <li>Address: 456 Oak Street, Toronto, ON, M2N 5B7</li>
                  <li>Phone Number: (416) 555-7890</li>
                  <li>Email Address: sarah.smith@example.com</li>
                  <li>Date of Birth: April 10, 1990</li>
                </ul>
                <!-- Add more details as needed -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Additional Information -->
    <div class="text-center mt-5">
      <p class="lead">For more information, visit <a href="https://www.ontario.ca/" target="_blank" class="btn btn-outline-primary">Ontario.ca</a> or contact local victim support services.</p>
    </div>
  </div>


  <!-- end about section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="images/logo.png" alt="">
          </a>
        </div>
        <div class="info_form">
          <form action="">
            <input type="email" placeholder="Your email">
            <button>
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <h5>
              Address
            </h5>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h5>
                Useful link
              </h5>
              <div class="info_links_menu">
                <a href="index.php">
                  Home
                </a>
                <a class="active" href="about.php">
                  About
                </a>
                <a href="treatment.php">
                  Treatment
                </a>
                <a href="doctor.php">
                  Doctors
                </a>
                <a href="testimonial.php">
                  Testimonial
                </a>
                <a href="contact.php">
                  Contact us
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                LATEST POSTS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post1.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post2.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                News
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post3.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post4.png" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>