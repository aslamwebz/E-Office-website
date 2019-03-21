<?php

if ($_SERVER["REQUEST_URI"] == '/eoffice/index.php' || $_SERVER["REQUEST_URI"] == '/eoffice/orders.php') {
    if(isset($_SESSION['cart'])){?>

    <style>
        i.fa.fa-shopping-cart{
            font-size:20px;
        }
    </style>

     <li class="nav-item">
        <a href="orders.php" class="button button-go"><i class="fa fa-shopping-cart"> &nbsp; Cart</i></a>
    </li> 
    <?php }
    if (isset($_SESSION['userID'])) {
        if ($_SESSION['permission'] == 'admin') {?>
            <li class="nav-item">
            <a href="admin.php" class="button button-primary"><?=ucfirst($_SESSION['userName']);?></a>
            </li>
            <?php } elseif ($_SESSION['permission'] == 'employee') {?>
                <li class="nav-item">
                <a href="employee.php" class="button button-primary"><?=ucfirst($_SESSION['userName']);?></a>
                </li>
            <?php } elseif ($_SESSION['permission'] == 'client') {?>
                <li class="nav-item">
                <a href="client.php" class="button button-primary"><?=ucfirst($_SESSION['userName']);?></a>
                </li>
            <?php } ?>
                <li class="nav-item">
                <a href="header.php?logout" class="button button-caution">LOGOUT</a>
                </li>
            <?php } else {  ?>
                <li class="nav-item">
                <a href="login.php" class="button  button-primary">Login</a>
                </li>
                <li class="nav-item ">
                <a href="register.php" class="button  button-action">REGISTER</a>
                </li>
        <?php
    }
}
?>
