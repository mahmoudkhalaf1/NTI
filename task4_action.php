<?php 
session_start();
require 'task_help.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){

   $name = Clean($_POST['name']);
   $email= Clean($_POST['email']);
   $password = Clean($_POST['password']);
   $linkedin = Clean($_POST['linked_in']);
   $adress = Clean($_POST['adress']);
   $gender = Clean($_POST['gender']);
   
   # FILE INFO ... 
   $filetmp_path = $_FILES['file']['tmp_name'];
   $filename     = $_FILES['file']['name'];
   $filesize     = $_FILES['file']['size'];
   $filetype     = $_FILES['file']['type'];

   # TO STORE ERRORS ... 
   $errors = [];

   if(!validate($name,1)){
     $errors['name'] = "Field Required";
   
    }elseif(!validate($name,2)){
     $errors['name'] = "Invalid String";
    }



    
   if(!validate($email,1)){
    $errors['email'] = "Field Required";
  
   }elseif(!validate($email,3)){
    $errors['email'] = "Invalid Email";
   }

   if(!validate($linkedin,1)){
    $errors['linked_in'] = "Field Required";
  
   }elseif(!validate($linkedin,4)){
    $errors['linked_in'] = "Invalid linkedin";
   }



   if(!validate($filename,1)){
    $errors['flie'] = "Field Required";
  
   }elseif(!validate($filetype,5)){
    $errors['flie'] = "Invalid Extension";
   }


   if(!validate($password,1)){
    $errors['password'] = "Field Required";
  
   }elseif(!validate($password,6)){
    $errors['file'] = "Invalid error";
   }





   if(count($errors) > 0){

    foreach($errors as $key => $value){
        echo '* '.$key.' : '.$value.'<br>';
    }
    
    }else{
       


        $extArray = explode('/',$filetype);
        $finalName =   rand().time().'.'.$extArray[1];


        $desPath = './uploud/'.$finalName;
         
         if(move_uploaded_file($filetmp_path,$desPath)){
  
          $_SESSION['student'] = ['name' => $name , 'email' => $email , 'file' => $finalName , 'adress'=>$adress ,'linked_in'=>$linkedin, 'gender'=>$gender ,'password'=>$password];

         }else{
             echo 'Error  Uploading ';
         }










    }
   
}

















  ?>


 <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
  <form method="post" action="<?php  echo $_SERVER['PHP_SELF'];?>"  enctype ="multipart/form-data">

  

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div>
  <label for="exampleInputadress">adress</label>
    <input type="adress" name="adress"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter adress">
  </div>
  <div>
  <label for="exampleInputalikedin">linkedin</label>
    <input type="url" name="linked_in"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter linkedin">
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
  <label class="form-check-label" for="gender">
    male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" >
  <label class="form-check-label" for="gender">
   femle
  </label>
</div>


<div>
  <label for="exampleInputafile">uploud file</label>
    <input type="file" name="file"  class="form-control" >
  </div>
</div>
  <div class="mt-4">
  <button type="submit" class="btn btn-primary ">Submit</button>
  </div>

</form>


</div>

