<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Show Data</title>
</head>
<body>
	<center>
		<h1><?php echo $name; ?></h1>
		<hr />
		<h1><?php echo $id; ?></h1>
		<hr/>
		<table border="2">
			<tr>
				<th>Id</th>
				<th>Name</th>
			</tr>
			<?php 
			foreach($interns as $intern){
				?>
				<tr>
					<td><?php echo $intern['id']; ?></td>
					<td><?php echo $intern['name']; ?></td>

				</tr>

				<?php
			}

			?>
		</table>
		<hr />
		<table border="2">
			<tr>
				<th>Id</th>
				<th>Name</th>
			</tr>
			<?php 
			foreach($peoples as $people){
				?>
				<tr>
					<td><?php echo $people['id']; ?></td>
					<td><?php echo $people['name']; ?></td>

				</tr>

				<?php
			}

			?>
		</table>
		
	</center>

</body>
</html>