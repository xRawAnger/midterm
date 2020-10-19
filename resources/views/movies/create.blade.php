<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<form action="" method="POST">
			@csrf
			title
			<input type="text" class="form-control" name="title">
			IMDB
			<input type="text" class="form-control" name="IMDB">
			genre
			<input type="text" class="form-control" name="genre_id">
			picture_link
			<input type="text" class="form-control" name="pic_link">
			description
			<textarea name="description" class="form-control"></textarea>
			<button class="btn btn-primary">save</button>
		</form>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>