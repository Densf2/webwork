<!DOCTYPE html>

<?php

		if (false !== strpos($_SERVER['REQUEST_URI'], 'GuestBook')){

 		include "/indexView.php";
	}else{
	echo"Main Page";
	}
?>
</body>
</html>
