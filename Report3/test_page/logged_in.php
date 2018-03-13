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
		elseif($_GET["page"] == 'thisproject')
			include_once('thisproject.php');
		elseif($_GET["page"] == 'tasklist')
			include_once('tasklist.php');
		elseif($_GET["page"] == 'myprojects')
			include_once('myprojects.php');
		elseif($_GET["page"] == 'forum')
			include_once('forums.php');
		else   
			include_once('home.php');
   }
   else 
	   include_once('myprojects.php');
   
   include_once('footer.php');
 ?>