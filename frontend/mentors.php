<script>
  $token = sessionStorage.getItem('token');
  // console.log($token)
  if (!sessionStorage.getItem('userId')) {
    window.location.href = './login.php';
  } else {
  // console.log('token exists:',sessionStorage.getItem('userId'));
}
</script>
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

        <div class="row g-4" id="mentorCards">
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
        </div> <!-- End Row -->
    </div> <!-- End Container -->
</section>

  <!-- end treatment section -->

  <!-- info section -->
<!-- Include Footer -->
<?php include 'footer.php'; ?>

<script>
    // Enhanced filtering logic
    let allMentors = [];

    fetch('http://localhost:5430/v1/user/mentore/getAllMentore', {
      headers: {
        'Authorization': 'Bearer ' + $token,
        'Content-Type': 'application/json'
      }
    })
    .then(response => response.json())
    .then(data => {
        allMentors = data.data;
        renderCards(allMentors);
        
        // Add event listeners
        //   document.getElementById('searchInput').addEventListener('input', filterLawyers);
        //   document.getElementById('cityFilter').addEventListener('change', filterLawyers);
    })
    .catch(error => console.error('Error:', error));
    
    function renderCards(mentores) {
        const container = document.getElementById('mentorCards');
        container.innerHTML = '';
        
        mentores.forEach(mentore => {
            console.log(mentore)
        const card = document.createElement('div');
        card.className = 'col-md-4';
        card.innerHTML = `

          <div class="card mentor-card">
                    <img src="images/team1.jpg" class="card-img-top" alt="${mentore.fullName}">
                    <div class="card-body">
                        <h5 class="card-title">${mentore.fullName}</h5>
                        <p class="card-text">${mentore.email}</p>
                        <p class="card-text">${mentore.mobile}</p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-custom"><a href="bookAppoinment.php" style="color: white;">Book</a></button>
                            <button class="btn btn-success btn-custom">Chat</button>
                        </div>
                    </div>
                </div>
        `;
        container.appendChild(card);
      });
    }

    // function filtermentores() {
    //   console.log("Pavan")
    //   const searchQuery = document.getElementById('searchInput').value.toLowerCase();
    //   const selectedCity = document.getElementById('cityFilter').value.toLowerCase();

    //   const filtered = allLawyers.filter(lawyer => {
    //     const matchesSearch = lawyer.name.toLowerCase().includes(searchQuery);
    //     const city = lawyer.city.split(',')[1]?.trim().toLowerCase();
    //     console.log("Pavan",city)
    //     const matchesCity = !selectedCity || city === selectedCity;
        
    //     return matchesSearch && matchesCity;
    //   });

    //   renderCards(filtered);
    // }
  </script>

</body>

</html>