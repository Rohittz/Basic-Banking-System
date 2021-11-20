<!DOCTYPE html>
<html lang="en">
<head>
<title>Spark Bank</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    
	
	<!-- css files -->
    <link href="css/css_slider.css" rel="stylesheet"><!-- Slider css -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Niramit:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<style>
	.service{
		
		margin-left:10px;
		margin-right:10px;
		max-width: 30.333333%;
		
	}
	.service:hover{
		border:2px solid black;
		border-radius: 20px;
	}
	.custom1{
		justify-content: space-evenly;
	}
	footer{
		color:white;
		text-align:center;
	}
	@media (max-width: 768px){
		.service{
			max-width: 95%;
		}
		.row {
    flex-direction: column;
		}
	}
</style>


<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href=""><span class="fa fa-university"></span> Spark Bank </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="index.html">Home</a></li>
				<li class=""><a href="">About</a></li>
				<li class=""><a href="">Services</a></li>
				
				
				
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>

<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="banner-text-w3pvt">
				<!-- banner slider-->
				<div class="csslider infinity" id="slider1">
					
					
							<div class="w3ls_banner_txt">
								<h2 class="b-w3ltxt text-capitalize mt-md-4">Spark <span>Bank</span> </h2>
								<h4 class="b-w3ltxt text-capitalize">Money Transfer made easy</h4>
								<p class="w3ls_pvt-title my-3">With Spark Bank's Advanced Money Tranfer System all you money Transfers becomes easy.<br>

									Apart from Joke this Money Transfer Website is made By Rohit Shinde as a task for The Spark Foundation.
								</p>
								
							</div>
						
					
					
				</div>
				<!-- //banner slider-->
			</div>
		</div>
	</div>
</div>

<script>
	

	
	function customer() {
		window.location.href = "customer.php";}
	function transfer() {
		window.location.href = "transfer.php";}
	function transaction() {
		var pass = prompt("Please provide the password to view all transaction deatils.");
    if (pass == "spark") {
      window.location.href = "transaction.php";
      
    }}
	
</script>

<section class="banner-bottom pt-5">
	
	<div class="container">
		<div class="row bottom_grids text-center mt-lg-5 mt-sm-3 ">
		<div class="col-md-4 grid3 mb-5 service" style="cursor: pointer;" onclick="customer()">
				<img src="images/22904106.jpg" alt="" class="img-fluid">
				<h3 class="my-3">All Customers</h3>
				<p class=""> View a list of all the customers in the bank with there info.</p>
			</div>
			<div class="col-md-4 grid1 mb-5 service" style="cursor: pointer;" onclick="transfer()">
				<img src="images/a2.png" alt="" class="img-fluid">
				<h3 class="my-3">Money Transfer</h3>
				<p class="">Transfer Money From one Account to other within the bank.</p>
			</div>
			<div class="col-md-4 grid2 mb-5 service" style="cursor: pointer;" onclick="transaction()">
				<img src="images/a1.png" alt="" class="img-fluid" >
				<h3 class="my-3">See all Transaction</h3>
				<p class=""> View all Transaction that has happened in the bank (This action needs a password)</p>
			</div>
			
		</div>
	</div>
</section>
<footer>&copy; Made By Rohit Shinde</footer>
