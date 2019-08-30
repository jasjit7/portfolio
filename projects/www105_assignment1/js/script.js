/*
Index. html is the home page for bakery website. All the other pages have links to them in this webpage. To make the changes we created a javascript folder, and all the javascript files are in it with relevant names.

In this javascript file, we changed the background image on jumbotron.
To cahnge it in future, just go to function mouseover(), and change the image url, the image will be updated but it will work until the cursor is over the image.

In this, there is text "Bakery and Cafe" under the "Vanilla" heading.
After 3 seconds, we are changing the text to "Life is short. Eat dessert first."
The text can be changed through the function changeText(), and we can also changeTextTimer(i.e. the timing of the text change).

All theses changes can be done within the Javascript withoutr changing HTML
*/


function changeText(){
	document.getElementById("lead").innerHTML = "Life is short. Eat dessert first.";
}

const changeTextTimer = setTimeout(changeText, 3000);

document.getElementById("jumbo1").addEventListener("mouseover", mouseOver);
document.getElementById("jumbo1").addEventListener("mouseout", mouseOut);

function mouseOver() {
	document.getElementById("jumbo1").style.color = "red";
	document.getElementById("jumbo1").style.backgroundPosition = "bottom";
	document.getElementById("jumbo1").style.backgroundImage = "url(images/donuts.jpg)";
}

function mouseOut() {
  document.getElementById("jumbo1").style.color = "black";
	document.getElementById("jumbo1").style.backgroundImage = "url(images/macaron.jpg)";
}























