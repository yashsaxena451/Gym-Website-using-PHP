<?php
include('dbcon.php');
?>

<?php
$sql="CREATE TABLE gym_data(
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50),
    pass VARCHAR(25),
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    gender VARCHAR(25),
    reg_date date)";

    if($conn->query($sql) === TRUE){
        echo "Table Student created successfully";
    }
    else{
        echo "Error Creating Table" . $conn->error;
    }

    $conn->close();

?>