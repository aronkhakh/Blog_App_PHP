<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>" />
    <title>Document</title>
</head>

<body>
    <?php include('include/navbar.php'); ?>
    <?php
    session_start();
    if ($_SESSION['admin_email'] == null) {
        echo "<script>alert('Must be signed in');</script>";
        header('Location: admin_sign_in_page.php');
        
    }

   
    echo $_SESSION['admin_email'];


    ?>

    <form action = "include/sign_out.php" method='post'>
        <button type='submit' name='sign_out'>Sign Out</button>
    </form>

    <div class="center-container">
        <form class="form-container" action="add_blog.php" method="POST">
            <input type="text" name="title" placeholder="Enter Title" />
            <input type="text" name="subject" placeholder="Enter Subject" />
            <textarea type="text" name="content" placeholder="Enter Content"></textarea>
            <button type="submit" name="upload_blog">Upload Blog</button>
        </form>
    </div>
</body>

</html>