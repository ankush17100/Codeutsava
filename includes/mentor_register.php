<?php
    include('includes/db.php')
?>
<?php 
    if(isset($_POST['submit'])){
        $mentor_full_name = mysqli_real_escape_string($conn,$_POST['mentor_full_name']);
        $expertise = mysqli_real_escape_string($conn,$_POST['expertise']);
        $mentor_email = mysqli_real_escape_string($conn,$_POST['mentor_email']);
        $mentor_contact_number = mysqli_real_escape_string($conn,$_POST['mentor_contact_number']);
        $description = mysqli_real_escape_string($conn,$_POST['description']);
        $designation = mysqli_real_escape_string($conn,$_POST['designation']);
        $past_experience = mysqli_real_escape_string($conn,$_POST['past_experience']);
        
        
        $query = "INSERT INTO mentors_applications(
                mentor_full_name, mentor_contact_number, expertise,
                description, mentor_email, designation, past_experience, 
                selected) 
                VALUES('{$mentor_full_name}','{$mentor_contact_number}',
                '{$expertise}','{$description}',
                '{$mentor_email}','{$designation}',
                '{$past_experience}','NO'
            )";    
        
        $res = mysqli_query($conn,$query);
        
        if(!$res){
            echo mysqli_error($conn);
        }
        else{
            $last_id = mysqli_insert_id($conn);
            $_SESSION['mentor_name'] = $mentor_full_name;
            
            header('Location: mentor_application_submit.php');
        }
        
    }
?>