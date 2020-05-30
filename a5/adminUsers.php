<?php
session_start();
if(!isset($_SESSION["Role"]) == "Admin"){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<?php require_once 'validate.php'; ?>
<?php
$dbName = 'assignment5';
$dbUser = 'root';
$dbPass = '123456';
$dbIP = '35.193.36.113';
$mysqli = new mysqli($dbIP, $dbUser, $dbPass, $dbName, 3306);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$query = "SELECT * FROM Users WHERE Role='Admin'";
$result = $mysqli->query($query) or die($mysqli->error);

?>
<?php include 'adminNavbar.php'?>
<div class="container mt-5">
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Username</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
   <?php while($row = $result->fetch_assoc()): ?>
       <tr>
           <td><?php echo $row['Username'];?></td>
           <td><?php echo $row['Role'];?></td>
           <td>
               <a href="adminUsers.php?edit=<?php echo $row['Id'] ?>" class="btn btn-info">Edit</a>
               <a href="validate.php?delete=<?php echo $row['Id'] ?>" class="btn btn-danger">Delete</a>
           </td>
       </tr>
   <?php endwhile; ?>
    </tbody>
</table>
    <h3 class="my-3">Add new admin</h3>
<form class="form-inline" method="post" action="validate.php">
    <input type="hidden" name="ID" value="<?php echo $id;?>"/>
    <div class="form-group mb-2">
        <input value="<?php echo $username;?>" name="username" type="text" class="form-control" id="staticEmail2" placeholder="Username">
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <input value="<?php echo $password;?>" name="password" type="password" class="form-control" id="inputPassword2" placeholder="Password">
    </div>
    <button name="add" type="submit" class="btn btn-primary mb-2">Add</button>
</form>
</div>
</body>
