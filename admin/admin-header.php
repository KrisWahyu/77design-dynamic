<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="admin.css" />
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase"><i class="fas fa-lock me-2"></i>Admin</div>
            <div class="list-group list-group-flush my-3">
                <a href="admin-user.php" class="list-group-item list-group-item-action second-text bg-transparent fw-bold"><i class="fas fa-users me-2"></i>Users</a>
                <a href="admin-home.php" class="list-group-item list-group-item-action second-text bg-transparent fw-bold"><i class="fas fa-home me-2"></i>Home</a>
                <a href="admin-about.php" class="list-group-item list-group-item-action second-text bg-transparent fw-bold"><i class="fas fa-project-diagram me-2"></i>About</a>
                <a href="admin-service.php" class="list-group-item list-group-item-action second-text bg-transparent fw-bold"><i class="fas fa-chart-line me-2"></i>Service</a>
                <a href="admin-team.php" class="list-group-item list-group-item-action second-text bg-transparent fw-bold"><i class="fas fa-paperclip me-2"></i>Team</a>
                <a href="admin-contact.php" class="list-group-item list-group-item-action second-text bg-transparent fw-bold"><i class="fas fa-shopping-cart me-2"></i>Contact</a>

                <a href="../switch.php" class="text-center btn btn-success"> Maintenance Mode </a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left toggle fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php echo $_SESSION['username']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>