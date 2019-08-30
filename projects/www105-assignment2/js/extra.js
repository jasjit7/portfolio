/*
It was super difficult to attempt. Finally did FTP to matrix site and it worked. 

https://matrix.senecacollege.ca/~jkaur361/assignment2b/edifice-starter-code/index.html

But I haven't created a direct link in the matrix page.

*/

$.noConflict();//used but I think its nor working

$(document).ready(function(){
	
  $("#internships").click(function(){
	  $("#opportunity").load('internships.html');
	  $("#opportunity").fadein(6000);  	
  });
  $("#recent-graduates").click(function(){
	    $("#opportunity").load('recent-graduates.html');
	  	$("#opportunity").fadein(2000);
  });
  $("#experienced-hires").click(function(){
	    $("#opportunity").load('experienced-hires.html');
	  	$("#opportunity").fadein();
  });
 
});

