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
                    <li class="active"><a href="bio.html">Bio</a></li>
                    <li><a href="ourbrand.html">Our Brand</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!--info page-->
        <div class="bio-flex">
            <div>
            <h3>About the owner and her philosophy</h3>
            <p>Hi, my name is Amanda B Cormer and I'm the owner of ABC Opticals, and I'd like to briefly introduce you to who we are. I'm an optometrist with 20 years’ experience, having worked for independents and chain stores both here and in London. It was in London that I gravitated to the groovy, high end of the market and returned to Brisbane 9 years ago with a new concept.
                Over years of working for others, what struck me was either mediocre eyewear, outdated testing equipment in the back room, or both. ABC Opticals brings together the world’s finest
                and funkiest eyewear designers, coupled with state of the art equipment to make the eye examination a very civilised affair.
                We enjoy selling quality products, and most importantly, we enjoy finding the right frame for the right person. That's what we do and we do it well. We don't sell eyewear over the net, so visit us in person. We're worth the effort and your eyes should be too. Finally, we believe that children should be treated as special people so all our staff will make the experience at ABC Opticals the best we can for your child. 
                </p>
             </div>
             <figure class="bio-img">
                <img src="images/eye-phoropter.png" alt="eye phoropter">
                <figcaption>Image of Eye Phoropter</figcaption>
            </figure>
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