<?php
// Retrieve the form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$contact = $_POST['contact'];
$education=$_POST['education'];
$organization=$_POST['organization'];
$passed_out=$_POST['passed_out'];
$college=$_POST['college'];
$courses=$_POST['courses'];
$state=$_POST['state'];
$schlorship=$_POST['schlorship'];
$subject=$_POST['subject'];
$message=$_POST['message'];
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "educentermain";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the data into the payments table
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$contact = $_POST['contact'];
$education=$_POST['education'];
$organization=$_POST['organization'];
$passed_out=$_POST['passed_out'];
$college=$_POST['college'];
$courses=$_POST['courses'];
$state=$_POST['state'];
$schlorship=$_POST['schlorship'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sql = "INSERT INTO sunstone (fname, lname, mail,contact,education,organization,passed_out,college,courses,state,schlorship,subject,message)
VALUES ('$fname', '$lname', '$mail', '$contact','$education','$organization','$passed_out','$college','$courses','$state','$schlorship','$subject','$message')";


if ($conn->query($sql) === TRUE) {
    echo "submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>