<?php

/*
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
---
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
---
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
---
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
*/

include './partials/functions.php';

$lengthPassword = '';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP strong password generator</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

</head>

<body>

    <h1>Generatore di password</h1>

    <form action="index.php" method="GET" class="p-2">

        <div class="pb-2">
            <label for="">scegli una lunghezza della password</label>
            <input name="range" type="number" min="4" max="15" step="1" required>
        </div>

        <button type="submit" class="btn btn-primary">Genera</button>

    </form>

    <hr>

    <div class="px-2">
        <?php isset($_GET['range']) ? showChoice($_GET['range']) : '' ?>
        <br>
        <?php isset($_GET['range']) ? passwordGenerator($_GET['range']) : '' ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>