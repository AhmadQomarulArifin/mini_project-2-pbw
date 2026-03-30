<?php
include 'koneksi.php';

$profile = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM profile LIMIT 1"));
$about = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM about LIMIT 1"));
$skills = mysqli_query($conn, "SELECT * FROM skills");
$experiences = mysqli_query($conn, "SELECT * FROM experiences");
$certificates = mysqli_query($conn, "SELECT * FROM certificates");

$total_skills = mysqli_num_rows($skills);
$total_exp = mysqli_num_rows($experiences);
$total_cert = mysqli_num_rows($certificates);
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title><?php echo $profile['name']; ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark sticky-top nav-basic">
  <div class="container">

    <a class="navbar-brand fw-bold">
      <?php echo $profile['name']; ?>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navMenu" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#about">About Me</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#certificates">Certificates</a>
        </li>

      </ul>
    </div>

  </div>
</nav>


<header id="home" class="sec sec-home">
  <div class="container py-5">
    <div class="home-grid">

      <div class="home-photo">
        <div class="blob">
          <img src="assets/<?php echo $profile['photo']; ?>">
        </div>
      </div>

      <div class="home-text">
        <div class="kicker">PERSONAL PORTFOLIO</div>

        <h1 class="home-title"><?php echo $profile['name']; ?></h1>
        <p class="home-role"><?php echo $profile['role']; ?></p>

        <p class="home-desc"><?php echo $about['description']; ?></p>

        <div class="home-links mt-3">
          <div>Email: <?php echo $profile['email']; ?></div>
          <div>GitHub: <?php echo $profile['github']; ?></div>
        </div>
      </div>

      <div class="home-stats">
        <div class="stat">
          <div class="stat-num"><?php echo $total_exp; ?>+</div>
          <div class="stat-label">Experiences</div>
        </div>
        <div class="stat">
          <div class="stat-num"><?php echo $total_skills; ?>+</div>
          <div class="stat-label">Skills</div>
        </div>
        <div class="stat">
          <div class="stat-num"><?php echo $total_cert; ?>+</div>
          <div class="stat-label">Certificates</div>
        </div>
      </div>

    </div>
  </div>
</header>


<section id="about" class="sec sec-about">
  <div class="container py-5 text-center">
    <h2 class="sec-title">About Me</h2>
    <p class="sec-sub"><?php echo $about['subtitle']; ?></p>

    <div class="about-desc-card mt-4">
      <p><?php echo $about['description']; ?></p>
    </div>

    <div class="row mt-4">

      <div class="col-lg-6">
        <div class="about-card">
          <h5>Skills</h5>

          <?php 
          mysqli_data_seek($skills, 0);
          while($sk = mysqli_fetch_assoc($skills)) { ?>
            <p><?php echo $sk['name']; ?> (<?php echo $sk['level']; ?>%)</p>

            <div class="progress prog mb-3">
              <div class="progress-bar <?php echo $sk['color']; ?>"
                   style="width: <?php echo $sk['level']; ?>%;">
              </div>
            </div>
          <?php } ?>

        </div>
      </div>

      <div class="col-lg-6">
        <div class="about-card">
          <h5>Pengalaman</h5>

          <?php while($exp = mysqli_fetch_assoc($experiences)) { ?>
            <div class="exp-item">
              <div class="exp-dot"></div>
              <div><?php echo $exp['title']; ?></div>
            </div>
          <?php } ?>

        </div>
      </div>

    </div>
  </div>
</section>


<section id="certificates" class="sec sec-certs">
  <div class="container py-5 text-center">
    <h2 class="sec-title text-white">Certificates</h2>

    <div class="cert-grid mt-4">
      <?php while($c = mysqli_fetch_assoc($certificates)) { ?>
        <div class="cert-card">
          <div class="cert-media">
            <img src="assets/<?php echo $c['image']; ?>">
          </div>

          <div class="cert-body">
            <div class="cert-title"><?php echo $c['title']; ?></div>
            <div class="cert-sub">
              <?php echo $c['issuer']; ?> • <?php echo $c['year']; ?>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <footer class="text-white-50 small mt-5">
      © <?php echo date('Y'); ?> • <?php echo $profile['name']; ?>
    </footer>

  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>