<?php

require_once("mandrill-api-php/src/Mandrill.php");



function NotifyMe(){
global $mandrillKey;

$mandrill = new Mandrill($mandrillKey);
$message = array(
    'subject' => 'Test message',
    'from_email' => 'you@yourdomain.com',
    'html' => '<p>this is a test message with Mandrill\'s PHP wrapper!.</p>',
    'to' => array(array('email' => 'recipient1@domain.com', 'name' => 'Recipient 1')),
    'merge_vars' => array(array(
        'rcpt' => 'recipient1@domain.com',
        'vars' =>
        array(
            array(
                'name' => 'FIRSTNAME',
                'content' => 'Recipient 1 first name'),
            array(
                'name' => 'LASTNAME',
                'content' => 'Last name')
    ))));

$template_name = 'Stationary';

$template_content = array(
    array(
        'name' => 'main',
        'content' => 'Hi *|FIRSTNAME|* *|LASTNAME|*, thanks for signing up.'),
    array(
        'name' => 'footer',
        'content' => 'Copyright 2012.')

);

print_r($mandrill->messages->sendTemplate($template_name, $template_content, $message));


echo "asdfasdf";

}

?>