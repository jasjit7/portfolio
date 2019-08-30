/*
Hi betty, In this the date is being updated dynamically, so you don't need to change the code for date. I took the ideas from class example and fron w3schools website. 
For reference: https://www.w3schools.com/js/js_date_methods.asp
*/

/*
In HTML:

The date which has to be change is given a id="date-update" within a span tag.
To change the date dynamically, we can use javascript. And change the innerHTML i.e. the text to the updated date.

In Javascript:

To update the date on the about page dynamically, we have to create a variable d or anything.
That variable is assigned the new Date(), which is the date on the computer. 
An array is assigned to the weekdays and months
And finally with document.getElement method, taking the id we assigned to span i.e. date-update, the date on about page is updated dynamically.

*/
/*

var d = new Date();
document.getElementById("date-update").innerHTML = d.toDateString();

The above method can directly update the date, but toDate string can convert it to the abbrevetions not the full names.

*/

var d = new Date();
var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

document.getElementById("date-update").innerHTML =  days[d.getDay()] + ", " + months[d.getMonth()] + " " + d.getDate() + " , " + d.getFullYear();












