<?
include_once 'includes/header.php';
include_once 'settings/db.php';

?>

<div class="middle">
    <div class="container">
        <div class="content">

            <?php
                $id = $_GET['id'];

                $select = mysqli_query($CONNECT, "SELECT * FROM news WHERE id = $id");
                $result = mysqli_fetch_array($select);
                echo '<div class="art-art"><div class="art-capt">';
                echo $result['caption'];
                echo '</div><br>';
                echo $result['article'];
                echo '</div><br>Просмотров: ';
                echo $result['views'];
                echo '<br><br><a href="edit_art.php?id=';
                echo $id;
                echo '">Редактировать статью';


                $select_v = mysqli_query($CONNECT,"UPDATE news SET views = views + 1 WHERE id = $id");

            ?>



    </div>
</div>
    <?php
    include_once 'includes/sidebar.php';
    include_once 'includes/footer.php';
    ?>
