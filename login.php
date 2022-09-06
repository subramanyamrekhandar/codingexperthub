<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodingExperthub</title>

    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

    <!-- GOOGLE FONTS (MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
     <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="images/logo.png">

    <!-- SWIPER JS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    	<!----css file link-->
	
	<link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="stylesheet" href="./css/style.css">

    <!--===================================login google apis for css============================== --->

    <link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->
    	 <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	 	<!-- Google Client id to integrate google signin-->

	<meta name="google-signin-client_id" content="808976312783-k901nr0n50did222qa275k0umvn4rpi1.apps.googleusercontent.com">
	

	<!-- Google JavaScript file to integrate google signin-->
	<script src="https://apis.google.com/js/platform.js" async defer></script>

	<!-- Google custom JavaScript file to integrate google signin-->
	<script type="text/javascript" src="js/google_signin.js"></script>
  <!-- =================end of the login form css apis ===============--->

	<!----------email notification-------->

  <script type="text/css">
	





  </script>
    <style>
        body { background-image: url("./images/bg-texture.png") }
    </style>
</head>
<body onload="myfunction()">
		   <!---preloader starts	----->

	<div id="loading"></div>

		   <!---preloader Ends	----->

       <!---navbar starts	----->
    <nav>
        <div class="container nav__container">
            <a href="index.html"><h4>CodingExperthub</h4></a>
            <ul class="nav__menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
              
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#" class="btn btn-primary" style="	border-radius: 45px;">PRO</a></li>
                <li> <a href="form.php" id="button" 
                      
                        
                        
                      >
                        Login/Signup
                    </a>
                </li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--========================== END OF NAVBAR ============================-->

    	<!---confirm password validation Start-->


    <header>
        <div class="container header__container">
            <div class="header__left">
                <h1>Grow your skills to advance your career path</h1>
                <p>
                    You can learn something totally new to advance your career. Or maybe you just want to knock off the rust. Try CodingExperthub to get access to a variety of courses, from machine learning to web development.
                </p>
                <a href="form.php" class="btn btn-primary" style="	border-radius: 45px;">Get Started</a>
            </div>
            
            <div class="header__right">
                <div class="header__right-image">
                    <img src="./images/header.svg">
                </div>
            </div>
        </div>
    </header>
    <!--========================== END OF HEADER ============================-->







    <section class="categories">
        <div class="container categories__container">
          <div class="categories__left">
            <h1>Categories</h1>
            <p>
                Prepping for the big test or want to ace your first interview? Use CodingExperthub real-world practice to reinforce what you've learned and get you ready for that big moment.
            </p>
            <a href="#" class="btn">Learn More</a>
          </div>
  
          <div class="categories__right">
            <article class="category">
              <span class="category__icon">
                <i class="uil uil-parking-circle"></i>
              </span>
              <h5>software Development</h5>
              <p>
               the process of conceiving, designing, programming,doc,testing,& bug fixing involved in creating and maintaining applications.
                </p>

              </article>
  
            <article class="category">
              <span class="category__icon">
                <i class="uil uil-bitcoin-circle"></i>
              </span>
              <h5>Internships</h5>
              <p>a professional learning experience that offers meaningful, practical work related to a student's field of study interest.</p>
            </article>
  
            <article class="category">
              <span class="category__icon">
                <i class="uil uil-processor"></i>
              </span>
              <h5>Workshop</h5>
              <p>a small establishment where manufacturing or handicrafts are carried on ·</p>
            </article>
  
            <article class="category">
              <span class="category__icon">
                <i class="uil uil-registered"></i>
              </span>
              <h5>Backend Support</h5>
              <p>the support provided by ViewRay to Distributor while the Products are under warranty or following expiration of the Warranty Period if it is ordered as a Service.</p>
            </article>

            <article class="category">
                <span class="category__icon">
                  <i class="uil uil-megaphone"></i>
                </span>
                <h5>Webinors</h5>
                <p>It is a live online educational presentation during which participating viewers can submit questions and comments</p>
              </article>
  
            <article class="category">
              <span class="category__icon">
                <i class="uil uil-palette"></i>
              </span>
              <h5>Consultaency services</h5>
              <p>A consulting firm or simply consultancy is a professional service firm that provides expertise and specialised labour for a fee</p>
            </article>
            
          </div>
        </div>
      </section><br><br>
      <!--====================== END OF CATEGORIES =====================-->








      <section class="courses">
          <h2>Our Popular Services</h2>
          <div class="container courses__container">
            <article class="course">
                <div class="course__image">
                    <img src="./images/probanners.png">
                </div>
                <div class="course__info">
                    <h4>Courses</h4>
                    <p>
                    Here you will find all the lecture tutorials related to Treanding courses on Computer Science and Programming.
                  </p>
                    <a href="form.php" class="btn btn-primary">Enroll</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="./images/videobanner.jpg">
                </div>
                <div class="course__info">
                    <h4>VIDEO TUTORIALS </h4>
                    <p>
                    Here you will find all the videos tutorials related to programming languages like JAVA,PYTHON,ANDROID etc 
                  </p>
                    <a href="form.php" class="btn btn-primary">Enroll</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="./images/Quizebanner.png">
                </div>
                <div class="course__info">
                    <h4>EXERCISE</h4>
                    <p>
                     Here you will find problem programs for practice and their implementation also which will improve your coding skill
                    </p>
                    <a href="form.php" class="btn btn-primary">Enroll</a>
                </div>
            </article>
          </div>
      </section>
      <!--====================== END OF COURSES =====================-->









      <section class="faqs">
          <h2>Technologies</h2>
          <div class="container faqs__container">
              <article class="faq">
                  <div class="faq__icon"><i class="uil uil-plus"></i></div>
                  <div class="question__answer">
                      <h4> Data Science?</h4>
                      <p>
                        Data science can be defined as a blend of mathematics, business acumen, tools, algorithms and machine learning techniques, all of which help us in finding out the hidden insights or patterns from raw data which can be of major use in the formation of big business decisions. 
                    </p>
                  </div>
              </article>

              <article class="faq">
                  <div class="faq__icon"><i class="uil uil-plus"></i></div>
                  <div class="question__answer">
                      <h4>Web Development</h4>
                      <p>
                        Typically it refers to the coding and programming side of web site production as opposed to the web design side. It encompasses everything from a simple page of HTML text to complex, feature-rich applications designed to be accessed from various Internet-connected devices.
                    </p>
                  </div>
              </article>

              <article class="faq">
                  <div class="faq__icon"><i class="uil uil-plus"></i></div>
                  <div class="question__answer">
                      <h4>ML/AI</h4>
                      <p>
                        Machine learning is a subfield of artificial intelligence dedicated to the design of algorithms capable of learning from data. It has numerous applications, including business analytics, health informatics, financial forecasting, and self-driving cars.
                    </p>
                  </div>
              </article>

              <article class="faq">
                  <div class="faq__icon"><i class="uil uil-plus"></i></div>
                  <div class="question__answer">
                      <h4>NFT</h4>
                      <p>
                        Certified NFT Expert™ is a Certification that aims to cover all known aspects of Non-Fungible Assets existing in the Ethereum Blockchain environment today. The focus of this certification is to make the NFT concepts accessible to the community with little to no knowledge of Blockchain technology beforehand.
                    </p>
                  </div>
              </article>

              <article class="faq">
                  <div class="faq__icon"><i class="uil uil-plus"></i></div>
                  <div class="question__answer">
                      <h4>Cryptography</h4>
                      <p>
                        Cryptography is an indispensable tool for protecting information in computer systems. In this course you will learn the inner workings of cryptographic systems and how to correctly use them in real-world applications. 
                    </p>
                  </div>
              </article>

              <article class="faq">
                  <div class="faq__icon"><i class="uil uil-plus"></i></div>
                  <div class="question__answer">
                      <h4>Blockchain</h4>
                      <p>
                        Blockchain.com is a cryptocurrency financial services company. The company began as the first Bitcoin blockchain explorer in 2011 and later created a cryptocurrency wallet that accounted for 28% of bitcoin transactions between 2012 and 2020.
                    </p>
                  </div>
              </article>

              <article class="faq">
                  <div class="faq__icon"><i class="uil uil-plus"></i></div>
                  <div class="question__answer">
                      <h4>DSA</h4>
                      <p>
                        Data structure and Algorithm (DSA) is applied in all disciplines of software development. DSA is the building block of the software development process. It is not limited to a single programming language. Although programming languages evolve or get dormant over time, DSA is incorporated into all of these languages.
                    </p>
                  </div>
              </article>

              <article class="faq">
                  <div class="faq__icon"><i class="uil uil-plus"></i></div>
                  <div class="question__answer">
                      <h4>Metaverse</h4>
                      <p>
                        In futurism and science fiction, the metaverse is a hypothetical iteration of the Internet as a single, universal and immersive virtual world that is facilitated by the use of virtual reality and augmented reality headsets. In colloquial use, a metaverse is a network of 3D virtual worlds focused on social connection.
                    </p>
                  </div>
              </article>

              <article class="faq">
                  <div class="faq__icon"><i class="uil uil-plus"></i></div>
                  <div class="question__answer">
                      <h4>Github</h4>
                      <p>
                        GitHub, Inc. is a provider of Internet hosting for software development and version control using Git. It offers the distributed version control and source code management functionality of Git, plus its own features.
                    </p>
                  </div>
              </article>

              <article class="faq">
                  <div class="faq__icon"><i class="uil uil-plus"></i></div>
                  <div class="question__answer">
                      <h4>Flutter Application</h4>
                      <p>
                        Flutter is an open-source UI software development kit created by Google. It is used to develop cross platform applications for Android, iOS, Linux, macOS, Windows, Google Fuchsia, and the web from a single codebase. First described in 2015, Flutter was released in May 2017.
                    </p>
                  </div>
              </article>
          </div>
      </section>
      <!--====================== END OF FAQs =====================-->







      <section class="container testimonials__container mySwiper">
          <h2>Students' Testimonials</h2>
          <div class="swiper-wrapper">
              <article class="testimonial swiper-slide">
                  <div class="avatar">
                      <img src="./images/lali.jpeg">
                  </div>
                  <div class="testimonial__info">
                      <h5>Lalithya Golla</h5>
                      <small>Student</small>
                  </div>
                  <div class="testimonial__body">
                      <p>
                        Best performance on web development summer Intership
                    </p>
                  </div>
              </article>

              <article class="testimonial swiper-slide">
                  <div class="avatar">
                      <img src="./images/gayatri.jpeg">
                  </div>
                  <div class="testimonial__info">
                      <h5>Gayatri</h5>
                      <small>student</small>
                  </div>
                  <div class="testimonial__body">
                      <p>
                      Best performances on web development summer Intership 
                    </p>
                  </div>
              </article>

              <article class="testimonial swiper-slide">
                  <div class="avatar">
                      <img src="./images/tarun.jpeg">
                  </div>
                  <div class="testimonial__info">
                      <h5>Tarun Naidu</h5>
                      <small>Student</small>
                  </div>
                  <div class="testimonial__body">
                      <p>
                      Best performances on web development summer Intership
                    </p>
                  </div>
              </article>
              <article class="testimonial swiper-slide">
                  <div class="avatar">
                      <img src="./images/mahi.jpeg">
                  </div>
                  <div class="testimonial__info">
                      <h5>Maheswari</h5>
                      <small>Student</small>
                  </div>
                  <div class="testimonial__body">
                      <p>
                      Best performances on web development summer Intership
                    </p>
                  </div>
              </article>

              <article class="testimonial swiper-slide">
                  <div class="avatar">
                      <img src="./images/avatar4.jpg">
                  </div>
                  <div class="testimonial__info">
                      <h5>Yeava Teja</h5>
                      <small>Student</small>
                  </div>
                  <div class="testimonial__body">
                      <p>
                      Best performances on web development summer Intership
                    </p>
                  </div>
              </article>

              <article class="testimonial swiper-slide">
                  <div class="avatar">
                      <img src="./images/avatar5.jpg">
                  </div>
                  <div class="testimonial__info">
                      <h5>Bhavana</h5>
                      <small>Student</small>
                  </div>
                  <div class="testimonial__body">
                      <p>
                      Best performances on web development summer Intership
                    </p>
                  </div>
              </article>
              
              <article class="testimonial swiper-slide">
                  <div class="avatar">
                      <img src="./images/avatar5.jpg">
                  </div>
                  <div class="testimonial__info">
                      <h5>Adhithya</h5>
                      <small>Student</small>
                  </div>
                  <div class="testimonial__body">
                      <p>
                      Best performances on web development summer Intership
                    </p>
                  </div>
              </article>
          </div>
          <div class="swiper-pagination"></div>
      </section>
      <!--====================== END OF TESTIMONIALS =====================-->








      <footer>
        <div class="container footer__container">
          <div class="footer__1">
            <a href="index.html" class="footer__logo"><h4>CodingExperthub</h4></a>
            <p>
                codingExperthub is a new way learn the code Anywhere & Anytime
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



      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
      <script src="./main.js"></script>


      <script>
          // slides for testimonials section
          var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
            // when window width is >= 600px
            breakpoints: {
                600: {
                    slidesPerView: 2
                }
            }
        });
      </script>            


</body>
</html>