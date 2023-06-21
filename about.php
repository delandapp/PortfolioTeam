<?php 
  require "php/php.php";
  if ( !isset($_POST["nama"]) ) {
    header("location:index.html");
  }
  $parameter_nama = $_POST["nama"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Team</title>
  <link rel="stylesheet" href="css/style-about.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
  <nav>
    <div class="judul-nav">
        <h3>Project Startup</h3>
    </div>
    <div class="link-nav">
        <a href="index.html">Home</a>
        <a href="project.html">Project</a>
        <a href="#">Contact</a>
    </div>
    <div class="logo-sosmed-nav">
        <a href="https://www.instagram.com/escode.ska/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://wa.me/628979341242"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
    </div>
    <div class="login-nav">
        <button>LOGIN / SIGNUP</button>
    </div>
</nav>
  <header class="header">
    <div class="container">
      <div class="container-img">
        <img src="img/img-profil/<?=$parameter_nama;?>.png" alt="1">
      </div>
      <div class="container-ident">
        <h5><?= $data_fortofolio[$parameter_nama]["profil"]["nama"];?></h5>
        <span><?= $data_fortofolio[$parameter_nama]["profil"]["work-desc"];?></span>
        <div class="container-sosmed">
          <div class="fc">
            <i class="fa-brands fa-facebook-f"></i>
          </div>
          <div class="twt">
            <i class="fa-brands fa-twitter"></i>
          </div>
          <div class="ig">
            <i class="fa-brands fa-instagram"></i>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="about"> 
    <div class="title-about">
      <i class="fa-solid fa-circle-info"></i>
      <h1>About me</h1>
      <div class="garis">
        <span class="satu"></span>
        <span class="dua"></span>
      </div>
    </div>
    <p class="kenal"><span><?= $parameter_nama;?></span>, <?= $data_fortofolio[$parameter_nama]["profil"]["desc"]?></p>
    <div class="container-details">
      <div class="personal-detail">
        <h1>Personal Details</h1>
        <div class="container-data">
          <p class="color">BirthDate</p>
          <p><?= $data_fortofolio[$parameter_nama]["profil"]["date"]?></p>
        </div>
        <div class="container-data">
          <p class="color">Phone</p>
          <p><?= $data_fortofolio[$parameter_nama]["profil"]["no_hp"]?></p>
        </div>
        <div class="container-data">
          <p class="color">Email</p>
          <p><?= $data_fortofolio[$parameter_nama]["profil"]["email"]?></p>
        </div>
        <div class="container-data">
          <p class="color">Website</p>
          <p><?= $data_fortofolio[$parameter_nama]["profil"]["website"]?></p>
        </div>
        <div class="container-data">
          <p class="color">Address</p>
          <p><?= $data_fortofolio[$parameter_nama]["profil"]["alamat"]?></p>
        </div>
        <div class="container-data">
          <p class="color">Job Status</p>
          <p class="job"><?= $data_fortofolio[$parameter_nama]["profil"]["work"]?></p>
        </div>
      </div>
      <div class="interest">
        <h1>My Interest</h1>
        <div class="container-items">
          <div class="container-item">
            <i class="fa-solid fa-gamepad"></i>
            <p>Games</p>
          </div>
          <div class="container-item">
            <i class="fa-solid fa-gamepad"></i>
            <p>Games</p>
          </div>
          <div class="container-item">
            <i class="fa-solid fa-gamepad"></i>
            <p>Games</p>
          </div>
          <div class="container-item">
            <i class="fa-solid fa-gamepad"></i>
            <p>Games</p>
          </div>
          <div class="container-item">
            <i class="fa-solid fa-gamepad"></i>
            <p>Games</p>
          </div>
          <div class="container-item">
            <i class="fa-solid fa-gamepad"></i>
            <p>Games</p>
          </div>
          <div class="container-item">
            <i class="fa-solid fa-gamepad"></i>
            <p>Games</p>
          </div>
          <div class="container-item">
            <i class="fa-solid fa-gamepad"></i>
            <p>Games</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="skil">
      <div class="title-skil">
      <i class="fa-solid fa-circle-info"></i>
      <h1>Skil me</h1>
      <div class="garis">
        <span class="satu"></span>
        <span class="dua"></span>
      </div>
      </div>

      <div class="container-skil">
        <div class="container-skil-satu">
        <div class="skil-logo">
              <div class="logo-skil">
              <i class="fa-brands fa-html5"></i>
              </div>
              <div class="rasio-skil-1"></div>
              <div class="rasio-skil-2"></div>
        </div>

        <div class="skil-logo">
              <div class="logo-skil">
              <i class="fa-brands fa-css3-alt"></i>
              </div>
        </div>

        <div class="skil-logo">
              <div class="logo-skil">
              <i class="fa-brands fa-js"></i>
              </div>
        </div>

        <div class="skil-logo">
              <div class="logo-skil">
              <i class="fa-brands fa-php"></i>
              </div>
        </div>

        </div>

        <div class="container-skil-dua">
        <div class="skil-logo">
              <div class="logo-skil">
              <i class="fa-brands fa-bootstrap"></i>
              </div>
        </div>

        <div class="skil-logo">
              <div class="logo-skil">
              <i class="fa-brands fa-laravel"></i>
              </div>
        </div>

        <div class="skil-logo">
              <div class="logo-skil">
              <i class="fa-brands fa-figma"></i>
              </div>
        </div>

        <div class="skil-logo">
              <div class="logo-skil">
              <i class="fa-brands fa-android"></i>
              </div>
        </div>

        </div>
      </div>
  </section>

  <section class="pendidikan">
        <div class="container-pendidikan">
          <div class="title-pendidikan">
           <i class="fa-solid fa-circle-info"></i>
            <h1>Pendidikan & Pengalaman</h1>
            <div class="garis">
              <span class="satu"></span>
              <span class="dua"></span>
            </div>
          </div>

            <div class="content-pendidikan">
                <div class="content-kiri">
                    <div class="card-content">
                        <div class="card-content-kiri">
                            <div class="logo">
                                <i class="fa-sharp fa-solid fa-award"></i>
                            </div>
                            <hr class="garis">
                        </div>
                        <div class="card-content-kanan">
                            <div class="tanggal">
                                <p>2018 - 2021</p>
                            </div>
                            <div class="title-content">
                                <p><?= $data_fortofolio[$parameter_nama]["pendidikan"]["smp"]?> - <span>smp</span></p>
                            </div>
                            <div class="desc-content">
                                <p>Saya memasuki <?= $data_fortofolio[$parameter_nama]["pendidikan"]["smp"]?> pada tahun 2019 </p>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-content-kiri">
                            <div class="logo">
                                <i class="fa-sharp fa-solid fa-award"></i>
                            </div>
                            <hr class="garis">
                        </div>
                        <div class="card-content-kanan">
                            <div class="tanggal">
                                <p>2021 - Present</p>
                            </div>
                            <div class="title-content">
                                <p><?= $data_fortofolio[$parameter_nama]["pendidikan"]["sma"]?> - <span>smk</span></p>
                            </div>
                            <div class="desc-content">
                                <p>Saya memasuki SMK N 5 SKA pada tahun 2021</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-content-kiri">
                            <div class="logo">
                                <i class="fa-sharp fa-solid fa-award"></i>
                            </div>
                            <hr class="garis">
                        </div>
                        <div class="card-content-kanan">
                            <div class="tanggal">
                                <p>2022 - Present</p>
                            </div>
                            <div class="title-content">
                                <p><?= $data_fortofolio[$parameter_nama]["pendidikan"]["ugm"]?> - <span>sinarmas</span></p>
                            </div>
                            <div class="desc-content">
                                <p>Saya terpilih dalam program kelas UGM yang disponsori oleh astra dan sinarmas </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="content-kanan">
                    <div class="card-content">
                        <div class="card-content-kiri">
                            <div class="logo">
                                <i class="fa-sharp fa-solid fa-award"></i>
                            </div>
                            <hr class="garis">
                        </div>
                        <div class="card-content-kanan">
                            <div class="tanggal">
                                <p>2021 - Present</p>
                            </div>
                            <div class="title-content">
                                <p><?= $data_fortofolio[$parameter_nama]["pendidikan"]["pengalaman2"]?> - <span>Otodidak</span></p>
                            </div>
                            <div class="desc-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ullam </p>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-content-kiri">
                            <div class="logo">
                                <i class="fa-sharp fa-solid fa-award"></i>
                            </div>
                            <hr class="garis">
                        </div>
                        <div class="card-content-kanan">
                            <div class="tanggal">
                                <p>2021 - Present</p>
                            </div>
                            <div class="title-content">
                                <p><?= $data_fortofolio[$parameter_nama]["pendidikan"]["pengalaman3"]?> - <span>Otodidak</span></p>
                            </div>
                            <div class="desc-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ullam </p>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-content-kiri">
                            <div class="logo">
                                <i class="fa-sharp fa-solid fa-award"></i>
                            </div>
                            <hr class="garis">
                        </div>
                        <div class="card-content-kanan">
                            <div class="tanggal">
                                <p>2022 - Present</p>
                            </div>
                            <div class="title-content">
                                <p><?= $data_fortofolio[$parameter_nama]["pendidikan"]["pengalaman1"]?> - <span>Ekstrakurikuler</span></p>
                            </div>
                            <div class="desc-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ullam </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</body>
</html>