<!DOCTYPE html> 

<html>

	<head>

		<title> Result Found </title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<style>
			
			.result
			{
				margin-left:10%; margin-right:25%; margin-top:12px; 
			}

		</style>



	</head>

	<body>

		<div class="container-fluid">
			<form action="result.php" method="get">
				<div class="row" style="background: #f2f2f2" >
					<div class="col-sm-2">
						 <a href="search.php"><img src="img/search.jpg" height="70px" ></a>
					</div>

					<div class="col-sm-8" style="margin left: 15px ">
						<div class="input-group" style="margin-top: 10px">
							<input type="text" class="form-control" name="search">
							<span class="input-group-btn">
								<input class="btn btn-secondary" type="submit" name="search_button" value="Go!" >
						</div>
					</div>
				</div>


			</form>
		</div>


		<div class="result">
		<table>
			
			<tr>
				
				<?php

					$conn = mysqli_connect("localhost", "root", "");
					mysqli_select_db($conn, "search");

					if(isset($_GET['search_button']))
					{
						$search = $_GET['search'];

						if($search=="")
						{
							echo "<center> <b> Please write something in Search Box! </b> </center>";
							exit();
						}

						$sql = "select * from website where site_key like '%$search%' limit 0, 4";

						$rs = mysqli_query($conn, $sql);

						if(mysqli_num_rows($rs)<1)
						{
							echo "<center> <h4> <b> Oops!!! Sorry there is no resut found to related the work. </b> </h4> </center>";
							exit();
						}

						echo "<font size='+1' color='#9999ff'> Images for $search";

						while($row = mysqli_fetch_array($rs))
						{
							echo "<td>
									<table style='margin-top:10px'>
										<tr>
											<td>
												<a target='blank'  href='images.php? id=$search'> <img src='img/$row[5]' height=95px>
											</td>
										</tr>
									</table>
								</td>";
						}

					}

				?>

			</tr>

		</table>

		<?php

			echo "<a target='blank'  href='images.php? id=$search'> <font size='+1' color='#1a1aff'>More Images for $search </font> </a>";

			 echo "<hr>";

			$sql1 = "select * from website where site_key like '%$search%' ";

			$rs1 = mysqli_query($conn, $sql1);

			while($row1=mysqli_fetch_array($rs1))
			{
				echo "<a href='$row1[2]'> <font size='4' color='#0000cc'> <b>$row1[1]</b> </font> <br> </a>";
				echo "<font size='3' color='#006400'> $row1[2] </font> <br>";
				echo "<font size='3' color='#666666'> $row1[4] </font> <br><br>";
			}

		?>

	</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>

</html>