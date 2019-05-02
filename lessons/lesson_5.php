<?php
/**
 * Created by PhpStorm.
 * User: pawkat
 * Date: 2019-04-01
 * Time: 14:26
 */


$title = 'Lesson 5'
?>
<?php include '../templates/header.php' ?>

<?php
include '../configs/config.php';

$sql_query = "select * from cars ORDER BY name;";
$data_cars = mysqli_query($mysqli, $sql_query);

?>
    <table cellpadding="4" cellspacing="1" border="1">
        <tr>
            <td>Name</td>
            <td>Price</td>
            <td>Color</td>
        </tr>
      <?php while ($author = mysqli_fetch_array($data_cars)) : ?>
          <tr>
              <td><?php echo $author['name']; ?></td>
              <td><?php echo $author['price']; ?></td>
              <td><?php echo $author['color']; ?></td>
          </tr>
      <?php endwhile; ?>
    </table>
<?php

?>

    <h2 style="color: red;"><?php echo 'Homework'; ?></h2>

<?php
$file_name = 'uploaded_img';
$path = '../img/';
$min_path = '../img/min/';
?>
    <form action="../configs/insert_image.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="file" name="<?php echo $file_name;?>">
        </div>
        <div>
            <label class="form__row">
                <span>Name</span>
                <input type="text" name="name">
            </label>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
<?php



$sql_query = "SELECT * FROM images ORDER BY `views` DESC;";
$data_images = mysqli_query($mysqli, $sql_query);
while ($image = mysqli_fetch_array($data_images)) :
  $src = '../img/min/'.$image['url'];
  ?>
    <a href='../templates/image.php?id=<?= $image['id']; ?>' style="display:inline-block; width: 24%;">
        <img src='<?php echo $src;?>' alt="" style="width: 100%"/>
    </a>
  <?php
endwhile;


mysqli_close($mysqli);
?>


<?php include '../templates/footer.php' ?>