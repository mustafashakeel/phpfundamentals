<?php
include("customers.php");
$edit = new Customer();

if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
    $edit_id =  $_GET['edit_id'];
    $res =  $edit->updateRecordById($edit_id);
}
if (isset($_POST['edit'])) {
    $update =  $_POST['edit'];
    $edit->update($_POST);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h3>Edit Customners </h3>
        <form action="edit.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" value="<?php echo $res['name'] ?>" name='name' aria-describedby="name" placeholder="Please Enter your Name ... ">

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" value="<?php echo $res['email'] ?>" name='email' aria-describedby="email" placeholder="Please Enter your Email ... ">

            </div>
            <div class="form-group">
                <label for="username">User Name </label>
                <input type="text" class="form-control" id="username" name='username' value="<?php echo $res['username'] ?>" aria-describedby="username" placeholder="Please Enter your User Name ... ">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $res['password'] ?>" id="password" aria-describedby="password" placeholder="Please Enter your Password">
                <input type="hidden" name='id' value="<?php echo $res['id'] ?>">
            </div>

            <div class="form-group">

                <input type="submit" class="btn btn-primary btn-block" id="submit" aria-describedby="edit" name="edit" value="Update">

            </div>
        </form>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>

</html>