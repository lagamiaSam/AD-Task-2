<?php
require BASE_PATH . '/vendor/autoload.php';

require_once BASE_PATH . '/components/templates/foot.component.php';
require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
?>

<div class="container col-xxl-8 px-4 py-5">
  <?php
  $sneakers = ["Lebron 30", "Ultra Boost", "J1 Blue Bat", "Jordan 1 (Travis Scott","Adidas Samba"];

  $sneakerDetails = [
    "Lebron 30" => ["brand" => "Nike", "price" => 150, "category" => "Basketball"],
    "Ultra Boost" => ["brand" => "Adidas", "price" => 180, "category" => "Running"],
    "J1 Blue Bat" => ["brand" => "Jordan", "price" => 120, "category" => "Casual"],
    "Jordan 1 (Travis Scott" => ["brand" => "Jordan", "price" => 200, "category" => "Casual"],
    "Adidas Samba" => ["brand" => "Adidas", "price" => 160, "category" => "Casual"]
  ];

  function displaySneakerList($sneakers) {
      echo "<h3>Sneaker List:</h3><ul>";
      foreach ($sneakers as $sneaker) {
          echo "<li>$sneaker</li>";
      }
      echo "</ul>";
  }

  function displaySneakerDetails($details) {
      echo "<h3>Sneaker Details:</h3>";
      echo "<table class='table table-striped'>";
      echo "<thead><tr><th>Name</th><th>Brand</th><th>Price ($)</th><th>Category</th></tr></thead><tbody>";
      foreach ($details as $name => $info) {
          echo "<tr>";
          echo "<td>$name</td>";
          echo "<td>{$info['brand']}</td>";
          echo "<td>{$info['price']}</td>";
          echo "<td>{$info['category']}</td>";
          echo "</tr>";
      }
      echo "</tbody></table>";
  }

  function filterByBrand($details, $brand) {
      $result = [];
      foreach ($details as $name => $info) {
          if ($info['brand'] === $brand) {
              $result[$name] = $info;
          }
      }
      return $result;
  }

displaySneakerList($sneakers);

  displaySneakerDetails($sneakerDetails);

  echo "<h3>Sneakers by Brand: Jordan</h3>";
  $jordanSneakers = filterByBrand($sneakerDetails, "Jordan");
  displaySneakerDetails($jordanSneakers);

  ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php
renderFooter();
?>



