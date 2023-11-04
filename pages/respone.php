<!DOCTYPE html>
<html>

<head>
    <title>Products with Israel</title>
    <link rel="stylesheet" href="../styles/yes-no-style.css">
    <?php include_once("../scripts/database.php"); ?>
</head>

<body>
    <div class="container">
        <?php
        $mark = $_GET["mark"];
        $sql = "SELECT * FROM products WHERE mark = '$mark'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $name = $row["brand_name"];
        $isSafe = $row["is_safe"];
        ?>

        <?php
        if ($isSafe) {
        ?>
            <h1><span class="with-text">DON'T</span> buy from <?php echo $name ?> </h1>
            <p>You can replace it with the following products:</p>
            <ul>
                <?php
                $sql = "SELECT * FROM products WHERE is_safe = 1";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $brandName = $row["brand_name"];
                    echo "<li>$brandName</li>";
                }
                ?>
            </ul>

        <?php
        } else {
        ?>
            <h1>You <span class="with-text">CAN</span> buy from <?php echo $name ?></h1>
        <?php
        }

        ?>
        <a href="index.html">Try another product</a>
    </div>
</body>

</html>