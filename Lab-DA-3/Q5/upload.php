<?php
// Define the Directory DATA where the image will be stored. 
$target_dir = "DATA/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
// File Type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// If we hit the submit button, the img is finally uploaded
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "<br>File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "<br>File is not an image.";
    $uploadOk = 0;
  }
}
// Display error if file already exist
if (file_exists($target_file)) {
  echo "<br>File already exists.";
  $uploadOk = 0;
}
// Verify if the file is 5 MB
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "<br>File is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "<br>Only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "<br>File was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<br>The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " uploaded.";
  } else {
    echo "<br>Error uploading file";
  }
}
?>