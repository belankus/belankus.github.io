<?php
$f_pointer = fopen("../db/milestone/milestone.csv", "r");
$f_pointer2 = fopen("../db/milestone/milestone.csv", "r");
$hasil = !feof($f_pointer)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- favicon -->
  <link rel="shortcut icon" type="image/png" href="../img/logo.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bellawan | Milestone</title>

  <link rel="stylesheet" href="../css/milestone.css" />
  <!-- MyCss -->
  <link rel="stylesheet" href="../css/main.css" />
  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet" />
</head>

<body data-bs-spy="scroll" data-bs-target="#myScrollspy" data-bs-offset="70">
  <header>
    <!-- navbar -->
    <nav class="navbar transparan navbar-expand-lg fixed-top navbar-gaya">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="../img/logo.png" alt="Logo" class="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-end" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto col-md-6">
            <a class="nav-link ms-md-3 me-md-3" href="/#home">Home</a>
            <a class="nav-link me-md-3" href="/#about">About</a>
            <a class="nav-link me-md-3" href="/#milestone">Milestone</a>
            <a class="nav-link me-md-3" href="/#gallery">Gallery</a>
            <a class="nav-link me-md-3" href="/#contact-me">Contact Me</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <section class="menu-navigasi">
    <div class="isi-navigasi">
      <ul>
        <li>ArthaGeo</li>
        <li>Smartcom PGE</li>
        <li>Prosiding LIPI</li>
        <li>Social Media Evaluator LIPI</li>
      </ul>
      <ul>
        <li>KKN</li>
        <li>Regional Geoheritage</li>
        <li>Member MGEI</li>
        <li>Asistant Lab</li>
      </ul>
    </div>
  </section>

  <section class="kontener">
    <div class="grid-container">
      <div class="item1">
        <nav class="" id="myScrollspy">
          <ul class="nav nav-pills flex-column">

            <?php $i = 1; ?>
            <?php while ($ar = fgetcsv($f_pointer)) : ?>
              <li class="nav-item">
                <a class="nav-link" href="#<?php echo $ar[2]; ?>">
                  <?php echo $i;
                  echo ". ";
                  echo $ar[1]; ?></a>
              </li>
              <?php $i++; ?>
            <?php endwhile; ?>

          </ul>
        </nav>
      </div>

      <div class="rak">
        <div class="milestone">Milestone</div>
        <div class="pseudo-header">
          <div class="hr-thin"></div>
          <div class="hr-thin"></div>
        </div>

        <?php while ($ar = fgetcsv($f_pointer2)) : ?>
          <div id="<?= $ar[2] ?>">
            <div class="pseudo-stopper"></div>
            <div class="judul">
              <h1><?= $ar[3] ?></h1>
            </div>
            <div class="garis"></div>
            <div class="tanggal"><?= $ar[4] ?></div>
            <div class="konten">
              <p>
                <?= $ar[5] ?>
              </p>
            </div>
          </div>
        <?php endwhile; ?>

      </div>
  </section>

  <footer>
    <p>
      Made with
      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
      </svg>
      by Bellawan
    </p>
  </footer>
  <!-- jQuery -->
  <script src="../js/jquery-3.6.0.min.js"></script>
  <!-- MyJS -->
  <script src="../js/main.js"></script>
  <!-- Bootstrap JS -->
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>