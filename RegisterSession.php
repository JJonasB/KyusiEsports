<?php
include "Conn.php";

$dbuser = $_POST['username'];
$dbFirst = $_POST['firstName'];
$dbMiddle = $_POST['middleName'];
$dbLast = $_POST['lastName'];
$dbStudentNumber = $_POST['studentNumber'];
$dbDate = $_POST['dateOfBirth'];
$dbAddress = $_POST['address'];
$dbContact = $_POST['contact'];
$dbCourse = $_POST['course'];
$dbSection = $_POST ['section'];
$dbEmail = $_POST ['email'];
$dbPassword = $_POST ['password'];


$insertStmt = $conn ->prepare("INSERT INTO `registration` (`Username`, `firstName`, `middleName`, `lastName`,`studentNumber`,`dateOfBirthA`,`address`,`contactNumber`,`course`,`section`,`email`,`password`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
$insertStmt ->bind_param('sssssdssssss',$dbuser,$dbFirst,$dbMiddle,$dbLast,$dbStudentNumber,$dbDate,$dbAddress,$dbContact,$dbCourse,$dbSection,$dbEmail,$dbPassword);
$insertStmt -> execute();


echo "<Script>
        alert(\"Registered Successfully, You can now Log In.\");
        window.location.href = 'index.php';
        </Script>";

    $insertStmt->close();
    $conn->commit();
?>