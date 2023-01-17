<?php
if (($_FILES["file"]["type"] == "image/tiff")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/png")
    || ($_FILES["file"]["type"] == "image/gif")) {
    $path = "../imgArticulosCatalogo/".$_POST['inv']."/"; 

if (!file_exists($path)) {
    mkdir($path, 0777, true);
}
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $path.$_FILES['file']['name'])) {
        echo $path;
    } else {
        echo 0;
    }
} else {
    echo 0;
}