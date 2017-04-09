
<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 4/14/16
 * Time: 10:32 PM
 */

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    header("HTTP/1.1 403 Forbidden");
    exit;
}

require '../../vendor/autoload.php';
$getPost = (array)json_decode(file_get_contents('php://input'));


$sendgrid = new SendGrid($_ENV["SENDGRID_API_KEY"]); // PUT IN REAL API INTO HEROKU ENV Variables
$email = new SendGrid\Email();

$email
    ->addTo($_ENV["EMAIL_TO"])              // TODO: so should your send to email to avoid abuse
    ->addToName($getPost['toName'])
    //->addTo('bar@foo.com') //One of the most notable changes is how `addTo()` behaves.
    // We are now using our Web API parameters instead of the X-SMTPAPI header.
    // What this means is that if you call `addTo()` multiple times for an email,
    // **ONE** email will be sent with each email address visible to everyone.
    ->setFrom($getPost['sendFrom'])
    ->setFromName($getPost['fromName'])
    ->setSubject($getPost['subject'])
    ->setText($getPost['msg'])
    ->setHtml($getPost['msgHTML']);

//test
try {
    $sendgrid->send($email);
    echo json_encode(array('success' => true, 'message' => "done"));
} catch (\SendGrid\Exception $e) {
    $err = $e->getCode() . "\n";
    foreach ($e->getErrors() as $er) {
        $err = $err . $er . "\n";
    }
    echo json_encode(array('success' => false, 'message' => $err));
}

