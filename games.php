<!DOCTYPE html PUBLIC>
<html>
<head>
	<title>
		Super Mario
	</title>
	<link rel="shortcut icon" type="image/jpg" href="img/icon-mario.png">
</head>

<link rel="stylesheet" href="https://use.typekit.net/wam6xnd.css">
<!----><link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">

<body>
	<?php include('htdocs/nav.php') ?>
	<div id="carouselExampleIndicators" class="carousel slide game-slides" data-bs-interval="false">
	  <div class="nav-button carousel-indicators button-bg">
	  	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
	  	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  	  <span class="visually-hidden">Previous</span>
	  	</button>
	  	<div class="game-button" id="smbros-game">
	    	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    </div>
	    <div class="game-button" id="smworld-game">
	    	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    </div>
	    <div class="game-button" id="sm64-game">	
	    	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	    </div>
	    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
	  	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  	  <span class="visually-hidden">Next</span>
	  	</button>
	  </div>
	  <div class="game">
	  	<div class="carousel-inner">
	  	  <div class="carousel-item active" data-interval="false">
	  	  	<div class="background-games smbros">
	  	  		<div class="p-bg" style="width: 69vw;">
	  	  		<p>
	  	  			In the fantasy setting of the Mushroom Kingdom, a tribe of turtle-like creatures known as the Koopa Troopas invade the kingdom and uses the magic of its king, Bowser, to turn its inhabitants, known as the Mushroom People, into inanimate objects such as bricks, stones and horsehair plants. Bowser and his army also kidnap Princess Toadstool, the princess of the Mushroom Kingdom and the only one with the ability to reverse Bowser's spell. After hearing the news, Mario sets out to save the princess and free the kingdom from Bowser. After traveling through various parts of the kingdom and fighting Bowser's forces along the way, Mario reaches Bowser's final stronghold, where he is able to defeat him by striking an axe on the bridge suspended over lava he is standing on, breaking the bridge, defeating Bowser, freeing the princess and saving the Mushroom Kingdom.
	  	  		</p>
	  	  		</div>
	  	  	</div>
	  	  	<div class="mc-container">
						<iframe data-src-desk="https://supermario-game.com/mario-game/mario.html" data-src-mob="mario-game/mobilemario.html" loading="lazy" class="mario-game" src="https://supermario-game.com/mario-game/mario.html"></iframe>
					</div>
	  	  </div>
	  	  <div class="carousel-item" data-interval="false">
	  	    <div class="background-games smworld">
	  	    	<div class="p-bg" style="width: 69vw;">
	  	  		<p>
	  	  			After bringing peace to the Mushroom World in Super Mario Bros. 3, the brothers Mario and Luigi decide to go on vacation with Princess Toadstool to a place called Dinosaur Land, a prehistoric-themed world swarming with dinosaurs and other enemies. While resting on the beach, Princess Toadstool is captured by Bowser. When Mario and Luigi wake up, they try to find her and, after hours of searching, come across a giant egg in the forest. It suddenly hatches and out of it comes a young dinosaur named Yoshi, who tells them his dinosaur friends have also been imprisoned in eggs by the evil Koopalings. Mario and Luigi soon realise it must be the evil King Bowser and his Koopalings. Mario, Luigi and Yoshi set out to save Toadstool and Yoshi's dinosaur friends, traversing through Dinosaur Land for Bowser and his Koopalings. To aid him, Yoshi gives Mario a cape as they begin their journey. Mario and Luigi continue to follow Bowser, defeating the Koopalings in the process, and save Yoshi's Yoshi friends. They eventually arrive at Bowser's Castle, where they fight him in a final battle. They send Bowser flying into the sky and save Princess Toadstool, restoring peace to Dinosaur Land.
	  	  		</p>
	  	  		</div>
	  	    </div>
	  	    <div class="mc-container">
						<iframe src='https://www.miniplay.com/embed/super-mario-world-online' style="height: 500px" class="mario-game" frameborder='0' allowfullscreen></iframe>
					</div>
	  	  </div>
	  	  <div class="carousel-item" data-interval="false">
	  	    <div class="background-games sm64">
	  	    	<div class="p-bg" style="width: 69vw;">
	  	  		<p>
	  	  			The game begins with a letter from Princess Peach inviting Mario to come to her castle for a cake she has baked for him. When he arrives, Mario discovers that Bowser has invaded the castle and imprisoned the princess and her servants within it using the power of the castle's 120 Power Stars. The Power Stars are hidden in the castle's paintings, which serve as portals to other worlds where Bowser's minions keep watch over the Stars. Mario explores the castle and enters these worlds, gaining access to more rooms as he recovers more Stars. Mario unlocks two doors to different floors of the castle with keys obtained by defeating Bowser in hidden worlds. He gets at least 70 of the 120 Stars, breaking the curse of the endless stairs that block the entrance to Bowser's final hiding place. After Mario defeats Bowser in the final battle, he obtains a special Power Star which gives him the Wing Cap, and he flies back to the castle. Peach is released from the stained-glass window above the castle's entrance, and she rewards Mario by kissing him on the nose and baking the cake that she had promised him.
	  	  		</p>
	  	  		</div>
	  	    </div>
	  	    <div class="mc-container">
						<iframe src='https://www.miniplay.com/embed/super-mario-64' style="height: 500px" class="mario-game" frameborder='0' allowfullscreen></iframe>
					</div>
	  	  </div>
	  	</div>
	  	
	  </div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div style="height: 700px;width: 100%;"></div>
	<?php include('htdocs/footer.php') ?>

</body>
</html>

