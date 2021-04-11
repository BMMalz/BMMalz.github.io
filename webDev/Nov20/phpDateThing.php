<?php
class User {
    public $firstname = "";
    public $lastname = "";
    public $birthdate = "";
}

$user = new User ();
$user->firstname = "Joe";
$user->lastname = "Schmoe";
$user->birthdate = new DateTime();
echo json_encode ($user);
?>