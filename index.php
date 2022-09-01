<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("button").click(function() {
        $("img").toggle("slow");
      });
    });
  </script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/boxicons.min.css" />
  <link rel="stylesheet" href="css/style.css" />

  <title>TEST</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
  <nav class="navbar fixed-top navbar-expand-lg bg-white">
    <div class="container">
      <a class="navbar-brand logo-text" href="#">WEB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="home">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <h1 class="text-white display-4">
            <?php echo "Hello " . $_SESSION['username'] . "!"; ?>
          </h1>
          <h3 class="text-white">
            <?php
            date_default_timezone_set("Asia/Jakarta");
            $time = date("H:i");
            if ($time < "18") {
              echo "Have a good day!";
            } else {
              echo "Have a good night!";
            }
            ?>
          </h3>
          <p class="text-white">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
            impedit natus reiciendis animi, voluptatum incidunt asperiores
            commodi ea iure quaerat qui blanditiis tempora, temporibus
            pariatur sit saepe neque repudiandae aut!
          </p>
          <a href="#footer" class="btn btn-brand">Contact</a>
        </div>
      </div>
    </div>
  </section>

  <section id="team" class="row g-0 py-0 text-center">
    <!-- <button>Klik!</button> -->
    <div class="col-lg-3 col-sm-6 team-member">
      <div class="team-member-img">
        <img src="img/team.jpg" alt="" />
        <div class="social-icons">
          <a href="https://www.facebook.com/" target="_blank">
            <i class="bx bxl-facebook"></i>
          </a>
          <a href="https://twitter.com/" target="_blank"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/" target="_blank"><i class="bx bxl-github"></i></a>
        </div>
      </div>
      <div class="p-4">
        <h5 class="title-sm mt-3 mb-0 text-white">A. Kholifatul</h5>
        <small class="text-white">Web Designer</small>
        <div class="hline"></div>
        <p class="text-white">
          Well skillful lorem Ipsum is not simply random text. It has roots in
          a piece of classical Latin literature from 45 BC
        </p>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 team-member even">
      <div class="team-member-img">
        <img src="img/team.jpg" alt="" />
        <div class="social-icons">
          <a href="https://www.facebook.com/" target="_blank"><i class="bx bxl-facebook"></i></a>
          <a href="https://twitter.com/" target="_blank"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/" target="_blank"><i class="bx bxl-github"></i></a>
        </div>
      </div>
      <div class="p-4">
        <h5 class="title-sm mt-3 mb-0 text-white">Aulia Rahman</h5>
        <small class="text-white">Web Designer</small>
        <div class="hline"></div>
        <p class="text-white">
          Well skillful lorem Ipsum is not simply random text. It has roots in
          a piece of classical Latin literature from 45 BC
        </p>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 team-member">
      <div class="team-member-img">
        <img src="img/team.jpg" alt="" />
        <div class="social-icons">
          <a href="https://www.facebook.com/" target="_blank"><i class="bx bxl-facebook"></i></a>
          <a href="https://twitter.com/" target="_blank"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/" target="_blank"><i class="bx bxl-github"></i></a>
        </div>
      </div>
      <div class="p-4">
        <h5 class="title-sm mt-3 mb-0 text-white">Hafiz Kalam</h5>
        <small class="text-white">Web Designer</small>
        <div class="hline"></div>
        <p class="text-white">
          Well skillful lorem Ipsum is not simply random text. It has roots in
          a piece of classical Latin literature from 45 BC
        </p>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 team-member even">
      <div class="team-member-img">
        <img src="img/team.jpg" alt="" />
        <div class="social-icons">
          <a href="https://www.facebook.com/" target="_blank"><i class="bx bxl-facebook"></i></a>
          <a href="https://twitter.com/" target="_blank"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/" target="_blank"><i class="bx bxl-github"></i></a>
        </div>
      </div>
      <div class="p-4">
        <h5 class="title-sm mt-3 mb-0 text-white">Muh. Hajar</h5>
        <small class="text-white">Web Designer</small>
        <div class="hline"></div>
        <p class="text-white">
          Well skillful lorem Ipsum is not simply random text. It has roots in
          a piece of classical Latin literature from 45 BC
        </p>
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-5">
          <div class="col-md-4">
            <h4 class="logo-text">Polinema</h4>
            <p>
              Polinema adalah institusi pendidikan tinggi vokasi yang terletak
              di kota Malang. Malang adalah kota terbesar kedua di Jawa Timur,
              Indonesia.
            </p>
            <div class="social-icons">
              <a href="https://www.facebook.com/polinema" target="_blank">
                <i class="bx bxl-facebook"></i>
              </a>
              <a href="https://twitter.com/polinema_campus" target="_blank">
                <i class="bx bxl-twitter"></i>
              </a>
              <a href="https://www.instagram.com/polinema_campus/" target="_blank">
                <i class="bx bxl-instagram"></i>
              </a>
              <a href="https://bit.ly/3C7drb5" target="_blank">
                <i class="bx bxl-youtube"></i>
              </a>
            </div>
          </div>
          <div class="col-md-2">
            <h5 class="title-sm">Navigation</h5>
            <div class="footer-links">
              <a href="#">Home</a>
              <a href="#team">Team</a>
              <a href="#footer">Contact</a>
            </div>
          </div>
          <div class="col-md-2">
            <h5 class="title-sm">More</h5>
            <div class="footer-links">
              <a href="#">FAQ's</a>
              <a href="#">Privacy & Policy</a>
              <a href="#">Liscences</a>
            </div>
          </div>
          <div class="col-md-3">
            <h5 class="title-sm">Contact</h5>
            <div class="footer-links">
              <a href="https://goo.gl/maps/d8b2pEJebjVCzS7e7" target="_blank">
                Jl. Soekarno Hatta No.9, Jatimulyo, Kec. Lowokwaru, Kota
                Malang, Jawa Timur 65141
              </a>
              <p class="mb-">(0341) 404424-404425</p>
              <p class="mb">cs@polinema.ac.id</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row justify-content-between gy-3">
          <div class="col-md-6">
            <p class="mb-0">© Agency2022. All rights reserved</p>
          </div>
          <div class="col-auto">
            <p class="mb-0">Created by Team</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>