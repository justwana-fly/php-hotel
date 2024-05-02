<?php
include __DIR__ . "/Models/arrayhotels.php";
//var_dump($db);

if (!empty($_GET['stats']) || (isset($_GET['stats']) && $_GET['stats'] == 0)) {
  $stats = $_GET['stats'];
  $Hotels = array_filter($hotels, function ($hotel) use ($stats) {
    return $hotel['parking'] == $stats || $stats == "parking";
  });
} else {
  $Hotels = $hotels;
}



include __DIR__ . "/Views/header.php";
?>
<main class="container">
  <?php
  include __DIR__ . "/Views/table.php";
  ?>
</main>
<?php
include __DIR__ . "/Views/footer.php"
  ?>