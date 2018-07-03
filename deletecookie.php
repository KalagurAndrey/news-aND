<?php
    if(isset($_POST['deletecookie']))
        setcookie('Andrey', '123', time()-259200,'/');
?>