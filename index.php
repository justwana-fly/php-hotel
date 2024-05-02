<?php
include __DIR__ . "/Models/arrayhotels.php";


if (!empty($_GET['stats']) || (isset($_GET['stats']) && $_GET['stats'] == 0)) {
    $stats = $_GET['stats'];
    if ($stats == 'all') {
        $motels = $hotels;
    } else {
        $motels = array_filter(
            $hotels,
            function ($hotel) use ($stats) {
                return $hotel['parking'] == $stats;
            }
        );
    }
} else {
    $motels = $hotels;
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