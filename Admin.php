<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - RIRI Innovations</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>

    <nav class="nav">
        <div class="nav-logo">
            <img src="image/RIRI.jpg" width="50" height="50"> 
        </div>
        <p class="logo-name">Admin Portal</p>

        <div class="nav-menu">
            <ul>
                <li><a href="User.html" class="link">User</li>
                <li><a href="Buy.html" class="link">Buy</li>
                <li><a href="Sell.html" class="link">Sell</li>
                <li><a href="computation.html" class="link">Computation</li>
                <li><a href="index.html" class="link">Log-out</li>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>
<div class="home-container">
    <h1>Welcome to Your Dashboard!</h1>
    <p>This is your personalized homepage.</p>
    <button onclick="logout()">Logout</button>
</div>

    <script>
        function logout() {
            window.location.href = "index.php";
        }
    </script>
</body>
</html>