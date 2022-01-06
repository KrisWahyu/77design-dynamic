<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
  header("location: admin/admin-user.php");
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: admin/admin-user.php");
  } else {
    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
  }
}

?>

<!DOCTYPE html>

<head lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css" />
  <title>Login Page</title>
</head>

<body>
  <section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <form method="POST">
                <h2 class="fw-bold mb-3 ">Login</h2>
                <p class=" mb-5">Please enter your login and password!</p>
                <div class="form-floating mb-3">
                  <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name">
                  <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
                <div class="mb-3 d-grid gap-2">
                  <button type="submit" name="submit" class="btn btn-primary btn-lg ">Sign In</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>