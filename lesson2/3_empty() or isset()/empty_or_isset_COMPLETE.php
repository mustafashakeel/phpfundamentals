<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>empty() or isset()</title>
		<style>
			* {
				box-sizing:border-box;
			}
			body {
				font-family:verdana;
				background:rgba(211, 30, 233, 0.22);
			}
			h1 {
				text-align:center;
			}
			table {
				width:100%;
				background:lightgrey;
				border-collapse: collapse;
			}
			th {
				text-align:center;
				border:solid 2px white;
			}
			td {
				width:14.2%;
				text-align:center;
				border:solid 2px white;
			}
			td:first-child {
				font-weight:bold;
				background:white;
			}
			tr:first-child {
				background:white;
			}
			span {
				font-weight:normal;
				font-size:0.9rem;
			}

			.true {
				background:lime;
			}
			.false {
				background:red;
			}
		</style>
	</head>
	<body>
		<h1>Differences and Similarities Between empty() and isset()</h1>

		<?php
			function showEmpty($var) {
				if(!empty($var)) {
					echo "<td class='true'><p>TRUE</p></td>";
				}
				else {
					echo "<td class='false'><p>false</p></td>";
				}
			}

			function showIsSet($var) {
				if(isset($var)) {
					echo "<td class='true'><p>TRUE</p></td>";
				}
				else {
					echo "<td class='false'><p>false</p></td>";
				}
			}

			// Variables being tested
			$var1 = ""; 
			$var2 = NULL;
			$var3 = false;
			$var4 = 0;
			$var5 = array();
			$var6 = 1;
		?>

		<table>
			<tr>
				<td></td>
				<th><span>Empty string:</span><br> $var = ""</th>
				<th><span>NULL value:</span><br> $var = NULL</th>
				<th><span>False Boolean:</span><br> $var = false</th>
				<th><span>Number zero:</span><br> $var = 0</th>
				<th><span>Empty array:</span><br> $var = []</th>
				<th>var = 1</th>
			</tr>
			<tr>
				<td>!empty()<br><span>The variable is NOT empty</span></td>
				<?php showEmpty($var1) ?>
				<?php showEmpty($var2) ?>
				<?php showEmpty($var3) ?>
				<?php showEmpty($var4) ?>
				<?php showEmpty($var5) ?>
				<?php showEmpty($var6) ?>
			</tr>
			<tr>
				<td>isset()<br><span>The variable is set</span></td>
				<?php showIsSet($var1) ?>
				<?php showIsSet($var2) ?>
				<?php showIsSet($var3) ?>
				<?php showIsSet($var4) ?>
				<?php showIsSet($var5) ?>
				<?php showIsSet($var6) ?>
			</tr>

		</table>
		
	</body>

<html>