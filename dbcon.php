<?php

$server= 'localhost';
$user= 'root';
$password= '';
$db= 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);

if($con){
	?>
	<script>
		alert("connect successful");
	</script>
	<?php
}else{
	?>
	<script>
		alert("No connect successful");
	</script>
	<?php
}
?>