<?php
include __DIR__ . "/Models/arrayhotels.php";

// Verifica se è stato inviato il parametro stats o se è stato selezionato "no parking" (value=0)
if (!empty($_GET['stats']) || (isset($_GET['stats']) && $_GET['stats'] == 0)) {
    $stats = $_GET['stats'];

    // Se stats è "all", mostra tutti gli hotel
    if ($stats == 'all') {
        $motels = $hotels;
    } else {
        // Altrimenti, filtra gli hotel in base al valore di parcheggio specificato
        $motels = array_filter(
            $hotels,
            function ($hotel) use ($stats) {
                return $hotel['parking'] == $stats;
            }
        );
    }
} else {
    // Se il parametro stats non è definito, mostra tutti gli hotel
    $motels = $hotels;
}




// Verifica se è stato inviato il parametro del voto minimo
if (!empty($_GET['min_vote'])) {
    // Salva il voto minimo inserito dall'utente
    $min_vote = $_GET['min_vote'];

    // Filtra gli hotel in base al voto minimo
    $motels = array_filter($hotels, function ($hotel) use ($min_vote) {
        // Restituisci true solo se il voto dell'hotel è maggiore o uguale al voto minimo
        return $hotel['vote'] >= $min_vote;
    });
} 


// Includi l'header
include __DIR__ . "/Views/header.php";
?>
<main class="container">
    <?php
    // Includi la tabella degli hotel
    include __DIR__ . "/Views/table.php";
    ?>
</main>
<?php
// Includi il footer
include __DIR__ . "/Views/footer.php"
?> 
