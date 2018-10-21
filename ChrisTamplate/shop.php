<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/foundation.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="shortcut icon" href="images/favicon.png" />
	<title>Shop</title>
</head>
<div class="grid-container">
	<header>
	<img src="images/favicon.png" alt="HeaderImage" id="imageHeader"/>
	</header>
	<nav class="menu">
		<ul id="nav">
		    <li id="nav-home"><a href="home.php">Accueil</a></li>
		    <li id="nav-News"><a href="News.php">Nouvelle</a></li>
		    <li id="nav-shop"><a href="shop.php">Boutique</a></li>
		</ul>
	</nav>
	<body id="shopNav">
		<div class="grid-x grid-padding-x">
	        <div class="large-12 cell">
	        	<h1>Boutique</h1>
	        </div>
      	</div>     
			<section class="grid-x grid-padding-x">
				<aside class="large-4 medium-4 cell"><br>
					<div class="callout"><p>Trier par </p> 
						<select>
		                  <option value="toto">1</option>
		                  <option value="titi">2</option>
		                  <option value="tata">3</option>
		               	</select>
		            </div>
					<div  class="callout">Filtre								
						<p>
							<a href="#" class="button">Type 1</a><br>
						    <a href="#" class="button">Type 2</a><br>
						    <a href="#" class="button">Type 3</a><br>
						</p>
					</div>	
						<div class="callout"><p>Mon Panier <img src="images/panier.png" alt="Image3" id="imgPanier"/></p></div>
						<div class="callout"><p>Autres</p></div>
						<div class="callout"><p>Autre</p></div>
						<div class="callout"><p>Autre</p></div>
				</aside>
				<article class="large-8 medium-8 cell">
					<div class="grid-x grid-padding-x">
						<div class="large-12 cell">
							<div class="grid-x grid-padding-x">
								<div class="large-12 cell">
									<div class="artShop">
										<div class="imgShop">
											<img src="images/rasp_appareil.jpeg" alt="Image3" id="imgShop"/>
										</div>
											<div class="titleShop">
												<p>Title<br>
													<span id="vendShop">Vendeur<br></span>
													<span id="priceShop">Prix</span>
												</p>
											</div>
												<div class="descShop">
													<p class="overflow-ellipsisShop">Description</p>
												</div>
									</div>
										<div class="artShop">
											<div class="imgShop">
												<img src="images/rasp_appareil.jpeg" alt="Image3" id="imgShop"/>
											</div>
												<div class="titleShop">
													<p>Title<br>
														<span id="vendShop">Vendeur<br></span>
														<span id="priceShop">Prix</span>
													</p>
												</div>
													<div class="descShop">
														<p class="overflow-ellipsisShop">Description</p>
													</div>
										</div>
											<div class="artShop">
												<div class="imgShop">
													<img src="images/rasp_appareil.jpeg" alt="Image3" id="imgShop"/>
												</div>
													<div class="titleShop">
														<p>Title<br>
															<span id="vendShop">Vendeur<br></span>
															<span id="priceShop">Prix</span>
														</p>
													</div>
														<div class="descShop">
															<p class="overflow-ellipsisShop">Description</p>
														</div>
											</div>						
								</div>
							</div>
						</div>
  					</div>
  				</article>
			</section>
	</body>
	<footer>
		<div class="footLink">
			<a href="http://localhost:82/christamplate/home.php" target="_blank">
			  <img src="images/footer_icon_01.png" alt="IconFooter" id="footic" /></a>
			<a href="http://localhost:82/christamplate/home.php" target="_blank">
			  <img src="images/footer_icon_02.png" alt="IconFooter" id="footic" /></a>
			<a href="http://localhost:82/christamplate/home.php" target="_blank">
			  <img src="images/footer_icon_03.png" alt="IconFooter" id="footic" /></a>
  		</div>
			<div class="footListLink">
				<ul id="footerNavList">
					<span id="footNavTitle">COMPTE</span>
				    <li id="footNavLabel"><a href="#Accueil">Option1</a></li>
				    <li id="footNavLabel"><a href="#Shop">Option2</a></li>
				    <li id="footNavLabel"><a href="#Boutique">Option3</a></li>
					<li id="footNavLabel"><a href="#Accueil">Option1</a></li>
				    <li id="footNavLabel"><a href="#Shop">Option2</a></li>
				    <li id="footNavLabel"><a href="#Boutique">Option3</a></li>
				</ul>
			</div>		
	</footer>
</div>
</html>