<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Un exemple de site HTML respectant les bonnes pratiques.">
    <link rel="stylesheet" href="1core/t.css">
    <link rel="icon" href="1assets/code.ico">
    <title>Les projets bien moins important (ma passion)</title>
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
<?php
function afficherTravaux($travaux) {
    echo '<div class="travaux-container">';
    foreach ($travaux as $travail) {
        echo '<div class="travail">';
        echo '<h3>' . htmlspecialchars($travail['titre']) . '</h3>';
        echo '<p>' . htmlspecialchars($travail['description']) . '</p>';
        if (!empty($travail['lien'])) {
            echo '<p><a href="' . htmlspecialchars($travail['lien']) . '" target="_blank">Voir le projet</a></p>';
        }
        echo '</div>';
    }
    echo '</div>';
}

$travaux = [
    [
        'titre' => 'PHP',
        'description' => 'code en php',
        'lien' => 'présentation de produit/index.php'
    ],
    [
        'titre' => 'PHP',
        'description' => 'code en php',
        'lien' => 'mois de merde au lvl professionel/index.php'
    ],
    [
        'titre' => 'JS',
        'description' => 'code en javascript',
        'lien' => 'Javascript/js plus pousser/index.html'
    ],
    [
        'titre' => 'JS',
        'description' => 'code en javascript',
        'lien' => 'Javascript/Staff.html'
    ],
    [
        'titre' => 'HTML',
        'description' => 'code en html',
        'lien' => 'Html/index.html'
    ],
];
afficherTravaux($travaux);

?>
</div>

<footer>
    <p>&copy; 2024 Exemple de Site HTML. Tous droits réservés.</p>
</footer>

</body>
</html>
