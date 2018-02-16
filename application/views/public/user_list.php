<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Account List</title>
</head>
<body>
	<table>
	<?php

		foreach($users as $user):
	?>
		<tr>
			<td><?=$user['fname']?></td>
			<td><?=$user['lname']?></td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>