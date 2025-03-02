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
  <!-- documentation style -->
  <link href="css/documentation.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <!-- Include Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- end header section -->
  </div>

  <!-- Tabs Section -->
  <section class="tabs_section layout_padding">
    <div class="container">
      <div class="tabs_container">
        <button class="tab_button active" onclick="showTab('homicide')">
          <i class="fa fa-heart"></i>
          <span>Support for Families of Homicide Victims</span>
        </button>
        <button class="tab_button" onclick="showTab('assault')">
          <i class="fa fa-shield"></i>
          <span>Support for Assault and Battery Victims</span>
        </button>
      </div>

      <!-- Content for Families of Homicide Victims -->
      <div id="homicide" class="tab_content active">
        <h2>Support for Families of Homicide Victims</h2>
        <p>
          The journey for families of homicide victims is incredibly challenging and involves several steps to address emotional, legal, and financial needs. Here are some general steps that families can take:
        </p>

        <div class="content_box">
          <h3>1. Immediate Steps</h3>
          <ul>
            <li><strong>Ensure Safety:</strong> Make sure all family members are safe and secure.</li>
            <li><strong>Contact Authorities:</strong> Report the incident to the police and cooperate with the investigation.</li>
            <li><strong>Notify Close Family and Friends:</strong> Inform close family members and friends about the incident.</li>
          </ul>

          <h3>2. Emotional Support</h3>
          <ul>
            <li><strong>Seek Counseling:</strong> Engage with professional counselors or therapists to help process grief and trauma.</li>
            <li><li><strong>Join Support Groups:</strong> Connect with support groups for families of homicide victims to share experiences and receive emotional support.</li>
            <li><strong>Lean on Community:</strong> Reach out to community organizations and religious institutions for additional support.</li>
          </ul>

          <h3>3. Legal Steps</h3>
          <ul>
            <li><strong>Work with Law Enforcement:</strong> Stay in contact with the police and provide any necessary information to aid the investigation.</li>
            <li><strong>Victim Advocates:</strong> Utilize victim advocates who can guide you through the legal process and ensure your rights are protected.</li>
            <li><strong>Attend Court Hearings:</strong> Be present at court hearings and trials to stay informed about the case's progress.</li>
          </ul>

          <h3>4. Financial Assistance</h3>
          <ul>
            <li><strong>Apply for Compensation:</strong> Apply for financial assistance programs such as the Victim Quick Response Program+ (VQRP+) and the Financial Assistance for Families of Homicide Victims (FAFHV) Program.</li>
            <li><strong>Seek Restitution:</strong> Request restitution from the offender through the court system to cover financial losses.</li>
            <li><strong>Explore Additional Resources:</strong> Look into non-government organizations that provide financial aid and support to families of homicide victims.</li>
          </ul>

          <h3>5. Practical Arrangements</h3>
          <ul>
            <li><strong>Funeral Arrangements:</strong> Plan and arrange the funeral or memorial service for the deceased.</li>
            <li><strong>Manage Affairs:</strong> Handle the deceased's personal affairs, such as closing accounts and managing their estate.</li>
          </ul>

          <h3>6. Long-term Support</h3>
          <ul>
            <li><strong>Ongoing Counseling:</strong> Continue with counseling and therapy to help with long-term emotional recovery.</li>
            <li><strong>Stay Connected:</strong> Maintain connections with support groups and community organizations for ongoing support.</li>
            <li><strong>Advocacy and Awareness:</strong> Consider getting involved in advocacy and awareness efforts to support other victims and prevent future crimes.</li>
          </ul>
        </div>
      </div>

      <!-- Content for Assault and Battery Victims -->
      <div id="assault" class="tab_content">
        <h2>Support for Assault and Battery Victims</h2>
        <p>
          Here are some general steps that victims of assault and battery can take to address their immediate needs and begin their journey to recovery:
        </p>

        <div class="content_box">
          <h3>1. Immediate Steps</h3>
          <ul>
            <li><strong>Ensure Safety:</strong> Move to a safe location away from the assailant.</li>
            <li><strong>Seek Medical Attention:</strong> Get medical help even if injuries seem minor, as some injuries may not be immediately apparent.</li>
            <li><strong>Contact the Police:</strong> Report the incident to law enforcement to create an official record.</li>
            <li><strong>Document Evidence:</strong> Take photos of your injuries, any property damage, and the scene of the incident.</li>
            <li><strong>Gather Witness Information:</strong> Collect contact details of anyone who witnessed the incident.</li>
          </ul>

          <h3>2. Emotional Support</h3>
          <ul>
            <li><strong>Seek Counseling:</strong> Engage with professional counselors or therapists to help process trauma and emotions.</li>
            <li><strong>Join Support Groups:</strong> Connect with support groups for victims of assault and battery to share experiences and receive emotional support.</li>
            <li><strong>Lean on Trusted Individuals:</strong> Reach out to friends, family, or community members for support and comfort.</li>
          </ul>

          <h3>3. Legal Steps</h3>
          <ul>
            <li><strong>Work with Law Enforcement:</strong> Cooperate with the police investigation and provide any necessary information.</li>
            <li><strong>Consult with a Lawyer:</strong> Seek legal advice to understand your rights and options for pursuing justice and compensation.</li>
            <li><strong>File a Civil Lawsuit:</strong> Consider filing a civil lawsuit to seek monetary compensation for damages, medical expenses, lost wages, and pain and suffering.</li>
          </ul>

          <h3>4. Financial Assistance</h3>
          <ul>
            <li><strong>Apply for Compensation:</strong> Apply for financial assistance programs such as the Victim Quick Response Program+ (VQRP+) and the Criminal Injuries Compensation Board (CICB) to cover medical expenses, counseling, and other related costs.</li>
            <li><strong>Seek Restitution:</strong> Request restitution from the offender through the court system to cover financial losses.</li>
            <li><strong>Explore Additional Resources:</strong> Look into non-government organizations that provide financial aid and support to victims of assault and battery.</li>
          </ul>

          <h3>5. Practical Arrangements</h3>
          <ul>
            <li><strong>Manage Medical Appointments:</strong> Schedule and attend follow-up medical appointments to ensure proper recovery.</li>
            <li><strong>Handle Personal Affairs:</strong> Take care of any personal affairs disrupted by the incident, such as work or school commitments.</li>
          </ul>

          <h3>6. Long-term Support</h3>
          <ul>
            <li><strong>Ongoing Counseling:</strong> Continue with counseling and therapy to help with long-term emotional recovery.</li>
            <li><strong>Stay Connected:</strong> Maintain connections with support groups and community organizations for ongoing support.</li>
            <li><strong>Advocacy and Awareness:</strong> Consider getting involved in advocacy and awareness efforts to support other victims and prevent future crimes.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Include Footer -->
  <?php include 'footer.php'; ?>

  <!-- JavaScript for Tabs -->
  <script>
    function showTab(tabName) {
      // Hide all tab content
      document.querySelectorAll('.tab_content').forEach(tab => {
        tab.classList.remove('active');
      });

      // Show the selected tab content
      document.getElementById(tabName).classList.add('active');

      // Update active tab button
      document.querySelectorAll('.tab_button').forEach(button => {
        button.classList.remove('active');
      });
      document.querySelector(`[onclick="showTab('${tabName}')"]`).classList.add('active');
    }
  </script>

</body>

</html>