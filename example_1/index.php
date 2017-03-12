<!doctype html>
<html>
	<head></head>
	<body>
		<?php $nums = [1,2,3]; ?>
		<ul>
		<?php foreach ($nums as $num) { ?>
			<li>nr <?= $num ?></li>
		<?php } ?>
		</ul>
	</body>
</html>
