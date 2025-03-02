<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dev Patel - Psychologist Management</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
				include "sidebar.php";
		?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- TopBar -->
                <?php
                        include "navbar.php";
                ?>

                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add New Psychologist Form</h1>
                    </div>
                    
                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <!-- Add User Form -->
                            <form id="addUserForm" name="addUserForm" class="row g-3 needs-validation" method="post" novalidate>
                              <!-- Name -->
                              <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <div class="invalid-feedback">
                                  Please provide a valid name.
                                </div>
                              </div>

                              <!-- Email -->
                              <div class="col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">
                                  Please provide a valid email.
                                </div>
                              </div>

                              <div class="col-md-6">
                                <label for="description" class="form-label">Description</label>
                                <input type="textbox" class="form-control" id="description" name="description" required>
                              </div>

                              <div class="col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="textbox" class="form-control" id="address" name="address" required>
                              </div>

                              <div class="col-md-3">
                                <label for="postalCode" class="form-label">Postal Code</label>
                                <input type="text" class="form-control" id="postalCode" name = "postalCode" required>
                                <div class="invalid-feedback">
                                  Please provide a valid Postal Code.
                                </div>
                              </div>

                              <div class="col-md-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                                <div class="invalid-feedback">
                                  Please provide a valid city.
                                </div>
                              </div>

                              <!-- Mobile Number -->
                              <div class="col-md-6">
                                <label for="mobile" class="form-label">Mobile No.</label>
                                <input type="number" class="form-control" id="mobile" name="mobile" required>
                                <div class="invalid-feedback">
                                  Please provide a valid mobile number.
                                </div>
                              </div>

                              <div class="col-12">
                                <label class="form-check-label" for="invalidCheck">
                                </label>
                              </div>
                              <!-- Submit Button -->
                              <div class="col-12">
                                <button class="btn btn-primary" type="submit" onclick="">Add Psychologist</button>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Custom JavaScript for Form Submission -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const addUserForm = document.getElementById('addUserForm');

      // Handle form submission
      addUserForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        // Validate form
        if (!addUserForm.checkValidity()) {
          event.stopPropagation();
          addUserForm.classList.add('was-validated');
          return;
        }

        // Collect form data
        let name = document.getElementById('name').value
        let email = document.getElementById('email').value
        let description = document.getElementById('description').value
        let address = document.getElementById('address').value
        let postalCode = document.getElementById('postalCode').value
        let city = document.getElementById('city').value
        let mobile = document.getElementById('mobile').value

        const userData = {
          name: name,
          email: email,
          description: description,
          address: address,
          postalCode: postalCode,
          city: city,
          mobile: mobile
        };
        console.log(userData)
        // Send POST request to add new user
        fetch('http://localhost:5430/v1/admin/psychologist/addPsychologist', { // Replace with your API endpoint
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbklkIjoiVTJGc2RHVmtYMThPakNQeDRpTDJGY281OTMza2pkenJHK0g2U04vWXdtSlNjaHQyb2xNQjREYWpwUitMZVBpVCIsInBhc3N3b3JkIjoiVTJGc2RHVmtYMTlPdWxSWSszbU4yRVpXVXhlZW1uYjNaS010Unkwc2QvUTRIUkVsQjltdnFwZXNZcmtJTEcvUFpCMll3RXMwSlJSd2ZQWWxNMjhMby92YzZvU0MvU0crSDQvZ2tqS1FqOEE9IiwiaWF0IjoxNzQwODgwMjMwLCJleHAiOjE3NDA5NjY2MzB9.oCJK9RVzDRalHzgrKwrrGOYv1RPHH3ZJM4CeJUTX3BA' // Add if required
          },
          body: JSON.stringify(userData) // Convert data to JSON
        })
          .then(response => {
            if (!response.ok) {
              throw new Error('Failed to add Psychologist');
            }
            return response.json();
          })
          .then(data => {
            console.log('Psychologist added:', data);
            alert('Psychologist added successfully!');
            addUserForm.reset(); // Clear the form
            addUserForm.classList.remove('was-validated'); // Reset validation
          })
          .catch(error => {
            console.error('Error adding Psychologist:', error);
            alert('Failed to add Psychologist. Please try again.');
          });
      });
    });
  </script>
</body>
</html>