<?php 

$connection = mysqli_connect('localhost', 'root', '', 'drinkdb');

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/style.css" />
    <script src="./scripts/script.js"></script>
</head>
<body>
    <header>
        <nav class="nav-container" >
           <div class="left-side">
                <ul class="left-side__main-content">
                    <li><a href="">Home</a></li>
                    <li><a href="">Market</a></li>
                    <li><a href="">About</a></li>
                </ul>
           </div>
           <div class="right-side">
               <form class="right-side__search" action="">
                   <input class="searchbox" placeholder="Search for Drink" type="text">
                   <input type="submit" value="Find">
               </form>
                <ul class="right-side__main-content">
                        <li><a href="">Login</a></li>
                        <li><a href="">Register</a></li>
                        
                </ul>
           </div>
        </nav>
    </header>
    <section class="main">

        <?php
        
        $query = "SELECT * FROM drinks ";
        $result = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($result) ) {
            echo "<div class='item-box'>";
            echo "<img class='image' src='images/{$row['image']}' alt=''>";
            echo "<h2>{$row['title']}</h2>";
            echo "<p class='short-desc'>{$row['short_description']}</p>";
            echo "<a class='btn-info' href=''>Show More</a>";
            echo "</div>";

        }
        
        
        
        ?>
       
    </section>
</body>
</html>