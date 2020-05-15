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
                    <li class="active"><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!--info page-->
        <div class="service-heading">
            <h2>Services</h2>
        </div>
        <div class="service-bg">
            <table>
                <tr>
                    <th>Eye</th>
                    <th>Examination</th>
                    <th>Services</th>
                </tr>
                <tr>
                    <td>Eye Examinations (may be bulk-billed)</td>
                    <td>Spectacles (may be bulk-billed to private Health Fund optical cover)</td>
                    <td>Diabetic eye examinations</td>
                </tr>
                <tr>
                    <td>Colour Vision assessments</td>
                    <td>Macular Degeneration tests</td>
                    <td>Glaucoma & eye pressure testing</td>
                </tr>
                <tr>
                    <td>Checks for Cataracts</td>
                    <td>Clearness of vision (myopia, hyperopia, astigmatism)</td>
                    <td>Focusing ability (Presbyopia)</td>
                </tr>
                <tr>
                    <td>Eye muscle movement and control</td>
                    <td>Amblyopia (lazy eye)</td>
                    <td>Contact lens fitting and management</td>
                </tr>
                <tr>
                    <td>Referrals for eye laser surgery</td>
                    <td>Mining & Industrial Safety Spectacles</td>
                    <td> Advice on the correct fitting of good quality sunglasses (both prescription and non-prescription, in both adults and children, particularly in a sporting environment)</td>
                </tr>
            </table>
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