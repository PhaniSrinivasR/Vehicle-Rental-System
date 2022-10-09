<head>
<style>
ul {
	
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
  }
  
  li {
	float: center;
  }
  
  li a {
	display: block;
	padding: 8px;
	background-color: #dddddd;
  }
  </style>
</style>
</head>

<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo">C&B RENTALS</h1>
				<a href="#" class="hamburger">humburger</a>
				<nav >
				
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<!-- remove nav for button -->
					<nav>
					<ul>
					<li><a href="account.php" style="color:red" >Client Login </a>&nbsp;</li>
					<li><a href="Saccount.php" style="color:red">Subscriber Login </a>&nbsp;</li>
					<!-- <a href="login.php">Admin Login</a> -->
					</ul>
					</nav>
					
					<?php
						} else{
					?>		
					<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<!-- <li><a href="message_admin.php">Message Admin</a></li> -->
								<li><a href="admin/logout.php" >Logout</a></li>
							</ul>

					
					<?php
						}
					?>
				</nav>
				<nav>
				<ul >
						<!-- <li><a href="index.php">Home</a></li> -->
						<li><a href="index2.php">Rent Cars</a></li>
						<li><a href="index1.php">Rent Bikes</a></li>
						<li><a href="#">About</a></li>
					</ul>

				</nav>

			</div>
		</header>
		