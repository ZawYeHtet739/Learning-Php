<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Home Page</h1>

    <?php date_default_timezone_set('Asia/Yangon'); ?>

    <?php $hour = date("H") ?>

    <?php echo $hour ?>

    <?php
    if ($hour < 6 || $hour > 18) {
        echo "<b>Night Time.</b>";
    } else {
        echo "<i>Day Time.</i>";
    }
    ?>


</body>

</html>