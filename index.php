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
                
                    <a href="">Home</a>
                    <a href="">Market</a>
                    <a href="">About</a>
             
           </div>
           <div class="right-side">
               <form class="right-side__search" action="">
                   <input class="searchbox" placeholder="Search for Drink" type="text">
                   <input type="submit" value="Find">
               </form>
                <div class="right-side__main-content">
                        <a href="">Login</a>
                        <a href="">Register</a>
                        
                </div>
           </div>
        </nav>
    </header>
    <section class="main">
    <?php
        
        $query = "SELECT * FROM drinks ";
        $result = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($result) ) {
            echo "<div  class='item-buy'>";
            echo "<div class='item-box'>";
            echo "<a href='' class='item-buy__2'>";
            echo "<img class='image' src='images/{$row['image']}' alt=''>";
            echo "<h2>{$row['title']}</h2>";
            echo "</a>";
            echo "<div class='descAndPrice'>";
            echo "<p class='short-desc'>{$row['short_description']}</p><span class='price'>{$row['price']}$</span>";
            echo "</div>";
            echo "<a class='btn-info' href=''>Buy</a>";
            echo "</div>";
            echo "</div>";

        }
        
        
        
        ?>



       
    </section>



    <footer class="footer">
        <div class="right">
            RIGHT
        </div>
        <div class="center">
                RIGHT
        </div>
        <div class="left">
                Left
        </div>
    </header>
</body>
</html>