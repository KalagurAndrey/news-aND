<?


    include_once 'includes/header.php';
    include_once 'settings/db.php';



    if(isset($_POST['enter'])) {

        $login = strip_tags($_POST['login']); // Удаляем html теги
        $login = str_replace(' ','',$login); // Удаляем различные пробелы


        $email = strip_tags($_POST['email']);
        $email = str_replace(' ', '', $email);

        $r_email = strip_tags($_POST['r_email']);
        $r_email = str_replace(' ', '', $r_email);


        $password = strip_tags($_POST['password']);
        $r_password = strip_tags($_POST['r_password']);

        $date = date("Y-m-d");

        if($email == $r_email) {

           if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $email = filter_var($email, FILTER_VALIDATE_EMAIL);

                $email_check = mysqli_query($CONNECT, "SELECT email FROM users WHERE email = '$email'");
                $num_rows = mysqli_num_rows($email_check);

                if($num_rows > 0) {

                    echo "Данный email уже занят<br>";

                }

           } else {

            echo "Неправильный формат email<br>";
        }
    } else {
            echo 'Email не совпадает<br>';
        }

        if(strlen($login) > 20  || strlen($login) < 3) {

            echo "Логин должен иметь не более 20 и не менее 3 символов<br>";

        }

        if($password != $r_password) {

            echo "Пароли не совпадают";

        } else {
            if(preg_match('/[^A-Za-z-0-9]/', $password)) {

                echo "Пароль дожен содержать только символы латинницы и цифры<br>";

            }
        }

        if(strlen($password) > 20 || strlen($password) < 5) {

            echo "Пароль должен содержать не более 20 и не менее 5 символов<br>";

        } else {
            echo "Вы успешно зарегистрировались";
            $insert_users = mysqli_query($CONNECT, "INSERT INTO users VALUES ('', '$email', '$login', '$password', NOW(), 0)");
        }
    }
?>

<div class="middle">
    <div class="container">
        <div class="content">

            <h3>Регистрация</h3>

            <form method="post" action="register.php">
                <input type="text" name="login" placeholder="Логин" required><br>
                <input type="email" name="email" placeholder="E-mail" required><br>
                <input type="email" name="r_email" placeholder="Повторите E-mail" required><br>
                <input type="password" name="password" placeholder="Пароль" required><br>
                <input type="password" name="r_password" placeholder="Повторите пароль" required><br>
                <input type="submit" name="enter" value="Зарегистрироваться" required><br><br>
            </form>

        </div>
    </div>

    <?php
    include_once 'includes/sidebar.php';
    include_once 'includes/footer.php';
    ?>



