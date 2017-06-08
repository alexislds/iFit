<?php 

if($_SESSION['id_usuario']){
	header("location:./menu");
}

else {
	header("location:./conta");
}

?>

<section class="home"></section>
