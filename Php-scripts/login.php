<?php 
require "conn.php";
$cpr_id = "1234567890";
$user_pass = "steffenkode";
$mysql_qry = "select * from patient where cpr like '$cpr_id' and password like '$user_pass';";
$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result) > 0) {
echo "login success";
}
else {
echo "login not success";
}