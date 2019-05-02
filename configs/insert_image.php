<?php
include './config.php';

$file_name = 'uploaded_img';
$path = '../img/';
$min_path = '../img/min/';

if ($_FILES) {
//  print_r($_FILES);
  $img_name = $_POST['name'];
  $img_size = $_FILES[$file_name]['size'];
  $img_views = 0;



  $name = $_FILES[$file_name]['name'];
  $type = $_FILES[$file_name]['type'];


  if ($type == 'image/jpeg' || $type == 'image/png') {
    $target = $path . $name;
    move_uploaded_file($_FILES[$file_name]['tmp_name'], $target);
    copy($target, $min_path . $name);

    $values = "'$img_name','$name',$img_size,$img_views";
    $sql_insert_query = "INSERT INTO images(name,url,size,views) VALUES($values);";
    mysqli_query($mysqli, $sql_insert_query);
  }
}
  header("Location: ../lessons/lesson_5.php");
