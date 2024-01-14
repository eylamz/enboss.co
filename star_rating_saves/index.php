
<!DOCTYPE html>
<html>
<head>
	<title>Star Rating System</title>
	<meta charset="utf-8" />

</head>
<body>
	<?php foreach ( $allRatings as $key => $rating ) : ?>
		<h1><?php echo $rating['name']; ?></h1>
		<div id="star_rating<?php echo $key; ?>"></div>
	<?php endforeach; ?>
</body>
</html>
