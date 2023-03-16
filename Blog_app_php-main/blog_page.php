<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <?php include('include/navbar.php'); ?>
    <?php
    include("include/connection.php");

    $blog_id = mysqli_real_escape_string($con, $_GET['id']);



    $query = "SELECT * from blogs WHERE blog_id = '$blog_id' LIMIT 1";

    $run_query = mysqli_query($con, $query);

    $row = mysqli_fetch_array($run_query);
    echo "<div class = 'center-container'>";
    echo "<div class = 'blog-container'>";
    echo "<h1>" . $row['blog_title'] . "</h1>";
    echo "<p class = 'blog-page-author'> by " . $row['createdBy'] . "</p>";
    echo "<p class = 'blog-page-subject'>" . $row['blog_subject'] . "</p>";
    echo "<p class = 'blog-page-content'>" . $row['blog_content'] . "</p>";

    echo "</div>";
    echo "</div>";
    ?>

    <?php



    ?>

    <div>
        <h1><?php $row['blog_title'] ?></h1>
    </div>
</body>

</html>