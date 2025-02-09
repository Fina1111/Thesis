<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RIRI Innovations</title>
    <link rel="stylesheet" href="style.css">
    <style> 
        .back{
        fill: gray;
        position: absolute;
        display: flex;
        background-color: transparent;
        border-radius: 50%;
        padding: 1em;
        cursor: pointer;
        }
        .back:hover{
        fill: black;
        background-color:rgba(244, 244, 245, 0.69);
        }
        .back:active {
        transform: translateY(2px);
        }
    </style>
</head>
<body class="login-body">
    <form id="login" class="container" method='POST' action='insert.php'>

        <a href="index.php" class="back">
            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" ><path d="M275.84-454.87 497.9-233.08q7.18 7.49 7.39 17.53.22 10.04-7.6 17.75-7.82 7.72-17.69 7.82-9.87.11-17.69-7.71L201.87-458.13q-4.89-4.9-7-10.21-2.1-5.32-2.1-11.69 0-6.38 2.1-11.66 2.11-5.28 7-10.18l260.44-260.44q7.23-7.23 17.34-7.42 10.12-.19 18.04 7.42 7.82 7.93 7.82 17.85 0 9.92-7.82 17.49L275.84-505.13h479.03q10.87 0 18 7.14Q780-490.86 780-480q0 10.87-7.13 18-7.13 7.13-18 7.13H275.84Z"/></svg>
        </a>

        <div id="login-logo">
            <img src="image/RIRI.jpg" alt="RIRI Innovations Logo" style="width: 100%; height: auto;">
        </div>
        <h3>Login</h3>
        <input type="text" name='Email' id="Email" placeholder="Email" required>
        <input type="password" name='Password' id="Password" placeholder="Password" required>

        <button name='login' type="submit">Login</button>

        <br><br> <a href="Forgot password.php">Forgot password? </a>

        <p class="message" id="message"></p>
        <p> Don't have an account? <a href="signup.php">Sign Up</a></p>

    </form>
    <script src="maawa.js"></script>
</body>
</html>