<!DOCTYPE html>
<html lang="en">
<head>
	<title>La Casa </title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">

	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
</head>
<body>

	<section class="hero">
		<header>
			<div class="wrapper">
				<a href="profileactive.php"><img src="../img/logo.png" class="logo" alt="" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="buy.php">Buy</a></li>
						<li><a href="rent.php">Rent</a></li>
						<li><a href="sell.php">Sell</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="messages.php">Messages :<?php
                               include "db.php";
                               $resultat=$mysqli->query("select count(*) as nb from replymessages where road=0");
                               $donnees = mysqli_fetch_assoc($resultat);
                               echo $donnees['nb'];
                               ?></a></li>
						<li><a href="PersonnelInfos.php"><?php session_start(); echo $_SESSION['first_name']." ".$_SESSION['last_name'] ?> </a></li>					
					</ul>

					
					<a href="../index.html" class="login_btn">Log out</a>
				</nav>
			</div>
		</header><!--  end header section  -->

			<section class="caption">
				<h2 class="caption">Find You Dream House</h2>
				<h3 class="properties">Financial- Location- Structure</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="search">
		<div class="wrapper">
			<form action="#" method="post">
				<input type="text" id="search" name="search" placeholder="What are you looking for?"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

		<div class="advanced_search">
			<div class="wrapper">
				<span class="arrow"></span>
				<form action="#" method="post">
					<div class="search_fields">
						<input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Check In Date"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date"  autocomplete="off">
					</div>
					<div class="search_fields">
						<input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="max_price" name="max_price" placeholder="Max. price"  autocomplete="off">
					</div>
					<input type="text" id="keywords" name="keywords" placeholder="Keywords"  autocomplete="off">
					<input type="submit" id="submit_search" name="submit_search"/>
				</form>
			</div>
		</div><!--  end advanced search section  -->
	</section><!--  end search section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<li>
					<a href="about.php?image=property_1.jpg">
						<img src="../img/property_1.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">$2500</span>
					<div class="property_details">
						
						<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<li>
					<a href="about.php?image=property_2.jpg">
						<img src="../img/property_2.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">$1000</span>
					<div class="property_details">
						
						<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<li>
					<a href="about.php?image=property_3.jpg">
						<img src="../img/property_3.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">$500</span>
					<div class="property_details">
						
						<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<li>
					<a href="">
						<img src="../img/555.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">$2500</span>
					<div class="property_details">
						<h1>
							<a href="#">Fuisque dictum tortor at purus libero</a>
						</h1>
						<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="../img/4.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">$1000</span>
					<div class="property_details">
						<h1>
							<a href="#">Fuisque dictum tortor at purus libero</a>
						</h1>
						<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="../img/property_2.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">$500</span>
					<div class="property_details">
						<h1>
							<a href="#">Fuisque dictum tortor at purus libero</a>
						</h1>
						<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>

				
				<li>
					<a href="#">
						<img src="../img/6.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">$2500</span>
					<div class="property_details">
						<h1>
							<a href="#">Fuisque dictum tortor at purus libero</a>
						</h1>
						<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>

				<li>
					<a href="#">
						<img src="../img/7.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">$2500</span>
					<div class="property_details">
						<h1>
							<a href="#">Fuisque dictum tortor at purus libero</a>
						</h1>
						<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="../img/8.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">$2500</span>
					<div class="property_details">
						<h1>
							<a href="#">Fuisque dictum tortor at purus libero</a>
						</h1>
						<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
			</ul>
			<div class="more_listing">
				<a href="#" class="more_listing_btn">View More Listings</a>
			</div>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li><a href="">About</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="hahha">Policy</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">Appartements</a></li>
						<li><a href="#">Houses</a></li>
						<li><a href="#">Villas</a></li>
						<li><a href="#">Mansions</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">New York</a></li>
						<li><a href="#">Los Anglos</a></li>
						<li><a href="#">Miami</a></li>
						<li><a href="#">Washington</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="about">
					<p>Do you want or need to sell quickly without all the hassles? Or, do you want to avoid listing your house with a real estate agent? We may be able to help.</p>
					<ul>
						<li><a href="http://facebook.com/pixelhint" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/pixelhint" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+Pixelhint" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright © 2017 <a href="http://pixelhint.com" target="_blank" class="ph_link" title="Download more free Templates">AmirBenSalem.com</a>. All Rights Reserved.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>