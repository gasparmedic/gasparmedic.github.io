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
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <h1>
    <?php
    echo $_POST['type'];
    echo $_POST['dimensions'];
    echo $_POST['color'];
    ?>
  </h1>
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
                  <a class="nav-link active" href="prices.html">Cijene</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="gallery.html">Galerija</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Kontakt</a>
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
              <h1 class="mb-0 text-uppercase small"> Cijene</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-5 pb-5">
    <div class="container pt-md-2 ">
      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="color-1 fw-500 pt-lg-5 sp-head">Cijene</h3>
          <h2 class="heading2"> Odaberite ponudu </h2>
          <p class="pt-3 pb-2"></p>
        </div>
      </div>
    </div>
  </section>
  <section class="pb-md-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 d-md-flex">
          <div class="price-box  w-100">
            <div class="text-center">
              <div class="icons">
                <img src="assets/images/pricing.png" alt="img">
              </div>
            </div>
            <h3 class="text-white text-center pt-md-5 pt-3"> UltraShield </h3>
            <div class="line"></div>
            <h3 class="sp-head color-1 text-center pt-4"> Platite jednom </h3>
            <h2 class="text-white text-center"> €999.00 </h2>
            <table class="prices">
              <tr>
                <td>
                  <span>
                    <i class="fa fa-check brown"></i> Dimenzije:
                  </span>
                </td>
                <td>
                  <span class="right"> 2000 * 1100 mm </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span>
                    <i class="fa fa-check brown"></i> Značajke:
                  </span>
                </td>
                <td>
                  <span class="right"> Kvalitetni materijali, Napredni mehanizam zaključavanja</span>
                </td>
              </tr>
              <tr>
                <td>
                  <span>
                    <i class="fa fa-check brown"></i> Doživotno jamstvo
                  </span>
                </td>
                <td>
                  <span class="right"> 24/7 Tehnička potpora </span>
                </td>
              </tr>
            </table>
            <a href="contact.html" class="btn button text-uppercase mt-4 w-100"> Odaberi </a>
          </div>
        </div>
        <div class="col-md-4 d-md-flex">
          <div class="price-box  w-100" style="background:#8a784c">
            <div class="text-center">
              <div class="icons icon-highlight">
                <img src="assets/images/price-tag.png" alt="img">
              </div>
            </div>
            <h3 class="text-white text-center pt-md-5 pt-3"> ProMaxx </h3>
            <div class="line"></div>
            <h3 class="sp-head text-white  text-center pt-4"> Platite jednom </h3>
            <h2 class="text-white  text-center"> €1499.00 </h2>
            <table class="prices">
              <tr>
                <td>
                  <span>
                    <i class="fa fa-check brown"></i> Dimenzije:
                  </span>
                </td>
                <td>
                  <span class="right"> 2000 * 2100 mm </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span>
                    <i class="fa fa-check brown"></i> Značajke:
                  </span>
                </td>
                <td>
                  <span class="right"> Pojačani čelik, Vodootporno </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span>
                    <i class="fa fa-check brown"></i> Doživotno jamstvo
                  </span>
                </td>
                <td>
                  <span class="right"> 24/7 Tehnička potpora </span>
                </td>
              </tr>
            </table>
            <a href="contact.html" class="btn button2 text-uppercase mt-4 w-100"> Odaberi </a>
          </div>
        </div>
        <div class="col-md-4 d-md-flex">
          <div class="price-box  w-100">
            <div class="text-center">
              <div class="icons">
                <img src="assets/images/file.png" alt="img">
              </div>
            </div>
            <h3 class="text-white text-center pt-md-5 pt-3"> TitanSecure </h3>
            <div class="line"></div>
            <h3 class="sp-head color-1 text-center pt-4"> Platite jednom </h3>
            <h2 class="text-white text-center"> €1999.00 </h2>
            <table class="prices">
              <tr>
                <td>
                  <span>
                    <i class="fa fa-check brown"></i> Dimenzije:
                  </span>
                </td>
                <td>
                  <span class="right"> 3000 * 2100 mm </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span>
                    <i class="fa fa-check brown"></i> Značajke:
                  </span>
                </td>
                <td>
                  <span class="right"> Ultra jak čelik, Otporne na nevrijeme </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span>
                    <i class="fa fa-check brown"></i> Doživotno jamstvo
                  </span>
                </td>
                <td>
                  <span class="right"> 24/7 Tehnička potpora </span>
                </td>
              </tr>
            </table>
            <a href="contact.html" class="btn button text-uppercase mt-4 w-100"> Odaberi </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="bg-light pt-5 pb-5">
    <div class="container pb-md-5 pt-md-4">
      <div class="row">
        <div class="col-md-12">
          <h2 class="head3"> Calculations </h2>
          <div class="line3"></div>
          <form class="pt-4" action="https://gasparmedic.github.io/calculation.php" method="post">
            <table class="calculate">
              <tr>
                <td>
                  <label>Odaberite boju</label>
                  <select class="input-field" name="color">
                    <option value="299"> Crvena </option>
                    <option value="499"> Smeđa </option>
                    <option value="499"> Crna </option>
                    <option value="399"> Siva </option>
                  </select>
                </td>
                <td>
                  <label>Odaberite tip</label>
                  <select class="input-field" name="type">
                    <option value="799"> Drvo </option>
                    <option value="999"> Željezo </option>
                    <option value="699"> Plastika </option>
                  </select>
                </td>
                <td>
                  <label>Dimenzije</label>
                  <select class="input-field" name="dimensions">
                    <option value="599"> 1000x2000 </option>
                    <option value="699"> 2000x2000 </option>
                    <option value="999"> 3000x2000 </option>
                  </select>
                </td>
              </tr>
              <tr class="mt-3 mb-3">
                <td>
                  <label>Ukupno:
                    <?php
                    echo ' ' . (int) $_POST['type'] + (int) $_POST['dimensions'] + (int) $_POST['color'] . '.00€';
                    ?>
                  </label>
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="submit" class="button" value="Izračunajte vrijednost" />
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4>Kontaktirajte nas</h4>
          <div class="line3 mb-4"></div>
          <p class="pe-xl-5 me-xl-5"> Protuprovalna vrata za Vaš moderni dom </p>
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
</body>

</html>