<?php 
require "conn.php";
$cpr_id = $_POST["user_name"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from patient where cpr like '$cpr_id' and password like '$user_pass';";
$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result) > 0) {
echo "Login succesfuld! Velkommen";
}
else {
echo "Login ikke succesfuld!";
}