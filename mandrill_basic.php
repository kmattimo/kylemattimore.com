<?php

require_once("mandrill-api-php/src/Mandrill.php");



function NotifyMe(){
global $mandrillKey;

try {
$mandrill = new Mandrill($mandrillKey);


//TODO: change to nicer string with variables included
$infoString = $_SERVER['REMOTE_ADDR'] . '<br><br>UA:  '. $_SERVER['HTTP_USER_AGENT'];

 if(isset($_SERVER['HTTP_REFERER'])) {
	$infoString = $infoString .  '<br><br>Referer:    '. $_SERVER['HTTP_REFERER'];
}  	

if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$infoString = $infoString .  '<br><br>'. $_SERVER['HTTP_X_FORWARDED_FOR'];
}

//echo $infoString;

    $message = array(
    'subject' => 'auth for kylemattimore.com',
    'from_email' => 'kmattimo@umich.edu',
    'from_name' => 'Robo-Servant',
    'html' => '<p>Login:</p>' . $infoString,
    'to' => array(array('email' => 'kmattimo@umich.edu', 'name' => 'kmattimo')),
    'merge_vars' => array(array(
        'rcpt' => 'kmattimo@umich.edu',
        'vars' =>
        array(
            array(
                'name' => 'FIRSTNAME',
                'content' => 'Recipient 1 first name'),
            array(
                'name' => 'LASTNAME',
                'content' => 'Last name')
    ))));

    $async = true;
    $ip_pool = null;
    $send_at = null;
    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
    print_r($result);
    /*
    Array
    (
        [0] => Array
            (
                [email] => recipient.email@example.com
                [status] => sent
                [reject_reason] => hard-bounce
                [_id] => abc123abc123abc123abc123abc123
            )
    
    )
    */
} catch(Mandrill_Error $e) {
    // Mandrill errors are thrown as exceptions
	
 //   echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
 
     throw $e;
}

}

?>