<!DOCTYPE html>
<html lang="en">

<?php

include 'snippets/header.php';
include_once("config.php");
?>

<body>

<!-- HEADER -->
<header>
    <div class="logo">
        <img src="imgs/logo.png" alt="gum logo"/>
    </div>
    <div class="navbar hide_wide">
        <input type="checkbox"/>
        <i class="fas fa-bars burger"></i>
        <i class="fas fa-times closebtn"></i>
        <div class="mainnav">
            <a href="#">shop</a>
            <a href="#">about</a>
            <a href="#">contact</a>           
        </div>
    </div>

    <div class="mainnav-bar hide_small">
        <a href="#">shop</a>
        <a href="#">about</a>
        <a href="#">contact</a>
        <a href="#"><i class="fas fa-search"></i></a>
        <a href="#"><i class="fas fa-shopping-cart"></i></a>
        <a href="login.php"><i class="fas fa-user-cog"></i></a>
    </div>
</header>

<!-- HERO -->
<div id="hero">
    <h1>move in silence.</h1>
    <div class="cta">
        <a href="#">shop now</a>
    </div>
</div>

<!-- MAIN SECTION -->  

<div class="products">
<?php
            $result = mysqli_query($link, "SELECT * FROM gum");
            ?>
        
            <div class="second-nav">
                <div class="dropdown">
                    <button class="dropbtn"><a href="#">shop by collection <i class="fas fa-chevron-down"></i></a></button>
                    <div class="dropdown-content">
                        <a href="#">new</a>
                        <a href="#">men</a>
                        <a href="#">women</a>
                        <a href="#">kids</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn"><a href="#">shop by price <i class="fas fa-chevron-down"></i></a></button>
                    <div class="dropdown-content">
                        <a href="#"><$20.00</a>
                        <a href="#"><$40.00</a>
                        <a href="#"><$100.00</a>
                        <a href="#"><$200.00</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn"><a href="#">shop sale</a></button>
                </div>
            </div>
            <div class="product-row">
            <?php
				$result = mysqli_query($link,"SELECT * FROM gum");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>

                <div class="product-list">
                    <div class="list">
                        <div>
                            <img src="imgs/<?=$row["image"]?>"/>
                        </div>
                        <div>
                            <h1><?=$row["name"]?></h1>
                            <p><?=$row["description"]?></p>
                            <p id="price">$<?=$row["price"]?></p>
                            <p>Available in store: <?=$row["availability"]?></p>
                            <i class="fas fa-cart-plus"></i>
                        </div>
                    </div>
                </div>
                
                <?php
            }
            
            ?>
            </div>
<div>





    
</body>
</html>