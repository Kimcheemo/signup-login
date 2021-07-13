<?php
 include_once 'header.php';
?>

<?php

	if(isset($_SESSION["useruid"])){
		echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
		echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
	}

?>

<section class="home">
<?php
	if(isset($_SESSION["useruid"])){
		echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
	}
?>
				
	<p>blahblahblah</P>
</section>


</body>
</html>
