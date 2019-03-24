<?php
/**
 * Created by PhpStorm.
 * User: pawkat
 * Date: 2019-03-24
 * Time: 12:38
 */


$title = 'Geekbrains PHP Courses';
?>
<?php require 'templates/header.php'?>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>--><?php //echo $title ?><!--</title>-->
<!--    <link rel="shortcut icon" href="--><?php //echo $favicon ?><!--">-->
<!--</head>-->
<!--<body>-->
<!--    <h1>--><?php //echo $title ?><!--</h1>-->
<!--    <hr/>-->
<!--    --><?php //require 'lesson_4.php'?>

<?php
    $lessons_arr = array('lesson_4');
    foreach ($lessons_arr as $item) {
        echo "<a href='$item.php'>$item</a> <br/>";
    }
?>


<?php require 'templates/footer.php'?>



