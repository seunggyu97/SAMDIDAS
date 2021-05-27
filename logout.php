<?php
	session_start();
	unset($_SESSION["user_id"]);
	unset($_SESSION["user_nickname"]);

	echo("
		<script>
			location.href = 'index.php';
		</script>
	");
?>