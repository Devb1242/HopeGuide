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
                      <a class="nav-link" href="mentors.php">Mentor</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Community Forum</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Setting</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="profile.php">Profile</a>
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


  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="mt-3 heading_container">
        <h2>
          Login
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="" id="loginForm" method = "post">
              <div>
                <input type="email" id="email" placeholder="Email" />
              </div>
              <div>
                <input type="password" id="password" placeholder="Password" />
              </div>
              <div class="btn_box">
                <button>
                  Login
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

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
                <a href="about.php">
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
                <a class="active" href="contact.php">
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
      const loginForm = document.getElementById('loginForm');

      // Handle form submission
      loginForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        // Validate form
        if (!loginForm.checkValidity()) {
          event.stopPropagation();
          loginForm.classList.add('was-validated');
          return;
        }

        // Collect form data
        let email = document.getElementById('email').value
        let password = document.getElementById('password').value

        const userData = {
          email: email,
          password: password,
        };
        console.log(userData)
        // Send POST request to add new user
        fetch('http://localhost:5430/v1/user/auth/login', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            // 'Authorization': 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbklkIjoiVTJGc2RHVmtYMThPakNQeDRpTDJGY281OTMza2pkenJHK0g2U04vWXdtSlNjaHQyb2xNQjREYWpwUitMZVBpVCIsInBhc3N3b3JkIjoiVTJGc2RHVmtYMTlPdWxSWSszbU4yRVpXVXhlZW1uYjNaS010Unkwc2QvUTRIUkVsQjltdnFwZXNZcmtJTEcvUFpCMll3RXMwSlJSd2ZQWWxNMjhMby92YzZvU0MvU0crSDQvZ2tqS1FqOEE9IiwiaWF0IjoxNzQwODgwMjMwLCJleHAiOjE3NDA5NjY2MzB9.oCJK9RVzDRalHzgrKwrrGOYv1RPHH3ZJM4CeJUTX3BA' // Add if required
          },
          body: JSON.stringify(userData)
        })
          .then(response => {
            if (!response.ok) {
              throw new Error('EmailId and password not matched');
            }
            return response.json();
          })
          .then(data => {
            console.log('Login Sucessful', data);
            alert('Login successfully!');
             sessionStorage.setItem('userId', data.data.id);
             sessionStorage.setItem('token', data.data.token);

            loginForm.reset(); // Clear the form
            loginForm.classList.remove('was-validated'); // Reset validation
            window.location.href = './index.php';
          })
          .catch(error => {
            console.error('Error :', error);
            alert('Failed to login. Please try again.');
          });
      });
    });
  </script>