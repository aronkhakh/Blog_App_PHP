<?php 
    session_start();

    include("include/connection.php");

    if(isset($_POST['sign_in'])){
        
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['admin_email']));
        $password = md5(htmlentities(mysqli_real_escape_string($con, $_POST['admin_password'])));

        $select_user = "SELECT * from admins WHERE admin_email = '$email' AND admin_password = '$password'";

        $query = mysqli_query($con, $select_user);
        $userFound = mysqli_num_rows($query);

        if($userFound == 1){
            $_SESSION['admin_email'] = $email;
            
          

            $user = $_SESSION['admin_email'];
            $get_user = "SELECT * from admins WHERE admin_email = '$user'";
            $run_user = mysqli_query($con, $get_user);

            $row = mysqli_fetch_array($run_user);

            $user_name = $row['admin_username'];

           
        echo "<script> window.location.assign('add_blog_page.php?admin_email=$user', '_self'); </script>";
        }else{
            echo "<script>alert('incorrect login')</script>";
        }
    }
