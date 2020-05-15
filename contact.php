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
                    <li><a href="ourbrand.html">Our Brand</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li class="active"><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!--form page-->
        <div class="form">
            <form id="cform" class="bookform" action="#" method="POST">
                <h3>Contact us</h3>
                <div class="form-field">
                    <label for="fname">Firstname</label>
                    <input type="text" name="fname" placeholder="Firstname" required>
                </div>
                <div class="form-field">
                    <label for="sname">Surname</label>
                    <input type="text" name="sname" placeholder="Surname" required>
                </div>
                <div class="form-field">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-field">
                    <input type="submit" id="send-data" value="Submit">
                </div>
            </form>
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