<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5">
    <div class="col-10 col-sm-8 col-lg-6 mx-auto text-center">
      <img src="./assets/img/sneaker-hero.png" class="d-block mx-lg-auto img-fluid" alt="Sneakers Hero Image" loading="lazy" />
    </div>
    <div class="col-lg-6 mx-auto">
      <h2 class="display-6 fw-semibold lh-1 mb-2">STEP INTO STYLE</h2>
      <h1 class="display-5 fw-bold lh-1 mb-3">SNEAKHUB STORE</h1>
      <p class="lead">
        <?php
          $lines = [
            "Welcome to SneakHub — your go-to store for premium basketball sneakers!",
            "Explore top picks from brands like Nike, Adidas, and Jordan.",
            "Perfect your performance and style — all in one place."
          ];
          $brandTaglines = [
            "Nike" => "Just Do It.",
            "Adidas" => "Impossible is Nothing.",
            "Jordan" => "Become Legendary."
          ];
          function showLines($lines) {
              foreach ($lines as $line) {
                  echo $line . "<br>";
              }
          }
          function showTaglines($taglines) {
              echo "<br><br><strong>Top Brand Taglines:</strong><br>";
              foreach ($taglines as $brand => $tagline) {
                  echo "$brand: $tagline<br>";
              }
          }
          showLines($lines);
          showTaglines($brandTaglines);
          $showButton = true;
          if ($showButton) {
              echo "<br><a href='../../pages/pageSampleHere/index.php' class='btn btn-warning btn-lg mt-3'>EXPLORE SNEAKERS</a>";
          }
        ?>
      </p>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>