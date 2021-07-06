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