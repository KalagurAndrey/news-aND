<?
include_once 'includes/header.php';
include_once 'settings/db.php';

    $id = $_GET['id'];
    $select = mysqli_query($CONNECT,"SELECT * FROM news WHERE id = $id");
    $result = mysqli_fetch_array($select);

    if(isset($_POST['edit'])) {
        $caption = $_POST['caption'];
        $article = $_POST['article'];
        $selectArt = mysqli_query($CONNECT, "UPDATE news SET caption = '$caption', article = '$article' WHERE id = '$id'");
    }
?>



<div class="middle">
    <div class="container">
        <div class="content">

            <h3>Редактирование статьи</h3>

            <form method="post" action="edit_art.php?id=<? echo $id;?>">
                <input type="text" name="caption" value="<? echo $result['caption']; ?>" placeholder="Заголовок статьи"><br>
                <textarea name="article" cols="80" rows="20"  placeholder="Статья"><? echo $result['article'];?></textarea>  <br>
                <input type="file" value="Фотокарточка"><br><br>
                <input type="submit" name="edit" value="Редактировать статью"><br><br>
            </form>



        </div>
    </div>

    <?php
    include_once 'includes/sidebar.php';
    include_once 'includes/footer.php';
    ?>

