
<!DOCTYPE html>
<!-- Template by html.am -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>2 Column Layout &mdash; Left Menu with Header &amp; Footer</title>
		<link rel="stylesheet" href="stu_tab.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	
	<body>		
		

					

    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Winter Training Project</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            
      <li><a href="../user_profile.php">Profile</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
        <li><a href="../includes/logout.inc.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
    </div>
</nav>
		
		<div id="wrapper">
		
			<main>
				<div id="content">
					<div class="innertube">
						<h1>Heading</h1>
						
						
					</div>
				</div>
			</main>
			
			<nav id="nav">
				<div class="innertube">
					<h3>Left heading</h3>
					<ul>
						<!-- here goes php script for joined groups to be displayed -->
						<?php
							$sql="select group name "
						?>
					</ul>
					<input type="button" id ="add_grp" class="submit_btn" name ="submit" value="JOIN A GROUP" > 
					<div  id="popup" style="display: none;" class="popup" >
						<span id="close" class="close">&times;</span>
						<form action="../includes/grp_data_save.php" method="POST">
						<input type="text" name="grp_name" placeholder="Enter Group Code" id="grp_name" class="textfield" >
						<br><br>
						
						<input type="submit" name="submit" value="Join Group" class="submit_btn">
						</form>
						
					</div>	
					<script type="text/javascript">
						var btn =document.getElementById('add_grp');
						var popup=document.getElementById('popup');
						var close=document.getElementById('close');
						btn.onclick = function() {
						popup.style.display = "block";
						}
						
						close.onclick = function() {
						popup.style.display = "none";
						}
						
						
					</script>
				</div>
			</nav>
		
		</div>
		
		
	
	</body>
</html>
