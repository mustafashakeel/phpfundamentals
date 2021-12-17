<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $image = $availability = $price = $description = "";
$name_err = $image_err = $availability_err = $price_err = $description_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter a product name.";
    } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $name_err = "Please enter a valid product name.";
    } else {
        $name = $input_name;
    }

    // Validate image
    $input_image = trim($_POST["image"]);
    if (empty($input_image)) {
        $image_err = "Please enter an image.";
    } else {
        $image = $input_image;
    }

    // Validate price
    $input_price = trim($_POST["price"]);
    if (empty($input_price)) {
        $price_err = "Please enter an price.";
    } else {
        $price = $input_price;
    }

    // Validate description
    $input_description = trim($_POST["description"]);
    if (empty($input_description)) {
        $description_err = "Please enter the description.";
    } else {
        $description = $input_description;
    }

    // Validate availability
    $input_availability = trim($_POST["availability"]);
    if (empty($input_availability)) {
        $availability_err = "Please enter the availability.";
    } elseif (!ctype_digit($input_availability)) {
        $availability_err = "Please enter a positive integer value.";
    } else {
        $availability = $input_availability;
    }

    // Check input errors before inserting in database
    if (empty($name) && empty($image_err) && empty($availability_err) && empty($description_err) && empty($price_err)) {
        // Prepare an insert statement

        $sql = "INSERT INTO gum (name, image, description, price, availability) VALUES (?, ?, ?, ?, ?)";
        var_dump($sql);

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_image, $param_description, $param_price, $param_availability);

            // Set parameters
            $param_name = $input_name;
            $param_image = $image;
            $param_description = $description;
            $param_price = $price;
            $param_availability = $availability;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Product Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Product Record</h2>
                    <p>Please fill this form and submit to add a product to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="">
                            <span class="invalid-feedback"><?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <textarea name="image" class="form-control <?php echo (!empty($image_err)) ? 'is-invalid' : ''; ?>"><?php echo $image; ?></textarea>
                            <span class="invalid-feedback"><?php echo $image_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <input type="text" name="description" class="form-control <?php echo (!empty($description_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $description; ?>">
                            <span class="invalid-feedback"><?php echo $description_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control <?php echo (!empty($price_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $price; ?>">
                            <span class="invalid-feedback"><?php echo $price_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Product Availability</label>
                            <input type="text" name="availability" class="form-control <?php echo (!empty($availability_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $availability; ?>">
                            <span class="invalid-feedback"><?php echo $availability_err; ?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>