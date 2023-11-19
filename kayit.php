<?php

include"dataBaseConnection.php";

$userName = $_POST['email'];
$userPassword = $_POST['password'];

if(isset($_POST["add"])){
  $sql = "INSERT INTO users (userName, userPassword)
  VALUES ('$userName', '$userPassword')";

}

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

?>