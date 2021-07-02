<?php
/**
 * Created by PhpStorm.
 * User: codezilla-7
 * Date: 5/5/17
 * Time: 1:20 PM
 */
$servername= "localhost";
$port= "3306";
$username = "root";
$password= "";
$dbname="db_site";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$mobile_no=$_REQUEST["mobile_no"];
$course=$_REQUEST["course"];

$sql = "INSERT INTO enquiry_data (name, email, mobile_no,course)
VALUES ($name, $email, $mobile_no,'$course')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
