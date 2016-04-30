<?php
require_once "require/middleware.php";
require_once "require/header.php";
require_once "require/mysql.php";
?>

<div class="container">

    <div class="grid">
        <?php
        $sql = "SELECT * FROM fotos";
        $result = $mysqli->query($sql) or die($mysqli->error);

        while ($row = $result->fetch_assoc()) {
            $imageURL = "uploads/".$row["ID"]."_thumbnail.".$row["type"];
            $URL = "imageView.php?ID=".$row["ID"];
            printf("<div class='grid-item'><a href='".$URL."'><img src='".$imageURL."'></a></div>");
        }

        ?>
    </div>

</div>

<?php
require_once "require/javascript.php";
echo "<script src=\"js/imageGrid.js\"></script>";
require_once "require/footer.php";
?>
