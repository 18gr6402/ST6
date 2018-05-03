<?php 
require "conn.php";
$student_id = $_POST["student_id"];
$sleep_time = $_POST["sleep_time"];
$awoke_time = $_POST["awoke_time"];
$mysql_qry1 = "insert into sleepdata (student_id, sleep_time, awoke_time) values ('$student_id', '$sleep_time', '$awoke_time')";

if ($conn->query($mysql_qry1) === TRUE) {
    echo "Data saved";
} else {
    echo "Error: " . $mysql_qry1 . "<br>" . $conn->error;
}

$conn->close();
?>