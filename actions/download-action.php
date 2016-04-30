<?php
if (isset($_GET["ID"])) {
    $ID = $_GET["ID"];
    $type = $_GET["type"];
    $filePath = "../uploads/".$ID.".".$type;

    if(file_exists($filePath)) {
        $fileName = basename($filePath);
        $fileSize = filesize($filePath);

        // Output headers.
        header("Cache-Control: private");
        header("Content-Type: application/octet-stream");
        header("Content-Length: ".$fileSize);
        header("Content-Disposition: attachment; filename=".$fileName);

        // Output file.
        readfile ($filePath);
        exit();
    }
    else {
        die('Die angeforderte Datei ist nicht verfügbar!');
    }
}