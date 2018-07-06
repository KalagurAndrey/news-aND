<?php
session_start();

if ($_SESSION['name'] == 0) {
    header('Location: index.php');
}
include_once 'includes/header.php';
include_once 'settings/db.php';

$dbpath = '';
$fileName = '';
$uploadName = '';

if (isset($_POST['enter'])) {
    $caption = $_POST['caption'];
    $article = $_POST['article'];

    if (!empty($_FILES)) {
        $photo = $_FILES['photo'];
        $name = $photo['name'];
        $nameArray = explode('.', $name);
        $fileName = $nameArray[0];
        $fileExt = $nameArray[1];
        $mime = explode('/', $photo['type']);
        $mimeType = $mime[0];
        $mimeExt = $mime[1];
        $tmpLoc = $photo['tmp_name'];
        $fileSize = $photo['size'];
        $allowed = array('png', 'jpg', 'jpeg', 'gif');
        $uploadName = $fileExt;
        $uploadPath = 'news/src/' . $fileName . '.' . $uploadName;
        $dbpath = 'src/' . $fileName . '.' . $uploadName;
        $name_file = $_FILES['photo']['name'];
        $tmp_name = $_FILES['photo']['tmp_name'];
        $local_image = "src/";
        move_uploaded_file($tmp_name, $local_image . $name_file);

        if ($mimeType != 'image') {
            echo 'Загружаемый файл должен быть изображением';
        }
        if (!in_array($fileExt, $allowed)) {
            echo 'Неправильный формат изображения';
        }
        if ($fileSize > 5000000) {
            echo 'Загружаемый файл больше 5мб';
        }
        if ($fileExt != $mimeExt && ($mimeExt == 'jpeg' && $fileExt != 'jpg')) {
            echo 'Расширение файла не соответсвует файлу';
        } else {

        }
        $query = mysqli_query($CONNECT,
            "INSERT INTO news(id ,caption, article, date, src) VALUES('', '$caption', '$article', NOW(), '$dbpath')") or die('Ошибка параметра');
        echo 'Запись успешно добавлена в БД';
    }
}
?>

    <div class="middle">
        <div class="container">
            <div class="content">
                <h3>Добавление статьи</h3>
                <form method="post" enctype="multipart/form-data" action="add.php">
                    <input type="text" name="caption" placeholder="Заголовок статьи"><br>
                    <textarea name="article" id="textareas" maxlength="1000" cols="80" rows="20"
                              placeholder="Статья"></textarea> <br>
                    <label for="userfile">Выберите изображение для загрузки:</label><br><br>
                    <input type="file" name="photo" value="Фотокарточка"><br><br>
                    <input type="submit" name="enter" value="Добавить новость"><br><br>
                </form>
            </div>
        </div>

<?php
include_once 'includes/sidebar.php';
include_once 'includes/footer.php';


