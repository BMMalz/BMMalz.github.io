<?php

    //stdclass $Users(
    //Array ( [Users] => Array ( [0] => Array ( [username] => Jane [password] => jane999 )
      //                       
        //                      [1] => Array ( [username] => Joe [password] => joe123 ) ) )
    //{"Users":[{"username":"Jane","password":"jane999"},{"username":"Joe","password":"joe123"}]}
    //$testo = '{"Users":[{"username":"Jane","password":"jane999"},{"username":"Joe","password":"joe123"}]}';
    //echo json_encode($testo);
    //$testa = json_encode($Users);
    //echo($testa);
    
    //print_r($testa);
    //$teste = json_encode($testa);
    //print_r($testa);
    //echo(json_encode);
    //echo ($teste);
    //$name = $_GET["userInput"];
    //$pass = $_GET["passInput"];
    $login = $_GET["Input"];
    $logArray = explode (",", $login);
    $name = $logArray[0];
    $pass = $logArray[1];
    
    class Session{
        public $success = false;
        public $userbase = "";
    }
    
    class Users {
        public $username = "";
        public $password = "";
    }
    
    $Users0 = new Users();
    $Users0->username = "Jane";
    $Users0->password = "jane999";
    $Users1 = new Users();
    $Users1->username = "Joe";
    $Users1->password = "joe123";
    
    for ($i = 0; $i < 2; $i++)
    {
        if (${'Users' . $i}->username === $name){
            if (${'Users' . $i}->password === $pass){
                $Sess = new Session();
                $Sess->success = true;
                $Sess->userbase = array($Users0, $Users1);
                echo json_encode($Sess);
            }
        }
    }
    /*$Sess1 = new Session();
    $Sess1->userbase = array($Users0, $Users1);
    echo json_encode($Sess1);*/
    
    
?>