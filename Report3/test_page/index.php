<?php
   //include_once('includes/init.php');

   include_once('header.php');
   
   if(isset($_GET["page"])){
		if($_GET["page"] == 'home')
			include_once('home.php');
		elseif($_GET["page"] == 'faq')
			include_once('faq.php');
		elseif($_GET["page"] == 'about')
			include_once('about.php');
		elseif($_GET["page"] == 'projects')
			include_once('projects.php');
		elseif($_GET["page"] == 'contact')
			include_once('contact.php');
		else   
			include_once('home.php');
   }
   else 
	   include_once('home.php');
   
   include_once('footer.php');
 ?>