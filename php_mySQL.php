<?php

// Dati database
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PW", "root");
define("DB_NAME", "db_university");

// Connessione al database
$request = new mysqli(DB_HOST, DB_USERNAME, DB_PW, DB_NAME);
if ($request && $request->connect_error) {
    echo "Connessione fallita:" . $request->connect_error;
} else {
    echo "Richiesta avvenuta con successo!";
}

// Creazione query (ricerca e selezione dentro la tabella departments)
$sql = "SELECT * FROM departments";
$result = $request->query($sql);
var_dump($result);


// Stamp dei risultati in HTML
if ($result && $result->num_rows >= 0) {
    while ($departments = $result->fetch_array()) {
?>
<div class="card">
    <h2><?= $departments['name']; ?></h2>
    <h3><?= $departments['address']; ?></h3>
    <h3><?= $departments['phone']; ?></h3>
</div>
<hr>
<?php
    }
} else {
    echo "Errore interno o un nella query.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .card {
        margin: 50px;
    }
    </style>
    <title>MySQL Stamp</title>
</head>

<body>

</body>

</html>