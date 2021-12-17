<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		img {max-width: 100px;}
	</style>
</head>
<body>

<?php
$name = "Nathan";
$age = 39;
$photo = "me.jpg";

$bLoggedIn = true;

if ($bLoggedIn)
{
	?>
	<div class="profilecard">
		<img src="imgs/<?=$photo?>" />
		<h1><?=$name?></h1>
		<p>Age: <?=$age?></p>
	</div>
	<?php
} else {
	?>
	<div class="login">
		<form>
			<div class="fieldset">
				<label>Email</label>
				<input type="text" />
			</div>
			<div class="fieldset">
				<label>Password</label>
				<input type="password" />
			</div>
		</form>
	</div>
	<?php
}
?>





</body>
</html>