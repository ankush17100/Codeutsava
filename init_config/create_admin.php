<?php
    ob_start();
    session_start();
    include('includes/db.php'); 
?>
<form action="" method="POST">
    <input type="Name" name = "name" placeholder="Name"><br>
    <input type="email" name = "email" placeholder="E-Mail"><br>
    <input type="text" name = "username" placeholder="Username"><br>
    <input type="password" name = "password" placeholder="Password"><br>
    <input type="submit" value="Register" name = "submit">
</form>


<?php 
    if(isset($_POST['submit']) && ($_SESSION['role']=='admin_granted')){
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        
        $salt = random_bytes(500);
        $salt = base64_encode($salt);
        $salt = str_replace('+', '.', $salt);
        $password_hash = hash('sha256',$password);
        
        $query = "INSERT INTO admin_users(username, password,name, email, role) VALUES(
                    '{$username}','{$password_hash}', '{$name}' , '{$email}' , 'admin'
                )";
        $res = mysqli_query($conn,$query);
        if($res){
            echo "User Created";
            header('Location:index.php');
        }
    }
?>