<?php
$home_active = (isset($home_active)) ? "active" : "";
$about_active = (isset($about_active)) ? "active" : "";
$products_active = (isset($products_active)) ? "active" : "";
$contact_active = (isset($contact_active)) ? "active" : "";
?>

<ul>
    <li><a href="index.php" class="<?=$home_active?>">Home</a></li>
    <li><a href="about.php" class="<?=$about_active?>">About</a></li>
    <li><a href="products.php" class="<?=$products_active?>">Products</a></li>
    <li><a href="contact.php" class="<?=$contact_active?>">Contact</a></li>
</ul>