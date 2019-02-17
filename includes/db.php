<?php
    include('includes/conf.php');
    $host = getenv('HOST');
    $username = getenv('USERNAME');
    $password = getenv('PASSWORD');
    $db_name = getenv('DB_NAME');
    $conn = mysqli_connect($host,$username,$password,$db_name);
    if($conn){
//        echo "<b>Connected</b><br>";
    }
    else
        echo "Not Connected";
?>