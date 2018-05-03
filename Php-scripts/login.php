<?php 
require "conn.php";
$student_id = $_POST["student_id"];
$student_pass = $_POST["student_pass"];
$mysql_qry = "select * from student where student_id like '$student_id' and student_pass like '$student_pass';";
$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result) > 0) {
echo "login success";
}
else {
echo "login not success";
}