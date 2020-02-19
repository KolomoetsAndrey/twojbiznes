$('.carousel').carousel({
    interval: 5000
});

$(document).ready(function(){
    var coll = document.getElementsByClassName("collapsible");
    var i;
    
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        } 
      });
    }
});

// Main Menu
function openNav() {
  var x = window.matchMedia("(max-width:900px)");

  if (x.matches) {
      document.getElementById("mySidepanel").style.width = "80%";
  } else {
      document.getElementById("mySidepanel").style.width = "35%";
  }
};
  
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
};