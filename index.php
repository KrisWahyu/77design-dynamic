<?php include 'check.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/home.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />
  <title>77Design</title>
</head>

<body>
  <?php
  include 'config.php';
  $sqlS1 = "SELECT judul,deskripsi FROM home where section=1";
  $hasilS1 = mysqli_query($conn, $sqlS1) or exit("Error query: <b>" . $sqlS1 . "</b>.");
  $dataS1 = mysqli_fetch_assoc($hasilS1);

  $sqlS2 = "SELECT judul,deskripsi FROM home where section=2";
  $hasilS2 = mysqli_query($conn, $sqlS2) or exit("Error query: <b>" . $sqlS2 . "</b>.");
  $dataS2 = mysqli_fetch_assoc($hasilS2);

  ?>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/Group 1.svg" alt="" width="40" height="40" class="logo d-inline-block" />
        77Design</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="team.php">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.php">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <!--jumbotron-->
  <section class="jumbotron">
    <div class="container pt-5">
      <div class="row align-items-center justify-content-center">
        <div class="col-8">
          <h1 class="juduljumbo"><?php echo $dataS1['judul']; ?></h1>
          <p class="tulisan-home">
            <?php echo $dataS1['deskripsi']; ?>
          </p>
        </div>
        <div class="col-2">
          <img src="assets/iPhone12Mockup.png" alt="77Design App" class="gambar-mockupapp" />
        </div>
      </div>
    </div>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#793fbb" fill-opacity="1" d="M0,128L60,117.3C120,107,240,85,360,96C480,107,600,149,720,170.7C840,192,960,192,1080,165.3C1200,139,1320,85,1380,58.7L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
  </svg>
  <!--end jumbotron-->
  <!--about-->
  <section id="about">
    <class class="container">
      <div class="row justify-content-evenly">
        <div class="col-lg-4 gambar-ttg">
          <div id="carouselExampleInterval" class="carousel " data-bs-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="assets/ast4.png" class="d-block w-100" alt="..." />
              </div>
            </div>

          </div>
        </div>
        <div class=" col-lg-4 tulisan-about">
          <h1><?php echo $dataS2['judul']; ?></h1>
          <div class="">
            <P>
              <?php echo $dataS2['deskripsi']; ?>
            </P>
          </div>
        </div>
    </class>
    </div>
  </section>
  <!--end about -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#793fbb" fill-opacity="1" d="M0,224L80,234.7C160,245,320,267,480,261.3C640,256,800,224,960,213.3C1120,203,1280,213,1360,218.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
  </svg>

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #793fbb;">
    © 2020 Copyright:
    <a class="text-white">77Design</a>
  </div>
  <!-- Copyright -->
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>