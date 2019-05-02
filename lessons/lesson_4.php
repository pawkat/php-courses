<?php
/**
 * Created by PhpStorm.
 * User: pawkat
 * Date: 2019-04-01
 * Time: 14:26
 */




$title = 'Lesson 4'
?>
<?php include '../templates/header.php' ?>
    <h2 style="color: red;"><?php echo 'Homework'; ?></h2>



    <?php
        $file_name = 'uploaded_img';
        $path = '../img/';
        $min_path = '../img/min/';
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div><input type="file" name="<?php echo $file_name;?>"></div>
       <div> <input type="submit" value="Submit"></div>
    </form>
    <?php

    if ($_FILES){
      $name = $_FILES['uploaded_img>']['name'];
      $type = $_FILES['uploaded_img>']['type'];

      if ($type == 'image/jpeg' || $type == 'image/png'){
        $target = $path.$name;
        move_uploaded_file( $_FILES['uploaded_img>']['tmp_name'], $target);
        copy($target, $min_path.$name);
      }
    }


    $dir = scandir($path);
    $images = array_filter($dir, function ($el){
        if (strpos($el, '.jpg')){
            return $el;
        }
    });

    foreach ($images as $image) {
        $src = '../img/min/'.$image;
        ?>
        <a href='../templates/image.php?img=<?= $image; ?>' style="display:inline-block; width: 24%;">
            <img src='<?php echo $src;?>' alt="" style="width: 100%"/>
        </a>
      <?php
    }

    ?>


<?php include '../templates/footer.php' ?>