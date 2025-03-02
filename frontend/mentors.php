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
  <style>
    .mentor-card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease-in-out;
    }

    .mentor-card:hover {
        transform: scale(1.05);
    }

    .mentor-card img {
        height: 250px;
        object-fit: cover;
    }

    .mentor-card .card-body {
        text-align: center;
    }

    .btn-custom {
        width: 100px;
    }
</style>

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
            <h2>Your <span class="text-primary">Mentors</span></h2>
        </div>

        <div class="row g-4">
            <!-- Mentor 1 -->
            <div class="col-md-4">
                <div class="card mentor-card">
                    <img src="images/team1.jpg" class="card-img-top" alt="Mentor 1">
                    <div class="card-body">
                        <h5 class="card-title">Hennry</h5>
                        <p class="card-text">MBBS</p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-custom"><a href="bookAppoinment.php" style="color: white;">Book</a></button>
                            <button class="btn btn-success btn-custom">Chat</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mentor 2 -->
            <div class="col-md-4">
                <div class="card mentor-card">
                    <img src="images/team2.jpg" class="card-img-top" alt="Mentor 2">
                    <div class="card-body">
                        <h5 class="card-title">Jenni</h5>
                        <p class="card-text">MBBS</p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-custom"><a href="bookAppoinment.php" style="color: white;">Book</a></button>
                            <button class="btn btn-success btn-custom">Chat</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mentor 3 -->
            <div class="col-md-4">
                <div class="card mentor-card">
                    <img src="images/team3.jpg" class="card-img-top" alt="Mentor 3">
                    <div class="card-body">
                        <h5 class="card-title">Morco</h5>
                        <p class="card-text">MBBS</p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-custom"><a href="bookAppoinment.php" style="color: white;">Book</a></button>
                            <button class="btn btn-success btn-custom">Chat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Row -->
    </div> <!-- End Container -->
</section>

  <!-- end treatment section -->

  <!-- info section -->
<!-- Include Footer -->
<?php include 'footer.php'; ?>

</body>

</html>