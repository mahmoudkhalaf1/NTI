<?php
$elec ='';
switch ($elec) {
    case ($elec >0 && $elec <=50):
        echo ('uints ='.$elec*3.5);
        break;
    case ($elec >50 && $elec <=150):
        echo ('uints ='.$elec*4);
        break;
    case ($elec >150):
        echo ('uints ='.$elec*6);
        break;
    
    default:
        echo'error';
        break;
}



?>