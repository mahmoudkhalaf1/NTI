<?php


function test($input){
  
    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);
  
  
     return $input;
}

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test($_POST["name"]);
    $email = test($_POST["email"]);
    $password = test($_POST["password"]);
    $adress = test($_POST["adress"]);
    $linkedin = test($_POST["linked_in"]);
    $gender = test($_POST["gender"]);

    $errorMessages = [];

    



    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $errorMessages['Name'] = "Field Required";
        } else {
          $name = test($_POST["name"]);
        }
      
        if (empty($_POST["email"])) {
            $errorMessages['email'] = "Field Required";
        } else {
            $email = test($_POST["email"]);
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errorMessages['email'] = "Field Required";
            }
        }
        if (strlen($password) < 6) {
            $errorMessages['password'] =  "Length Must be > 5 ch";
        } else {
          $password = test($_POST["password"]);
        }
      
        if (empty($_POST["adress"])) {
            $errorMessages['adress'] = "Field Required"; }
            if (strlen($adress) < 10) {
                $errorMessages['adress'] =  "Length Must be > 10 ch";
            }
        else {
          $adress = test($_POST["adress"]);
        }
      
        
        if (empty($_POST["linked_in"])) {
            $errorMessages['linked_in'] = "Field Required";
        } else {
            $email = test($_POST["linked_in"]);
            
            if (!filter_var($email, FILTER_VALIDATE_URL)) {
                $errorMessages['linked_in'] = "Field Required";
            }
        }
    
        if (empty($_POST["gender"])) {
            $errorMessages['gender'] = "Field Required";
        } else {
          $gender = test($_POST["gender"]);
        }
        if(count($errorMessages) > 0){
        

       foreach($errorMessages as $key => $value){

           echo '* '.$key.' : '.$value.'<br>';
       }


    }else{
    
         echo 'Valid Data';
   
      
}

if(count($errorMessages) > 0){
    
   foreach($errorMessages as $key => $value){

       echo '* '.$key.' : '.$value.'<br>';
   }


}else{

     echo 'Valid Data';

}

 }
  }

?>

