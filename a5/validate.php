<?php
session_start();
$dbName = 'assignment5';
$dbUser = 'root';
$dbPass = '123456';
$dbIP = '35.193.36.113';
$mysqli = new mysqli($dbIP, $dbUser, $dbPass, $dbName, 3306);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
$id = '';
$username = '';
$password = '';
if(isset($_POST['submit']))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM Users WHERE Username='$username' AND Password='$password'";
    $result = $mysqli->query($query) or die($mysqli->error);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            if($row["Role"] == "Admin")
            {
                $_SESSION["LoginUser"] = $row["Username"];
                $_SESSION["Role"] = $row["Role"];
                header('location: admin.php');
            }
            else {
                $_SESSION["LoginUser"] = $row["Username"];
                $_SESSION["Role"] = $row["Role"];
                header('location: index.php');
            }
        }
    }
}
if(isset($_POST["add"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "INSERT INTO Users (Username, Password, Role) VALUES('$username', '$password', 'Admin')";
    $mysqli->query($query) or die($mysqli->error);
    header('location: admin.php');
}
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM Users WHERE ID=$id") or die($mysqli->error);

    if (count($result) == 1) {
        $row = $result->fetch_array();
        $username = $row["Username"];
        $password = $row["Password"];
    }
}
