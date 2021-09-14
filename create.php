<?php 
require  './helper/dbConnection.php';
require './helper/help.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){


    $title     = CleanInputs($_POST['title']);
    $des   = CleanInputs($_POST['des']);
    $start = CleanInputs($_POST['start_date']);
    $end = CleanInputs($_POST['end_date']);
   
  
    $errors = [];

    if(!validate($title,1)){
     $errors['title'] = "Field Required.";
    }

    if(!validate($des,1)){
       $errors['des'] = "Field Required.";
       }


    if(!validate($start,1)){
      $errors['start_date'] = "Field Required.";
      }

    if(!validate($end,1)){
      $errors['end_date'] = "Field Required.";
      }
   

    if(count($errors) > 0){

        foreach($errors as $key => $value)
        {
            echo '* '.$key.' : '.$value.'<br>';
        }
    }else{

       $sql = "insert into todo (title,des,start_date,end_date) values ('$title','$des','$start','$end')";
    

     $op = mysqli_query($con,$sql);

     if($op){
         echo 'Registration done';
     }else{
         echo 'Error in Register';
       }
    }

}



?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>create form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>form</h2>
  <form method="post" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  enctype ="multipart/form-data">

  

  <div class="form-group">
    <label for="exampleInputtitle">title</label>
    <input type="text" name="title"  class="form-control" id="exampleInputtitle" aria-describedby="" placeholder="Enter title">
  </div>


  <div class="form-group">
    <label for="exampleInputdescreptoin">descreption</label>
    <input type="text" name="des" class="form-control" id="exampleInputdescretion" aria-describedby="emailHelp" placeholder="descreption">
  </div>

  <div class="form-group">
    <label for="exampleInputstart">start date</label>
    <input type="date" name="start_date"   class="form-control" id="exampleInputstartdate" placeholder="start date">
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">end date</label>
    <input type="date" name="end_date"   class="form-control" id="exampleInputeaddate" placeholder="end date">
  </div>
 
  <div >
  <button type="submit" class="btn btn-primary ">create</button>
  </div>
</form>
</div>



</body>
</html>