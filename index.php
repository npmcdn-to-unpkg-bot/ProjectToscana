<?php
require_once "require/middleware.php";
require_once "require/header.php";
require_once "require/mysql.php";
?>

<?php

$sqlOrder = "ORDER BY UID DESC"; //Standart-Sortierung

if (isset($_GET["sorting"])) {
    $sorting = $_GET["sorting"];
    if ($sorting == "upload_descending") {
        $sqlOrder = "ORDER BY UID DESC";
    } if ($sorting == "upload_ascending") {
        $sqlOrder = "ORDER BY UID";
    }
}

$resultsPerPage = 15;

$sql_all = "SELECT * FROM fotos";
$result_all = $mysqli->query($sql_all) or die($mysqli->error);

$totalResults = mysqli_num_rows($result_all);
$totalPages = ceil($totalResults/$resultsPerPage);


if (isset($_GET["page"])) {
    $currentPage = $_GET["page"];
    if ($currentPage > 0 && $currentPage <= $totalPages) {
        $start = ($currentPage - 1) * $resultsPerPage;
    }
} else {
    $start = 0;
    $currentPage = 1;
}

//Pagination

if ($currentPage > 0 && $currentPage < $totalPages) {
    $nextPage = $currentPage+1;
    echo "<nav class='pagination' style='display: none'><a href='?page=".$nextPage."'></a></nav>";
}

?>

    <div class="grid">
        <?php
        $sql = "SELECT * FROM fotos ".$sqlOrder." LIMIT ".$start.",".$resultsPerPage;
        $result = $mysqli->query($sql) or die($mysqli->error);

        while ($row = $result->fetch_assoc()) {
            $imageURL = "uploads/".$row["ID"]."_thumbnail.".$row["type"];
            $URL = "imageView.php?ID=".$row["ID"]."&type=".$row["type"];
            printf("<div class='grid-item'><a href='".$URL."'><img src='".$imageURL."'></a></div>");
        }

        ?>
    </div>

<?php
require_once "require/javascript.php";
echo "<script src=\"js/imageGrid.js\"></script>";
require_once "require/footer.php";
?>
