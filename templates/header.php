<?php
/**
 * Created by PhpStorm.
 * User: pawkat
 * Date: 2019-03-24
 * Time: 13:06
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$favicon = 'assets/favicon.ico';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php  if (isset($title)){ echo $title; } else { echo 'Lessons';} ?></title>
    <link rel="shortcut icon" href="<?php echo $favicon ?>">
</head>
<body>
<?php if (isset($title)) :?>
<h1><?php echo $title ?></h1>
<hr/>
<?php endif; ?>



