<?php $username = "Cat" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page | <?php echo $username ?></title>
</head>
<body>
    <div>Welcome <?php echo $username ?></div>
    <div><?php echo $username ?> Your Score 1000 Points</div>
    <?php include("Score.php") ?>
</body>
</html>
