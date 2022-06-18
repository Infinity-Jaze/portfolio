<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfinityJaze</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="">
</head>

<body>
    <div id="first">
        <div id="header">
            <img src="assets/img/Logo-Banner YT putih.png" alt="Logo" id="logo">
            <div id="menu">
                <img src="assets/img/icon/image.png" alt="Icon" id="nav-icon" onclick="toggleMenu();">
                <div id="menu-text" onclick="toggleMenu();">Menu</div>
                <div class="content" id="menu-3"></div>
                <a class="column-3" href="#first" onclick="return smoothscroll('first')">Home</a>
                <a class="column-3 column-3-mid" href="#second" onclick="return smoothscroll('second')">My Games</a>
                <a class="column-3" href="#third" onclick="return smoothscroll('third')">Social Media</a>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="content">
        <div id="box">
            <h1>Welcome To<br>InfinityJaze</h1>
            <a href="">My Games</a>
        </div>
    </div>


    <div id="second">
        <div class="content">
            <h2>Things about me</h2>
            <div class="column-3">
                <a href="#">
                    <div class="every_image">
                        <img src="assets/img/Youtube Profile.jpg" alt="My Youtube Profile" srcset="">
                        <p>My Channel</p>
                    </div>
                </a>
                <p class="description">InfinityJaze</p>
            </div>
            <div class="column-3 column-3-mid"><a href="#">
                    <div class="every_image">
                        <img src="assets/img/Mobile legends.jpeg" alt="Mobile Legends Logo" srcset="">
                        <p>My Favorite Game</p>
                    </div>
                </a>
                <p class="description">Mobile Legends <br>My Nickname : Zurichu</p>
            </div>
            <div class="column-3"><a href="#">
                    <div class="every_image">
                        <img src="assets/img/Evos roar logo.jpg" alt="Evos Roar Logo" srcset="">
                        <p>My Favorite Mobile Legends Team</p>
                    </div>
                </a>
                <p class="description">Evos Legends ID</p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="third">
        <div class="content">
            <h2 id="contact">My Contact</h2>
            <div class="column2">
                <form action="" method="POST" novalidate onsubmit="return validate(this)">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <textarea name="message" id="message" cols="100" rows="15" placeholder="Your Message"></textarea>
                    <input type="submit" value="Send" name="submit">
                </form>
            </div>
            <div class="column2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16330442.619708972!2d97.71182606053486!3d2.182355661956906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1d846d54075%3A0xc3da4a44f5d2beb2!2sEvos%20Esports%20HQ!5e0!3m2!1sen!2sid!4v1653478175001!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="social">
        <div class="content">
            <h3>Evos Instagram</h3>
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-2f4324ee-ef1c-4792-b0ef-8c1fa28873ca"></div>
        </div>
        <div class="footer">
            <p>&copy; InfinityJaze 2022</p>
        </div>
    </div>


    <script src="assets/js/wa.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>