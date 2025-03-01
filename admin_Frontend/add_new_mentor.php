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
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">HopeGuide Admin</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php"><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="user_management.php"><i class="fas fa-users"></i><span>User Management</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mentor_management.php"><i class="fas fa-user-tie"></i><span>Mentor Management</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="community_threads.php"><i class="fas fa-comments"></i><span>Community Threads</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="financial_aid.php"><i class="fas fa-hand-holding-usd"></i><span>Financial Aid Management</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="legal_aid.php"><i class="fas fa-balance-scale"></i><span>Legal Aid Management</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="psychologist_management.php"><i class="fas fa-user-md"></i><span>Psychologist Management</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="appointment_overview.php"><i class="fas fa-calendar-check"></i><span>Appointment Overview</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="platform_settings.php"><i class="fas fa-cogs"></i><span>Platform Settings</span></a>
            </li>
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

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