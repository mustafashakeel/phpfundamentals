<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    function callPHP()
    {
        echo "Hello World";
    }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        function callPhp() {
            var info = "<?php callPHP(); ?>";
            alert(info);
            return

        }
        callPhp();
    </script>
</body>

</html>