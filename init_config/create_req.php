<?php 
    ob_start();
    session_start();
    include('includes/conf.php');
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
        
        $query = "CREATE TABLE IF NOT EXISTS startups_accounts (
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
                    startup_name varchar(255) NOT NULL UNIQUE,
                    startup_email varchar(255) NOT NULL UNIQUE,
                    startup_contact varchar(20) NOT NULL UNIQUE,
                    startup_description TEXT NOT NULL,
                    startup_seed_fund VARCHAR(100) NOT NULL,
                    startup_website_link VARCHAR(100),
                    startup_past_experience TEXT NOT NULL,
                    startup_years_experience VARCHAR(100) NOT NULL,
                    startup_proposal_link TEXT NOT NULL,
                    startup_presentation_link TEXT NOT NULL,
                    shortlisted VARCHAR(5) NOT NULL,
                    startup_category VARCHAR(200) NOT NULL,
                    application_date DATETIME NOT NULL,
                    startup_verified VARCHAR(5) NOT NULL,
                    DIPP_NUMBER VARCHAR(100) NOT NULL,
                    selected VARCHAR(5),
                    interview_date DATE,
                    interview_time TIME,
                    interview_venu VARCHAR(255),
                    archive VARCHAR(5) NOT NULL                       
                    
                 );";
        
        
        $res = mysqli_query($conn2, $query);
        if($res)
            echo "<br>Table startup_applications created</br>";
        else
            echo "<br>".mysqli_error($conn2);
        
        $query = "CREATE TABLE IF NOT EXISTS founders_applications (
                    
                    founders_id INT(255) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                    application_id INT(255),
                    FOREIGN KEY (application_id) REFERENCES startup_applications(application_id) ON DELETE CASCADE,
                    full_name VARCHAR(255) NOT NULL,
                    contact_number VARCHAR(20) NOT NULL,
                    email VARCHAR(255) NOT NULL
                    
                 );";
        
        
        $res = mysqli_query($conn2, $query);
        if($res)
            echo "<br>Table founders_applications created</br>";
        else
            echo "<br>".mysqli_error($conn2);
        
        
        
        $query = "CREATE TABLE IF NOT EXISTS mentors_applications (
                    
                    mentor_id INT(255) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                    mentor_full_name VARCHAR(255) NOT NULL,
                    mentor_contact_number VARCHAR(20) NOT NULL,
                    expertise VARCHAR(100) NOT NULL,
                    description VARCHAR(100) NOT NULL,
                    mentor_email VARCHAR(100) NOT NULL,
                    designation VARCHAR(100) NOT NULL,
                    past_experience VARCHAR(100) NOT NULL,
                    selected VARCHAR(10) NOT NULL
                    
                 );";
        
        
        $res = mysqli_query($conn2, $query);
        if($res)
            echo "<br>Table mentors_applications created</br>";
        else
            echo "<br>".mysqli_error($conn2);
        
        include('init_config/create_admin.php');
        
        
        
    }
    
?>