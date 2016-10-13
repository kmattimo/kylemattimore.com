<?php

  //only in development
  // error_reporting(E_ALL);
  // ini_set('display_errors', 1);

 // Include the Smarty Templating Engine
 // define('SMARTY_DIR', __DIR__ . '/smarty-3.1.24/libs/');
 // require_once(SMARTY_DIR . 'Smarty.class.php');
 require_once __DIR__ . '/vendor/autoload.php';
 $klein = new \Klein\Klein();
  // use Symfony\Component\Yaml\Yaml;
  // $SuperSecretArray = Yaml::parse(file_get_contents('parameters.yml'));
  // $mandrillKey = $SuperSecretArray["parameters"]["mandrill_key"];
  // $devEmail = $SuperSecretArray["parameters"]['dev_email'];
//for local development without env
if(file_exists('config.php')) {
  require_once('config.php');
  }

		
 $smarty = new Smarty();
 $smarty->setTemplateDir(__DIR__ . '/templates/templates/');
 $smarty->setCompileDir(__DIR__ . '/templates/templates_c/');
 $smarty->setConfigDir(__DIR__ . '/templates/configs/');
 $smarty->setCacheDir(__DIR__ . '/templates/cache/');


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
   

   
 //is your ISP giving you supercookies?
	$klein->respond('GET', '/headers', function ($request) {
		foreach (getallheaders() as $name => $value) {
		echo "$name: $value\n <br>";
		}
    });

 
 //base64 encoding should stop source code data mining
	$klein->respond(array('POST','GET'), '/obfuscate/?', function ($request, $response, $service) use ($smarty) {
	 $smarty->assign('page', 'contact');
	 $smarty->assign('title', "base64");
	 
	 if (array_key_exists('string', $_POST))
		{
		$smarty->assign('result', base64_encode( $_POST["string"] ) );
		
		}
	 
	 $smarty->display('obfuscate.tpl');
    });

	
   
   $klein->respond('GET', '/contact/info', function ($request) {
			// ob_start();
			// notifyMe();
			// ob_end_clean();
			
			$infoPayload= "078011011025084016051018006016086080014014010006007127018025006025006066017026023016058000006065085082083003079028001058021072065006019006014027027073052010025006006019027022006025028045022053004006019006014065023028050081085023010000008007027073081000017025002005025077066012024018044000072065010030010016027089031054029030065085025022014010025018043007028014004000010034008025018054031091000004031083077014074083099017007093087016029092079084006050026022011069023011023079001029054002027002006023085066083021083055001016005086080007022027004000101092090014008029002015026026026043010091022006027012010065017023042092086019025029009011003017073052030020023031027002013077084007062001018006031079077061013024018049024087067008030014017028073081062031016017031095003011001031081127077030014010006027011002027079112018075067075078013016081072017045077085036004029008014010084037048026022006081082071085092064090114074064085070066091087089084079061001075095009000081066061017000042030016089075082083003079028001058021072065003006027018028078092112004002020069022029013031022028039093022012006093028077086021006052031016012024020012016021005011109092062026007023074080095057018043007028014004000010071093068033058000000014014092031006009075023051078068065075017003003028007078125018025006025006066014006026024125077085095002082012014014007000098081019002075020014079009029031058094005007013095000066009021094051020085065085078064011081084003059021085095068019081066079072017045077073001025076079066083091004058031025093";
			return $infoPayload;	
   });

    $klein->respond('GET', '/testNotify', function ($request) {
			// notifyMe();
   });
   
 
   $klein->dispatch();
?>
