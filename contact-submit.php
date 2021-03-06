<?php

// configure
$from = 'http://rosenivanov.co.uk';
$sendTo = 'rosenplamenov93@gmail.com';
$subject = 'New message from your contact form on rosen-ivanov.co.uk';
$fields = array('name' => 'Customer Name ', 'subject' => 'Subject ', 'phone' => 'Phone ', 'email' => 'Email ', 'message' => 'Message '); // array variable name => Text to appear in the email
$okMessage = 'Your message has been sent successfully. Thank you, I will get back to you as soon as possible!';
$errorMessage = 'There was an error while submitting the form. Please try again later';

// let's do the sending

try
{
    $emailText = "You have new message from contact form\n=======================================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );
    
    mail($sendTo, $subject, $emailText, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
else {
    echo $responseArray['message'];
}
