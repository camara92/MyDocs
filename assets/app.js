/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

// slider : 
var slides = document.getElementsByClassName('slide');
var slideCount = slides.length;
var i = 0;

function moveLeft() {
  i++; // i = i + i 
  if (i < slideCount) {
    slides[i].style.left = "0";
    slides[i - 1].style.left = "-100%";
    console.log("advanced i = " + i);
    document.getElementById("next").slideDown(100);
  } else { 
  i = 0; // Set current slide back to zero
    slides[i].style.left = "0";
    slides[slideCount - 1].style.left = "-100%";

    console.log("back to start");
  
    for (var x = 1; x < slideCount -1; x++) { 
     slides[x].style.left = "100%";
    }
    
  }
}
// Run the function, move left, when clicked on next// 
document.getElementById("next").onclick = moveLeft;


