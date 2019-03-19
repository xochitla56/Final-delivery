<?php
$destiny = "xochitl.alonso@pcc.edu";
$options = $_POST['options'];
$myName = $_POST['myName'];
$myemail = $_POST['myemail'];
$myemname = $_POST['myemname'];
$myphone = $_POST['myphone'];
$gender = $_POST['gender'];
$mydate = $_POST['mydate'];
$events = $_POST['events'];
$eventsu = $_POST['eventsu'];
$mycomments = $_POST['mycomments'];

$registration = "As: " . $options . "\nChoice: " . $myName . "\nName: " . $myemail . "\nEmail: " .
    $myemname . "\nContact:". $myphone . "\ncontactPhone: " . $gender . "\nGender: " . $mydate . "\nDateOfBirth: " .
    $events . "\nEventSaturday: " . $eventsu . "\nEventSunday: " . $mycomments . "\nComments: " ;
mail($destiny,"Registration", $registration);
header("Location:success.html");

?>











