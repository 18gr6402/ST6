<?php 
require "conn.php";
$student_pass = $_POST["student_pass"];
$mysql_qry1 = "insert into student (student_pass) values ('$student_pass')";

if ($conn->query($mysql_qry1) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Insert successful: Student_id = " . $last_id;
} else {
    echo "Error: " . $mysql_qry1 . "<br>" . $conn->error;
}

$conn->close();
?>