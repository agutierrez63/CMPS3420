// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function menu() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

/* Open Navs */
function openNav() {
  document.getElementById("mySidebar1").style.width = "250px";
  document.getElementById("body").style.marginLeft = "250px";
}

function openNav2() {
  document.getElementById("mySidebar2").style.width = "250px";
  document.getElementById("body").style.marginLeft = "250px";
}

/* Close Navs */
function closeNav() {
  document.getElementById("mySidebar1").style.width = "0";
  document.getElementById("body").style.marginLeft= "0";
}

function closeNav2() {
  document.getElementById("mySidebar2").style.width = "0";
  document.getElementById("body").style.marginLeft= "0";
}

function goBack() {
  window.history.back();
}

function goForward() {
  window.history.forward();
}

$("#login-button").click(function(event){
  event.preventDefault();
  $('form').fadeOut(500);
  $('.wrapper').addClass('form-success');
});