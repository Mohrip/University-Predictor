<link rel="stylesheet" href="Home.css">

<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Home.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 																			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="x-icon" href="ub.png">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>University Predictor</title>
</head>
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="home.php">
    	<img src="ub.png" width="30" height="30" class="d-inline-block align-top" alt=""> University Predictor
  		</a>
  <!-- Links -->
  		<ul class="navbar-nav ml-auto">
    		<li class="nav-item ">
      			<a class="nav-link" href="home.php">Home</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="practice.php">About Us</a>
    		</li>
			<!-- from here we will build the cfy page: 
	<div class="background">
	<h1> CFY calc </h1> </div>
	<a href="cfy.php">cfy page</a> 
///////////////////// the end of cfy page -->
			<li class="nav-item active">
      			<a class="nav-link" href="cfy.php">CFY</a>

				
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="login.php">Not <?php
      			if(isset($_SESSION['username']))
      				{
      					echo $_SESSION['username'];
      				}
      			?>? Logout</a>
    		</li>
  		</ul>
	</nav>
	
	


	<div class="background">
		<h2><strong>Common First Year(CFY) calculator :</strong></h2><br>
		 <form method="post" action="CFY.php">
			<div id="center">
				<input class="ip" type="text" name="التحصيلي" placeholder="نسبة التحصيلي"  required><br><br>
				<input class="ip" type="text" name="القدرات" placeholder="نسبة القدرات"  required><br><br>
				<input class="ip" type="text" name="GPA" placeholder="PREP Year GPA" required><br><br>
				<input class="button" type="submit" name="submit" value="SUBMIT">
			</div>
		</form>
				</div> 
	  <?php 
		function test_input($data)
			{
				$data=trim($data);
				$data=stripcslashes($data);
				$data=htmlspecialchars($data);
				return $data;
			}

			if(isset($_POST['submit']))
			{
				$username=$password="";
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					$التحصيلي = test_input($_POST['التحصيلي']);
					$القدرات = test_input($_POST['القدرات']);
					$GPA = test_input($_POST['GPA']);
				

					echo "<div class='background'>";
					echo "<h2><strong>Predicted Majors:</strong></h2>";
					if($التحصيلي>100 or $القدرات>100)
					echo"<font color='red'> Wrong Input!!! <br>
					the input must be less than or equal 100 </font>";

					else if($القدرات>100)
					echo"<font color='red'> Wrong Input!!! <br>
					the input must be less than or equal 100 </font>";
						
					else
					{
						$avg = (($التحصيلي*0.25) + ($القدرات*0.25) + (($GPA*20)*(0.50)));
						if($avg>=95)
						echo "According to your grades, you are eligible to apply for:<br>
						1-Software Engineering<br>
						2-Computer Scince <br>
						3-Information System<br>
						4-Computer Engineering<br>
						5-Dentist college <br>
						6-College of medicine <br>
						7-college of pharmacy<br>
						8-College of Engineering (General)<br>
						9-Architecture and Building Sciences<br>
						10-Urban Planning<br>
								 ";

						else if($avg>0 and $avg<95)
						echo "According to your grades, you are eligible to apply for:<br> 
						1-Computer Scince <br>
						2-Information System<br>
						3-Computer Engineering<br>
						4-Dentist college <br>
						5-College of medicine <br>
						6-college of pharmacy<br>
						7-College of Engineering (General)<br>
						8-Architecture and Building Sciences<br>
						9-Urban Planning<br>
						";

						}
					
					  "</div>"; 
				}
			}
	?>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>