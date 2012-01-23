------------------------------------------
-------- AJAX PHP Contact Form -----------
------------------------------------------

-------- Version - 1.3 -------------------
------------------------------------------
-------- Christopher Balchin -------------
-------- Mike Jolley ---------------------
-------- Author - Jigowatt Ltd -----------
-------- URL - www.jigowatt.co.uk --------
------------------------------------------


-------- Description ---------------------


A self-contained AJAX powered HTML / PHP contact form, easily integrated with already formed HTML or PHP pages.


- File List

- /assets
--- ajax-loader.gif
--- error.gif
--- success.gif

- /js
--- jquery.jigowatt.js

- index.html
- contact.php

- /style
--- stylesheet.css


-------- Installation --------------------


Below you will find documentation for stand-alone install or inclusion into your website.



- Step 1

Unzip the files, be sure to check it's contents against the above file list.

-- NOTE --

Here at Jigowatt, we use a selection of Macintosh Desktops and Macbooks, occasionally Windows doesn't like the Files we zip up! If your download seems corrupt, please contact chris.balchin@jigowatt.co.uk and we'll send over a fresh copy of them for you.


-- BACKUP BACKUP BACKUP --

It is important you keep a fresh copy of the script files incause of corruption, we do not offer
ongoing support for this script.


- Step 2

This might look like a simple step, but it's an important one! Read carefully.

To include the form on your existing page, Copy the code between the opening <body> and closing </body> tags and Paste it into the relevant place on your existing page.

-- This Contact Form can be integrated into any HTML or PHP page.

If your integrating into an existing PHP page, be sure to end the PHP code ?> paste the above then start your PHP tags again <?php


- Step 3

In the header of your website be sure to include the contact form CSS Style and Javascript files.

Copy the code below between your <head> and </head> tags either in your 'header' file or the top of the document.


	<link href="style/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->


Suggestion:

Instead of including the CSS Style line above, why not copy the style for the contact page into your existing stylesheet, merging / removing any conflicts i.e. body or html tags?

If you don't fancy merging the two, make sure you open up the file style/contact.css and Remove the <body> and <html> tags so they don't conflict with your existing ones! (See Optional Step 6)


- Step 4

File contact.php Aprox Line 55:

$address = "example@themeforest.net";

Edit this to contain the email address that you want the form information sent to, this is the main and important confirguration option.


- Step 5

Upload the changed and configured files to your server.


- Step 6 (Optional)

Remove any conflicting CSS tags.

For the demonstration we've had to use body and html tags for obvious style reasons. If you include the contact form style, these tags will 'overwrite' your existing ones. Just simply remove the following from the style/contact.css file.

	/* Remove this when pasting into your Stylesheet! */

	html, body { border: 0; margin: 0; padding: 0; }
	body { font: 62.5% "Lucida Grande", "Lucida Sans Unicode", Arial, sans-serif; min-width: 100%; min-height: 101%; color: #666; background:#eee; }

	/* END Remove This */

With this removed you should have no Style conflict issues!


- Finished, how easy was that?!

Note: Send a test email using the form to test the installation. Enjoy the script.

-------- CHANGE LOG ----------------------

13/11/2011 - v1.3	100% xHTML W3C valid. Change spaces to tabs. Add .me email addresses for validation.
31/10/2011 - v1.2.2	Fix "Array" as subject on lower IE versions
05/05/2011 - v1.2.1	Fixed JS button disabled error
11/04/2011 - v1.2	Fixed undefined variable
04/03/2011 - v1.1.2	Removed un-needed variable
31/10/2010 - v1.1	Improved mailing/utf-8 character support
22/07/2009 - v1.0	Released for Public Sale

-------- FAQ -----------------------------

There are several other configuration options in contact.php these are highlighted and described
near each line similar to the following.

// Configuration option.
// Description and example of the configured option.

Feel free to change these options but be sure to BACKUP before you edit the script files.

