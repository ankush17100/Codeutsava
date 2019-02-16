<?php 
    ob_start();
    session_start();
    include('../includes/conf.php');
    $host = getenv('HOST');
    $username = getenv('USERNAME');
    $password = getenv('PASSWORD');
    $db_name = getenv('DB_NAME');
    $conn = mysqli_connect($host,$username,$password);
    $flag=0;
    if($conn){
        echo "Connected to Server<br><br>"; 
        $query = "CREATE DATABASE IF NOT EXISTS {$db_name}";
        $res = mysqli_query($conn,$query);
        if($res){
            echo "Database {$db_name} Created.<br>";
            $flag=1;
        }
    }
    else
        echo "Not Connected";

    if($flag==1){
        $conn2 = mysqli_connect($host,$username,$password,$db_name);
        
        
        $query = "CREATE TABLE IF NOT EXISTS admin_users (
                    user_id INT(255) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                    username VARCHAR(32) UNIQUE NOT NULL,
                    password VARCHAR(255) NOT NULL,
                    name VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL,
                    role VARCHAR(25) NOT NULL);";
        
        $res = mysqli_query($conn2, $query);
        if($res){
            echo "<br>Table admin users created</br>";
            $_SESSION['role']='admin_granted';
            
        }
        else
            echo "<br>".mysqli_error($conn2);
        
        $query = "CREATE TABLE IF NOT EXISTS starups_accounts (
                    user_id INT(255) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                    username VARCHAR(32) UNIQUE NOT NULL,
                    password VARCHAR(255) NOT NULL,
                    
                    role VARCHAR(25) NOT NULL);";
        
        $res = mysqli_query($conn2, $query);
        if($res)
            echo "<br>Table startups_account created</br>";
        else
            echo "<br>".mysqli_error($conn2);
        
        $query = "CREATE TABLE IF NOT EXISTS mentors_accounts (
                    user_id INT(255) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                    username VARCHAR(32) UNIQUE NOT NULL,
                    password VARCHAR(255) NOT NULL,
                    role VARCHAR(25) NOT NULL);";
        
        $res = mysqli_query($conn2, $query);
        if($res)
            echo "<br>Table mentors_account created</br>";
        else
            echo "<br>".mysqli_error($conn2);
    
        
        $query = "CREATE TABLE IF NOT EXISTS startup_applications (
                    
                    application_id INT(255) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                    username VARCHAR(32) UNIQUE NOT NULL,
                    password VARCHAR(255) NOT NULL,
                    role VARCHAR(25) NOT NULL
                    
                 );";
        
        $res = mysqli_query($conn2, $query);
        if($res)
            echo "<br>Table mentors_account created</br>";
        else
            echo "<br>".mysqli_error($conn2);
        
        
        
    }
    
?>