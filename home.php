<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - RIRI Innovations</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;

      }

      body {
        min-height: 100vh;
        min-height: 100dvh;
        background-color: rgb(255, 255, 255);
      }
      
      .nav {
        display: flex;
        position: fixed;
        z-index: 10;
        background-color: rgb(0, 0, 0);
        box-shadow: 10px 0px 30px rgba(63, 63, 63, 0.9);
        width: 100%;
        top: 0;
      }
    
      .nav-logo {
        color: rgb(255, 255, 255);
        font-size: 25px;
        font-weight: 600;
        margin-left: 50px;
        margin-right: auto;
        margin-top: 20px;
        margin-bottom: 19px;
      }

      nav ul {
        list-style: none;
        display: flex;
        width: 100%;
        flex-direction: column;
      }

      nav {
        background-color: rgba(0, 0, 0, 0.9);
        position: fixed;
        top: 0;
        right: -100%;
        height: 100vh;
        z-index: 10;
        border-left: 1px solid rgb(57, 0, 78); 
        transition: right 300ms ease-in-out;
      }

      nav.show {
        right: 0;
      }

      nav a{
        display: flex;
        text-decoration: none;
        color: aqua;
        width: 250px;
        padding:  20px 40px;
        transition: all 150ms ease;
      }

      nav a:hover{
        background-color: rgb(214, 186, 243);
        color: blueviolet;
      }

      .home-container {
        margin-top: 90px ;
        padding: 2rem;
      }

      #slide-open {
        display: block;
        background-color: transparent;
        border: none;
        padding: 1em;
        margin-left: auto;
        cursor: pointer;
        z-index: 10;
      }

      #slide-close {
        background-color: transparent;
        border-radius: none;
        padding: 1em;
        cursor: pointer;
      }


    </style>
</head>
<body>



    <div class="nav">
        <div class="nav-logo">
            <p><img src="image/RIRI.jpg"  width="40" height="35">  RI-RI Innovation </p> 
        </div>
        
        <button id="slide-open" onclick="openMenu()">
          <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#c9c9c9"><path d="M165.13-254.62q-10.68 0-17.9-7.26-7.23-7.26-7.23-18t7.23-17.86q7.22-7.13 17.9-7.13h629.74q10.68 0 17.9 7.26 7.23 7.26 7.23 18t-7.23 17.87q-7.22 7.12-17.9 7.12H165.13Zm0-200.25q-10.68 0-17.9-7.27-7.23-7.26-7.23-17.99 0-10.74 7.23-17.87 7.22-7.13 17.9-7.13h629.74q10.68 0 17.9 7.27 7.23 7.26 7.23 17.99 0 10.74-7.23 17.87-7.22 7.13-17.9 7.13H165.13Zm0-200.26q-10.68 0-17.9-7.26-7.23-7.26-7.23-18t7.23-17.87q7.22-7.12 17.9-7.12h629.74q10.68 0 17.9 7.26 7.23 7.26 7.23 18t-7.23 17.86q-7.22 7.13-17.9 7.13H165.13Z"/></svg>
        </button>

        <nav id="navbar">
            <ul>
                <li><button id="slide-close" onclick="closeMenu()"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#c9c9c9"><path d="m480-444.62-209.69 209.7q-7.23 7.23-17.5 7.42-10.27.19-17.89-7.42-7.61-7.62-7.61-17.7 0-10.07 7.61-17.69L444.62-480l-209.7-209.69q-7.23-7.23-7.42-17.5-.19-10.27 7.42-17.89 7.62-7.61 17.7-7.61 10.07 0 17.69 7.61L480-515.38l209.69-209.7q7.23-7.23 17.5-7.42 10.27-.19 17.89 7.42 7.61 7.62 7.61 17.7 0 10.07-7.61 17.69L515.38-480l209.7 209.69q7.23 7.23 7.42 17.5.19 10.27-7.42 17.89-7.62 7.61-17.7 7.61-10.07 0-17.69-7.61L480-444.62Z"/></svg>
                </li>
                <li><a href="home.php" class="link-active">Home</a></li>
                <li><a href="User.php" class="link">User</a></li>
                <li><a href="Buy.php" class="link">Buy</a></li>
                <li><a href="Sell.php" class="link">Sell</a></li>
                <li><a href="computation.php" class="link">Computation</a></li>
                <li><a href="index.php" class="link">Log-out</a></li>
            </ul>
       </nav>
    </div>


    <div class="home-container">
      <h1>Welcome to Your Dashboard!</h1>
      <p>This is your personalized homepage.</p> <br>

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ipsum saepe voluptate facere, provident minus voluptatibus labore maiores expedita deserunt autem quae numquam fugiat rerum a nesciunt accusamus quo vitae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis quia eos officia, nulla voluptatem minus voluptatibus, iure harum, quibusdam aspernatur repellendus at iusto placeat quaerat deserunt adipisci. Deserunt, accusamus incidunt!

      Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit optio velit reprehenderit eos hic officia obcaecati ipsum, quam tempora voluptates consectetur, vitae dignissimos. Nulla dolores voluptate saepe soluta officia! Nihil. Lorem ipsum dolor sit amet consectetur adipisicing elit. Et in id ipsum optio eligendi numquam veritatis. Assumenda, vitae reprehenderit. Placeat consequuntur repudiandae tempora repellat, minima debitis perspiciatis. Provident, a id! Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita perferendis, assumenda omnis vitae accusamus, mollitia rem, quae beatae molestiae eligendi aliquam. Cumque dolorum odit sint quam error quisquam hic?
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur officia accusantium earum autem asperiores adipisci odio? Architecto quam qui facere, totam unde veniam repudiandae asperiores dolorum minus voluptate possimus accusamus? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis error, ab tenetur dolore recusandae aut itaque eius autem cumque sed odit qui eos, sit laborum iste, adipisci molestias ut ipsa. </p>
    </div>


      <script>
        const navbar = document.getElementById("navbar")

        function openMenu() {
          navbar.classList.add('show')
        }

        function closeMenu() {
          navbar.classList.remove('show')
        }
      </script>
</body>
</html>