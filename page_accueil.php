<?php
session_start();

// Vérifier si les identifiants sont saisis correctement
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier les identifiants (ici, juste une simulation)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Vérification factice pour la démonstration
    if ($username === "benjamin" && $password === "1") {
        $_SESSION["username"] = $username; // Stocker le nom d'utilisateur dans la session
    } else {
        // Redirection vers la page de connexion avec un message d'erreur
        header("Location: index.php?error=1");
        exit();
    }
} 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Un exemple de site HTML respectant les bonnes pratiques.">
    <link rel="stylesheet" href="1core/t.css">
    <link rel="icon" href="1assets/code.ico">
    <title>Page d'Accueil</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="page_accueil.php">Accueil</a></li>
            <li><a href="about.php">les projets simple à réaliser (pas mes projets dont je suis le plus fier)</a></li>
            <li><a href="services.php">Les projets bien moins important (ma passion)</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h2>Voici les projets les plus important que j'ai réalisés au cours de ces dernières années.</h2>
    <h2>Pour observer les projets les moins important cliquer sur les boutons ci-dessus</h2>
</br>
<h3> Les projets de première année de BTS</h3>
</br>
    <ul>
        <li><a href="Réseaux/index.php">Réseau (complet)  (PHP)</a></li>
        <li><a href="Orienté objet/oriente_objet.php">Orienté objet (PHP)</a></li>
        <li><a href="https://github.com/benjamincrouzet/C/tree/main/Entreprise">code AD (C)</a></li>
        <li><a href="https://github.com/benjamincrouzet/C/tree/main/Entreprise">code AD 2 (C)</a></li>
    </ul>

    
    <a href="index.php">Se déconnecter</a>
</div>

</body>
</html>
