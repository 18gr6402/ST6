<?php 
require "conn.php";
$student_id = $_POST["student_id"];
$student_consent = (int) $_POST["student_consent"];
$mysql_qry1 = "update student set student_consent = '$student_consent' where student_id like '$student_id'";

if ($conn->query($mysql_qry1) === TRUE) {
    echo "Consent registeret";
} else {
    echo "Error: " . $mysql_qry1 . "<br>" . $conn->error;
}

$conn->close();
?>