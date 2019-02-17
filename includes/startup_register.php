<?php
    include('includes/db.php')
?>
<?php 
    if(isset($_POST['submit'])){
        $startup_name = mysqli_real_escape_string($conn,$_POST['startup_name']);
        $startup_description = mysqli_real_escape_string($conn,$_POST['startup_description']);
        $startup_email = mysqli_real_escape_string($conn,$_POST['startup_email']);
        $startup_contact = mysqli_real_escape_string($conn,$_POST['startup_contact']);
        $startup_category = mysqli_real_escape_string($conn,$_POST['startup_category']);
        $DIPP_NUMBER = mysqli_real_escape_string($conn,$_POST['DIPP_NUMBER']);
        $startup_past_experience = mysqli_real_escape_string($conn,$_POST['startup_past_experience']);
        $startup_years_experience = mysqli_real_escape_string($conn,$_POST['startup_years_experience']);
        $startup_seed_fund = mysqli_real_escape_string($conn,$_POST['startup_seed_fund']);
        $startup_website_link = mysqli_real_escape_string($conn,$_POST['startup_website_link']);
        if(!file_exists('documents')){
            mkdir('documents');
        }
        if(!file_exists('documents/'.$startup_name)){
            mkdir('documents/'.$startup_name);
            mkdir('documents/'.$startup_name.'/documents');}
        
        $presentation = $_FILES['startup_presentation']['name'];
        $presentation_tmp = $_FILES['startup_presentation']['tmp_name'];
        $P_name = 'documents/'.$startup_name.'/documents/'.'presentation'.time().$presentation;
        move_uploaded_file($presentation_tmp,$P_name);
        
        $proposal = $_FILES['startup_proposal']['name'];
        $proposal_tmp = $_FILES['startup_proposal']['tmp_name'];
        $pr_name = 'documents/'.$startup_name.'/documents/'.'proposal'.time().$proposal;
        move_uploaded_file($proposal_tmp,$pr_name);
        
        $query = "INSERT INTO startup_applications(
                startup_name, startup_email, startup_contact,
                startup_description, startup_seed_fund, startup_website_link, startup_past_experience, 
                startup_years_experience, startup_proposal_link,
                startup_presentation_link, shortlisted,
                startup_category, application_date,
                startup_verified, DIPP_NUMBER,
                archive, selected 
                ) VALUES('{$startup_name}','{$startup_email}',
                '{$startup_contact}','{$startup_description}',
                '{$startup_seed_fund}','{$startup_website_link}',
                '{$startup_past_experience}', '{$startup_years_experience}' , '{$pr_name}',
                '{$P_name}','NO','{$startup_category}',
                now(),'NO','{$DIPP_NUMBER}','NO','NO'
            )";     
        $res = mysqli_query($conn,$query);
        
        if(!$res){
            echo mysqli_error($conn);
        }
        else{
            $last_id = mysqli_insert_id($conn);
            $_SESSION['startup_name'] = $startup_name;
            
            $n_names = $_POST['name'];
            $e_names = $_POST['mail'];
            $p_names = $_POST['phone'];
            for($i=0;$i<count($n_names);$i++){
                $n = mysqli_real_escape_string($conn,$n_names[$i]);
                $e = mysqli_real_escape_string($conn,$e_names[$i]);
                $p = mysqli_real_escape_string($conn,$p_names[$i]);
                $query = "INSERT INTO founders_applications (
                    application_id,full_name,contact_number,email)
                    VALUES(
                        $last_id, '$n', '$p','$e'
                    )";
                $res = mysqli_query($conn,$query);
                if(!$res){
                    die(mysqli_error($conn));  
                }
            }
            header('Location: startup_application_submit.php');
        }
        
    }
?>