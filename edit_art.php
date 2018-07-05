<?

session_start();


if($_SESSION['name'] == 0) {
    header('Location: index.php');
}

include_once 'includes/header.php';
include_once 'settings/db.php';

    $dbpath2 = '';
    $fileName2 = '';
    $uploadName2 = '';

    $id = $_GET['id'];
    $select = mysqli_query($CONNECT,"SELECT * FROM news WHERE id = $id");
    $result = mysqli_fetch_array($select);

        if(isset($_POST['edit'])) {
            $caption = $_POST['caption'];
            $article = $_POST['article'];

            if (isset($_FILES)) {
                $photo2 = $_FILES['photo'];
                $name2 = $photo2['name'];
                $nameArray2 = explode('.', $name2);
                $fileName2 = $nameArray2[0];
                $fileExt2 = $nameArray2[1];
                $mime2 = explode('/', $photo2['type']);
                $mimeType2 = $mime2[0];
                $mimeExt2 = $mime2[1];
                $tmpLoc2 = $photo2['tmp_name'];
                $fileSize2 = $photo2['size'];
                $allowed2 = array('png', 'jpg', 'jpeg', 'gif');
                $uploadName2 = $fileExt2;
                $uploadPath2 = 'news/src/'.$fileName2.'.'.$uploadName2;
                $dbpath2 = 'src/'.$fileName2.'.'.$uploadName2;
                $name_file2 = $_FILES['photo']['name'];
                $tmp_name2 = $_FILES['photo']['tmp_name'];
                $local_image2 = "src/";
                move_uploaded_file($tmp_name2, $local_image2.$name_file2);

                if ($mimeType2 != 'image') {
                    echo 'Загружаемый файл должен быть изображением';
                }
                if (!in_array($fileExt2, $allowed2)) {
                    echo 'Неправильный формат изображения';
                }
                if ($fileSize2 > 5000000) {
                    echo 'Загружаемый файл больше 5мб';
                }
                if ($fileExt2 != $mimeExt2 && ($mimeExt2 == 'jpeg' && $fileExt2 != 'jpg')) {
                    echo 'Расширение файла не соответсвует файлу';
                } else {

                }

                $selectArt2 = mysqli_query($CONNECT, "UPDATE news SET caption = '$caption', article = '$article', src = '$dbpath2' WHERE id = '$id'");
                echo "Запись успешно обновлена";
            }
        }
?>

<div class="middle">
    <div class="container">
        <div class="content">

            <h3>Редактирование статьи</h3>

            <form method="post" enctype="multipart/form-data" action="edit_art.php?id=<? echo $id;?>">
                <input type="text" name="caption" value="<? echo $result['caption']; ?>" placeholder="Заголовок статьи"><br>
                <textarea name="article" cols="80" rows="20"  placeholder="Статья"><? echo $result['article'];?></textarea>  <br>
                <input type="file" name="photo"><br><br>
                <input type="submit" name="edit" value="Редактировать статью"><br><br>
            </form>

        </div>
    </div>

    <?php
    include_once 'includes/sidebar.php';
    include_once 'includes/footer.php';
    ?>
