<?
include_once 'includes/header.php';
include_once 'settings/db.php';


?>



<div class="middle">
		<div class="container">
			<div class="content">

				<h3>Каталог статей</h3><br>
                <?php
                    $select = mysqli_query($CONNECT, "SELECT * FROM news");

                    while($result = mysqli_fetch_array($select)) {
                        echo '<div class="caption"><div class="article">';
                        echo $result['caption'];
                        echo '</div><br><br>';
                        echo $result['article'];
                        echo '</div><br>';
                    }

                ?>

			</div>
		</div>

<?php
    include_once 'includes/sidebar.php';
    include_once 'includes/footer.php';
    ?>





