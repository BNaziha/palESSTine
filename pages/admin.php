<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="../styles/admin-style.css">
</head>

<body>
    <div>
        <h1>Admin</h1>
        <a href="../index.php">
            <img src="../assets/palestine.jpg" class="img" alt="Image description">
        </a>
    </div>
    <div class="ajout">

        <h2>Add a brand:</h2>
        <!-- Ajouter deux choix pour le nouveau produit -->
        <form action="../scripts/add_product.php" method="get">
            <label for="nom">Name :</label>
            <input type="text" id="nom" name="name" required>
            <br>
            <label for="is_safe">Is it safe : </label>
            <input type="checkbox" name="is_safe" id="is-safe" value="1" checked>
            <br>
            <label>Choose the country:</label>
            <select id="country">
                <?php
                include_once("../scripts/countries.php");
                foreach ($countries as $country) {
                    $countryName = $country["name"]["common"];
                    echo "<option value='$countryName'>$countryName</option>";
                }
                ?>
            </select>
            <br>
            <label for="field">Field of work:</label>
            <select name="field" id="field">
                <option value="Clothes">Clothes</option>
                <option value="Tech">Tech</option>
                <option value="Cosmitics">Cosmitics</option>
                <!-- <option value=""></option> -->
            </select>
            <br>
            <input type="submit" value="Add">
        </form>
    </div>
</body>

</html>