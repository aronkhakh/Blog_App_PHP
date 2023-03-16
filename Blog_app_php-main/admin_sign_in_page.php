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
    <div class="center-container">
        <form class="form-container" action="signin_admin.php" method="post">
            <input type="text" name="admin_email" placeholder="Enter Email" required />
            <input type="password" name="admin_password" placeholder="Enter password" required />
            <button type="submit" name="sign_in"> Sign Up </button>
            <p>Don't have an account? <a href="admin_sign_up_page.php" </p>

        </form>
    </div>

</body>

</html>