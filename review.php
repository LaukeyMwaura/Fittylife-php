

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="../css/review.css">
	<title>User Reviews</title>
	
</head>
<body>
	<div class="wrapper">
		   
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
		
			<div class="single-item">
				<p>Email:</p>
				<br><br><br>	
				<p>Comments:</p>
				<br><br><br>	
				<p>
		</div>
	</div>
</body>
</html>