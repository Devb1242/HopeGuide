<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dev Patel - Lawyer Management</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <!-- RateYo CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

    <!-- jQuery (required for RateYo) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- RateYo JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

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

                <!-- Topbar -->
                <?php
                        include "navbar.php";
                ?>

                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add New Lawyer Form</h1>
                    </div>
                    
                    <div class="card shadow mb-4">
                        <div class="card-body">
                          <form id="addUserForm" name="addUserForm" class="row g-3 needs-validation" method="post" novalidate>
                            <div class="col-md-6">
                              <label for="name" class="form-label">Name</label>
                              <input type="text" class="form-control" id="name" name="name" required>
                              <div class="invalid-feedback">
                                Please provide a valid name.
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

                            <div class="col-md-6">
                              <label for="description" class="form-label">Description</label>
                              <input type="textbox" class="form-control" id="description" name="description" required>
                            </div>

                            <div class="col-md-6">
                              <label for="address" class="form-label">Address</label>
                              <input type="textbox" class="form-control" id="address" name="address" required>
                            </div>

                            <div class="col-md-6">
                              <label for="ratings" class="form-label">Ratings</label>
                              <input type="number" class="form-control" id="ratings" name="ratings" required>
                            </div>

                            <div class="col-12">
                                <label class="form-check-label" for="invalidCheck">
                                </label>
                            </div>
                            <div class="col-12">
                              <button class="btn btn-primary" type="submit" onclick="">Add</button>
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
        let mobile = document.getElementById('mobile').value
        let description = document.getElementById('description').value
        let address = document.getElementById('address').value
        let ratings = document.getElementById('ratings').value

        const userData = {
          name: name,
          mobile: mobile,
          description: description,
          address: address,
          ratings: ratings
        };
        console.log(userData)
        // Send POST request to add new user
        fetch('http://localhost:5430/v1/admin/loyear/addLoyear', { // Replace with your API endpoint
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbklkIjoiVTJGc2RHVmtYMThPakNQeDRpTDJGY281OTMza2pkenJHK0g2U04vWXdtSlNjaHQyb2xNQjREYWpwUitMZVBpVCIsInBhc3N3b3JkIjoiVTJGc2RHVmtYMTlPdWxSWSszbU4yRVpXVXhlZW1uYjNaS010Unkwc2QvUTRIUkVsQjltdnFwZXNZcmtJTEcvUFpCMll3RXMwSlJSd2ZQWWxNMjhMby92YzZvU0MvU0crSDQvZ2tqS1FqOEE9IiwiaWF0IjoxNzQwODgwMjMwLCJleHAiOjE3NDA5NjY2MzB9.oCJK9RVzDRalHzgrKwrrGOYv1RPHH3ZJM4CeJUTX3BA' // Add if required
          },
          body: JSON.stringify(userData) // Convert data to JSON
        })
          .then(response => {
            if (!response.ok) {
              throw new Error('Failed to add Lawyer');
            }
            return response.json();
          })
          .then(data => {
            console.log('Lawyer added:', data);
            alert('Lawyer added successfully!');
            addUserForm.reset(); // Clear the form
            addUserForm.classList.remove('was-validated'); // Reset validation
          })
          .catch(error => {
            console.error('Error adding Lawyer:', error);
            alert('Failed to add Lawyer. Please try again.');
          });
      });
    });
  </script>
</body>
</html>