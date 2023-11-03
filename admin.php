<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="admin-style.css">
</head>

<body>
    <div>
        <h1>Admin</h1>
        <a href="index.html">
            <img src="palestine.jpg" class="img" alt="Image description">
        </a>
    </div>
    <div class="supp">
        <h2> Suprimer un produit</h2>
        <label for="produit">Sélectionner un produit à supprimer :</label>
        <select id="produit" name="produit">
            <!-- Ajouter une option vide pour éviter de supprimer accidentellement un produit -->
            <option value=""></option>
            <?php
            // Connexion à la base de données
            $bdd = new PDO('mysql:host=localhost;dbname=nom_de_la_base_de_donnees;charset=utf8', 'nom_utilisateur', 'mot_de_passe');

            // Récupération de tous les produits
            $requete = $bdd->query('SELECT * FROM produits');
            while ($donnees = $requete->fetch()) {
                echo '<option value="' . $donnees['id'] . '">' . $donnees['nom'] . '</option>';
            }
            ?>
        </select>

        <!-- Ajouter un bouton "Supprimer" pour supprimer le produit sélectionné -->
        <button onclick="supprimerProduit()">Supprimer</button>

        <script>
            function supprimerProduit() {
                // Récupérer la valeur sélectionnée dans la liste déroulante
                var produitSelectionne = document.getElementById("produit").value;

                // Supprimer le produit correspondant de la base de données
                // Code pour supprimer le produit ici

                // Rafraîchir la page pour afficher les changements
                location.reload();
            }
        </script>
        <br><br>
    </div>
    <div class="ajout">

        <h2>Ajouter un produit</h2>
        <!-- Ajouter deux choix pour le nouveau produit -->
        <form action="ajouter_produit.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br>
            <label for="choix">Choisir une option :</label>
            <select id="choix" name="choix">
                <option value="option1">with</option>
                <option value="option2">against</option>
            </select>
            <br>
            <input type="submit" value="Ajouter">
        </form>
    </div>
</body>

</html>