<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dev Patel - Mentor Management</title>

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

                <!-- Topbar -->
                <?php
                        include "navbar.php";
                ?>

                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add New Mentor Form</h1>
                    </div>
                    
                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-4">
                                  <label for="validationCustom01" class="form-label">Name</label>
                                  <input type="text" class="form-control" id="validationCustom01"  required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="validationCustom02" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                  <label for="validationCustomUsername" class="form-label">Username</label>
                                  <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                      Please choose a username.
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-check-label" for="invalidCheck">
                                    </label>
                                </div>
                                <div class="col-md-6">
                                  <label for="validationCustom03" class="form-label">City</label>
                                  <input type="text" class="form-control" id="validationCustom03" required>
                                  <div class="invalid-feedback">
                                    Please provide a valid city.
                                  </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom03" class="form-label">State</label>
                                    <input type="text" class="form-control" id="validationCustom03" required>
                                    <div class="invalid-feedback">
                                      Please provide a valid city.
                                    </div>
                                  </div>
                                <div class="col-md-3">
                                  <label for="validationCustom05" class="form-label">Zip</label>
                                  <input type="text" class="form-control" id="validationCustom05" required>
                                  <div class="invalid-feedback">
                                    Please provide a valid zip.
                                  </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-check-label" for="invalidCheck">
                                    </label>
                                </div>
                                <div class="col-12">
                                  <button class="btn btn-primary" type="submit">Add</button>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>