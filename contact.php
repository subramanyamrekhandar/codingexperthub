<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodingExperthub</title>

    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
      <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="images/logo.png">
    <!-- GOOGLE FONTS (MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contact.css">

    <style>
        body { background-image: url("./images/bg-texture.png") }
    </style>
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php"><h4>CodingExperthub</h4></a>
            <ul class="nav__menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#" class="btn btn-primary" style="	border-radius: 10px;">PRO</a></li>
               
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--========================== END OF NAVBAR ============================-->









    <section class="contact">
        <div class="container contact__container">
        <aside class="contact__aside">
            <div class="aside__image">
                <img src="./images/contact.svg">
            </div>
            <h2>Contact Us</h2>
            <p>
               We can ask any queries to contact us and follow this meadia   
            </p>
            <ul class="contact__details">
                <li>
                <i class="uil uil-phone-times"></i>
                <h5>6302440159</h5>
                </li>
                <li>
                <i class="uil uil-envelope"></i>
                <h5>support@codingexperthub.com</h5>
                </li>
                <li>
                <i class="uil uil-location-point"></i>
                <h5>AP, India</h5>
                </li>
            </ul>
            <ul class="contact__socials">
                <li> <a href="https://facebook.com"><i class="uil uil-facebook-f"></i></a> </li>
                <li> <a href="https://www.instagram.com/cod.ingexpert/"><i class="uil uil-instagram"></i></a> </li>
                <li> <a href="https://twitter.com"><i class="uil uil-twitter"></i></a> </li>
                <li> <a href="https://www.linkedin.com/company/80869584/admin/"><i class="uil uil-linkedin-alt"></i></a> </li>
            </ul>
            </aside>




            <form action="https://formspree.io/f/xeqnvbda" method="POST" class="contact__form">
                <div class="form__name">
                    <input type="text" name="First Name" placeholder="First Name" required>
                    <input type="text" name="Last Name" placeholder="Last Name" required>
                </div>
                <input type="email" name="Email Address" placeholder="Your Email Address" required>
                <textarea name="Message"  rows="7" placeholder="Message" required></textarea>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>








    

    <footer>
      <div class="container footer__container">
        <div class="footer__1">
          <a href="index.html" class="footer__logo"><h4>CodingExperthub</h4></a>
          <p>
              codingExperthub is a new way learn the courses and programming languages
          </p>
        </div>

        <div class="footer__2">
          <h4>Permalinks</h4>
          <ul class="permalinks">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>

        <div class="footer__3">
          <h4>Primacy</h4>
          <ul class="privacy">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms and conditions</a></li>
            <li><a href="#">Refund Policy</a></li>
          </ul>
        </div>

        <div class="footer__4">
            <h4>Contact Us</h4>
            <div>
              <p></p>
              <p>welcome@codingexperthub.in</p>
            </div>
  
            <ul class="footer__socials">
              <li>
                <a href="https://www.facebook.com/CodingExperthub"><i class="uil uil-facebook-f"></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com/codingexperthub/"><i class="uil uil-instagram-alt"></i></a>
              </li>
              <li>
                <a href="#"><i class="uil uil-twitter"></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/codingexperthub"><i class="uil uil-linkedin-alt"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer__copyright">
            <h4>Copyright &copy;2022 CodingExperthub</h4>
        </div>
      </footer>


      <script src="./main.js"></script>
</body>
</html>