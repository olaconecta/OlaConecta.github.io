$(function() {
  $("html, body, section").mousewheel(function(event, delta) {
  this.scrollLeft -= (delta * 10);				
  event.preventDefault();
  });
});		

// scrolls
function scrollHome() {
    var elmnt = document.getElementById("home");
    elmnt.scrollIntoView();
  } 
function scroll1() {
    var elmnt = document.getElementById("content1");
    elmnt.scrollIntoView();
  } 
function scroll2() {
    var elmnt = document.getElementById("content2");
    elmnt.scrollIntoView();
  } 
function scroll3() {
    var elmnt = document.getElementById("content3");
    elmnt.scrollIntoView();
  } 

//   function scrollWin() {
//     window.scrollTo(500, 0);
//   }

  