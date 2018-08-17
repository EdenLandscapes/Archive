<?php

$emailSubject = $subject;
$emailBody .= "First Name: " . $realname . "\n";
$emailBody .= "Surname: " . $surname . "\n";
$emailBody .= "Email: " . $email . "\n\n";
$emailBody .= $realname . "'s comments:\n\n" . $comments;

$emailSubjectUser = $subjectUser;
$emailBodyUser .= $realname . "\n\n";
$emailBodyUser .= "Thanks for your comments. We'll try to get back to you as soon as we can.\n\n";
$emailBodyUser .= "In the mean time, this is what you sent us...\n\n";
$emailBodyUser .= "Your first name: " . $realname . "\n";
$emailBodyUser .= "Your surname: " . $surname . "\n";
$emailBodyUser .= "Your email address: " . $email . "\n";
$emailBodyUser .= "Your comments:\n" . $comments . "\n\n";
$emailBodyUser .= "-----------------------------\n";
$emailBodyUser .= "Eden Landscapes\n\n";
$emailBodyUser .= "e: info@edenlandscapes.biz\n";
$emailBodyUser .= "w: http://www.edenlandscapes.biz/\n";
$emailBodyUser .= "t: +44 (0)121 444 5595";

//Send email to recipient
mail($recipient, $emailSubject, $emailBody, "From: $email");

//Send email to user
mail($email, $emailSubjectUser, $emailBodyUser, "From: $recipient");

//Redirect to thank you page
header("location: thanks.html");

?>