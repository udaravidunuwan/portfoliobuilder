<?php

require 'connection.php';

$status = $statusMsg = '';

if(isset($_POST["submit"])){
    $status = 'error';
    if(!empty($_FILES["image"]["name"])){

        $fileName = basename($_FILES["image"]["name"]);
        $filetype = pathinfo($fileName, PATHINFO_EXTENSION);

        $allowTytypes = array('jpg', 'png', 'jpeg', 'gif');
        if(in_array($filetype, $allowTytypes)){
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));

            $sql = "INSERT INTO project_tab_tb (pT_img) VALUES '".$imgContent."'";
            $insert = $connection->query($sql);

            if($insert){
                $status = 'Success';
                $statusMsg = 'File Uploaded Successfully';
            } else {
                $statusMsg = 'Upload Failed';
            }
        } else {
            $statusMsg = 'Only JPG, PNG, JPEG and GIF images are supported';
        }
    } else {
        $statusMsg = 'Select an image to upload';
    }
}

// FAILED SCRIPT