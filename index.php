

<!DOCTYPE HTML>
<html lang="en">  

<head>
	<title>Find Your Your Perfect Home!</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- FB OG Tags -->
	<!-- <meta property="og:url"                content="http://www.perfecthomequiz.com/index.html" /> -->
	<meta property="og:url"                content="http://https://perfecthomequiz.com" />
	<meta property="og:type"               content="website" />
	<meta property="og:title"              content="Take This Quiz to Find Your Perfect Home!" />
	<meta property="og:description"        content="I found my perfect home by taking this short quiz." />
	<meta property="og:image"              content='../img/peek-hd.jpg' />
	<!-- 	STYLES -->
	<link rel="stylesheet" type="text/css" href="css/styles.min.css"/>

</head>

<body>
	<div class="container">
		
		<h1 class="message">Find Your Perfect Home!</h1>

		<div class="enter-name">
			<form id="name" name="name" action="buildJson.php" method="post">

				<label class="name" for="firstName">Hi! What is your first name?</label>

				<input id="firstName" class="firstName" name="firstName" type="text" data-error-msg-name="Psst! What's your name?" aria-required="true" autofocus>
				<p class="error"></p>
				<button id="btn-name" type="submit" class="btn btn-orange" value="Let's go!">Let's go!</button>

			</form>
		</div>

		<div class="q1">
			<form id="questions1" name="questions1" action="buildJson.php" method='post'>
				<div class="question"> 	
					<label for="adj1">Enter an adjective.</label>
					<input id="adj1" class="js-input adj1" name="adj1" type="text" data-error-msg="Don't forget this one." placeholder="Adjective..." aria-required="true">
					<p class="error"></p>
				</div>

				<div class="question"> 
					<label for="favCounty">What is your favorite country?</label>
					<input id="favCountry" class="js-input favCountry" name="favCountry" type="text" data-error-msg="Where would you rather be?" placeholder="New Zealand? Namibia?" aria-required="true" >
					<p class="error"></p>
				</div>
				<div class="question"> 
					<label for="bestie">What is your best friend's first name?</label>
					<input id="bestie" class="js-input bestie" name="bestie" type="text" data-error-msg="I know you have one friend, right?" placeholder="My bestie is..." aria-required="true" >
					<p class="error"></p>
				</div>
				<div class="question"> 
					<label for="adj2">Enter another adjective.</label>
					<input id="adj2" class="js-input adj2" name="adj2" type="text" data-error-msg="Oops" placeholder="Another adjective..." aria-required="true" >
					<p class="error"></p>
				</div>
				<div class="question"> 
					<label for="noun1">Enter an noun.</label>
					<input id="noun1" class="js-input noun1" name="noun1" type="text" data-error-msg="a noun is a person, place or thing..." placeholder="A person, place, or thing..." aria-required="true" >
					<p class="error"></p>
				</div>
				<div class="question"> 
					<label for="noun2">Enter another noun.</label>
					<input id="noun2" class="js-input noun2" name="noun2" type="text" data-error-msg="skipped this one"placeholder="Another person, place, or thing..." aria-required="true">
					<p class="error"></p>
				</div>
				<div class="question"> 
					<label for="favCartoon">Who is your favorite cartoon character?</label>
					<input id="favCartoon" class="js-input favCartoon" name="favCartoon" type="text" data-error-msg="Oopsies!" placeholder="Tigger? Shrek? Peppa Pig?" aria-required="true" >
					<p class="error"></p>
				</div>
				<div class="question"> 
					<label for="prez">Name any US President.</label>
					<input id="prez" class="js-input prez" name="prez" type="text" data-error-msg="So many to choose from..." placeholder="Barack Obama? Millard Fillmore? " aria-required="true" >
					<p class="error"></p>
				</div>
				<div class="question"> 
					<label for="gem">Enter the name of a precious substance.</label>
					<input id="gem" class="js-input gem" name="gem" type="text" data-error-msg="My Precioussss...." placeholder="Ruby? Istrian Marble?"data-parsley-error-message="Bling!" >
					<p class="error"></p>
				</div>
				<div class="question"> 
					<label for="basement">What's something you'd find in a basement?</label>
					<input id="basement" class="js-input basement" name="basement" type="text" data-error-msg="What's that?!" placeholder="Furnace? Mold? Broken toys?" aria-required="true" >
					<p class="error"></p>
				</div>
				<div class="question"> 
					<label for="tree">What is your favorite tree?</label>
					<input id="tree" class="js-input tree" name="tree" type="text" data-error-msg="Missed this one." placeholder="Mulberry? Dogwood? " aria-required="true" >
					<p class="error"></p>
				</div>
				<div class="question"> 
					<label for="water">Name any body of water.</label>
					<input id="water" class="js-input water" name="water" type="text" data-error-msg="Make a splash!" placeholder="Lake Como? Gowanus Canal?" aria-required="true" >
					<p class="error"></p>
				</div>
				<div class="question"> 
					<label for="num1">Enter a number from 0 - 100.</label>
					<input type="number" id="num1" class="js-input num1" name="num1" type="number" min="0" max="100" data-error-msg="Oops" placeholder="#" aria-required="true">
					<p class="error"></p>
				</div>
				<div class="question"> 
					<label for="favAnimal">What is your favorite animal?</label>
					<input id="favAnimal" class="js-input favAnimal" name="favAnimal" type="text" data-error-msg="Missed this one." placeholder="Pig? Python? Pyrhana?" aria-required="true" >
					<p class="error"></p>
				</div>
				<div class="question"> 
					<label for="verb1">Enter a verb.</label>
					<input id="verb1" class="js-input verb1" name="verb1" type="text" data-error-msg="This one is still empty." placeholder="Action!" aria-required="true" >
					<p class="error"></p>
				</div>
				<button id="btn-submit1" type="submit" class="btn btn-orange" value="">Call the movers!</button>
				<p class=""></p>
			</form>		
		</div>
	
		<div class="q2">
			<form id="questions2" name="questions2" action="buildJson.php" method='post'>

				<div class="question">
					<label for="num5">Enter a number from 0 - 10.</label>
					<input id="num5" class="js-input num5" name="num5" type="number" min="0" max="10" data-error-msg="Oops." placeholder="#" aria-required="true">
					<p class="error"></p>
				</div>
				<div class="question">
					<label for="adj3">Enter an adjective.</label>
					<input id="adj3" class="js-input adj3" name="adj3" type="text"  data-error-msg="Oops" placeholder="Adjective..." aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="num2">Enter another number from 0 - 10.</label>
					<input id="num2" class="js-input num2" name="num2" type="number" min="0" max="10" data-error-msg="Oops."placeholder="#" aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="num3">Enter a number from 0 - 100.</label>
					<input id="num3" class="js-input num3" name="num3" type="number" min="0" max="100" data-error-msg="Oops."placeholder="#" aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="num4">It's a numbers game!  Enter a number from 0 - 10.</label>
					<input id="num4" class="js-input num4" name="num4" type="number" min="0" max="10" data-error-msg="Oops."placeholder="#" aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="emotion">Enter an emotion or state of mind.</label>
					<input id="emotion" class="js-input emotion" name="emotion" type="text"  data-error-msg="Oops" placeholder="Joy? Chagrin?" aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="direction">Choose a direction.</label>
					<select name="direction" form="questions2" id="direction" class="js-input" data-error-msg="Oops.">
						<option value=""></option>
						<option value="N"> North</option>
						<option value="S"> South</option> 
						<option value="E"> East</option>
						<option value="w"> West</option>
					</select>
					<p class="error"></p>
				</div>
				<div class="question">
					<label for="room">Name any room in a house.</label>
					<input id="room" class="js-input room" name="room" type="text" data-error-msg="Oops" placeholder="Breakfast nook? Bathroom?" aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="adj4">Enter an adjective.</label>
					<input id="adj4" class="js-input adj4" type="text"  name="adj4" data-error-msg="Oops" placeholder="Adjective..." aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="pubInst">Name a public institution or facility.</label>
					<input id="pubInst" class="js-input pubInst" name="pubInst" type="text"  data-error-msg="Oops" placeholder="Prison? Elementary School?" aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="favCity">What's your favorite city?</label>
					<input id="favCity" class="js-input favCity" name="favCity" type="text" data-error-msg="Oops" placeholder="Fresno? Nairobi? Brasilia?..." aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="landmark">Pick a landmark!</label>
					<select name="landmark" form="questions2" id="landmark" class="js-input" data-error-msg="Oops.">
						<option value=""></option>
						<option value="niagara"> Niagara Falls</option>
						<option value="reef"> Great Barrier Reef</option>
						<option value="baikal"> Lake Baikal</option>
						<option value="bkln"> Brooklyn Bridge</option>
						<option value="nauru"> Island of Nauru</option>
						<option value="canal"> Panama Canal</option>
						<option value="amazon"> Amazon Rainforest</option>
					</select>
					<p class="error"></p>
				</div>
				<button id="btn-submit2" type="submit" class="btn btn-orange" value="">Get packing!</button>
				<p class=""></p>	
			</form>			
		</div>

		<div class="q3">
			<form id="questions3" name="questions3" action="buildJson.php" method='post'>
				<div class="question">
					<label for="num6">Enter a number from 0 - 5.</label>
					<input id="num6" class="js-input num6" name="num6" type="number" min="0" max="5" data-error-msg="Oops" placeholder="#" aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="num7">Enter a number from 0 - 10.</label>
					<input id="num7" class="js-input num7" name="num7" type="number" min="0" max="10" data-error-msg="Oops" placeholder="#" aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="disaster">What is your favorite natural disaster?</label>
					<input id="disaster" class="js-input disaster" name="disaster" type="text"  data-error-msg="Oops" placeholder="Plague? Tsunami?" aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="clothing">Name an article of clothing.</label>
					<input id="clothing" class="js-input clothing" name="clothing" type="text"  data-error-msg="Oops" placeholder="Socks? Tie?" aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="mood">How would you describe your mood today?</label>
					<input id="mood" class="js-input mood" name="mood" type="text" data-error-msg="Oops" placeholder="Pensive? Disgusted?" aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="adj6">Enter an adjective.</label>
					<input id="adj6" class="js-input adj6" name="adj6" type="text"  data-error-msg="Oops" placeholder="Adjective..." aria-required="true"><p class="error"></p>
				</div>
				<div class="question">	
					<label for="urban">Name a common feature of urban environments, plural.</label>
					<input id="urban" class="js-input urban" name="urban" type="text"  data-error-msg="Oops" placeholder="Sidewalks? Car alarms?"><p class="error"></p>
				</div>
				<div class="question">
					<label for="verb2">Enter a verb ending in -ing.</label>
					<input id="verb2" class="js-input verb2" name="verb2" type="text"  data-error-msg="Oops" placeholder="Chewing? Cogitating?" aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="time">Choose a length of time.</label>
					<select name="time" form="questions3" id="time" class="js-input" data-error-msg="Oops.">
						<option value=""></option>	
						<option value="minute">Minute</option>
						<option value="hour">Hour</option>
						<option value="day">Day</option>
						<option value="week">Week</option>
						<option value="month">Month</option>
					</select>
					<p class="error"></p>
				</div>
				<div class="question">
					<label for="pluAnimals">What is your least favorite animal, plural.</label>
					<input id="pluAnimals" class="js-input pluAnimals" name="pluAnimals" type="text" data-error-msg="Oops" placeholder="Rabbits? Tigers?" aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="room2">Name any room in a house.</label>
					<input id="room2" class="js-input room2" name="room2" type="text" data-error-msg="Oops" placeholder="Breakfast nook? Bathroom?" aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="adj7">Enter an adjective.</label>
					<input id="adj7" class="js-input adj7" name="adj7" type="text" data-error-msg="Oops" placeholder="Adjective..." aria-required="true"><p class="error"></p>
				</div>
				<div class="question">
					<label for="verb3">Enter a verb.</label>
					<input id="verb3" class="js-input verb3" name="verb3" type="text" data-error-msg="Oops" placeholder="Argue? Relax?" aria-required="true"><p class="error"></p>
				</div>
				<button id="btn-submit3" class="btn btn-orange" type="submit" value="">Call the bank!</button>
				<p class=""></p>	
			</form>	
		</div>

		<div class="listings">
			<div class="js-list1 listing1">

		 		<p><span class="firstName"></span>, this is something really special! Inspired by the <span class="adj1"></span> chateaus of <span class="favCountry"></span>, Chateau <span class="bestie"></span> is <span class="addN"> </span><span class="adj2"></span> and luxurious retreat that reflects that magical merging of <span class="noun1"></span>  and <span class="noun2"></span>. Created by renowned architects <span class="favCartoon"></span> and <span class="prez"></span>, the estate is a masterpiece of design and craftsmanship featuring intricately inlaid <span class="gem"></span>, hand-planed <span class="tree"></span> flooring,  artisan-painted <span class="basement"></span>, plus an elevator to transport from floor to floor. Luxuriate in sprawling entertaining spaces that flow outside to the stunning infinity pool, tennis courts and the tranquil <span class="water"></span> beyond. Enjoy private access to your own elegantly situated <span class="num1"></span> acre mini-estate. Chateau <span class="bestie"></span> is the crème de la crème in prestigious <span class="favAnimal"></span> <span class="verb1"></span> Ranch.</p>	
		 		
		 	</div>

		 	<div class="js-list2 listing2">
		 		<p>Downsizing? Simplify your life, <span class="firstName"></span>, with this <span class="num5"></span>-story bungalow with <span class="adj3"></span> essentials. You’ll be thrilled with the newer carpet and windows! This efficient <span class="num2"></span>-bedroom, <span class="num3"></span>-bathroom home will reduce your carbon footprint with its <span class="num4"></span> sq ft of multi-purpose space. Live the dream, waking each morning to <span class="emotion"></span>-inspiring sunrises in the <span class="direction"></span>, work from home in your <span class="room"></span> which doubles as a home office. They say location is everything, and you'll be right at home in the <span class="adj4"></span> community with an award-winning <span class="pubInst"></span> on the outskirts of <span class="favCity"></span>, just thirty minutes from the magnificent<span class="landmark">
		 		</span>.
		 		</p>
		 		
		 	</div>

		 	<div class="js-list3 listing3">
				<p><span class="firstName"></span>, you'll &quot;flip&quot; for this! Take this unique, <span class="num6"></span>-room, <span class="num7"></span>-story home and make it shine again! Structurally sound, with minimal <span class="disaster"></span> damage! Roll up your <span class="clothing"></span> and start building your equity with this <span class="mood"></span>, <span class="adj6"></span> blank canvas! Located in this <span class="adj7"></span>, bleeding-edge neighborhood, just steps from highways and <span class="urban"></span>! Walk out of your <span class="room2"></span> onto the concrete slab patio and enjoy <span class="verb2"></span> in your fenced yard, where your green thumb will be eager to get to work! This property is currently <span id="time1" class="time"></span>-to-<span class="time"></span> tenant occupied! Do NOT let any of the many backyard <span class="pluAnimals"></span> inside the house! It is a criminal offense to <span class="verb3"></span> on this property! CASH only.
		 		</p>
		 		
		 	</div>

			<button class="btn btn-orange btn-reset" type="reset" onClick="window.location.reload()">Not exactly perfect?</button>

			<div class="share">

				<button class="js-copy-listing btn btn-copy btn-ghost">Click here to copy this listing, then share! <img src="img/copy-1.svg"></button>
				<!-- <button >Copy Listing</button> -->

				<div class="icons">
				<!-- https://developers.facebook.com/docs/plugins/share-button/#configurator -->
					<div class="fb-share-icon social-icon">
						<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.perfecthomequiz.com" target="_blank">
							<img src="img/fb_icon_grey.svg">
						</a>
					</div>

					<div class="twitter-share-button social-icon">
						<a href="https://twitter.com/intent/tweet"
						data-size="small" target="_blank">
							<img src="img/twitter_icon_grey.svg">
						</a>
					</div>

				</div>

				<div class="eliza">
					<a href="http://eliza.liveinsouthjersey.com" target="_blank">Looking for <em>actual</em> real estate listings?<img src="img/external_link.svg"></a>
				</div>
				<button class=" btn btn-ghost js-modal-open" >About this site.</button>
				
				<!-- MODAL / ABOUT -->
				<div class="about modal-container">
					<div class="modal">
						<header class="modal-header">
							<button class= "btn btn-ghost close">close</button>
						</header>

						<div class="modal-content">
							<h1>Hi!</h1>

							<p class="explain">I love <a href="http://www.madlibs.com/" target="_blank">Mad Libs!</a></p>

							<p class="explain"> I also love the euphemistic, hyperbolic language of real estate listings. Why not combine the two?</p>

							<p class="explain">This quiz is an off-shoot of a project called <a href="http://www.manufacturinghome.com" title="Manufacturing Home" target="_blank">Manufacturing Home,</a> which explores ideas about home, comfort, class and mobility through photographs of mass-market, factory-built homes in America. For more about this and other projects, please visit <a href="http://www.amyeckertprojects.com" target="_blank"> www.amyeckertprojects.com</a></p>
							<p>Cheers! -Amy</p>
							
							<p class="copyright"></p>
						</div>
					</div>
				</div> <!-- close modal -->

			</div> <!-- close share -->
		</div> <!-- close listings -->

	<!-- JQUERY, etc. -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<!-- CUSTOM JS -->
	<script src="js/perfecthome.js"></script>


</body>
</html>