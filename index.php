<!doctype HTML>
<html lang="en">
<head>
<title> Wings of Fire</title>
</head>
<body><!DOCTYPE html>
<html>
    <head>
    <title>
        Wings of Fire AnO Home
    </title>
    <link rel="stylesheet" href="/css/indexblade.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=David+Libre:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

</head> 
    <body>  
        <!--creating the only main and unique nav bar-->
        <header>
        <div class="navy">
            <ul class="navstyle" id="navbar">
                <li><a href="" class="active">Home</a></li>
                
                <li><a href="#">About Us</a></li>
               
                <li><a href="#">Policy</a></li>
               
                <li><a href="#">Contact Us</a></li>
                <a href="#"> Contatn </a>
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
        <section class="aboutuscard">     
            <img src="/images/wof flg.png">
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Aenean id est a ipsum iaculis interdum. Praesent pharetra velit mi, eu sollicitudin justo dapibus eu. In bibendum elementum mauris, at ultrices nibh tempus vel. Nulla facilisi. In hac habitasse platea dictumst. Pellentesque pulvinar a erat a facilisis. In ut efficitur nulla, ac tincidunt sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec molestie ullamcorper dignissim. In vel malesuada elit, convallis commodo tortor. Cras ac neque consectetur, luctus augue in, rhoncus arcu. Nunc tempus, lacus sit amet aliquam ultricies, ligula velit egestas dolor, et convallis dolor lorem sed est. Aenean tincidunt lorem nec nulla feugiat convallis. Proin gravida eget erat lobortis ultricies.
            </span>
            <button type="button"><a href="#">About Us</a></button>
        </section>
        <section class="policycard">
            <span>Lorem ipsum dolor sit ahmet.</span>
            <button type="button"><a href="#">Policy Page</a></button>
        </section>
        <section>
            <div class="lorecard">Lore card          
            </div>
            <div class="formcard">Form Card
                <button type="button"><a href="#">Contact Us</a></button>
            </div>
        </section>
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
    </body>
</html>
<!--testing testing-->
</body>