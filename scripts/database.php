<?php


// Hostname: localhost, username: your_user, password: your_pass, db: MyDatabase
$mysqli= new mysqli('localhost', 'conferentie', 'conferentie', 'conference');

// Oh no! Wanneer er een connect_errno is, hebben we geen verbinding!
if ($mysqli->connect_errno) {
    // In dit geval laat je de gebruiker best iets weten
    echo "Sorry, this website is experiencing connection problems.";


    // Je zou de gebruiker naar een mooie foutpagina kunnen brengen, of gewoon
    // stoppen
    exit;
}

?>