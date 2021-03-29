<!DOCTYPE HTML>
<html lang="en">
<head>
  <title> Garcia Harris's IT161 Portal Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css"/>
 </head>
 <body> 
     <header>
     <h1> Garcia's IT161 Website</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html" class="active">Welcome</a>
       <a href="elements.html">HTML Elements</a>
       <a href="aia.html">AIA</a>
       <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="flowchart.html">Flowchart</a>
       <a href="fp/index.html">Final Project</a>
       <a href="contact.php">Contact Garcia</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">☰</a>
     </nav>
     </header>
     
   <main class="wrapper">
	   <h2 class=subheader>Contact Garcia</h2>
	 <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "gargar1997@gmail.com".com";  //place your/your client's email address here
        $toName = "GARCIA HARRIS"; //place your client's name here
        $website = "Just Be Happy";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
	     <footer>
      <p><small>© 2021 by <a href="contact.php">Garcia Harris</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
     