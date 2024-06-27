<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Un exemple de site HTML respectant les bonnes pratiques.">
    <link rel="stylesheet" href="1core/t.css">
    <link rel="icon" href="1assets/code.ico">
    <title>Contact</title>
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

<main>
    <section id="contact">
        <h4>Formulaire de Contact</h4>
        <form action="/page_accueil.php" method="post">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
            <input type="checkbox" id="subscribe" name="subscribe">
            <label for="subscribe">S'abonner à la newsletter</label><br><br>
            <input type="submit" value="Envoyer">
        </form>
    </section>
</main>

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
