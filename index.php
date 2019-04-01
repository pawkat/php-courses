<?php
/**
 * Created by PhpStorm.
 * User: pawkat
 * Date: 2019-03-24
 * Time: 12:38
 */

$title = 'Geekbrains PHP Courses';
?>
<?php require 'templates/header.php' ?>


<?php
$lessons_arr = array('lesson_3', 'lesson_4');
foreach ($lessons_arr as $item) {
    echo "<a href='$item.php'>$item</a> <br/>";
}
?>


<?php require 'templates/footer.php' ?>



