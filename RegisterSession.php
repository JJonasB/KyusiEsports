<?php
include "Conn.php";

$dbuser = $_POST['username'];
$dbFirst = $_POST['firstName'];
$dbMiddle = $_POST['middleName'];
$dbLast = $_POST['lastName'];
$dbStudentNumber = $_POST['studentNumber'];
$dbDate = $_POST['dateofBirth'];
$dbAddress = $_POST['address'];
$dbContact = $_POST['contact'];
$dbCourse = $_POST['course'];
$dbSection = $_POST ['section'];
$dbEmail = $_POST ['email'];
$dbPassword = $_POST ['password'];


$insertStmt = $conn ->prepare("INSERT INTO `registration` (`Username`, `firstName`, `middleName`, `lastName`,`studentNumber`,`dateOfBirth`,`address`,`contactNumber`,`course`,`section`,`email`,`password`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
$insertStmt ->bind_param('ssssssssssss',$dbuser,$dbFirst,$dbMiddle,$dbLast,$dbStudentNumber,$dbDate,$dbAddress,$dbContact,$dbCourse,$dbSection,$dbEmail,$dbPassword);
$insertStmt -> execute();


echo "<Script>
        altert(\"Registered Successfully, You can now Log In.\");
        window.location.href = 'index.php';
        </Script>";

    $insertStmt->close();
    $conn->commit();
    ?>