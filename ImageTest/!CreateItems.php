<?php
session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Items</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        form {
            margin-bottom: 20px;
        }
        img {
            max-width: 300px;
            max-height: 300px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Create Items</h1>
    <form enctype="multipart/form-data" method="post" action="upload.php">
        <input type="file" name="images" id="images" required> <br />
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
    // Check if the uploaded file session variable is set
    if (isset($_SESSION['uploadedFile'])) {
        $uploadedFile = htmlspecialchars($_SESSION['uploadedFile']);
        echo "<p>The file <strong>$uploadedFile</strong> has been uploaded.</p>";
        
        // Construct the file path
        $filePath = "uploads/" . $uploadedFile;
        
        // Check if the file exists before displaying
        if (file_exists($filePath)) {
            echo "<img src='$filePath' alt='Uploaded Image'><br />";
        } else {
            echo "<p>Uploaded file not found.</p>";
        }

        // Clear the session variable after displaying
        unset($_SESSION['uploadedFile']);
    } else {
        echo "<p>No file uploaded yet.</p>";
    }
    ?>

</body>
</html>