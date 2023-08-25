<?php
include('dbcon.php');
include('regcomplete.html');
?>

<?php
$email=$_GET['t1'];
$pass=$_GET['t2'];
$fname=$_GET['t3'];
$lname=$_GET['t4'];
$gender=$_GET['t5'];
$reg_date=$_GET['t6'];

#INSERTING DATA
$sql="INSERT INTO gym_data (email, pass, firstname, lastname, gender, reg_date)
VALUES('$email','$pass', '$fname' , '$lname','$gender', '$reg_date')";

if($conn->query($sql)===TRUE)
    echo "REGISTERED SUCCESSFULLY";

    $conn->close();
?>