<?php 
require "conn.php";
$student_id = $_POST["student_id"];
$mysql_qry = "SELECT * FROM sleepdata WHERE student_id LIKE $student_id";
$result = mysqli_query($conn ,$mysql_qry);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "data," . $row["sleep_time"]. "," . $row["awoke_time"]. "," . $row["sleep_quality"] . "," . $row["caffeine_intake"] . "," . $row["alcohol_intake"] . "," . $row["screen_time"] . "," . $row["physical_activity"] . "," . $row["work_in_bedroom"] . "," . $row["worries_in_bedroom"] . "," . $row["smoking"] . "," . $row["tired_before_bed"] . "<br>";
	}
} else {
	echo "Error: " . $mysql_qry . "<br>" . $conn->error;
}	


$conn->close();


?>