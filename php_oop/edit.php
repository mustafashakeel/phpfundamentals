
<?php 

  include("class.php");

  $objStudent = new Student();

  if(isset($_GET['update_id']) && !empty($_GET['update_id']))
  {
      $update_id = $_GET['update_id'];
      $res = $objStudent->displyaRecordById($update_id );
  }
  
  if(isset($_POST['update'])) {
    
    $update = $_POST['update'];
    $objStudent->update($_POST);
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
  <div class="col-sm-8">
    <h4 class="text-center  ml-4  mb-5">Update Records</h4>
    <table class="table table-hover table-bordered ml-4 ">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>User Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
		<form action="edit.php" method="POST">
            <tr>
             <?php 
               //$objStudent->update();
                ?>
            <td><?php echo $res['id']; ?></td>
            <td><input type="text" name="name" value="<?php echo $res['name']; ?>"></td>
            <td><input type="text" name="email" value="<?php echo $res['email']; ?>"></td>
            <td><input type="text" name="username" value="<?php echo $res['username']; ?>"></td>
            <td><input type="text" name="password" value="<?php echo $res['password']; ?>"></td>
			<input type="hidden" name="id" value="<?php echo $res['id']; ?>">
            <td><input type="submit" name="update" value="update">
              <i class="fas fa-check-circle"></i></td>
              <?php ?>
            </tr>
        <?php  ?>
		  </form> 
        </tbody>
    </table>
  </div>
 </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>