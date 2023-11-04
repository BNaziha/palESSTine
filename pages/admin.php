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
    <div class="ajout">

        <h2>Add a brand:</h2>
        <!-- Ajouter deux choix pour le nouveau produit -->
        <form action="../scripts/add_product.php" method="post">
            <label for="nom">Name :</label>
            <input type="text" id="nom" name="name" required>
            <br>
            <input type="checkbox" name="is_safe" id="is-safe" value="This is safe.">
            <br>
            <h1>Choose the country:</h1>
            <select id="country">

                <?php
                include_once("../scripts/countries.php");
                foreach ($countries as $country) {
                    $countryName = $country["name"]["common"];
                    echo "<option value='$countryName'>$countryName</option>";
                }
                ?>
            </select>
            <input type="submit" value="Add">
        </form>
    </div>
</body>

</html>