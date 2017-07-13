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
        echo "italique: <i>" .$this->chaine."</i><br>";
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

    <h2>Exercice 4
        * Écrivez une classe PHP qui trie un tableau d'entiers dans l'ordre croissant en utilisant la fonction **sort()** de PHP.
        * Créer une méthode __construc() qui prend en argument le tableau.
        * Créer la méthode **tri** qui renvoie le tableau trié.
        * Afficher le tableau trié à l'aide de **var_dump** ou **print_r**</h2>

    <?php

    class TRICROISSANT{
        public $tableau;

        function __construct($tableau)
        {
            $this->tableau=$tableau;
        }

        function tri()
        {
            $tableautrie=$this->tableau;
            sort($tableautrie);
            print_r($tableautrie);
        }
    }

    $tableauatrier = new TRICROISSANT(array(11, -2, 4, 35, 0, 8, -9));
    print_r($tableauatrier->tri());
    ?>

<h2>## Exercice 5
    * Réaliser une calculatrice:
    * Ecrire une classe PHP avec un constructeur qui possède deux arguments,
    * Écrire les méthodes qui permettent de calculer l'addition, la soustraction , la multiplication,  ou la division des deux arguments.

    Exemple d'exécution:
    $calc = new MaCalculatrice( 8, 4);
    echo $calc- > ajout(); // affichera 12
    echo $calc- > produit(); // affichera32
</h2>

    <?php
    class Calculatrice{
        /**   * Résultat des calculs   *   *
         * @var double   *
         * @access private   */
        private
            $_resultat;   /**   * Constructeur   *   *
     * @param void   *
     * @return void   */

    public function __construct()
    {
        $this->_resultat = 0;
    }

    /**   * Retourne le résultat   *   *
     * @param void   *
     * @return double   */

    public function getResultat()
    {
        return (double) $this->_resultat;
    }

    /**   * Réinitialise la calculatrice   *   *
     * @param void   *
     * @return void   */

    public function init()
    {
        $this->_resultat = 0;
    }

    /**    * Additionne deux nombres    *
     *  * Si un seul nombre est donné, il est aditionné au résultat    *    *
     * @param double $a    *
     * @param double|null $b    *
     * @return double resultat de l'opération    */

    public function additionner($a, $b = null)
    {
        $a = (double) $a;

        if(null !== $b) {
            $this->_resultat = $a + (double) $b;
        }
        else
            {
                $this->_resultat += $a;
            }

            return $this->getResultat();
    }

    /**    * Multiplie deux nombres    *
     * * Si un seul nombre est donné, il est multiplié au résultat    *    *
     * @param double $a    *
     * @param double|null $b    *
     * @return double resultat de l'opération    */

    public function multiplier($a, $b = null)
    {
        $a = (double) $a;
        if(null !== $b)
        {
            $this->_resultat = $a * (double) $b;
        }
        else
            {
                $this->_resultat *= $a;
            }
            return $this->getResultat();
    }}

    $c = new Calculatrice();
    echo $c->additionner(10,45);
    // retourne 55echo $c->multiplier(2);
    // retourne 110echo $c->additionner(10)
    // retourne 120$c->init();echo $c->multiplier(4);
    // retourne 0echo $c->multiplier(4,3);
    // retourne 12echo $c->additionner(12);
    // retourne 24 ?>

</main>

</body>
</html>