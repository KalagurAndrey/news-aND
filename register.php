<?
    include_once 'includes/header.php';
    include_once 'settings/db.php';

    if(isset($_POST['enter'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $r_password = $_POST['r_password'];
        if($password == $r_password) {
            $query = mysqli_query($CONNECT,"INSERT INTO users(id ,login, password) VALUES('', '$login', '$password')") or die('Ошибка параметра');
        } else {
            die('Пароли не совпадают');
        }
    }


?>

<div class="middle">
    <div class="container">
        <div class="content">

            <h3>Регистрация</h3>

            <form method="post" action="register.php">
                <input type="text" name="login" placeholder="Логин" required><br>
                <input type="text" name="password" placeholder="Пароль" required><br>
                <input type="text" name="r_password" placeholder="Повторите пароль" required><br>
                <input type="submit" name="enter" value="Зарегистрироваться" required><br><br>
            </form>



        </div>
    </div>

    <?php
    include_once 'includes/sidebar.php';
    include_once 'includes/footer.php';
    ?>



