<?php 

session_start();

include"dataBaseConnection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $userName = htmlspecialchars($_POST["email"]);
    $userPassword = htmlspecialchars($_POST["password"]);

    $sql = "SELECT * FROM users WHERE userName = '$userName' AND userPassword = '$userPassword'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1 ){
        $_SESSION["userName"] = $userName;
        header("Location:home.php");

    }
    else{
        echo "gecersiz eposta veya sifre";
    }

}
?>