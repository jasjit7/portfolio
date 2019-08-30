/*
In this javascript file, when the mouse is over any thumbnail, the big picture changes to match to the image of the thumbnail and the caption is also being updated.

To do this we assigned a unique ID to all the images in HTML e.g id="img1"..

To update the big-image on hover we created a .onmouseover function()

Whenever the cursor is over the particular thumbnail, the big-image source attribute is updating it with the image provided. By changing the src, the image can be updated.

And with .innerHTML, the caption can be changed to any text.

Instead of doing this in a long way, we can also do this in a loop, but i was finding it more easy. 
*/


document.getElementById("img1").onmouseover = function(){
	document.getElementById("big-image").src = "images/img1_large.jpg";
	document.getElementById("art-title").innerHTML = "Sprinkles";
};
document.getElementById("img2").onmouseover = function(){
	document.getElementById("big-image").src = "images/img2_large.jpg";
	document.getElementById("art-title").innerHTML = "Baking";
};

document.getElementById("img3").onmouseover = function(){
	document.getElementById("big-image").src = "images/img3_large.jpg";
	document.getElementById("art-title").innerHTML = "Presentation";
};
document.getElementById("img4").onmouseover = function(){
	document.getElementById("big-image").src = "images/img4_large.jpg";
	document.getElementById("art-title").innerHTML = "Preperation";
};
document.getElementById("img5").onmouseover = function(){
	document.getElementById("big-image").src = "images/img5_large.jpg";
	document.getElementById("art-title").innerHTML = "Cup Cakes";
};

