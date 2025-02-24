<?php

$uploadDir = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
$filePath = $uploadDir.'proizvodi.json';

if(!is_dir($uploadDir)){
    mkdir($uploadDir, 0777, true);
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $tmpFilePath = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];

    if($fileType === 'application/json'){
        $result = file_put_contents($filePath, file_get_contents($tmpFilePath));
    }

    if($result != false){
        echo 'Uspjeh';
    }else{
        echo 'Greska';
    }
}

?>

<html>
<head></head>
<body>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload proizvoda">
</form>

</body>
</html>