// source and inspiration: https://github.com/mjhea0/jquery-madlibs

$(document).ready(function() {	

	// HIDE STUFF	----------------//
	$(".q1").hide();
	// $(".q2").hide();
	$(".q3").hide();
	$(".listings").hide();
	$(".js-list1").hide();
	$(".js-list2").hide();
	$(".js-list3").hide();
	$(".replay").hide();   
	$(".btn-reset").hide();
	$(".share").hide();
	$(".eliza").hide();

	// ERROR MESSAGES-------------------------//
	// var errRequired = 'Pssst! What\'s your name?';

	// REGEXP -------------------------------//
	const vowelRegExp = /^[aeiou]/gi; // for adding a(n) in front of nouns where required.
	var theRegExp = /\bthe\b/gi; //remove the word the
	const lettersRegExp = /[^a-z ]$/gi; // allow ONLY alphabetic and whitespace
	const numbersRegExp = /[^0-9]$/gi;

	// VALIDATIONS ---------------------------//

	var cleanText = function(inputText) {
		var textIsClean = true;
		if (inputText.match(lettersRegExp)) {
			console.log(inputText + ' has illegal chars');
			textIsClean = false;
		} 
		return textIsClean; //returns t/f 
	};

	var cleanNumbers = function(inputText) {
		var numbersClean = true;
		if (inputText.match(numbersRegExp)) {
			console.log(inputText = ' can\'t have letters');
			numbersClean = false;
		}
		return numbersClean; //returns t/f 
	};

	var validateName = function(){
		var nameIsValid = false;
	 	var playerName = $('.firstName').val();
 		//if field is empty, display error msg
	 	if(!playerName) {
	 		nameIsValid = false;
			var nameError = $('.firstName').data('error-msg-name');
			$('.js-error-msg-name').text(nameError);
			console.log(nameError);
	 	} else {
	 		return true;
	 	}
		return nameIsValid;
	};

	var validate = function() {
		var form1IsValid = true;
		var inputs1 = $('.js-q1-input');

		// check each one is filled out correctly
		for (var i=0; i<inputs1.length; i++) {
			var currentAnswer = $(inputs1[i]).val();
			var currentInputId = $(inputs1[i]).attr('id');
			var currentErrorMessage = $(inputs1[i]).data('error-msg1');
			var currentInputType = $(inputs1[i]).attr('type');		

			// check the input is filled out
			if(currentAnswer === '') {
				// remove any previous error msg
				$('#' + currentInputId).next().text(''); 

				// add error message
				$('#' + currentInputId).next().text(currentErrorMessage); // 
				console.log(currentInputId +' is missing');

				form1IsValid = false; 

			} else if (currentInputType === 'number') {
				if(!cleanNumbers(currentAnswer)) {
					currentErrorMessage = 'Please use only numbers, thanks!';
					$('#' + currentInputId).next().text(currentErrorMessage);
					form1IsValid = false;
				} 
				else {
					$('#' + currentInputId).next().text('');
					
				}
			} else if (currentInputType ==='text') {
				if (!cleanText(currentAnswer)) {
					currentErrorMessage = 'Please use only letters, thanks!';
					$('#' + currentInputId).next().text(currentErrorMessage);
					form1IsValid = false;
				} 
				else {
					$('#' + currentInputId).next().text('');
				}

			} else {
				console.log('form is valid ok to submit');
				form1IsValid = true;
			}	
		} // closes for loop ------------------------//

		return form1IsValid; //returns t/f
	}; //closes validateQ1 -------------------------//


	// choose random questionnaire by choosing a namespace?
	var pickQuestions = function(){
		var q1 = $(".q1");
	 	var q2 = $(".q2");
	 	var q3 = $(".q3");
		var listings = [q1, q2, q3];
	 	var chosen = listings[Math.floor(Math.random() * listings.length)];

	 	$(".enter-name").hide();
	 	$(".firstName").empty().append($("input.firstName").val());
		
	 	//need code to check to see what previous selection was, so that it doesn't repeat in it's randomness.
		// var recentChoice; etc.   

		//	PICK A QUESTIONAIRE ------------//
		if (chosen == q1) {
	 		$(".q1").show(); 
	 		$(".q2").hide();
			$(".q3").hide();
			$('body').css({
				"background-image" : "url('img/tablebeast-hd.jpg')"
			});
	 	}
		 else if (chosen == q2) {
	 		$(".q2").show();
	 		$(".q1").hide();  
	 		$(".q3").hide();
	 		$('body').css({
				"background-image" : "url('img/couches-hd.jpg')"
			});
	 	}
		else { 
			$(".q3").show();
	 		$(".q1").hide(); 
	 		$(".q2").hide();
	 		$('body').css({
				"background-image" : "url('img/seam2-hd.jpg')"
			});
		};
	};

	// fill out forms 
	var createListing1= function(){
	    // if input starts with a vowel, add an n to make an before it.
	    var inputStartsWithVowel = $("input.adj2").val();
		var addN = $(".adj2").prev();
	    if(inputStartsWithVowel.match(vowelRegExp)) {
	    	// getprevious sibling
	    	addN.empty().text('an ');
	    	$(".adj2").empty().append(inputStartsWithVowel).val();
		 } else {
		 	addN.empty().text('a ');
		 	$(".adj2").empty().append(inputStartsWithVowel).val();
		 };

		 //check for and remove "the" before name of body of water
		 var waterInput = $("input.water").val(); 
		 if(waterInput.match(theRegExp)) {
		 	waterInput = waterInput.replace(theRegExp, '');
	    	$(".water").empty().append(waterInput).val();
		 } else {
	    	$(".water").empty().append(waterInput).val();	
		 };

		// grab the values from the input boxes, then append them to the DOM
	    $(".adj1").empty().append($("input.adj1").val());
	    $(".favCountry").empty().append($("input.favCountry").val());
	    $(".bestie").empty().append($("input.bestie").val());
	    $(".noun1").empty().append($("input.noun1").val());
		$(".noun2").empty().append($("input.noun2").val());
	    $(".favCartoon").empty().append($("input.favCartoon").val());
	    $(".prez").empty().append($("input.prez").val());
	    $(".gem").empty().append($("input.gem").val());
	    $(".basement").empty().append($("input.basement").val());
	    $(".tree").empty().append($("input.tree").val());
	    $(".num1").empty().append($("input.num1").val());
	    $(".favAnimal").empty().append($("input.favAnimal").val());
	    $(".verb1").empty().append($("input.verb1").val());
	};

	var createListing2 = function(){

  		var dir = $("#direction option:selected" ).text();
		var landmark = $("#landmark :selected").text();
		
		$(".num5").empty().append($("input.num5").val());
		$(".adj3").empty().append($("input.adj3").val());
		$(".num2").empty().append($("input.num2").val());
		$(".num3").empty().append($("input.num3").val());
		$(".num4").empty().append($("input.num4").val());
		$(".emotion").empty().append($("input.emotion").val());
		$(".direction").empty().append(dir);
		$(".room").empty().append($("input.room").val());
		$(".adj4").empty().append($("input.adj4").val());
		$(".pubInst").empty().append($("input.pubInst").val());
		$(".favCity").empty().append($("input.favCity").val());
		$(".landmark").empty().append(landmark);
	};

	var createListing3 = function(){

		var time = $("#time option:selected" ).text();

		$(".num6").empty().append($("input.num6").val());
		$(".num7").empty().append($("input.num7").val());
		$(".disaster").empty().append($("input.disaster").val());
		$(".clothing").empty().append($("input.clothing").val());
		$(".mood").empty().append($("input.mood").val());
		$(".adj6").empty().append($("input.adj6").val());
		$(".adj7").empty().append($("input.adj7").val());
		$(".urban").empty().append($("input.urban").val());
		$(".room2").empty().append($("input.room2").val());
		$(".verb2").empty().append($("input.verb2").val());
		$(".time").empty().append(time);
		$(".pluAnimals").empty().append($("input.pluAnimals").val());
		$(".verb3").empty().append($("input.verb3").val());	
	};

	//display the listing and hide other stuff
	// these could be set up as an if or switch statement 
	var showListing = function() {
		var allForms = $('.questionnaire');
		console.log(allForms);

		for (var i=0; i<allForms.length; i++) {
			var formToShow = $('').attr('id');
		};
		
		if(formToShow === 'q1') {
		    //	show the listing; 
		    $(".listings").show();
			$(".js-list1").show();
			$(".js-list2").hide();
			$(".js-list3").hide();

			//	change button to replay button
			$("#btn-next").hide();
			$(".replay").show();

		    // hide the questions
		    $(".q1").hide();
			$("#btn-reset").show();
			$(".share").show();
			$(".eliza").show();

		    //change the h1 message
		   	var message = document.querySelector(".message").innerHTML = "How about this little gem?";
				
		};
		if(formToShow ==='q2') {
			//	show the listing
			$(".listings").show();
			$("#list1").hide();
			$("#list2").show();
			$("#list3").hide();

			//	change button to replay button
			$("#btn-next").hide();
			$(".replay").show();

			// hide the questions
			$(".q2").hide();
			$("#btn-reset").show();	

			$(".share").show();
			$(".eliza").show(); 

		    //change the h1 message
		   	var message = document.querySelector(".message").innerHTML = "This one says YOU all over it!";

		};	
		if(formToShow ==='q3') {
			$(".listings").show();
			$("#list1").hide();
			$("#list2").hide();
			$("#list3").show();

			//	change button to replay button
			$("#btn-next").hide();
			$(".replay").show();

			// hide the questions
			$(".q3").hide();
			$("#btn-reset").show();

			$(".share").show();
			$(".eliza").show();

			var message = document.querySelector(".message").innerHTML = "Bring your toolbox!";
		};
	};

	//-------  ON-SUBMIT EVENTS -------------------------//

	// validates that name is entered, chooses questionnaire
	$('#name').on('submit', function(e){
		e.preventDefault();
		// if fails
		if (validateName()){
			// proceed to questionnaire
			console.log('name entered');
			pickQuestions();
		} else {
			return false;
		}
	});

	// assemble listing only if form is valid------------//
	$("#questions1").on('submit', function(e) {
		e.preventDefault();
		if(!validateQ1()) {
			$('#btn-submit1').next().text('Please correct the errors and THEN call the movers.');
			console.log('form is not valid');
			return false;
		} else {
			createListing1();
			showListing();	
		}	 
	});

	$("#btn-submit2").on('submit', function(e) {
		e.preventDefault();
		if(!validateQ2()) {
			$('#btn-submit2').next().text('Please correct the errors and THEN start packing.');
			console.log('form is not valid');
			return false;
		} else {
			createListing2();
			showListing();	   		
		}
	});
	
	$("#btn-submit3").click('submit', function(e) {
		e.preventDefault();
		if(!validateQ3()) {
			$('#btn-submit3').next().text('Please correct the errors and THEN call the bank.');
			console.log('form is not valid');
			return false;
		} else {
			createListing3();
			showListing();	   		
		}
	});


	// REPLAY BUTTON------------------------//

	// $("#btn-reset").click(function(e) {
	// 	var message = document.querySelector(".message").innerHTML = "Find Your Perfect Home!";

	// 	var reset = document.getElementById("firstName").className = "";
		
	// 	$(".enter-name").show();
	// 	$("#btn-reset").hide();
	// 	$(".listings").hide();	
	// 	$("#btn-next").show();
	// 	// $("#empty-name").hide();
	// 	$("#empty-name").css("visibility", "hidden");
		
	//  console.log(firstName, reset);

	// 	 //clear inputs
	// 	 $(":input").val(" ");
	// 	 $("#btn-next").val("Let's go!");
	// 	 $("#btn-submit1").val("Call the movers!");
	// 	 $("#btn-submit2").val("Get packing!");
	// 	 $("#btn-submit3").val("Call the bank!");

	// });	 

}); //closes doc ready	
