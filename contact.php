<!DOCTYPE html>
<html lang="en">

<head>
  <title>SafeGuard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon.svg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.3/leaflet.css"
    integrity="sha512-mD70nAW2ThLsWH0zif8JPbfraZ8hbCtjQ+5RU1m4+ztZq6/MymyZeB55pWsi4YAX+73yvcaJyk61mzfYMvtm9w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.3/leaflet.js"
    integrity="sha512-Dqm3h1Y4qiHUjbhxTuBGQsza0Tfppn53SHlu/uj1f+RT+xfShfe7r6czRf5r2NmllO2aKx+tYJgoxboOkn1Scg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-md navbar-dark  navbar-main">
            <a class="navbar-brand" href="index.html">
              <img src="assets/images/logo.svg" class="img-fluid" alt="img" />
              <span> SafeGuard </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Naslovnica</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="about.html">O nama</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"> Ponude </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="promotions.html">Promocije</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li>
                      <a class="dropdown-item" href="discounts.html">Popusti</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="prices.html">Cijene</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="gallery.html">Galerija</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="contact.html">Kontakt</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <section class="cover" style="background:url(assets/images/mk3.jpg)">
    <div class="cover-content pt-5 pb-5">
      <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col-xl-12 text-center">
            <div class="cover-content-div">
              <h1 class="mb-0 text-uppercase small"> Kontakt</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-5 pb-5 relative">
    <div class="container pt-4 pb-md-2">
      <div class="row pt-md-2">
        <div class="col-md-12">
          <div class="heading9 ">
            <h3 class="color-1 fw-500 pt-lg-5 sp-head">Kontaktirajte nas</h3>
            <h2 class="head3">Ostanimo u kontaktu</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 d-md-flex mt-4">
          <div class="circle-lv w-100 text-center">
            <i class="icon-div fa fa-phone" style="background:#686f73"></i>
            <h3 class="pt-4 pb-2"> NAZOVITE NAS </h3>
            <p> +385-99-112-1211 </p>
          </div>
        </div>
        <div class="col-md-4 d-md-flex mt-4">
          <div class="circle-lv w-100 text-center">
            <i class="icon-div fa fa-envelope-o" style="background:#8d8282"></i>
            <h3 class="pt-4 pb-2"> POŠALJITE NAM EMAIL </h3>
            <p> info@safeguard.com </p>
          </div>
        </div>
        <div class="col-md-4 d-md-flex mt-4">
          <div class="circle-lv  w-100 text-center">
            <i class="icon-div fa fa-location-arrow" style="background:#333"></i>
            <h3 class="pt-4 pb-2">ADRESA</h3>
            <p class=""> Vukovarska 68 10000 Zagreb </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-light pt-5 pb-5">
    <div class="container pt-md-4 pb-md-5">
      <div class="row">
        <div class="col-md-5">
          <h3 class="pb-1">
            <?php

            $to = $_POST['email']; // Receiver
            
            $subject = 'SafeGuard kontakt';

            $message = 'Kontakt informacije od ' . $_POST['name'] . ' Email: ' . $_POST['email'] . ', Broj mobitela: ' . $_POST['phone'] . ', Poruka: ' . $_POST['message'];

            $headers = 'From: test@gmail.com' . "\r\n" .
              'Reply-To: test@gmail.com' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers)) {
              echo 'Uspješna predaja forme, kontaktirati ćemo vas. ';
            } else {
              echo 'Neuspješna predaja forme';
            }
            ?>
          </h3>
          <div class="line3"></div>
          <form class="pt-4" action="https://gasparmedic.github.io/contact.php" method="post">
            <label>Ime i prezime</label>
            <input type="text" class="input-field" name="name" required />
            <label>Email</label>
            <input type="email" class="input-field" name="email" required />
            <label>Mobitel</label>
            <input type="text" class="input-field" name="phone" required />
            <label>Poruka</label>
            <textarea rows="3" class="input-field2" name="message" required></textarea>
            <input class="btn button" type="submit" value="Pošalji"> </input>
          </form>
        </div>
        <div class="col-md-7">
          <div class="ms-xl-5 mt-md-0 mt-5">
            <h3 class="pb-1 pt-2"> Pronađi na karti </h3>
            <div class="line3 mb-3"></div>
            <div id="mapid" class="img-fluid w-100 mt-4" style="height: 400px;"></div>
            <!-- <img src="assets/images/map.png" class="img-fluid w-100 mt-4" alt="img" /> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4>Kontaktirajte nas</h4>
          <div class="line3 mb-4"></div>
          <p class="pe-xl-5 me-xl-5"> Protuprovalna vrata za moderne domove </p>
          <ul class="list-inline  social-media mt-4">
            <li class="list-inline-item">
              <a href="">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="">
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="">
                <i class="fa fa-youtube"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 pt-md-0 pt-5">
          <h4>Radno vrijeme</h4>
          <div class="line3 mb-4"></div>
          <p>
            <b> Ponedjeljka do Petka </b>
            <br /> 09:00 – 17:00
          </p>
          <p>
            <b> Subotom </b>
            <br /> 10:00 – 14:00
          </p>
        </div>
        <div class="col-md-4 pt-md-0 pt-5">
          <h4>Kontaktirajte nas</h4>
          <div class="line3 mb-4"></div>
          <p class="text_icon">
            <i class="fa fa-location-arrow"></i> Vukovarska 68 10000 Zagreb
          </p>
          <p class="text_icon">
            <i class="fa fa-phone"></i> +385-99-112-1211
          </p>
          <p class="text_icon">
            <i class="fa fa-envelope-o"></i> info@safeguard.com
          </p>
        </div>
      </div>
      <div class="row mt-4 mb-4 pt-md-2">
        <div class="col-md-12">
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <ul class="list-inline ul2">
            <li>
              <a href="privacy.html"> Politika privatnosti </a>
            </li>
            <li>
              <a href="contact.html"> Kontaktirajte nas </a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 text-end">
          <p class="mb-0"> ©2023 - SAFE GUARD - All Rights Reserved. </p>
        </div>
      </div>
    </div>
  </footer>

  <script>
    var map = L.map('mapid').setView([45.7981854, 15.9704465], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      tileSize: 512,
      zoomOffset: -1
    }).addTo(map);

    L.marker([45.7981854, 15.9704465]).addTo(map);
  </script>
</body>

</html>