<?php
require 'vendor/autoload.php';

\EasyRdf\RdfNamespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
\EasyRdf\RdfNamespace::set('foaf', 'http://xmlns.com/foaf/0.1/');
\EasyRdf\RdfNamespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
\EasyRdf\RdfNamespace::set('owl', 'http://www.w3.org/2002/07/owl#');
\EasyRdf\RdfNamespace::set('dc', 'http://purl.org/dc/terms/');
\EasyRdf\RdfNamespace::set('vahicle', 'https://example.org/schema/vahicle');
\EasyRdf\RdfNamespace::setDefault('og');

$sparql_jena = new \EasyRdf\Sparql\Client('http://localhost:3030/data_mobil/sparql');

$search = $_GET["judul"];

$sparql_query = '
SELECT ?m ?title ?designer ?thumbnail ?abstract ?link ?no WHERE {
    ?m rdf:type vahicle:car;
        foaf:name ?title;
        vahicle:designer ?designer;
        vahicle:thumbnail ?thumbnail;
        vahicle:abstract ?abstract;
        foaf:homepage ?link;
        vahicle:number ?no.
        FILTER REGEX (?title, "' . $search . '", "i").
} LIMIT 10 ';
$result = $sparql_jena->query($sparql_query);


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.jpg">
  <title>CAR GALERY</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <script>
    document.documentElement.classList.remove('no-js');
    document.documentElement.classList.add('js');
  </script>

  <!-- CSS
    ================================================== -->
  <link rel="stylesheet" href="assets/css/vendor.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">


  <!-- favicons
    ================================================== -->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">

</head>


<!-- ***** Preloader Start ***** -->
<!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
<!-- ***** Preloader End ***** -->

<? include "header.php" ?>

<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="top-text header-text">
          <!-- <h6>Check Out Our Listings</h6> -->
          <h2>Hasil Pencarian Mobil</h2>
          <h6>Silahkan <i>scroll</i> kebawah</h6>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="naccs">
          <div class="grid">
            <div class="row">
              <ul class="nacc">
                <!-- first category listing of items -->
                <li class="active">
                  <div>
                    <div class="col-lg-12">
                      <div class="owl-carousel owl-listing">
                        <div class="item">
                          <div class="row">
                            <?php
                            if ($result->numRows() < 1) {
                              echo "<h3>-Mobil tidak ada</h3>";
                            }
                            foreach ($result as $row) {
                              $text = substr($row->abstract, 0, 200);

                              $detail = [
                                'no' => $row->no,
                                'thumbnail' => $row->thumbnail,
                                'judul' => $row->title,
                                'designer' => $row->designer,
                                'abstract' => $text,
                              ];
                            ?>
                              <div class="col-lg-12">
                                <div class="listing-item">
                                  <div class="left-image">
                                    <a href="details.php?p=<?= $detail['no'] ?>"><img class="img-thumbnail" src="<?= $detail['thumbnail'] ?>" alt=""></a>
                                    <div class="hover-content">
                                      <!-- <div class="main-white-button">
                                          <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div> -->
                                    </div>
                                  </div>
                                  <div class="right-content align-self-center">
                                    <a href="details.php?p=<?= $detail['no'] ?>">
                                      <h4><?= $detail['judul'] ?></h4>
                                    </a>
                                    <h6>by: <?= $detail['designer'] ?></h6>
                                    <br>
                                    <span class="detail"><?= $detail['abstract'] ?><a href="details.php?p=<?= $detail['no'] ?>">....Find More</a></span>
                                  </div>
                                </div>
                              </div>
                            <?php } ?>

                          </div>
                        </div>
                      </div>
                    </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php include 'footer.php' ?>

<!-- Scripts -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/animation.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/custom.js"></script>

</body>

</html>