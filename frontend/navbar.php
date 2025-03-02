<!-- navbar.php -->
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
                  <a class="dropdown-item" href="documentation.php">Step By Step Guide</a>
                  <a class="dropdown-item" href="contactLawyer.php">Contact a Lawyer</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="legalAidDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Emotional Support
                </a>
                <div class="dropdown-menu" aria-labelledby="legalAidDropdown">
                  <a class="dropdown-item" href="pshychologists.php">Psychologist</a>
                  <!-- <a class="dropdown-item" href="contactLawyer.php">Mental Health Resources</a>-->
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mentors.php">Mentor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="communityForum.php">Community Forum</a>
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