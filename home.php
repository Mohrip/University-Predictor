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
    		<li class="nav-item active">
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
			<li class="nav-item">
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
		<i class="fa fa-quote-left"></i><p>Research shows that there is only half as much variation in 
			student achievement between schools as there is among classrooms in the 
			same school. If you want your child to get the best education possible, 
			it is actually more important to get him assigned to a great teacher than to a great school. <br/> </p>
		<br> </br> 
	<div>
	<h2><strong>Availble Universities:</strong></h2> 
	<p><b><a href="http://www.cgijeddah.com/listofuniversity.pdf">List of Saudi Arabia Universities </a></b></p>
	</div>
	</div>


	<div class="background">
		<h2><strong>University Predictor:</strong></h2><br>
		 <form method="post" action="home.php">
			<div id="center">
				<input class="ip" type="text" name="التحصيلي" placeholder="نسبة التحصيلي" required><br><br>
				<input class="ip" type="text" name="القدرات" placeholder="نسبة القدرات" required><br><br>
				<input class="ip" type="text" name="المدرسة" placeholder="نسبة المدرسة" required><br><br>
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
					$المدرسة = test_input($_POST['المدرسة']);
				

					echo "<div class='background'>";
					echo "<h2><strong>Predicted universities:</strong></h2>";
					if($التحصيلي<60 or $القدرات<60)
						echo "Colleges won't accept your application";

						else if($القدرات>100)
						echo"<font color='red'> Wrong Input!!! <br>
					the input must be less than or equal 100 </font>";
					else 
					{
						$avg = (($التحصيلي*0.40) + ($القدرات*0.30) + ($المدرسة*0.30));
						if($avg>80)
							echo "According to your grades, you are eligible to apply for:<br> 1-King Saud University<br>
							      2-Imam Mohammad Ibn Saud Islamic University<br>
								  3-King Saud bin Abdulaziz University for Health Sciences<br>
								  4-prince sattam bin abdulaziz university<br>
								  5-Dar Al Uloom University<br>
						          6-Riyadh Elm University<br>";

						else if($avg>0 and $avg<80)
						echo "According to your grades, you are eligible to apply for:<br> 
						1-Imam Mohammad Ibn Saud Islamic University<br>
						2-prince sattam bin abdulaziz university
						3-Dar Al Uloom University
						4-Riyadh Elm University
						";
///

						} // line99
					
					  "</div>"; 
				}
			}
	?>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>    

