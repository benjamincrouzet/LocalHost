<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Un exemple de site HTML respectant les bonnes pratiques.">
    <link rel="stylesheet" href="1core/t.css">
    <link rel="icon" href="1assets/code.ico">
    <title>les projets simple à réaliser (pas mes projets dont je suis le plus fier)</title>
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


<div id="texte">
  <p> Mon Parcours en BTS SIO SLAM
<br>
<br>
Introduction
<br>
<br>
Je suis actuellement en deuxième année de BTS Services Informatiques aux Organisations (SIO), option Solutions Logicielles et Applications Métier (SLAM), en alternance. Mon parcours a été marqué par un intérêt croissant pour les technologies de l'information et le développement de logiciels, ce qui m'a conduit à poursuivre cette formation après avoir obtenu un bac STI2D avec l'option Sciences et Technologies de l'Industrie et du Développement Durable (SIN).
<br>
<br>
Mon Parcours Éducatif
<br>
<br>
Bac STI2D Option SIN
<br>
<br>
Mon aventure dans le domaine de l'informatique a commencé au lycée où j'ai choisi la filière STI2D, option SIN. Cette option m'a permis de me familiariser avec les concepts fondamentaux des sciences de l'information et du numérique. J'y ai appris les bases de l'électronique, de la programmation et des systèmes embarqués, tout en participant à plusieurs projets pratiques qui m'ont permis de concevoir et développer des prototypes. Travailler en équipe sur ces projets m'a également aidé à développer des compétences en collaboration, essentielles pour les projets informatiques.
<br>
<br>
BTS SIO SLAM
<br>
<br>
Après avoir obtenu mon bac, j'ai décidé de poursuivre mes études en BTS SIO, avec une spécialisation en SLAM. Cette formation est particulièrement bien adaptée pour ceux qui souhaitent se concentrer sur le développement logiciel et les solutions informatiques pour les entreprises. Les cours couvrent une large gamme de sujets, de la programmation à la gestion de projets, en passant par l'analyse des besoins des clients et la conception de solutions adaptées.
<br>
Formation en Alternance
<br>
<br>
Mon Alternance en SSISR
<br>
<br>
Bien que je sois en spécialisation SLAM, mon alternance se déroule dans une entreprise relevant de la catégorie Solutions d'Infrastructures, Systèmes et Réseaux (SSISR). Cette expérience est très enrichissante car elle me permet de me familiariser avec les deux options du BTS SIO. Travailler en SSISR me donne une vision plus globale de l'informatique en entreprise, en comprenant mieux comment les infrastructures et les réseaux supportent les applications et les solutions logicielles.
<br>
Avantages de l'Alternance
<br>
<br>
Choisir l'alternance pour mon BTS SIO SLAM a été une décision stratégique qui m'a permis de combiner théorie et pratique. Travailler en entreprise me permet de mettre en pratique les compétences acquises en cours, tout en développant de nouvelles compétences en situation réelle. L'alternance offre également une rémunération, ce qui est un atout non négligeable pour financer mes études. Avoir une expérience professionnelle significative facilite grandement l'insertion sur le marché du travail après le diplôme.
<br>
<br>
Mon Expérience en Entreprise
<br>
<br>
Actuellement, je travaille en alternance dans une entreprise où je suis impliqué dans divers projets liés aux infrastructures et réseaux. J'interviens sur la configuration, la gestion et la maintenance des réseaux informatiques de l'entreprise, tout en participant à la mise en place de mesures de sécurité pour protéger les données et les systèmes. En offrant un support technique aux utilisateurs, je peux comprendre leurs besoins et améliorer les solutions existantes. Cette expérience en SSISR, combinée à ma formation SLAM, m'aide à développer une double compétence précieuse.
<br>
<br>
Bénéfices de la Double Compétence
<br>
<br>
Travailler dans une entreprise SSISR tout en étant en spécialisation SLAM me permet de développer une double compétence précieuse. Cette expérience me donne une vision globale de l'informatique en entreprise, en comprenant mieux comment les infrastructures et les réseaux supportent les applications et les solutions logicielles. Je deviens ainsi plus polyvalent et adaptable, ce qui est un atout majeur dans le monde professionnel. Ne sachant pas exactement où aller après le bac, cette expérience m'aide à définir plus clairement mon projet professionnel en me donnant un aperçu des deux domaines.
<br>
<br>
Compétences Acquises
<br>
<br>
Au cours de ma formation et de mon alternance, j'ai développé des compétences techniques solides. J'ai appris à maîtriser plusieurs langages de programmation tels que Java, PHP et JavaScript, ainsi qu'à configurer et gérer des réseaux informatiques et à mettre en place des mesures de sécurité. Mes compétences en développement web incluent la maîtrise de HTML, CSS et de frameworks JavaScript comme Angular et React.
<br>
<br>
En plus des compétences techniques, j'ai acquis des compétences non techniques essentielles. J'ai développé des compétences en gestion de projet, notamment en utilisant des méthodologies agiles comme Scrum. Ma capacité à communiquer efficacement avec les équipes techniques et non techniques s'est également améliorée, tout comme mon aptitude à analyser des problèmes complexes et à proposer des solutions adaptées.
<br>
<br>
Conclusion
<br>
<br>
Mon parcours, du bac STI2D option SIN au BTS SIO SLAM en alternance, m'a permis d'acquérir une solide formation théorique et pratique dans le domaine de l'informatique. Grâce à l'alternance dans la catégorie SSISR, j'ai pu développer des compétences professionnelles qui me préparent efficacement pour une carrière dans le développement logiciel tout en me familiarisant avec les infrastructures et réseaux. Mon objectif est de continuer à me perfectionner dans ces deux domaines et de contribuer activement à des projets innovants au sein de l'industrie informatique.
<br>
<br>
</p>
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

