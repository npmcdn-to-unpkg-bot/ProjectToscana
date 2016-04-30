<?php
require_once "require/middleware.php";
require_once "require/mysql.php";
require_once "require/header.php";

if (isset($_GET['ID'])) {

    $ID = $_GET["ID"];

    $sql = "SELECT * FROM fotos";
    $result = $mysqli->query($sql);
    $json = array();

    $result = $mysqli->query($sql) or die($mysqli->error);
    $json = $result->fetch_all( MYSQLI_ASSOC );

    $IID = $json[$ID]["ID"]; //Bild-ID
    $type = $json[$ID]["type"];
    $imageURL = "uploads/".$IID."_preview.".$type;
}
?>

<div class="imageController">
    <!--
    <div class="nextImage">
        <a href="#"><span class = "glyphicon glyphicon-menu-right"></span></a>
    </div>-->
    <div class="imageView">
        <?php
            echo "<img src='".$imageURL."'>";
        ?>
    </div>
    <div class="download">
        <?php
        echo "<a href='actions/download-action.php?ID=".$IID."&type=".$type."' class=\"btn btn-primary btn-block\" download><span class=\"glyphicon glyphicon-download\"></span> Download</a>";
        ?>
    </div>
</div>
<div class="container">
    <div class="row">

    </div>
</div>
<!--
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-8 comments">
            <h3>Kommentare</h3>
            <div class="comment">
                <b>Max Mustermann</b>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="comment">
                <b>Max Mustermann</b>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <h3>Informationen</h3>
            <table class="table">
                <tr>
                    <td>Kamera</td>
                    <td>Apple iPhone 7S</td>
                </tr>
                <tr>
                    <td>Blende</td>
                    <td>f/3,6</td>
                </tr>
            </table>
        </div>
    </div>
</div>
-->

<?php
require_once "require/javascript.php";
require_once "require/footer.php";
?>
