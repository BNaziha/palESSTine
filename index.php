<!DOCTYPE html>
<html>

<head>
    <title>PalESSTine</title>
    <link rel="stylesheet" href="./styles/style.css">
    <?php include_once("./scripts/countries.php"); ?>
</head>

<body>
    
    <div class="container">
        <h1>Enter the brand name:</h1>

        <form action="./pages/respone.php" method="get">
        <input type="text" id="mark" placeholder="Brand name" name="mark">

        <h1>Choose your country:</h1>
        <select id="country">

            <?php
            foreach ($countries as $country) {
                $countryName = $country["name"]["common"];
                echo "<option value='$countryName'>$countryName</option>";
            }
            ?>
        </select>
        <br>
        <button type="submit" id="okButton">OK</button>
        </form>


        <div class="why-boycott" data-aos="fade-up" data-aos-delay="200">
            <h2>Why Boycott is Important</h2>
            <div class="why-list">
                <div class="why-item">
                    <div class="why-caret-container"></div>
                    <p>You express your dissatisfaction with unethical business practices.</p>
                </div>
                <div class="why-item">
                    <div class="why-caret-container"></div>
                    <p>You encourage companies to adopt responsible behaviors.</p>
                </div>
                <div class="why-item">
                    <div class="why-caret-container"></div>
                    <p>You support important social and environmental causes.</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>