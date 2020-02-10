<?php
    require 'inc/headfoot.inc.php';

    $imageList = ['', 'img/drones.png', 'img/googly.jpg', 'img/inspirational.jpg', 'img/keyboard.png', 'img/mountains.jpg'];
    $imageDescription = ['', 'How to program a fleet of Drones', 'When your food stares back', 'A daily dose of inspiration', 'Please call IT if your phone isn\'t working', 'Protesting Mountain Dew'];
    $fonts = ['', 'roboto', 'courier', 'palatino'];
    $color = ['', 'brown', 'yellow', 'purple', 'cyan'];

    // Determine if an image will show
    if (isset($_GET['image'])) {
        $image = $_GET['image'];
    }

    // Determine if the background color will change
    if (isset ($_GET['background'])) {
        if ($_GET['background'] == 'blue' || $_GET['background'] == 'green' || $_GET['background'] == 'red' ) {
        $background = $_GET['background'];
    } else {
        $background = NULL;
    }}

    // Header/Footer Colors
    if (isset ($_GET['nav'])) {
        switch ($_GET['nav']) {
            case 'black':
                $bg = ['#000000', '#ffffff'];
                break;
            case 'white':
                $bg = ['#ffffff', '#000000'];
                break;
            default:
                $bg = NULL;
        }
    }

    // Choose a font class for the return link
    if (isset($_GET['font'])) {
        if (is_numeric($_GET['font']) && $_GET['font'] >= 0 && $_GET['font'] <4) {
        $font = ' ' . $fonts[$_GET['font']];
    } else {
        $font = '';
    }} else {
        $font = '';
    }

    // Determine if box is set
    if (isset ($_GET['box'])) {
        $rightBox = $_GET['box'];
    }

    // Applying colors to the box
    if (isset($rightBox)) {
        if ($rightBox == 'green' || $rightBox == 'blue' || $rightBox == 'red') {
        $box = " " . $rightBox;
        $boxText = "This box's color theme is " . ucwords($rightBox) . ".";
        } else {
            $box = '';
            $boxText ='No valid color was chosen for this box.';
    }} else {
        $box = '';
        $boxText ='No value was chosen for this box.';
    }

    // Header/Footer Colors set
    if (isset($bg)) {
        $headfoot = "header, footer {background: " . $bg[0] . "; color: " . $bg[1] . ";}";
    }
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
    <style>
    <?php 
    // Change the colors of the header and footer
    if (isset($headfoot)) {
    echo $headfoot;
    }
    ?>
    </style>
    <title>Project 2 - Page 2</title>
</head>
<body class="<?php if (isset($background)) {echo $background;} ?>"> 
<!-- Show the header -->
<?php echo $header; ?>

<!-- Display an image if they chose to -->
<div class="eemage">
<?php if (isset($image) && $image > 0 && $image <= 5) /*Do I need an isset? Might throw an error*/{
    echo "<img src=\"" . $imageList[$image] . "\" alt=\"" . $imageDescription[$image] . "\" title=\"" . $imageDescription[$image] . "\">";
} ?>
</div>

<!-- Box appearing on the right side of the screen -->
<aside class="rightBox<?php  echo $box;?>">
    <p><?php echo $boxText; ?></p>
</aside>

<?php if (isset($_GET['wonky']) && $_GET['wonky'] == "donkey") {
    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/SDeQT9zCvi4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
} ?>

<?php  if (isset($_GET['instructions']) && $_GET['instructions'] == 'none') {

} else {
    echo '<div class="instructions' . $font. '">To review the instructions, please click <a href="page1.php">here.</a></div>';
}
?>
<!-- Show the footer -->
<?php echo $footer; ?>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>