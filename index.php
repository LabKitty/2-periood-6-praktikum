<?php require("validation.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>2. periood 6. praktikum</title>
	<style>
		.form_field{
			margin-top:10px;
		}
		.form_message{
			font-weight:bold;
		}
	</style>
</head>
<body>
	<form action="index.php" method="post">
		<div class="form_field">
			<div class="form_message">
				<?php if ($isSubmitted){
					echo $usernameMessage;
				}
				?>
			</div>
		<span>Kasutajanimi:</span>
			<input type="text" name="username">
		</div>
		<div class="form_field">
			<input type="submit" name="submit" value="Saada">
		</div>
	</form>
	<pre><?php print_r($_POST); ?></pre>
</body>
</html>