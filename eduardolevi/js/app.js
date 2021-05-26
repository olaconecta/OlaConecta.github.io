$(function() {
  $("html, body, section").mousewheel(function(event, delta) {
  this.scrollLeft -= (delta * 10);				
  event.preventDefault();
  });
});		
var btHome = document.getElementById("btHome");
var btCareer = document.getElementById("btCareer");
var btWorks = document.getElementById("btWorks");
var btMe = document.getElementById("btMe");

// scrolls
function scrollHome() {
    var elmnt = document.getElementById("home");
    elmnt.scrollIntoView();    
    btHome.classList.add('active');
    btCareer.classList.remove('active');
    btWorks.classList.remove('active');
    btMe.classList.remove('active');
  } 
  function scroll1() {
    var elmnt = document.getElementById("content1");
    elmnt.scrollIntoView();
    btCareer.classList.add('active');    
    btHome.classList.remove('active');
    btWorks.classList.remove('active');
    btMe.classList.remove('active');
  } 
  function scroll2() {
    var elmnt = document.getElementById("content2");
    elmnt.scrollIntoView();
    btWorks.classList.add('active');    
    btHome.classList.remove('active');
    btCareer.classList.remove('active');
    btMe.classList.remove('active');
  } 
  function scroll3() {
    var elmnt = document.getElementById("content3");
    elmnt.scrollIntoView();
    btMe.classList.add('active');
    btHome.classList.remove('active');
    btCareer.classList.remove('active');
    btWorks.classList.remove('active');
  } 
  function safraMais() {
    var elmnt = document.getElementById("safra");
    elmnt.scrollIntoView();    
  } 

//   function scrollWin() {
//     window.scrollTo(500, 0);
//   }

  // <h2>Hello!<br> I'm Eduardo Levi. <br><small>UX UI Front-End Designer.</small></h2>										

  // TYPING EFECT
  // List of sentences
var _CONTENT = [ 
	"Hello!", 
	"I'm Eduardo Levi.", 
	"I'm a UX/UI Designer.", 
	"Welcome to my Portfolio!"
];

// Current sentence being processed
var _PART = 0;

// Character number of the current sentence being processed 
var _PART_INDEX = 0;

// Holds the handle returned from setInterval
var _INTERVAL_VAL;

// Element that holds the text
var _ELEMENT = document.querySelector("#text");

// Cursor element 
var _CURSOR = document.querySelector("#cursor");

// Implements typing effect
function Type() { 
	// Get substring with 1 characater added
	var text =  _CONTENT[_PART].substring(0, _PART_INDEX + 1);
	_ELEMENT.innerHTML = text;
	_PART_INDEX++;

	// If full sentence has been displayed then start to delete the sentence after some time
	if(text === _CONTENT[_PART]) {
		// Hide the cursor
		_CURSOR.style.display = 'none';

		clearInterval(_INTERVAL_VAL);
		setTimeout(function() {
			_INTERVAL_VAL = setInterval(Delete, 50);
		}, 1000);
	}
}

// Implements deleting effect
function Delete() {
	// Get substring with 1 characater deleted
	var text =  _CONTENT[_PART].substring(0, _PART_INDEX - 1);
	_ELEMENT.innerHTML = text;
	_PART_INDEX--;

	// If sentence has been deleted then start to display the next sentence
	if(text === '') {
		clearInterval(_INTERVAL_VAL);

		// If current sentence was last then display the first one, else move to the next
		if(_PART == (_CONTENT.length - 1))
			_PART = 0;
		else
			_PART++;
		
		_PART_INDEX = 0;

		// Start to display the next sentence after some time
		setTimeout(function() {
			_CURSOR.style.display = 'inline-block';
			_INTERVAL_VAL = setInterval(Type, 100);
		}, 200);
	}
}

// Start the typing effect on load
_INTERVAL_VAL = setInterval(Type, 100);