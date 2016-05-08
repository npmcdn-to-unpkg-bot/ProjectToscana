<?php
require_once "require/middleware.php";
require_once "require/header.php";
require_once "require/mysql.php";
?>

<?php
echo "<alert>TEST</alert>";

$resultsPerPage = 5;

$sql_all = "SELECT * FROM fotos";
$result_all = $mysqli->query($sql_all) or die($mysqli->error);

$totalResults = mysqli_num_rows($result_all);
$totalPages = ceil($totalResults/$resultsPerPage);


if (isset($_GET["page"])) {
    $currentPage = $_GET["page"];
    if ($currentPage > 0 && $currentPage <= $totalPages) {
        $start = ($currentPage - 1) * $resultsPerPage;
        echo $currentPage;
    } else {
        $start = 0;
        $currentPage = 1;
    }
} else {
    $start = 0;
    $currentPage = 1;
}

//Pagination
if ($currentPage > 0 && $currentPage < $totalPages) {
    $nextPage = $currentPage+1;
    echo "<nav class='pagination'><a href='?page=".$nextPage."'>Next Page</a></nav>";
}


?>

    <div class="grid">
        <?php
        $sql = "SELECT * FROM fotos LIMIT ".$start.",".$resultsPerPage;
        echo $sql;
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
