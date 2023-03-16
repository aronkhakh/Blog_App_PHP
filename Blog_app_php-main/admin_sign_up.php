<?php  
    include("include/connection.php");

    if(isset($_POST["sign_up_admin"])){
        $username = htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
        $confirm_email = htmlentities(mysqli_real_escape_string($con, $_POST['confirm_user_email']));
        $password = md5(htmlentities(mysqli_real_escape_string($con, $_POST['user_password'])));
        $confirm_password = md5(htmlentities(mysqli_real_escape_string($con, $_POST['confirm_password'])));

        $check_account_query = "SELECT * from admins WHERE admin_email = '$email'";
        $run_check = mysqli_query($con, $check_account_query);

        $accounts = mysqli_num_rows($run_check);

        if ($email != $confirm_email) {
            echo "<script>alert('Make sure emails match')</script>";
            echo "<script>window.location.href = 'admin_sign_up_page.php';</script>";
            exit();
           
        }
        if($password != $confirm_password){
            echo "<script>alert('Make sure passwords match')</script>";
          echo "<script>window.location.href = 'admin_sign_up_page.php';</script>";
            exit();
            
        }

        if ($accounts == 1){
            echo "<script>alert('Account with this email already exists')</script>";
            exit();
        }else{
            $insert_account_query = "INSERT into admins (admin_email, admin_username, admin_password) VALUES ('$email', '$username', '$password')";

            $run_insert = mysqli_query($con, $insert_account_query);

            if ($run_insert) {
                echo "<script>alert('Admin creation successful')</script>";
            } else {
                echo "<script>alert('Something went wrong')</script>";
            }
        }

            
    }
?>