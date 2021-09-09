<?php 


function validate($input,$num){
$status = true;

 switch ($num) {
     case 1:
         # code...
         if(empty($input)){
           $status = false;
         }
         break;

    case 2: 
        if(!preg_match('/^[a-zA-Z\s]*$/',$input)){
            $status = false;
        }
       break;

    case 3: 
        # code 
        if(!filter_var($input,FILTER_VALIDATE_EMAIL)){
            $status = false;
        } 
        break; 

        case 4: 
            # code 
            if(!filter_var($input,FILTER_VALIDATE_URL)){
                $status = false;
            } 
            break; 


    case 5: 
        $allowedExt = ['png','jpg','jpeg'];

        $extArray = explode('/',$input);
    
        if(!in_array($extArray[1],$allowedExt)){
            $status = false;
        }


    case 6: 
        if(strlen($input)<5){
            $status = false;
            echo 'password riquerd > cher';
          }
          break;

    
    
        // if(!in_array($extArray[1],$allowedExt)){
        //     $status = false;
        // }

      break;


   }
  
    return $status;

}





function Clean($input){
  
    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);

     return $input;
}





?>