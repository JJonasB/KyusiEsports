<?php
session_start(); // Start the session

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["images"]["name"]); // Corrected input name
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["images"]["tmp_name"]); // Corrected input name
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["images"]["size"] > 1000000) { // Corrected input name
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) { // Corrected input name
        echo "The file " . htmlspecialchars(basename($_FILES["images"]["name"])) . " has been uploaded.";
        // Store the uploaded file name in session
        $_SESSION['uploadedFile'] = basename($_FILES["images"]["name"]);
        header("Location: !CreateItems.php");
        exit();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>