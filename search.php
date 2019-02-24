<!DOCTYPE html>

<html>

	<head>

		<title> Search Page</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>


	<body onload="ld()">

		<script>
			function ld()
			{
				document.search_box.search.focus();
			}
		</script>

		<style>
			body
			{
				margin: 5%;
			}
		</style>

		<form name="search_box" action="result.php" method="get" >
			<center>
				<img src="img/search.jpg" class="img-responsive" alt="Search" >
				<input type="text" class="form-control" name="search" style="width: 60%; margin-top: 10px">
				<input type="submit" class="btn btn-outlone-primary" value="Search Now" name="search_button" style="margin-top: 20px">
			</center>
		</form>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	</body>

</html>