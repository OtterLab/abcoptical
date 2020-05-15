<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4e82bbc21f.js" crossorigin="anonymous"></script>
        <title>ABC Optical</title>
        <link rel="stylesheet" type="text/css" href="optical.css">
        <script src="abcoptical.js" defer></script>
    </head>
    <body>
        <?php include 'navigation.php':?>
        <!--navigation bar-->
        <header class="logo">
            <img src="images/abc_optical_logo.svg" alt="abc optical logo">
        </header>
        <nav>
            <a href="#" class="toggle-btn" onclick="hamFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </a>
            <div class="menu-links">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="bio.html">Bio</a></li>
                    <li class="active"><a href="ourbrand.html">Our Brand</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!--info page-->
        <div class="brand-title">
            <h3>Our Eyewear Brands</h3>
        </div>
        <div class="flexbox">
            <div><img src="images/michael-kors.svg" alt="michael kors logo"></div>
            <div><img src="images/hackett-london.svg" alt="hackett london logo"></div>
            <div><img src="images/ted-baker.svg" alt="ted baker logo"></div>
            <div><img src="images/nike-4.svg" alt="nike logo"></div>
            <div><img src="images/oakley-1.svg" alt="oakley logo"></div>
            <div><img src="images/levi-s.svg" alt="levis logo"></div>
            <div><img src="images/nautica-2.svg" alt="nautica logo"></div>
            <div><img src="images/ray-ban-logo-1.svg" alt="ray ban logo"></div>
            <div><img src="images/guess-1.svg" alt="guess logo"></div>
            <div><img src="images/gant.svg" alt="gant logo"></div>
            <div><img src="images/coach-new-york-logo.svg" alt="coach new york logo"></div>
            <div><img src="images/tag-heuer-3.svg" alt="tag heuer logo"></div>
            <div><img src="images/calvin-klein.svg" alt="calvin klein logo"></div>
            <div><img src="images/converse-4610.svg" alt="converse logo"></div>
        </div>
        
        <footer>
            <?php include 'footer.php';?>
            <span><strong>Our trading hours are:</strong>Mon – Thurs: 9am - 5.30pm Fri: 9am - 9pm Sat: 9am - 5pm Sun: 10am - 5pm</span>
            <span>Our premises are within The Myer Centre in the Queen Street Mall on Level 1, Shop number 36.</span>
            <span>Our phone number is 07 3256 7101.</span>
            <p>&copy; 2019 LT Creative. All rights reserved.</p>
        </footer>
    </body>
</html>