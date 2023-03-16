<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>" />
    <title>Sign Up</title>
</head>

<body>
    <?php include('include/navbar.php'); ?>
    <div class="center-container">
        <form class="form-container" action="admin_sign_up.php" method="post">
            <input type="text" name="user_name" placeholder="Enter Username" />
            <input type="text" name="user_email" placeholder="Enter Email" />
            <input type="text" name="confirm_user_email" placeholder="Confirm Email" />
            <input type="password" name="user_password" placeholder="Enter Password" />
            <input type="password" name="confirm_password" placeholder="Confirm Password" />
            <button type="submit" name="sign_up_admin">Sign Up</button>
        </form>
    </div>
</body>

</html>