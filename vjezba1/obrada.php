<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  var_dump($_FILES);
  if(!isset($_FILES['file']) && !empty($_FILES['file']['name'])){
    
    $fileType = mime_content_type($_FILES['file']['name']);

    $allowedMimeTypes = ['image/png', 'image/jpg', 'image/jpeg'];

    if(!in_array($fileType, $allowedMimeTypes)){
        echo "Uploadani file mora biti slika!";
    }else{
        $uploadDir = __DIR__.'../uploads/';
        $fileName = htmlspecialchars($_FILES['file']['name']);

        $fileTempLocation = htmlspecialchars($_FILES['file']['name']);

        if(move_uploaded_file($fileTempLocation, $uploadDir.$fileName)){
           echo "Uspješno uploadana slika!";
        }else{
            echo "Nije uspješan updejt";
        }
    }

    
  }else{
    echo "Uploadaj file";
  }
}else{
    echo "Not a valid method";
}

?>