<html lang="en">
<head>
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
  <form method="post" action="action.php"  enctype ="multipart/form-data">

  

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
</div>
  <div class="mt-4">
  <button type="submit" class="btn btn-primary ">Submit</button>
  </div>

</form>


</div>

