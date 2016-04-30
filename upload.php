<?php
require_once "require/middleware.php";
require_once "require/header.php";
?>

<div class="container">

    <h1>Bilder hochladen</h1>
    <form action="actions/upload-action.php" class="dropzone" enctype="multipart/form-data">
        <div class="dz-message">Drag & Drop oder Klicken</div>
    </form>

</div>



<?php
require_once "require/javascript.php";
require_once "require/footer.php";
?>
