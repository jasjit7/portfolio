# :exclamation: DON'T FORGET TO W3C VALIDATE YOUR HTML :exclamation:
# SENECA WEBMASTER PROGRAM - SUMMER 2019 SESSION
## WWW 105 - Assignment #2
### Instructor:	Lise Nickerson 
### Title:  jQuery Edifice
### Assigned:  Friday, July 26, 2019 
### Due date:  Tuesday, August 6, 2019 at 9am
### Value:  Out of 40 marks, worth 40% of final grade for WWW 105

## BRIEF:
You have been contracted by the architecture firm, EDIFICE, to enhance their existing website.  They are keen on using jQuery, so you must include the library and code using jQuery conventions.  The site itself, including all HTML (which has existing validation errors), CSS, and images, has been made available to you.  You are allowed to alter any HTML as you see fit.  You must fulfill their jQuery requirements, fix validation errors, and document your solutions.  

## INSTRUCTIONS:
1. At the top of the page, they want the banner hero image to be replaced with a carousel/slideshow.  There are 4 pictures with the ‘slider’ prefix in the img folder that need to be included.  You can use a plugin (plain javascript or jQuery), or you can write your own jQuery script.  If using a plugin, they do not want to see it implemented with default values, so you must customize it.  Possibilities:  speed/duration, infinite looping, autoplay, etc.

2. Under “Current Projects”, they like how clicking on any of their projects will link to the full image, but they do not want that image to open in a new page.  Instead, they want the image to open in a lightbox/modal.  You can use a plugin (plain JS or jQuery).  As with Item #2, you must customize it so that it is different from the plugin’s default values.

3. Under “Careers”, they want the different links for job seekers to load their respective content into the <div id=”opportunity”></div> which is on the right.  This must be accomplished using the .load() function – do not use a plugin.  Additionally, they want this content to appear with a sliding or fading effect from the jQuery library.  Alternatively, you may leverage the Animate CSS library as long as you initialize it using jQuery. 

4. Under “Contact Us”, the subscription form should require that each field is complete before  it is submitted.  Do not use the required attribute or the type=”email” on the email input in the html – use jQuery instead.  Do not use a plugin for this. 
* If a field is left blank, the form should NOT be submitted.
* If any field is left blank, the user should get a warning message near the specific field that wasn’t filled out and a style should change to visually indicate to the user which field needs to be filled out.  The checkbox itself does not need to be styled, but you do need to indicate to the user if they have left it unchecked.
* If all fields were blank, and then a user fills in one of them, the one that is filled in should no longer warn them.

5. For each of the previous four steps, document your thinking process via code comment.  Items to include:
* Links to the plugins’ websites or references to other materials where a plugin was not used.  If you used code snippets that you discovered online, provide a detailed explanation of how they work, to the best of your understanding.
* Which version of jQuery each plugin depends on, if different from the most recent version of the library, and if there were other dependencies too.
* Notes on how you implemented your solutions.  This does not need to be exhaustive, but should be a helpful guide for anyone maintaining the website in the future. (This includes yourself – will you understand what you did when you look at this code six months from now?)

## RESTRICTIONS:
* You may not use components from a framework such as Bootstrap.  If you have any doubts on the acceptability of a plugin, please ask your instructor.
* If you use anyone else’s code or a plugin, it must be free to use for commercial purposes, so make sure you check the license information.  EDIFICE’s legal team will be checking too!

## SUBMISSION DETAILS:
This is not a group assignment.  Submit your individual work by uploading it to a GitHub repository which your instructor will invite you to.  All your source files must be accessible upon download as items cannot be graded if they are not present.  Failure to upload this assignment to the GitHub repository on time will result in a grade of zero. Do not post the final version of your assignment on your portfolio until you receive permission from the instructor.  (Do not upload zipped plugin folders to GitHub as it may trigger security settings.)

## GRADE BREAKDOWN:

**Slider (8 marks)**
* Change the static hero/banner image to a slider.  
* Default values of the plugin, if using, are customized

**Lightbox (8 marks)**
* Add a lightbox/modal type of plugin.
* Default values of the plugin are customized

**Load Content/ AJAX (8 marks)**
* New content is loaded without needing to refresh page.
* New content appears with an effect.

**Form Validation (8 marks)**
* A message and style change warn if a user has left a field blank.
* If the user makes a correction, the warnings go away.

**Documentation (8 marks)**
* Links to plugins and other references are present.
* Your thinking process is thorough and well-explained.

**Deductions**
* Validation errors (-0.8 marks = 2% each).  
* Non-adherence to coding conventions. 

**TOTAL:**	40 Marks

Late Policy: All late assignments will be given a grade of zero. For a full discussion of the late policy see http://webmaster.senecacollege.ca/class/docs/webmaster-late-assignment-policy.pdf.

Plagiarism: There are serious penalties for cheating and plagiarism, and you are expected to follow our Academic Integrity Policy: https://www.senecacollege.ca/about/policies/academic-integrity-policy.html
