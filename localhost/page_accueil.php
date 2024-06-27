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
<body><?php

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
    <h2>Voici les projets les plus important que j'ai réalisés au cours de ces dernières années.</h2>
    <h2>Pour observer les projets les moins important cliquer sur les boutons ci-dessus</h2>
</br>
<h3> Les projets de première année de BTS</h3>
</br>

<?php
class Travaux {
    public $titre;
    public $outilutiliser;
    public $lien;
}
function afficherTravaux($travaux) {
    echo '<div class="travaux-container">';
    foreach ($travaux as $travail) {
        echo '<div class="travail">';
        echo '<h3>' . htmlspecialchars($travail['titre']) . '</h3>';
        echo '<p>' . htmlspecialchars($travail['outil utiliser']) . '</p>';
        if (!empty($travail['lien'])) {
            echo '<p><a href="' . htmlspecialchars($travail['lien']) . '" target="_blank">Voir le projet</a></p>';
        }
        echo '</div>';
    }
    echo '</div>';
}
$travaux = [
    [
        'titre' => 'Réseau (complet)',
        'outil utiliser' => 'HTML',
        'lien' => 'Réseaux/index.php'
    ],
    [
        'titre' => 'Orienté objet',
        'outil utiliser' => 'PHP',
        'lien' => 'Orienté objet/oriente_objet.php'
    ],
    [
        'titre' => 'code AD',
        'outil utiliser' => 'C et C++',
        'lien' => 'https://github.com/benjamincrouzet/C/blob/main/Entreprise/'
    ],
    [
        'titre' => 'code AD 2',
        'outil utiliser' => 'C et C++',
        'lien' => 'https://github.com/benjamincrouzet/C/blob/main/Entreprise/'
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
        return '<footer> <a href="index.php">Se déconnecter</a> 
        <br>
        <br>
        <p>&copy; ' . date('Y') . ' Mon Portfolio </p></footer>';
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
