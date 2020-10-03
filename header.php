<!DOCTYPE html>
<html>
   
   
    <link rel="stylesheet" href="/css/headnfootblade.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=David+Libre:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

 
     
        <!--creating the only main and unique nav bar-->
        <header>
        <div class="navy">
            <ul class="navstyle" id="navbar">
                <li><a href="indexcopy.html" class="active">Home</a></li>
                
                <li><a href="#">About Us</a></li>
               
                <li><a href="#">Policy</a></li>
               
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="logowrap, sticky1">
            <div class="logo">
             <img src="/images/wof icon.png">
            </div>

            <div class="frontext"><h3>Wings of Fire</h3>
             <div class="subtext"><h4>A dream come true</h4></div>
            </div>

        </div>
    </header>
    
        <script>
            window.onscroll = function() {myFunction()};

            // Get the navbar
            var navbar = document.getElementById("navbar");

            // Get the offset position of the navbar
            var sticky = navbar.offsetTop;

            // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
            function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
                }
            }
        </script>
   
</html>