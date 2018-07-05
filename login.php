<?
    session_start();
    include_once 'includes/header.php';
    include_once 'settings/db.php';
    $check = 0;
    if(isset($_POST['enter'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];



        $query = mysqli_query($CONNECT,"SELECT * FROM users WHERE login = $login");
        $user_data = mysqli_fetch_array($query);



            if ($user_data['password'] == $password) {

                $_SESSION['name'] = $user_data['id'];
                echo "Вы успешно авторизовались.";

            } else {
                echo "Неправильный логин или пароль";
            }

    }

            if(isset($_POST['logout'])) {
            unset($_SESSION['name']);
            session_destroy();
            }
    ?>


<div class="middle">
    <div class="container">
        <div class="content">
            <?php
            if(isset($_SESSION['name'])) {
                echo  '<h3>Привет!</h3><br>
                <form method="post" action="login.php">
                <input type="submit" name="logout" value="Выйти">
                </form> <br>
                <a href="add.php">Добавить статью</a>';
            } else {
                echo '<h3 > Авторизация</h3 >
            <form method = "post" action = "login.php" >
                <input type = "text" name = "login" placeholder = "Логин" maxlength = "10" pattern = "[A-Za-z-0-9]{3,10}"
                       title = "Не менее 3 и не более 10 латинских символов или цифр" required > <br >
                <input type = "password" name = "password" placeholder = "Пароль" maxlength = "15" pattern = "[A-Za-z-0-9]{3,15}"
                       title = "Не менее 6 и не более 15 латинских символов или цифр" required ><br >
                <input type = "submit" name = "enter" value = "Войти" ><br ><br >
            </form ><br >';

                    }
?>

           

        </div>
    </div>


    <?php
    include_once 'includes/sidebar.php';
    include_once 'includes/footer.php';
    ?>



