<?php
// //1
// $etudiant = array(
//     'nom' => 'Dupont',
//     'prénom' => 'Jean',
//     'matricule' => '123456',
// //2
//     'note' => 16
// );
// //3
// $produits = array(
//     'Produit 1' => 10.50,
//     'Produit 2' => 20.00,
//     'Produit 3' => 15.75
// );
// echo "<b>Nom: </b>" . $etudiant['nom'] . "<br>";
// echo "<b>Prénom: </b>" . $etudiant['prénom'] . "<br>";
// echo "<b>Matricule: </b>" . $etudiant['matricule'] . "<br>";
// echo "<b>Note: </b>" . $etudiant['note'] . "<br>";
// echo "<br>";
// foreach ($produits as $nom => $prix) {
//     echo "<b>Nom:</b> $nom ||   <b>Prix:</b> $prix $<br>";
// }
// echo "<br>";
// //4
// $scores = array(
//     'Etudiant1' => 12,
//     'Etudiant2' => 15,
//     'Etudiant3' => 14,
//     'Etudiant4' => 18,
//     'Etudiant5' => 10
// );
// $sum=0;

// foreach ($scores as $etudiants => $score) {
//     echo "<b>$etudiants</b> : $score<br>";
// }
// foreach ($scores as $etudiants => $score) {
//     $sum = $sum + $score;
// }

// echo "La somme des scores est: " . $sum . "<br>";
// echo "La moyenne des scores est: " . $sum / count($scores) . "<br>";
// echo "<br>";
// //5
// $pays = array(
//     'Maroc' => 38,
//     'Koweit' => 4,
//     'Qatar' => 3,
//     'Espagne' => 47,
//     'France' => 67
// );

// arsort($pays);

// foreach ($pays as $nom => $population) {
//     echo "<b>Pays:</b> $nom  ||  <b>Population:</b> $population millions<br>";
// }
// //6
// echo "<br>";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nom = $_POST['nom'];
//     $age = $_POST['age'];
//     $couleur = $_POST['couleur'];
    
//     //7
//     if (!is_numeric($age) || $age <= 0) {
//         echo "Erreur : L'âge doit être un entier positif.";
//     } else {
//         echo "Bienvenue, $nom, vous avez $age ans !";
//     }
//     //8
//     echo " Votre couleur préférée est : $couleur.";
// }
//9
// if (isset($_GET['nombre1']) && isset($_GET['nombre2'])) {
//     $nombre1 = $_GET['nombre1'];
//     $nombre2 = $_GET['nombre2'];
//     $somme = $nombre1 + $nombre2;
//     echo "La somme est: $somme";
// }
//10
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type_compte = $_POST['type_compte'];
    if ($type_compte == "Administrateur") {
        echo "Bienvenue, administrateur !";
    } else {
        echo "Bienvenue, utilisateur simple !";
    }
}
?>