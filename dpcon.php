<?php


$server="localhost";
$user="root";
$password="";
$db="signup";
$con=mysqli_connect($server,$user,$password,$db);
if ($con) {
	?>
	<script type="text/javascript">
		alert("connection Sucessful");
	</script>
    <?php

	}else{
		?>
	<script type="text/javascript">
		alert("connection not Sucessful");
	</script>
    <?php

	}


?>