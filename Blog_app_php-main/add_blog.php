<?php 
    if (isset($_POST['upload_blog'])){
    include("include/connection.php");

    session_start();
        $title = htmlentities(mysqli_real_escape_string($con, $_POST['title']));
        $subject = htmlentities(mysqli_real_escape_string($con, $_POST['subject']));
        $content = htmlentities(mysqli_real_escape_string($con, $_POST['content']));
        
        
        $current_admin = $_SESSION['admin_email'];

        $get_admin_query = "SELECT * FROM admins WHERE admin_email = '$current_admin'";

        $run_query = mysqli_query($con, $get_admin_query);

        $row = mysqli_fetch_array($run_query);

        $admin_username = $row["admin_username"];
     
        

        $insert_blog_query = "INSERT into blogs (blog_title, blog_subject, blog_content, createdBy) VALUES ('$title', '$subject', '$content', '$admin_username')";

        $add_blog = mysqli_query($con, $insert_blog_query);

        if($add_blog){
            echo "<script>alert('Blog added')</script>";

        }else{
            echo "<script>alert('Something went wrong')</script>";
        }
       }
?>