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


    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $degree = $_POST["degree"];


        $sql = "INSERT INTO users (FNAME, LNAME, EMAIL, COMMENT, GENDER, AGE, DEGREE) VALUES ('$fname','$lname','$email','$comment', '$gender', '$age', '$degree')";
        if($conn->query($sql) === TRUE){
            echo "New recored created successfully";
        }else{
            echo "Error: " . $sql . "</br>" . $conn->error;
        }

        $conn->close();
    header("Location: insert_get.php"); 
    
?>