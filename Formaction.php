<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logininfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["submit"])){
    $sql = "INSERT INTO students (fname,age,phone,mail,selectedfile) VALUES ('".$_POST["fname"]."','".$_POST["age"]."','".$_POST["phone"]."','".$_POST["mail"]."','".$_POST["qualification"]."')";
    
    if ($conn->query($sql) === TRUE) {
    echo "
        <script type= 'text/javascript'>
            alert('New record created successfully');
        </script>";
    } 
    else 
    {
        echo 
        "<script type= 'text/javascript'>
            alert('Error: " . $sql . "<br>" . $conn->error."');
        </script>";
    }
}    

$conn->close();
?>