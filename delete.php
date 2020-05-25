<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "ecstudy";
 
     #create/check connecction 
     $conn = new mysqli($servername, $username, $password, $dbname);
     if ($conn->connect_error){
         die("Connection failed: " . $conn->connect_error);
     }

// sql to delete a record
$sql = "DELETE FROM users WHERE id ='". $_POST["id"] ."'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully.
    ";
    header("Location: conget.php"); 
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: insert_get.php"); 
?>