<?php
if(isset($message)){
    foreach($message as $message){
        echo '
        <div class = "message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>

<header class="header">
    <div class="flex">
        <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>
        <nav class="navbar">
            <a href="admin_page.php">Home</a>
            <a href="admin_products.php">Products</a>
            <a href="admin_orders.php">Orders</a>
            <a href="admin_users.php">Users</a>
            <a href="admin_contacts.php">Messages</a>
        </nav>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-user"></div>
        </div>
        <div class="account-box">
            <p>Username: <spam><?php echo $_SESSION['admin_name']; ?></spam></p>
            <p>Email: <spam><?php echo $_SESSION['admin_email']; ?></spam></p>
            <a href="logout.php" class="delete-btn">Log Out</a>
        </div>
    </div>
</header>