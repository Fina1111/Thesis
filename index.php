<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>          
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        color: white;
        
        }

        body{
            background: url("image/fio.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 110vh;
        background: rgba(39, 39, 39, 0.5);
        } 
        .nav {
        position: fixed;
        top: 0;
        display: flex;
        justify-content: space-between;
        width: 100%;
        height: 40%;
        line-height: 100px;
        background: linear-gradient(rgba(39, 39, 39, 0.8), transparent);
        z-index: 100;
        } 

        .nav-logo p{
        color: white;
        font-size: 25px;
        font-weight: 600;
        margin-left: 50px;
        }

        .link:hover, .active {
        border-bottom: 2px solid #fff;
        }
        .nav-button .btn{
        width: 130px;
        height: 40px;
        font-weight: 500;
        background: rgba(255, 255, 255, 0.6);
        border-radius: 30px;
        border: none;
        cursor: pointer;
        transition: .3s ease;
        background: rgba(39, 39, 39, 0.989);
        box-shadow: 0 0px 10px rgba(255, 255, 255, 0.6);
        }
        .btn:hover{
        background: rgba(255, 255, 255, 0.3);
        }
        #signinBtn{
        margin-left: 15px;
        margin-right: 3rem;
        }
        .btn.white-btn{
        background: rgba(20, 20, 20, 0.7);
        box-shadow: 0 0px 10px rgba(255, 255, 255, 0.6);
        }

        .btn.btn.white-btn:hover{
        background: rgb(227, 227, 227);
        color: black;
        }
        .nav-menu-button{
        display: none;
        }

        .btn.dark-btn{
        background: rgba(41, 41, 44, 0.5);
        padding: 10px;
        border-radius: 5px;
        margin: 10px 200px;
        transition: .3s ease;
        cursor: pointer;
        }

        .btn.btn.dark-btn:hover {
        background: rgb(255, 255, 255);
        color: rgb(49, 48, 48);
        font-weight: bold;
        }
    </style>
    <title>Welcome - RIRI Innovations</title>
</head>
<body>
<div class="wrapper">

    <nav class="nav">
        <div class="nav-logo">
            <p><img src="image/RIRI.jpg" width="40" height="35"> RI-RI Innovation</p>
        </div>

        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">User</button>
            <button class="btn" id="signinBtn" onclick="admin()">Admin</a></button>
        </div>
    </nav>

    <div class="welcome-container">
        <h1>Welcome to RIRI Innovations</h1>
        <button class="btn dark-btn" onclick="redirectToSignup()">Get Started</button>
    </div>
</div>
    <script>
        function redirectToSignup() {
            window.location.href = "signup.php";
        }tm
        function login() {
            window.location.href="Login.php";
        }
        function admin() {
            window.location.href= "adminLogin.php";
        }
    </script>
</body>
</html>

