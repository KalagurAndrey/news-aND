<?
include_once 'includes/header.php';
include_once 'settings/db.php';


    if(isset($_POST['enter'])) {
    $caption = $_POST['caption'];
    $article = $_POST['article'];
        $query = mysqli_query($CONNECT,"INSERT INTO news(id ,caption, article, date) VALUES('', '$caption', '$article', NOW())") or die('Ошибка параметра');
        echo 'Запись успешно добавлена в БД';
    }


?>



<div class="middle">
    <div class="container">
        <div class="content">

            <h3>Добавление статьи</h3>

            <form method="post" enctype="multipart/form-data" action="add.php">
                <input type="text" name="caption" placeholder="Заголовок статьи"><br>
                <textarea name="article" id="textareas" maxlength="1000" cols="80" rows="20" placeholder="Статья"></textarea>  <br>
                <input type="file" name="src" value="Фотокарточка" ><br><br>
                <input type="submit" name="enter" value="Добавить новость"><br><br>
            </form>



        </div>
    </div>

    <?php
    include_once 'includes/sidebar.php';
    include_once 'includes/footer.php';
    ?>

