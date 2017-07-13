<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="Semantic UI/semantic.css">
    <script src="Semantic UI/semantic.js"></script>
    <title>POO</title>
</head>

<body>

<main>
    <header>
        <h2 class="ui center aligned icon header">
            <i class="circular users icon"></i>POO</h2>
    </header>
<h2>
    ## Exercice 1
    * Écrire une classe PHP simple qui affiche le message suivant « Bonjour tout le monde !».
    * Utiliser une méthode __contstruc() publique.
</h2>

    <?php
// CI DESSOUS ON VA UTILISER LE CONSTRUCTEUR POUR AFFICHER BONJOUR TOUT LE MONDE SANS RIEN FAIRE//

    class Bonjour {
        public $phrase = 'Direbonjour';
        function __construct() {
            echo "Bonjour tout le monde";
        }
    }
$bonjour = new Bonjour;

    ?>

    <h2>## Exercice 2
        * Ecrire une classe PHP contenant la propriété **$chaine** suivante: "Bonjour Tout Le Monde, moi c'est "
        * Créer la méthode **presentation** qui permet d'afficher la chaine suivi de **VotreNom**".
        * **VotreNom** est un argument(paramètre) de la méthode **presentation**.
    </h2>

    <?php
    class Salutation{   //commence par une majuscule //
        public $direbonjour = 'Bonjour tout le monde';// Propriétés
        public function direHello(){ //Méthodes
            echo "Formule de politesse :" .$this->direbonjour;

        }
    }
    $hi = new Salutation(); // Création d un objet (On instancie un objet)
    $hi->direHello();
    ?>

    <h2>## Exercice 3
        * Définissez la classe **Phrase** qui contient :

        - Une propriété private nommée "chaine"
        - Quatre méthodes de type public nommées gras(), italique(), souligne() et majuscules()
        qui retournent respectivement la chaîne passée en argument mise en gras, en italique,
        soulignée et mise en majuscules(voir le résultat image1.png)</h2>

<?php
class Phrase
{
    private $chaine = 'Programmation PHP orientée objet';

    public function gras()
    {
        echo "Gras : <b>".$this->chaine."</b><br>";
    }

    public function italique()
    {
        echo "gras: <i>" .$this->chaine."</i><br>";
    }

    public function souligne()
    {
        echo "souligné : <u>" .$this->chaine. "</u><br>";
    }

    public function majuscule()
    {
        echo "<t style='text-transform:uppercase'>".$this->chaine."</t><br>";    }
}
$phrase = new Phrase;
$phrase->gras();
$phrase->italique();
$phrase->souligne();
$phrase->majuscule();



?>
</main>

</body>
</html>