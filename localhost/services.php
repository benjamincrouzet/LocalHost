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

<?php

// Définir l'interface
interface HeaderInterface {
    public function render();
}

// Définir le trait
trait HeaderTrait {
    public function render() {
        return '<Header>
    <nav>
        <ul>
            <li><a href="page_accueil.php">Accueil</a></li>
            <li><a href="about.php">Présentation</a></li>
            <li><a href="services.php">Les projets bien moins important (ma passion)</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</Header>';
    }
}

// Définir la classe
class SiteHeader implements HeaderInterface {
    use HeaderTrait;
}

// Utiliser la classe pour afficher le footer
$header = new SiteHeader();
echo $header->render();

?>

<div class="container"> 
<?php
class Travaux {
    public $titre;
    public $description;
    public $lien;
}
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
        'titre' => 'Vacance (en C)',
        'description' => 'existe pour dire que j ai fait du code c et c++',
        'lien' => 'https://github.com/benjamincrouzet/C/blob/main/vacance/Source.c'
    ],
    [
        'titre' => 'Calculer une moyenne (en Py)',
        'description' => 'Calculer une moyenne en python',
        'lien' => 'https://github.com/benjamincrouzet/Py/blob/main/python/moyenne.py'
    ],
    [
        'titre' => 'Addition de tableau (en Py)',
        'description' => 'Addition de tableau en python',
        'lien' => 'https://github.com/benjamincrouzet/Py/blob/main/python/addition%20de%20tableau.py'
    ],
    [
        'titre' => 'Table de multiplication (en Py)',
        'description' => 'Table de multiplication en python',
        'lien' => 'https://github.com/benjamincrouzet/Py/blob/main/python/table%20de%20multiplication.py'
    ],
    
];
afficherTravaux($travaux);

?>

</div>

    <?php
// Définir l'interface
interface FooterInterface {
    public function render();
}

// Définir le trait
trait FooterTrait {
    public function render() {
        return '<footer><p>&copy; ' . date('Y') . ' Mon Portfolio </p></footer>';
    }
}

// Définir la classe
class SiteFooter implements FooterInterface {
    use FooterTrait;
}

// Utiliser la classe pour afficher le footer
$footer = new SiteFooter();
echo $footer->render();
?>

</body>
</html>