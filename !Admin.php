<!-- Add the latest id code from here ai! -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyusi Esports</title>
    <link rel="stylesheet" href="css/QCE.css">
</head>
<body>
    <div class="wrapper">
        <!-- Header Section -->
        <?php include "#Navbar.php"; ?>

        <!-- Main Section -->
        <?php 
            $message = "";
            $viewMessage = ""; 

            if(isset($_POST["submit"])){
                include "functions/Conn.php";

                $text = $_POST['text'];

                $sql = "INSERT INTO adminedit (Text) VALUES (?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $text);

                if ($stmt->execute()) {
                    $message = "Message submitted successfully!";
                    $_SESSION["newsText"] = htmlspecialchars($text); 
                } else {
                    $message = "Error: " . $stmt->error;
                }

                $stmt->close();


                $sql = "SELECT Text FROM adminedit ORDER BY ID DESC LIMIT 1"; 
                $result = $conn->query($sql);
                if ($result && $row = $result->fetch_assoc()) {
                    $viewMessage = htmlspecialchars($row['Text']);
                }

                $conn->close();
            }
        ?>
        <main class="main-content">

            <h2 class="sponsors-title">ADMIN MESSAGE</h2>
            <center>
                <h1><?php echo $message; ?></h1>
                <h3><?php echo isset($_SESSION['newsText']) ? htmlspecialchars($_SESSION['newsText']) : ''; ?></h3> <!-- Display session message -->
            </center>

            <form action="" method="post">
                <center>
                    <input type="text" name="text" id="text" placeholder="Enter text" required> <br>
                    <input type="submit" name="submit" value="Submit">
                </center>
            </form>
        </main>
    </div>

    <!-- Footer Section -->
    <?php include "#Footer.php"; ?>

    <script src="javascript/QCE.js"></script>
</body>
</html>