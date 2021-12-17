<!DOCTYPE html>
<html>
    <head>
        <title>Title of Page</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Describe the website here!">
        
    </head>

    <body>
        <!-- START HEADER -->
        <header>
            <?php include "menu.php"; ?>
            <h1>Header</h1>

            <h3>Sub Header</h3>
            <?php echo "<p>Hello there " . $myName . "</p>" ?>
        </header>
        <!-- /End HEADER -->


        <!-- START FOOTER -->
        <footer>
            <h1>Footer</h1> 
            <?php include "list.php"; ?>
        </footer>
        <!-- /End FOOTER -->

    </body>
</html>