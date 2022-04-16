<!DOCTYPE html>
<html lang="en">

<?php
include_once("connection.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user list</title>
</head>
<body>
	<div class="container" style="margin-top:20px;">
		<table class="table">
			<thead>
				<tr>
					<th>first name</th>
					<th>last name</th>
					<th>Email</th>
					<th>password</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($res = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td class='bg-danger'>" . $res['first_name'] . "</td>";
					echo "<td>" . $res['last_name'] . "</td>";
					echo "<td>" . $res['user_email'] . "</td>";
					echo "<td>" . $res['user_pass'] . "</td>";
					echo "<td><a href=\"deleteuser.php?id=$res[id]\">Delete</a></td></tr>";
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>