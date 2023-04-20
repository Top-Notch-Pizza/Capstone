<?php
//include auth_session.php file on all user panel pages
require('db.php');
include("auth_session.php");
$email=$_SESSION['email'];
use google\appengine\api\mail\Message;

// Notice that $image_content_id is the optional Content-ID header value of the
// attachment. Must be enclosed by angle brackets (<>)

// Pull in the raw file data of the image file to attach it to the message.
$image_data = file_get_contents('assets/img/about.jpg');

try {
    $message = new Message();
    $message->setSender($email);
    $message->addTo('to@example.com');
    $message->setSubject('Example email');
    $message->setTextBody('Hello, world!');
    $message->addAttachment('assets/img/image.jpg', $image_data);
    $message->send();
    echo 'Mail Sent';
} catch (InvalidArgumentException $e) {
    echo 'There was an error';
}
?>
