<?php
  
  require './helper/dbConnection.php';
  //require './helper/checkLogin.php';

// if($_SESSION['User']['role'] == 1){

//   $sql = "select * from students";

// }elseif($_SESSION['User']['role'] == 2){

//     $sql = "select * from students where id=".$_SESSION['User']['id'];
    
// }
$sql = "select * from students";
  $op  =  mysqli_query($con,$sql);


?>


<!DOCTYPE html>
<html>

<head>
    <title>PDO - Read Records - PHP CRUD Tutorial</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
        .m-r-1em {
            margin-right: 1em;
        }

        .m-b-1em {
            margin-bottom: 1em;
        }

        .m-l-1em {
            margin-left: 1em;
        }

        .mt0 {
            margin-top: 0;
        }
    </style>

</head>

<body>

   
    <div class="container">


        <div class="page-header">
            <h1>Read Users </h1> 
             
            <br>

     <?php 
     
        if(isset($_SESSION['Message'])){
            echo $_SESSION['Message'];
            unset($_SESSION['Message']);
        }
     
     ?>

      



        <table class='table table-hover table-responsive table-bordered'>
           
            <tr>
                
                <th>ID</th>
                <th>title</th>
                <th>descreption</th>
                <th>start data</th>
                <th>descreption</th>
                <th>end data</th>

            </tr>

<?php 
      $i = 0;
      while ($data = mysqli_fetch_assoc($op)) {
?>
            <tr>
               <td><?php echo ++$i;?></td>
               <td><?php echo $data['id'];?></td>
               <td><?php echo $data['title'];?></td>
               <td><?php echo $data['des'];?></td>
               <td><?php echo $data['start_date'];?></td>
               <td><?php echo $data['end_deta'];?></td>

                <td>
                    <a href='delete.php?id=<?php echo $data['id'];?>' class='btn btn-danger m-r-1em'>Delete</a>
                   
                </td>

            </tr>

<?php } ?>

            
        </table>

    </div>
   


    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   

</body>

</html>



