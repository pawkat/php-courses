<?php
/**
 * Created by PhpStorm.
 * User: pawkat
 * Date: 2019-03-24
 * Time: 12:38
 */


?>
<?php
include '../configs/config.php';
$id = $_GET['id'];
$sql_query = "SELECT * FROM images where id = $id;";
$data = mysqli_query($mysqli, $sql_query);
$image = mysqli_fetch_array($data);
$title = $image['name'] ? $image['name'] : $image['url'];
include './header.php';








$views = (int)($image['views']);
$views_upd = $views + 1;
$sql_update_query = "UPDATE images SET views = $views_upd where id = $id;";
mysqli_query($mysqli, $sql_update_query);

$src = '../img/'.$image['url'];
?>

<img src="../img/<?php echo $src ?>" alt="" style="width: 100%"/>
<h2>Views: <?= $views_upd;?></h2>

<?php include 'footer.php' ?>
