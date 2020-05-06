<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="exercice"> 
        <h2>Exercice 1 : Trier un tableau avec foreach</h2>
        <h3>Animaux domestiques:</h3>
        <ul>
        <?php 
            $animauxDomestiques = array("Chien","Chat","Hamster","Perruche","Lapin","Poisson","Tortue");
            foreach($animauxDomestiques as $animal){
                echo "<li>" . ($animal) . "</li>";
            }
        ?>
        </ul>
    </div>
    <div class="exercice">
        <h2>Exercice 2 : Supprimer le 4ème élément d'un tableau</h2>
        <h3>Animaux domestiques:</h3>
        <ul>
            <?php 
                $animauxDomestiques = array("Chien","Chat","Hamster","Perruche","Lapin","Poisson","Tortue");
                if (array_key_exists("3",$animauxDomestiques)) {
                    unset($animauxDomestiques[3]);
                }
                foreach($animauxDomestiques as $animal){
                    echo "<li>" . ($animal) . "</li>";
                }            
            ?>
        </ul>
    </div>
    <div class="exercice">
        <h2>Exercice 3 :  json_decode() et array_walk_recursive() - Créer une fonction qui décode la chaîne JSON suivante :
            {"Title": "Créer des jeux de A à Z avec Unity", "Author": "Anthony Cardinale", 
             "Detail": { "Publisher": "D-Booker" } }'
        </h2>
        <?php 
            $json = '{"Title": "Créer des jeux de A à Z avec Unity", "Author": "Anthony Cardinale", 
                "Detail": { "Publisher": "D-Booker" } }';
            $obj = json_decode($json,true);     
            function maChaine($value,$key)
            {
            echo $key . " : " . $value . "<br>";
            }
            array_walk_recursive($obj,"maChaine");       
        ?>
    </div>
    <div class="exercice">
        <h2>Exercice 4 : Insérer 'Leeloo' comme étant le 5ème élément du tableau suivant :
            array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît')
        </h2>
        <?php 
            $prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît'); 
            $nouveauPrenom = "Leeloo";
            array_splice( $prenoms, 4, 0, $nouveauPrenom );
            foreach ($prenoms as $element){
                echo $element . "<br />";
            }   
        ?>
    </div>
    <div class="exercice">
        <h2>Exercice 5 : array_map() et strlen() - Afficher la longueur de l'élément le plus petit et le
            plus grand du tableau suivant : array("Le","Chat","Botté","de","Charles","Perrault")
        </h2>
        <?php 
            $mots = array("Le","Chat","Botté","de","Charles","Perrault");           
            $motsAvecLongueur = array_map('strlen',$mots);
            echo "La longueur de l'élément plus petit est : " . min($motsAvecLongueur) . "<br />";
            echo "La longueur de l'élément plus petit est : " . max($motsAvecLongueur);
        ?>
    </div>
    <div class="exercice">
        <h2>Exercice 6 : Afficher l'anacyclique de saper</h2>
        <?php 
            $mot = "saper";          
            echo  "L'anacyclique de ". $mot . " est " . strrev($mot);
        ?>
    </div>
    <div class="exercice">
        <h2>Exercice 7 : Boucle for - créer les tables de multiplication [1..10] x [1..10]</h2>
        <h3>Table de multiplication</h3>
        <table>
            <?php
                echo "<tr>";
                    echo "<td> X </td>";
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<td>" . $i . "</td>";  
                    }
                echo "</tr>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>";
                        echo "<td>" . $i . "</td>";
                            for ($j = 1; $j <= 10; $j++) {
                                echo "<td>" . ($i * $j) . "</td>"; 
                            }
                    echo "</tr>";
                }
            ?>
            
        </table>
    </div>

</body>
</html>