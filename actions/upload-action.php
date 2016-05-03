<?php
require_once "../require/mysql.php";

$ds = DIRECTORY_SEPARATOR;

$storeFolder = '../uploads/';

$storeThumbnailFolder = "";

$allowedTypes = ["jpg", "jpeg", "png", "gif"];

if (!empty($_FILES)) {

 $tempFile = $_FILES['file']['tmp_name'];

 $name = $_FILES['file']['name'];
 $mime = $_FILES['file']['mime'];
 $type = pathinfo($name, PATHINFO_EXTENSION);

 if (in_array(strtolower($type), $allowedTypes)) {

  $id = uniqid();


  $size = getimagesize($tempFile);

  $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;

  $targetFile = $targetPath.$id.".".$type;
  $targetThumbnailFile = $targetPath.$id."_thumbnail.".$type;
  $targetPreviewFile = $targetPath.$id."_preview.".$type;

  if (move_uploaded_file($tempFile,$targetFile)) {

   makePreview($targetFile, $targetThumbnailFile, 350, $mime);
   makePreview($targetFile, $targetPreviewFile, 1280, $mime);

   $sql = "INSERT INTO fotos (UID, ID, type) VALUES ('', '" . $id . "', '" . $type . "')";

   if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
   } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
   }

   $mysqli->close();
  }


  }

}

function makePreview($src, $dest, $desired_width, $mime) {

 switch ($mime) {
  case 'image/jpeg':
   $source_image = imagecreatefromjpeg($src);
   break;

  case 'image/png':
   $source_image = imagecreatefrompng($src);
   break;

  case 'image/gif':
   $source_image = imagecreatefromgif($src);
   break;

  default:
   throw new Exception('Dieses Bildformat wird nicht unerstützt');
 }
 $width = imagesx($source_image);
 $height = imagesy($source_image);

 $desired_height = floor($height * ($desired_width / $width));

 $virtual_image = imagecreatetruecolor($desired_width, $desired_height);

 imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

 imagejpeg($virtual_image, $dest);

}
