<?php
//1
// $employes = array(
//     array('nom' => 'Mohammed', 'poste' => 'Designer', 'salaire' => '6000'),
//     array('nom' => 'Zakaria', 'poste' => 'Analyste', 'salaire' => '5000'),
//     array('nom' => 'Mostafa', 'poste' => 'Developpeur', 'salaire' => '9000'),
//     array('nom' => 'Youssef', 'poste' => 'Chef de projet', 'salaire' => '9800'),
//     array('nom' => 'Mehdi', 'poste' => 'Administrateur', 'salaire' => '10000')
// );
// function calculMoyenSalaire($employes){
//     $sommeSalaire=0;
//     $nbreEmployes=count($employes);
//     foreach ($employes as $emp) {
//         $sommeSalaire += $emp['salaire'];
//     }
//     return $sommeSalaire / $nbreEmployes;
// }
// echo "Le salaire moyen des employés est: " . calculMoyenSalaire($employes) . " MAD<br>";

//2
// $employes = array(
//     'Mohammed' => array('poste' => 'Designer', 'salaire' => '6000'),
//     'Zakaria' => array('poste' => 'Analyste', 'salaire' => '5000'),
//     'Mostafa' => array('poste' => 'Developpeur', 'salaire' => '9000'),
//     'Youssef' => array('poste' => 'Chef de projet', 'salaire' => '9800'),
//     'Mehdi' => array('poste' => 'Administrateur', 'salaire' => '10000')
// );
// 

// <form method="POST" action="">
//     Nom de l'employé: <input type="text" name="nom"><br>
//     <input type="submit" value="Rechercher">
// </form>

// <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nom = $_POST['nom'];
//     if (array_key_exists($nom, $employes)) {
//         echo "Nom: $nom<br>";
//         echo "Poste: " . $employes[$nom]['poste'] . "<br>";
//         echo "Salaire: " . $employes[$nom]['salaire'] . " MAD<br>";
//     } else {
//         echo "Employé non trouvé.";
//     }
// }

//3 
// $utilisateurs = array(
//     'user@example.com' => 'password123',
//     'admin@example.com' => 'adminpass'
// );
// 

// <form method="POST" action="">
//     Email: <input type="text" name="email"><br>
//     Mot de passe: <input type="password" name="motdepasse"><br>
//     <input type="submit" value="Se connecter">
// </form>

// <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST['email'];
//     $motdepasse = $_POST['motdepasse'];

//     if (array_key_exists($email, $utilisateurs) && $utilisateurs[$email] === $motdepasse) {
//         echo "Connexion réussie ! Bienvenue.";
//     } else {
//         echo "Email ou mot de passe incorrect.";
//     }
// }

//4
// $panier = array(
//     'Produit1' => array('quantite' => 2, 'prix' => 10.00),
//     'Produit2' => array('quantite' => 1, 'prix' => 20.00),
//     'Produit3' => array('quantite' => 3, 'prix' => 5.00)
// );

// $total = 0;

// foreach ($panier as $produit => $details) {
//     $total += $details['quantite'] * $details['prix'];
// }

// echo "Le total du panier est: " . $total . " MAD<br>";

//5
// $commentaires = array();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $commentaire = $_POST['commentaire'];
//     $horodatage = date('d-m-Y H:i:s');
//     $commentaires[] = array('commentaire' => $commentaire, 'horodatage' => $horodatage);
// }
// 

// <form method="POST" action="">
//     Commentaire: <textarea name="commentaire"></textarea><br>
//     <input type="submit" value="Soumettre">
// </form>

// <h3>Commentaires soumis :</h3>
// <?php
// foreach ($commentaires as $c) {
//     echo "[" . $c['horodatage'] . "] " . $c['commentaire'] . "<br>";
// }

// 6
// $villes = array(
//     'Rabat' => 15,
//     'Agadir' => 10,
//     'Casablanca' => 20,
//     'Tanger' => 12,
//     'Marrakech' => 25
// );

// $villeMax = array_keys($villes, max($villes))[0];
// echo "La ville ayant la température la plus élevée est : $villeMax avec " . $villes[$villeMax] . " °C.<br>";

// 7
// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['fichier'])) {
//     $fichier = $_FILES['fichier']['tmp_name'];
//     $produits = array();

//     if (($handle = fopen($fichier, "r")) !== FALSE) {
//         while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//             $produits[] = array('nom' => $data[0], 'prix' => $data[1], 'quantite' => $data[2]);
//         }
//         fclose($handle);
//     }

//     echo "<table border='1'>";
//     echo "<tr><th>Nom</th><th>Prix</th><th>Quantité</th></tr>";
//     foreach ($produits as $produit) {
//         echo "<tr><td>" . $produit['nom'] . "</td><td>" . $produit['prix'] . "</td><td>" . $produit['quantite'] . "</td></tr>";
//     }
//     echo "</table>";
// }
// 

// <form method="POST" enctype="multipart/form-data">
//     Choisissez un fichier CSV: <input type="file" name="fichier"><br>
//     <input type="submit" value="Importer">
// </form>

// 8
$produits = array(
    'Produit1' => 10.00,
    'Produit2' => 20.00,
    'Produit3' => 15.00
);
?>

<form method="POST" action="">
    <?php foreach ($produits as $nom => $prix): ?>
        <input type="checkbox" name="produits[<?php echo $nom; ?>]" value="<?php echo $prix; ?>">
        <?php echo $nom . " - " . $prix . " MAD<br>"; ?>
    <?php endforeach; ?>
    <input type="submit" value="Valider">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['produits'])) {
    $total = 0;
    foreach ($_POST['produits'] as $prix) {
        $total += $prix;
    }
    echo "Total des produits sélectionnés: " . $total . " €<br>";
}

// 9
$etudiants = array(
    'Aymane' => array('math' => 15, 'français' => 12, 'histoire' => 14),
    'Hamid' => array('math' => 10, 'français' => 18, 'histoire' => 16),
    'Mouaad' => array('math' => 20, 'français' => 15, 'histoire' => 19)
);

foreach ($etudiants as $nom => $notes) {
    $somme = array_sum($notes);
    $nombreMatieres = count($notes);
    $moyenne = $somme / $nombreMatieres;
    echo "Étudiant: $nom<br>";
    echo "Moyenne: " . number_format($moyenne, 2) . "<br><br>";
}


    
//10
$utilisateurs = array(
    1 => array('nom' => 'Alice', 'email' => 'alice@example.com'),
    2 => array('nom' => 'Bob', 'email' => 'bob@example.com'),
    3 => array('nom' => 'Charlie', 'email' => 'charlie@example.com')
);

function afficherUtilisateurs($utilisateurs) {
    echo "<h3>Liste des utilisateurs :</h3>";
    foreach ($utilisateurs as $id => $utilisateur) {
        echo "ID: $id, Nom: " . $utilisateur['nom'] . ", Email: " . $utilisateur['email'] . "<br>";
    }
}

if (isset($_POST['action']) && $_POST['action'] == 'ajouter') {
    $nouveauNom = $_POST['nom'];
    $nouvelEmail = $_POST['email'];
    $nouvelId = max(array_keys($utilisateurs)) + 1; 
    $utilisateurs[$nouvelId] = array('nom' => $nouveauNom, 'email' => $nouvelEmail);
    echo "Utilisateur ajouté avec succès !<br>";
}

if (isset($_POST['action']) && $_POST['action'] == 'modifier') {
    $id = $_POST['id'];
    if (isset($utilisateurs[$id])) {
        $utilisateurs[$id]['nom'] = $_POST['nom'];
        $utilisateurs[$id]['email'] = $_POST['email'];
        echo "Utilisateur modifié avec succès !<br>";
    } else {
        echo "Utilisateur introuvable.<br>";
    }
}

if (isset($_POST['action']) && $_POST['action'] == 'supprimer') {
    $id = $_POST['id'];
    if (isset($utilisateurs[$id])) {
        unset($utilisateurs[$id]);
        echo "Utilisateur supprimé avec succès !<br>";
    } else {
        echo "Utilisateur introuvable.<br>";
    }
}

afficherUtilisateurs($utilisateurs);
?>

<h3>Ajouter un utilisateur :</h3>
<form method="POST" action="">
    Nom: <input type="text" name="nom" required><br>
    Email: <input type="email" name="email" required><br>
    <input type="hidden" name="action" value="ajouter">
    <input type="submit" value="Ajouter">
</form>

<h3>Modifier un utilisateur :</h3>
<form method="POST" action="">
    ID: <input type="number" name="id" required><br>
    Nom: <input type="text" name="nom" required><br>
    Email: <input type="email" name="email" required><br>
    <input type="hidden" name="action" value="modifier">
    <input type="submit" value="Modifier">
</form>

<h3>Supprimer un utilisateur :</h3>
<form method="POST" action="">
    ID: <input type="number" name="id" required><br>
    <input type="hidden" name="action" value="supprimer">
    <input type="submit" value="Supprimer">
</form>
