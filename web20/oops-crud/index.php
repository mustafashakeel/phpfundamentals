<?php
include('customers.php');

$cust = new Customer();


if (isset($_POST['submit'])) {
    $cust->addCustomer();
}

if (isset($_GET['del_id']) && !empty($_GET['del_id'])) {
    $del_id = $_GET['del_id'];

    $cust->delete($del_id);
}
// Create a HTML FORM 
// Create Fields for 1. name 2 email 3 . username 4 password and SUBMIT 

// write Insert SQL
// 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOPS CRUD Application </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <!-- Insert Records  -->
        <!-- Create Fields for 
    1. name 
2. Email 
3. User name 
4 password 
5. submit 
-->
        <h3>Add Customners </h3>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name='name' aria-describedby="name" placeholder="Please Enter your Name ... ">

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name='email' aria-describedby="email" placeholder="Please Enter your Email ... ">

            </div>
            <div class="form-group">
                <label for="username">User Name </label>
                <input type="text" class="form-control" id="username" name='username' aria-describedby="username" placeholder="Please Enter your User Name ... ">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="password" placeholder="Please Enter your Password">

            </div>
            <div class="form-group">

                <input type="submit" class="btn btn-primary btn-block" id="submit" aria-describedby="submit" name="submit" value="submit">

            </div>
        </form>
        <h3>View Record </h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cus = $cust->displayData();
                foreach ($cus as $customer) {

                ?>
                    <tr>
                        <td><?php echo $customer['id'] ?></td>
                        <td><?php echo $customer['name'] ?> </td>
                        <td><?php echo $customer['email'] ?></td>
                        <td><?php echo $customer['username'] ?></td>
                        <td><?php echo $customer['password'] ?></td>
                        <td> <a href="index.php?del_id=<?php echo $customer['id'] ?>">Delete</a> </td>
                        <td><a href="edit.php?edit_id=<?php echo $customer['id'] ?>">Edit</a></td>
                    </tr>
                <?php }  ?>
            </tbody>
        </table>
    </div>




    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>