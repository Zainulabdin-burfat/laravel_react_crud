<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Show Data</title>
</head>
<body>
<center>
	<h1>Hidaya Trust</h1>
	<hr />
	<p>HIST is a division of Hidaya Trust (www.hidayatrust.org). The mission of Hidaya Trust is to implement educational, environmental, social welfare, and health care programs in Pakistan, with focus on projects which promote self-employment. Hidaya Trust partners with Hidaya Foundation (www.hidaya.org), whose mission is to implement educational, environmental, social welfare, and health care programs in economically depressed areas of South Asia, West Africa and North America, with focus on projects which promote self-employment</p>
	<hr />
	<?php echo $id; ?>
	<hr />
	<?php echo $name; ?>
	<hr />
	<pre>
		<?php print_r($interns); ?>
	</pre>
	<hr />
</center>
</body>
</html>