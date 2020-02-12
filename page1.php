<?php
    require 'inc/headfoot.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
</head>
<body>
<?php echo $header; ?>
<main>
    <h3>To get started, please change the following values in the URL of the next page:</h3>

<!-- Images in Image folder [Check] -->
<p>To see different images, change the "image" value to a number between 1 and 5. <br>
To change the background color, change the "background" value to red, green, or blue. You can also do this with the "box" value to modify the box on the right. <br>
There will be a link back to this page. To change its font, change the "font" value to a number between 1 and 3. You can do the same with the color by changing the "color" value to a number between 1 and 4. <br><br>
If you want to watch a video, set the "wonky" value to "donkey". <br>
If you don't want to have a link back to this page, set the "instructions" value to "none".
</p>
<!-- Background Color  [Check]-->
<!-- Choose if link to home page is there [Check]-->
<!-- Font Type [Check] -->
<!-- Font Color [Check]-->
<!-- Wonky Donkey [Check]-->
<!-- Header/Footer Colors [Check]-->

<h3>When you're ready to begin, please click <a href="page2.php">here</a></h3>
</main>

<?php echo $footer; ?>


<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>