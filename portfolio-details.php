<!DOCTYPE html>
<html lang="en">

<?php include ("./section/navbar.php");?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="assets/img/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="">
            <img src="assets/img/portfolio/portfolio-details-2.jpg" class="img-fluid" alt="">
            <img src="assets/img/portfolio/portfolio-details-3.jpg" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Nom de l article</strong>: T-SHIRT ADIDAS</li>
              <li><strong>Type</strong>: Vetement</li>
              <li><strong>Date de publication</strong>: 01 March, 2020</li>
              <li><strong>Pseudo du celui qui donne</strong>: <a href="#">mikebita007</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Plus de details sur l'article</h2>
          <p>
            un vetement adidas offert par le fameux casanova Mike, l'effet du t-shirt donne un charm point de 100 sur 100
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

<?php include ("./section/footer.php");?>