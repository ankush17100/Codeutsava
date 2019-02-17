<section class="pt100 pb100">
    <div class="container">
        <h1>Configure for the First Time</h1>
        <div class="row justify-content-center mt100">
            <div class="col-md-6 col-12">

                <?php 
                    if(!file_exists('.env')){
                ?>
                <form action="" class="contact_form" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="HOSTNAME" name="hostname">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="USERNAME" name="user_name"></div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="password" name="user_password">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="DB NAME" name="db_name">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" name="submit" class="btn btn-rounded btn-primary ">CONFIGURE</button>
                    </div>
                </form>

                <?php
                if(isset($_POST['submit'])){
                    
                    $env_file = fopen('.env','w');
                    $user_name="USERNAME={$_POST['user_name']}\n";
                    $host_name="HOST={$_POST['hostname']}\n";
                    $user_password="PASSWORD={$_POST['user_password']}\n";
                    $db_name="DB_NAME={$_POST['db_name']}\n";
                    fwrite($env_file,$host_name);
                    fwrite($env_file,$user_name);
                    fwrite($env_file,$user_password);
                    fwrite($env_file,$db_name);
                    fclose($env_file);
                    include('init_config/create_req.php');
                    
                    }
                }else{
                    header("Location: index.php");
                    }
    
                ?>

            </div>
        </div>

    </div>
</section>
