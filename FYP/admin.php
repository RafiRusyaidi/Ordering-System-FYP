<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar Navigation -->
        <div class="sidebar">
            <img src="image/logo.png" alt="Admin Logo" class="logo">
            <h2>Admin</h2>
            <nav>
                <ul>
                    <li><a href="sales.php" target="content-frame">Sales</a></li>
                    <li><a href="menudata.php" target="content-frame">Menu Data</a></li>
                    <li><a href="menuform.php" target="content-frame">Add Menu</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Top Header -->
            <header>
                <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
                <button class="logout-btn" onclick="window.location.href='logout.php'">Logout</button>
            </header>

            <!-- Iframe for Content -->
            <iframe name="content-frame" class="content-frame" src="sales.php"></iframe>
        </div>
    </div>
</body>
</html>
