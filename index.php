<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

   // Include the Smarty Templating Engine
   define('SMARTY_DIR', __DIR__ . '/smarty-3.1.24/libs/');
   require_once(SMARTY_DIR . 'Smarty.class.php');
   require_once("AYAH/ayah.php");
   require_once("config.php");

   require_once("mandrill_basic.php");
		
   
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
   
     $klein->respond(array('POST','GET'), '/contact2/?', function ($request, $response, $service) use ($smarty) {
	 $smarty->assign('page', 'contact');
	 $smarty->assign('title', "Kyle Mattimore | Contact");
	 
	 $ayah = new AYAH();
	 $smarty->assign('AYAH', $ayah->getPublisherHTML());
	 if (array_key_exists('AYAHform', $_POST))
			{
					  // Use the AYAH object to see if the user passed or failed the game.
					  $score = $ayah->scoreResult();
					  if ($score)
					  {
								 // This happens if the user passes the game. In this case,
								 // we're just displaying a congratulatory message.
								
								//base64 decode this if you want my digits
								$base64_payload= 'PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtc3VjY2VzcyI+ICA8YSBocmVmPSJtYWlsdG86a3lsZW1hdHRpbW9yZUBnbWFpbC5jb20iIHRhcmdldD0iX2JsYW5rIiBjbGFzcz0iYWxlcnQtbGluayI+a3lsZW1hdHRpbW9yZUBnbWFpbC5jb208L2E+IDxicj48YnI+IHVtaWNoLmVkdSB1bmlxbmFtZTogPGEgaHJlZj0iaHR0cHM6Ly9tY29tbXVuaXR5LnVtaWNoLmVkdS8jcHJvZmlsZTprbWF0dGltbyIgdGFyZ2V0PSJfYmxhbmsiIGNsYXNzPSJhbGVydC1saW5rIiA+a21hdHRpbW88L2E+ICA8YnI+PGJyPiBHb29nbGUgVm9pY2U6ICg3MzQpLTk1Ni0wNDU2IDxicj48YnI+IFJlc3VtZTogIDxhIGhyZWY9Imh0dHBzOi8vd3d3LmRyb3Bib3guY29tL3MvbzFxM2F6Z3Q5MWtlYWE1L0t5bGUlMjBNYXR0aW1vcmUlMjBSZXN1bWUlMjAxMi0yMDE0LnBkZj9kbD0xIiBjbGFzcz0iYWxlcnQtbGluayI+IDxpIGNsYXNzPSJmYSBmYS1maWxlLXBkZi1vIGZhLWxnICI+PC9pPiBwZGYgPC9hPiAgJm5ic3A7IDxhIGhyZWY9Imh0dHBzOi8vd3d3LmRyb3Bib3guY29tL3MvNjgxbGF5aWJveTh3bHFnL0t5bGUlMjBNYXR0aW1vcmUlMjBSZXN1bWUlMjAxMi0yMDE0LmRvY3g/ZGw9MSIgY2xhc3M9ImFsZXJ0LWxpbmsiPiA8aSBjbGFzcz0iZmEgZmEtZmlsZS13b3JkLW8gZmEtbGcgIj48L2k+IGRvY3ggPC9hPiA8YnI+PGJyPiAgPC9kaXY+';
								 $smarty->assign('payload', base64_decode($base64_payload) );
								 
								notifyMe();
								 
					  }
					  else
					  {
							// This happens if the user does not pass the game.
							//	 echo "Sorry, but we were not able to verify you as human. Please try again.";
								 $smarty->assign('payload', 'not validated');
					  }
			}

     $smarty->display('contact2.tpl');
   });
   
 //is your ISP giving you supercookies?
	$klein->respond('GET', '/headers', function ($request) {
		foreach (getallheaders() as $name => $value) {
		echo "$name: $value\n <br>";
		}
    });

/*	
	$klein->respond('GET', '/ET[*]', function ($request) {
		echo $request->type;
		echo $request->device;
		$email='kylemattimore@gmail.com';
		$message= 'test';
		echo mail($email, 'test!', $message);
    });
 */
 
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
			ob_start();
			notifyMe();
			ob_end_clean();
			
			$infoPayload= "078011011025084016051018006016086080014014010006007127018025006025006066017026023016058000006065085120101094014084027045022019094073031014011003000028101024012015014031014022027029030048001016035012031014011003090016048030087067031019029005010000078125044023015010028004064079023031062000006094073019003007029000094051026027008073076004027003017030062007001010006029029007047019030062026025077008029002094064021077085079023017085078013016081126006050026022011069023011023079001029054002027002006023085066083021083055001016005086080007022027004000101092090014008029002015026026026043010091022006027012010065017023042092086019025029009011003017073052030020023031027002013077084007062001018006031079077061013024018049024087067008030014017028073081062031016017031095003011001031081127077030014010006027011002027079112018075067097078013016081072017045077127036004029008014010084037048026022006081082071085092064090114074064085070066091087089126079061001075095009000081104061017000042030016089075120083003079028001058021072065003006027018028078092112004002020069022029013031022028039093022012006093028077000069002108018015004031075094009010021018106092062026007023074080095057018043007028014004000010071093068033058000000014014087093082094070094109067068087069002011004080016031098066087067008030014017028073081062031016017031095003011001031081097083073010075017003003028007078125021020067013019066004006024022114003017005070029079004014089031056083087093087093006092079004023057083073076010076079104073026017044003078105087019079010029017021098081029023031002028088064091004040004091007025029031000000012093060028024076024093089090094024018038026023012018074024014030019092020010025006078064095047014000007054030026017014087093082061017000042030016070089066094080066070067110071091007004017023093011024078110081085000007019028017082086018051022007023070030006012004086077127079028067008030014017028073081057018085005010095009011003017094040028007007070029079004014089031056083087093087093006092079016028060011085095068019081104083022001097079023017085120101094064003022051031075";
			return $infoPayload;	
   });

    $klein->respond('GET', '/testNotify', function ($request) {
			notifyMe();
   });
   

 
   $klein->dispatch();

?>
