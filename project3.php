<?php

@$myname = $_POST["my_name"];
@$email = $_POST["email"];
@$number = $_POST["mobile_number"];
@$query = $_POST["query"];

$conn = mysqli_connect("localhost", "root","", "technojam_form") or die("connection failed !!!");

$sql = "INSERT INTO technojam_table(MyName,Email_Id,Mobile_Number,Query)  VALUES ('{$myname}','{$email}','{$number}','{$query}' )";

$result = mysqli_query($conn,$sql) or die("Query failed!");

// header("location: http://localhost/database%20form/save.php");
mysqli_close($conn);
?>

