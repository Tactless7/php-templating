<?php 
	require 'vendor/autoload.php';
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Faker PHP</title>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.4/semantic.min.css">
 </head>
 <body>
 	<div class="ui centered padded container grid">
		<div class="ui centered ten wide column">
			<div class="ui centered header">Company Name</div>
			<div class="ui centered small header">Catch Phrase</div>
			<div class="ui two column grid">
				<div class="ui twelve wide column">
					<p>At <span id="companyName">ICI</span>, we create <span id="productAdjective">BEAU</span> <span id="productName">CHIEN</span> made of <span id="productMaterial">CAILLOU</span></p>
					<p>Find out more on <span id="url">WWW.ICI.COM</span></p>
					<div class="ui four wide centered column">
						<div class="row">
							<img src="" alt="Photo du produit">
						</div>
						<div class="row">
							<span id="productName">CHIEN</span>
						</div>
						<div class="row">
							Material : <span id="productMaterial">CAILLOU</span>
							Color : <span id="color">ROUGE</span>
						</div>
						<div class="ui green button">Take my Money</div>
					</div>
				</div>
				<div class="ui four wide column">
					<div class="row">
						<img src="" alt="Photo du vendeur">
					</div>
					<div class="centered row">
						<span id="userName">JOHN DOE</span>
					</div>
					<div class="centered row">
						<span id="job">VENDEUR</span>
					</div>
					<div class="centered row">
						<h3>Contact Info</h3>
						<ul>
							<li id="email">email@email.com</li>
							<li id="number">06 09 09 09 09</li>
							<li id="street">13, rue nulle</li>
							<li><span id="zipCode">00000</span><span id="city">BLABLA</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

 </body>
 </html>