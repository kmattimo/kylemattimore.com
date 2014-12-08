<?php

   // Include the Smarty Templating Engine
   define('SMARTY_DIR', __DIR__ . '/Smarty-3.1.14/libs/');
   require_once(SMARTY_DIR . 'Smarty.class.php');
   $smarty = new Smarty();

   $smarty->setTemplateDir(__DIR__ . '/templates/templates/');
   $smarty->setCompileDir(__DIR__ . '/templates/templates_c/');
   $smarty->setConfigDir(__DIR__ . '/templates/configs/');
   $smarty->setCacheDir(__DIR__ . '/templates/cache/');



   // Setup the Routing Framework
   require_once __DIR__ . '/vendor/autoload.php';
   $klein = new \Klein\Klein();


   /* Define routes here */

   $klein->respond('GET', '/', function ($request, $response, $service) use ($smarty) {
	 $smarty->assign('page', 'home');
	 $smarty->assign('title', "Kyle Mattimore");
	 
     $smarty->display('index.tpl');
   });
   
   $klein->respond('GET', '/projects/?', function ($request, $response, $service) use ($smarty) {
	 $smarty->assign('page', 'projects');
	 $smarty->assign('title', "Kyle Mattimore | Projects");
	 
     $smarty->display('projects.tpl');
   });
   
   $klein->respond('GET', '/contact/?', function ($request, $response, $service) use ($smarty) {
	 $smarty->assign('page', 'contact');
	 $smarty->assign('title', "Kyle Mattimore | Contact");
	 
     $smarty->display('contact.tpl');
   });
   
   $klein->respond('GET', '/contact/info', function ($request) {
   
			//array	
					//email
					//uniqname
					//phone number
					//resume link (doc)
					//resume link (pdf)
			//make cleaner decrypt function

			
			//obfuscated contact information (simple XOR cipher to protect the info when the source is public, on github etc)
			return "078014066007006022057078087014010027003022000078024038031016014010006027011002027001058051018014010027003076012027030125083001002025021010022082086044061031020013000080081009022024022050018001023002031000016010052020050018028015069017000015083091018097083073001025076101023002029016055093016007030082026012006005029062030016089075078014066007006022057078087011031006031017085091092050016026014006007001011027013093042030028000003092010006026091080047001026005002030010088004025018043007028014004080079022014006020058007072065052016003003001031081097024024002031006006015000072092062077085095009000081104040027028056031016067061029006001010078083119068070087066095086087089089067107070067105";
   });
   
   

 
   $klein->dispatch();

?>
