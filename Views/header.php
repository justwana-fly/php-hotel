<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <title>Steam</title>

</head>

<body>
    <header>
        <div class="container  d-flex justify-content-between ">
            <h1>
                Hotels
            </h1>
            <!-- Form per selezionare il filtro -->
            <form action="index.php" method="GET">
                <!-- Dropdown per selezionare il filtro -->
                <select class="form-control me-2" name="stats">
                    <!-- Opzione per mostrare tutti gli hotel -->
                    <option value="all">All</option>
                    <!-- Opzione per mostrare gli hotel con il parcheggio -->
                    <option value="1">parking</option>
                    <!-- Opzione per mostrare gli hotel senza parcheggio -->
                    <option value="0">no parking</option>
                </select>
                <!-- Campo di input per inserire il voto minimo -->
                <input type="number" class="form-control me-2" name="min_vote" placeholder="Minimum vote">

                <!-- Bottone per inviare il modulo -->
                <button type="submit" class="btn btn-outline-success">Search</button>
            </form>
        </div>


    </header>