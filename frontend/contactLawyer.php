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
  <title>HopeGuide</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
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
    :root {
      --primary-color: #007bff;
      --secondary-color: #6c757d;
      --hover-color: #0056b3;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f9fa;
    }

    .hero_area {
      background: var(--primary-color);
      color: white;
      padding: 15px 0;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .team_section {
      padding: 60px 0;
    }

    .filter-section {
      background: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.05);
      margin: 30px auto;
      max-width: 800px;
    }

    .filter-controls {
      display: flex;
      gap: 15px;
      justify-content: center;
      flex-wrap: wrap;
    }

    #searchInput {
      flex: 1;
      max-width: 400px;
      border: 2px solid #e9ecef;
      border-radius: 8px;
      padding: 12px 20px;
      transition: all 0.3s ease;
    }

    #searchInput:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 8px rgba(0,123,255,0.25);
    }

    #cityFilter {
      width: 200px;
      border: 2px solid #e9ecef;
      border-radius: 8px;
      padding: 12px 20px;
      appearance: none;
      background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e") no-repeat right 1rem center/16px 12px;
    }

    .lawyer-card {
      border: none;
      border-radius: 12px;
      transition: all 0.3s ease;
      background: white;
      box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }

    .lawyer-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 15px rgba(0,0,0,0.1);
    }

    .card-img-top {
      height: 220px;
      object-fit: cover;
      border-radius: 12px 12px 0 0;
    }

    .card-body {
      padding: 1.5rem;
    }

    .card-title {
      font-weight: 700;
      color: #2d3436;
      margin-bottom: 0.75rem;
    }

    .ratings {
      color: #ffc107;
      font-size: 1rem;
    }

    .address, .phone {
      color: #6c757d;
      font-size: 0.9rem;
    }

    .address i, .phone i {
      color: var(--primary-color);
      width: 20px;
    }

    .section-title {
      font-weight: 700;
      margin-bottom: 2rem;
      position: relative;
      display: inline-block;
    }

    .section-title:after {
      content: '';
      display: block;
      width: 50px;
      height: 3px;
      background: var(--primary-color);
      margin: 10px auto 0;
    }
  </style>
</head>

<body class="sub_page">

  <div class="hero_area">
    <?php include 'navbar.php'; ?>
  </div>

  <section class="team_section py-5">
    <div class="container">
      <h2 class="text-center section-title">Available <span class="text-primary">Lawyers</span></h2>

      <div class="filter-section">
        <div class="filter-controls">
          <input type="text" id="searchInput" placeholder="Search by name..." 
                 class="form-control-lg">
          <select id="cityFilter" class="form-select-lg">
            <option value="">All Cities</option>
            <option value="Toronto">Toronto</option>
            <option value="Ottawa">Ottawa</option>
            <!-- Keep other city options -->
          </select>
        </div>
      </div>

      <div class="row g-4" id="lawyerCards"></div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <script>
    // Enhanced filtering logic
    let allLawyers = [];

    fetch('http://localhost:5430/v1/user/loyear/getAllLoyear?page=1&limit=10', {
      headers: {
        'Authorization': 'Bearer ' + $token,
        'Content-Type': 'application/json'
      }
    })
    .then(response => response.json())
    .then(data => {
      allLawyers = data.data.result;
      renderCards(allLawyers);
      
      // Add event listeners
      document.getElementById('searchInput').addEventListener('input', filterLawyers);
      document.getElementById('cityFilter').addEventListener('change', filterLawyers);
    })
    .catch(error => console.error('Error:', error));

    function renderCards(lawyers) {
      const container = document.getElementById('lawyerCards');
      container.innerHTML = '';

      lawyers.forEach(lawyer => {
        const card = document.createElement('div');
        card.className = 'col-md-4 col-lg-3 mb-4';
        card.innerHTML = `
          <div class="card lawyer-card h-100">
            <img src="${lawyer.image || 'images/team1.jpg'}" class="card-img-top" alt="${lawyer.name}">
            <div class="card-body">
              <h5 class="card-title">${lawyer.name}</h5>
              <div class="ratings mb-3">
                ${'★'.repeat(Math.floor(lawyer.ratings))}${'☆'.repeat(5 - Math.floor(lawyer.ratings))}
              </div>
              <div class="address mb-2">
                <i class="fas fa-map-marker-alt"></i> ${lawyer.address}
              </div>
              <div class="phone">
                <i class="fas fa-phone"></i> ${lawyer.mobile}
              </div>
            </div>
          </div>
        `;
        container.appendChild(card);
      });
    }

    function filterLawyers() {
      console.log("Pavan")
      const searchQuery = document.getElementById('searchInput').value.toLowerCase();
      const selectedCity = document.getElementById('cityFilter').value.toLowerCase();

      const filtered = allLawyers.filter(lawyer => {
        const matchesSearch = lawyer.name.toLowerCase().includes(searchQuery);
        const city = lawyer.city.split(',')[1]?.trim().toLowerCase();
        console.log("Pavan",city)
        const matchesCity = !selectedCity || city === selectedCity;
        
        return matchesSearch && matchesCity;
      });

      renderCards(filtered);
    }
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>