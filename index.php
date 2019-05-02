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
$dir = scandir('lessons');
$lessons_arr = array_filter($dir, function ($el){
    if (strpos($el, '.php')){
        return $el;
    }
});

foreach ($lessons_arr as $item) {
    echo "<a href='lessons/$item'>$item</a> <br/>";
}
?>


<?php require 'templates/footer.php' ?>



