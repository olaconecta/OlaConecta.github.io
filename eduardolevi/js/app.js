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

//   function scrollWin() {
//     window.scrollTo(500, 0);
//   }

  