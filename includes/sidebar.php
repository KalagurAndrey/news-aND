<div class="right-sidebar">
    <br><br><br><br>  <h3> Посты недели:</h3><br>
    <?php
    $select = mysqli_query($CONNECT, "SELECT * FROM news WHERE date > NOW() - INTERVAL 7 DAY ORDER BY views DESC LIMIT 10 ");

    while($result = mysqli_fetch_array($select)) {
        echo '<div class="top-ten">';
        echo $result['caption'];
        echo '</div><br>';
   ;
    }

    ?>
</div>

</div>

</div>