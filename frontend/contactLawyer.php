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
</style>
  <title>HopeGuide</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
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
    <!-- Include Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- end header section -->
  </div>


  <!-- treatment section -->

  <section class="team_section py-5">
  <div class="container">
    <div class="text-center mb-4">
      <h2>Available <span class="text-primary">Lawyers</span></h2>
    </div>

    <!-- Filter Section -->
    <div class="filter-section text-center mb-4">
      <select id="cityFilter">
        <option value="">Select City</option>
        <option value="Toronto">Toronto</option>
        <option value="Ottawa">Ottawa</option>
        <option value="Mississauga">Mississauga</option>
        <option value="Brampton">Brampton</option>
        <option value="Hamilton">Hamilton</option>
        <option value="London">London</option>
        <option value="Kitchener">Kitchener</option>
        <option value="Waterloo">Waterloo</option>
        <option value="Guelph">Guelph</option>
        <option value="Windsor">Windsor</option>
        <option value="St. Catharines">St. Catharines</option>
        <option value="Oshawa">Oshawa</option>
        <option value="Barrie">Barrie</option>
        <option value="Kingston">Kingston</option>
        <option value="Sudbury">Sudbury</option>
        <option value="Thunder Bay">Thunder Bay</option>
        <option value="Peterborough">Peterborough</option>
        <option value="North Bay">North Bay</option>
        <option value="Sault Ste. Marie">Sault Ste. Marie</option>
        <option value="Cornwall">Cornwall</option>
      </select>

      <select id="categoryFilter">
        <option value="">Select Category</option>
        <option value="Personal Injury Lawyers">Personal Injury Lawyers</option>
        <option value="Criminal Defense Lawyers">Criminal Defense Lawyers</option>
        <option value="Victim Rights Lawyers">Victim Rights Lawyers</option>
      </select>
    </div>

    <!-- Lawyer Cards -->
    <div class="row g-4" id="lawyerCards">
      <!-- Lawyer 1 -->
      <div class="col-md-3" data-city="Toronto" data-category="Personal Injury Lawyers">
        <div class="card mentor-card">
          <img src="images/team1.jpg" class="card-img-top" alt="Lawyer 1">
          <div class="card-body">
            <h5 class="card-title">Thomson Rogers LLP</h5>
            <div class="ratings">★★★★☆</div>
            <div class="address">
              <i class="fa fa-map-marker"></i> 202 Maple St, Toronto, Canada
            </div>
            <div class="phone">
              <i class="fa fa-phone"></i> +01 444 555 666
            </div>
          </div>
        </div>
      </div>

      <!-- Lawyer 2 -->
      <div class="col-md-3" data-city="Ottawa" data-category="Criminal Defense Lawyers">
        <div class="card mentor-card">
          <img src="images/team2.jpg" class="card-img-top" alt="Lawyer 2">
          <div class="card-body">
            <h5 class="card-title">Neinstein Personal Injury Lawyers</h5>
            <div class="ratings">★★★★☆</div>
            <div class="address">
              <i class="fa fa-map-marker"></i> 101 Pine St, Ottawa, Canada
            </div>
            <div class="phone">
              <i class="fa fa-phone"></i> +01 111 222 333
            </div>
          </div>
        </div>
      </div>

      <!-- Lawyer 3 -->
      <div class="col-md-3" data-city="Mississauga" data-category="Victim Rights Lawyers">
        <div class="card mentor-card">
          <img src="images/team3.jpg" class="card-img-top" alt="Lawyer 3">
          <div class="card-body">
            <h5 class="card-title">Preszler Injury Lawyers</h5>
            <div class="ratings">★★★★★</div>
            <div class="address">
              <i class="fa fa-map-marker"></i> 456 Elm St, Mississauga, Canada
            </div>
            <div class="phone">
              <i class="fa fa-phone"></i> +01 987 654 321
            </div>
          </div>
        </div>
      </div>

      <!-- Lawyer 4 -->
      <div class="col-md-3" data-city="Toronto" data-category="Personal Injury Lawyers">
        <div class="card mentor-card">
          <img src="images/team1.jpg" class="card-img-top" alt="Lawyer 4">
          <div class="card-body">
            <h5 class="card-title">Preszler Injury Lawyers</h5>
            <div class="ratings">★★★★★</div>
            <div class="address">
              <i class="fa fa-map-marker"></i> 456 Elm St, Toronto, Canada
            </div>
            <div class="phone">
              <i class="fa fa-phone"></i> +01 987 654 321
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End Row -->
  </div> <!-- End Container -->
</section>

<!-- end treatment section -->
 
  <!-- Include Footer -->
 <?php include 'footer.php'; ?>

</body>

</html>