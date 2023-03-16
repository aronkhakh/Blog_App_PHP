<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <h1>Blog Site</h1>
    <?php 
    session_start();
    include('include/navbar.php'); 
    
    if(isset($_SESSION['admin_email'])){
        include('include/sign_out.php');

        echo "<form action = 'include/sign_out.php' method='post'>
                 <button class = 'sign-out-btn type='submit' name='sign_out'>Sign Out</button>
             </form>";   
    }
    ?>
    <div class="blog-list-container">
        <?php
        include("include/connection.php");

        $get_blogs_query = "SELECT * FROM blogs";

        $run_get_blogs_query = mysqli_query($con, $get_blogs_query);



        while ($result = mysqli_fetch_array($run_get_blogs_query)) {
            $blog_page = 'blog_page.php?id=' . $result['blog_id'];
            echo "<div class = 'blog-card-container'>";
            echo "<div class = 'blog-title'>" . $result['blog_title'] . "</div>";
            echo "<div class = 'blog-subject'>" . $result['blog_subject'] . "</div>";
            echo "<div class = 'blog-content'>" . $result['blog_content'] . "</div>";
            echo "<div class = 'read-more-link'>" . "<a href = '$blog_page'>Read More</a>" . " </div>";

            echo "</div>";
        };

        ?>
    </div>
</body>

</html>