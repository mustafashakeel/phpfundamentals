<?php


  include("class.php");

  $objStudent = new Student();

  if(isset($_POST['submit']))
  {
      $objStudent->Add();
  }

  if(isset($_GET['del_id']) && !empty($_GET['del_id'])) 
  {
    $del_id = $_GET['del_id'];
    $objStudent->delete($del_id);
  }
  
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<div class="card text-center" style="padding:15px;">
  <h4>PHP: CRUD using OOPS Bind Pramameter</h4>
</div><br> 

<div class="container">
 <div class="row">

    <div class="col-sm-4">
    <h4 class="text-center  ml-4 mb-5">Insert Records</h4>
     <form  action="home.php " method="POST">
        <div class="form-group">
     
        <input type="text" class="form-control  mb-4" name="name" placeholder="Enter name" required="">
        </div>
        <div class="form-group">
      
        <input type="email" class="form-control  mb-4" name="email" placeholder="Enter email" required="">
        </div>
        <div class="form-group">
     
        <input type="text" class="form-control mb-4" name="username" placeholder="Enter username" required="">
        </div>
        <div class="form-group">
      
        <input type="password" class="form-control mb-4" name="password" placeholder="Enter password" required="">
        </div>
        <input type="submit" name="submit" class="btn btn-primary btn-block" style="float:right;" value="Submit">
    </form>
    </div>

  <div class="col-sm-8">
    <h4 class="text-center  ml-4  mb-5">View Records</h4>
    <table class="table table-hover table-stripped table-bordered ml-4 ">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php 
            $std = $objStudent->displayData(); 

            foreach ($std as $student) {
            ?>
            <tr>
            <td><?php echo $student['id'] ?></td>
            <td><?php echo $student['name'] ?></td>
            <td><?php echo $student['email'] ?></td>
			<td><?php echo $student['username'] ?></td>
            <td><?php echo $student['password'] ?></td>
            <td><a href="home.php?del_id=<?php echo $student['id']; ?>">
                   <i class="fa fa-trash" style="    color: red;"></i>
                </a>
                <a href="edit.php?update_id=<?php echo $student['id']; ?>">
                   <i class="fa fa-edit "></i>
            </tr>
        <?php } ?>
        </tbody>
    </table>
  </div>
 </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>