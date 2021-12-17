<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         * {box-sizing: border-box}
         
         

         .datatable {
             display: table;
             width: 100%;
         }

         .header, .row {display: table-row}
         .header .col { font-family: arial; text-transform: uppercase}

         .col { display: table-cell}
         .pagenum { display: inline-block; padding: 5px; text-decoration: none; font-family: arial;}
         .active { color: hotpink}


    </style>
</head>
<body>
    <h1>List of Staff Members</h1>

    <?php

    $pageNum = (isset($_GET["pagenum"])) ? $_GET["pagenum"] : 1; // default page 1
    $sortBy = (isset($_GET["sortby"])) ? $_GET["sortby"] :  "staff.first_name";
    $recordsPerPage = (isset($_GET["recordsPerPage"])) ? $_GET["recordsPerPage"] : 20;

    $startingRecord = ($pageNum * $recordsPerPage) - $recordsPerPage;
    // $previousPageNumber = ( ($pageNum - 1) == 0) ? 1 : ($pageNum - 1);
    $previousPageNumber = max(1, $pageNum - 1);

    // connect to the database for data... 
    //https://www.mysqltutorial.org/mysql-limit.aspx
    $con = mysqli_connect("localhost", "root", "root", "acme");
    $sql = "SELECT 
    staff.id, 
    staff.first_name,
    staff.last_name,
    staff.dob,
    positions.name as position,
    departments.name as department
    FROM staff
    LEFT JOIN positions ON positions.id=staff.position_id
    LEFT JOIN departments ON departments.id=staff.department_id
    ORDER BY $sortBy
    LIMIT $startingRecord, $recordsPerPage";

    $result = mysqli_query($con, $sql);

    // another query to get ALL staff
    $sql = "SELECT id FROM staff";
    $totalCountResult = mysqli_query($con, $sql);

    $totalRows = mysqli_num_rows($totalCountResult);
   
    $numberOfPages = ceil($totalRows/$recordsPerPage);
    $nextPageNumber = ( ($pageNum + 1) < $numberOfPages) ? ($pageNum + 1) : $numberOfPages;
   
    ?>

    <div class="datatable">
        <div class="header">
            <div class="col"><a href="index.php?sortby=staff.first_name">Full Name</a></div>
            <div class="col">Position</div>
            <div class="col"><a href="index.php?sortby=department">Department</a></div>
            <div class="col">Date of Birth</div>
            <div class="col">Delete</div>
        </div>
        <?php

        while($row = mysqli_fetch_assoc($result)){?>
            <div class="row">
                <div class="col"><?=$row["first_name"]?> <?=$row["last_name"]?></div>
                <div class="col"><?=$row["position"]?></div>
                <div class="col"><?=$row["department"]?></div>
                <div class="col"><?=$row["dob"]?></div>
                <div class="col"><a href="#">Delete</a></div>
            </div>
        <?php
        }
        ?>

    </div>

    <div class="pager">
        
        <a href="index.php?sortby=<?=$sortBy?>&recordsPerPage=<?=$recordsPerPage?>&pagenum=<?=$previousPageNumber?>">PREVIOUS</a>
        <?php
        // highlight in some way... the current page number
        for($i=1;$i<=$numberOfPages;$i++)
        {
            $activeClass = ($i == $pageNum) ? "active" : "";
            echo '<a href="index.php?sortby='.$sortBy.'&recordsPerPage='.$recordsPerPage.'&pagenum='.$i.'" class="pagenum '.$activeClass.'">'.$i.'</a>';
        }
        ?>
        <a href="index.php?sortby=<?=$sortBy?>&recordsPerPage=<?=$recordsPerPage?>&pagenum=<?=$nextPageNumber?>">NEXT</a>
    </div>

    <div class="numPerPageSelector">
    <h2>How Many Per Page</h2>
        <a href="index.php?sortby=<?=$sortBy?>&recordsPerPage=10">10</a>
        <a href="index.php?sortby=<?=$sortBy?>&recordsPerPage=20">20</a>
        <a href="index.php?sortby=<?=$sortBy?>&recordsPerPage=50">50</a>
        <a href="index.php?sortby=<?=$sortBy?>&recordsPerPage=100">100</a>
    </div>

</body>
</html>