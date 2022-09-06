<?php


session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# code...

}



?>


<!DOCTYPE html>
<html lang="en">
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


    <link rel="stylesheet" href="./css/style.css">
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
                <li><a href="programmingdemo.php">courses</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#" class="btn btn-primary" style="	border-radius: 10px;">PRO</a></li>
                <li> <a href="logout.php" style="	border-radius: 60px; 	
                                                  background: deepskyblue !important;
                                                  padding: 12px 12px 12px 12px;
                                                  border: 1px solid white ;
                                                  hover{background-color: white !important;}
                                                  
                                                  " ><?php echo $_SESSION['username'];   ?></a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--========================== END OF NAVBAR ============================-->






    <header>
        <div class="container header__container">
            <div class="header__left">
                <h1>Grow your skills to advance your career path</h1>
                <p>
                    You can learn something totally new to advance your career. Or maybe you just want to knock off the rust. Try CodingExperthub to get access to a variety of courses, from machine learning to web development.
                </p>
                <a href="programmingdemo.php" class="btn btn-primary" style="	border-radius: 45px;">Get Started</a>
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
    <h2>Our Popular Video Tutorials</h2>
        <div class="container courses__container">
            <article class="course">
                <div class="course__image">
                    <img src="./images/javabanner.png">
                </div>
                <div class="course__info">
                    <h4>Java Programming</h4>
                    <p>
                        
                  </p>
                    <a href="video tutorials\java\display_video_courses.php" class="btn btn-primary">Watch Videos</a>
                </div>
            </article>
            <article class="course">
                <div class="course__image">
                    <img src="./images/pythonbanner.jpg">
                </div>
                <div class="course__info">
                    <h4>Python Language</h4>
                    <p>
                        
                  </p>
                    <a href="video tutorials\java\display_video_courses.php" class="btn btn-primary">Watch Videos</a>
                </div>
            </article>
            <article class="course">
                <div class="course__image">
                    <img src="./images/webbanners.jpg">
                </div>
                <div class="course__info">
                    <h4>Web Technology</h4>
                    <p>
                        
                  </p>
                    <a href="video tutorials\java\display_video_courses.php" class="btn btn-primary">Watch Videos</a>
                </div>
            </article>
       
         
        </div>
      </section>
      <!--====================== END OF CATEGORIES =====================-->

      <section class="courses">
          <h2>Our Popular Courses</h2>
          <div class="container courses__container">
            <article class="course">
                <div class="course__image">
                    <img src="./images/course1.jpg">
                </div>
                <div class="course__info">
                    <h4>Flutter Development</h4>
                    <p>
                        Control every pixel to create customized & adaptive designs that look great on any screen. Take control of your codebase with plugins, testing, dev tools & build high quality apps. Hot Reload. Null Safe Code. Native Performance. Flexible UI. Open Source. Multi-Platform.  
                    </p>
                    <a href="programmingdemo.php" class="btn btn-primary">Enroll</a>
                </div>
            </article>
            <article class="course">
                <div class="course__image">
                    <img src="./images/course2.jpg">
                </div>
                <div class="course__info">
                    <h4>Web Development</h4>
                    <p>
                        Web development is the work involved in developing a website for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services.
                    </p>
                    <a href="programmingdemo.php" class="btn btn-primary">Enroll</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="./images/dsimg.png">
                </div>
                <div class="course__info">
                    <h4>Data Science Course</h4>
                    <p>
                        It is an interdisciplinary field that uses scientific methods, processes, algorithms and systems to extract knowledge and insights from noisy, structured and unstructured data, and apply knowledge and actionable insights from data across a broad range of application domains. 
                    </p>
                    <a href="programmingdemo.php" class="btn btn-primary">Enroll</a>
                </div>
            </article>
      </div>
</section>        
      
      <!--====================== END OF COURSES =====================-->

      <!--====================== satrt the exercise  =====================-->

      <section class="categories">
    <h2>Oue Popular Exercises</h2>
        <div class="container courses__container">
            <article class="course">
                <div class="course__image">
                    <img src="./images/banner.jpeg">
                </div>
                <div class="course__info">
                    <h4>programming Quizes</h4>
                    <p>
                        
                  </p>
                    <a href="online_quize/quizhome.php" class="btn btn-primary">Start Quize</a>
                </div>
            </article>
            <article class="course">
                <div class="course__image">
                    <img src="./images/PYTHON.png">
                </div>
                <div class="course__info">
                    <h4>Python Quize</h4>
                    <p>
                        
                  </p>
                    <a href="online_quize/quizhome.php" class="btn btn-primary">Start Quize</a>
                </div>
            </article>
            <article class="course">
                <div class="course__image">
                    <img src="./images/JAVA.png">
                </div>
                <div class="course__info">
                    <h4>Java Quize</h4>
                    <p>
                        
                  </p>
                    <a href="online_quize/quizhome.php" class="btn btn-primary">Start Quize</a>
                </div>
            </article>
       
         
        </div>
      </section>
      <!--====================== end the exercise  =====================-->
      <br><br><br><br><br><br><br>








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







    <!--  <section class="container testimonials__container mySwiper">
          <h2>Students' Testimonials</h2>
          <div class="swiper-wrapper">
              <article class="testimonial swiper-slide">
                  <div class="avatar">
                      <img src="./images/avatar1.jpg">
                  </div>
                  <div class="testimonial__info">
                      <h5>Diana Ayi</h5>
                      <small>Student</small>
                  </div>
                  <div class="testimonial__body">
                      <p>
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi corporis officiis sint dolore amet voluptatibus perspiciatis animi facere? Sed, rerum. Rem eveniet aut illo!
                      </p>
                  </div>
              </article>

              <article class="testimonial swiper-slide">
                  <div class="avatar">
                      <img src="./images/avatar2.jpg">
                  </div>
                  <div class="testimonial__info">
                      <h5>Ernest Achiever</h5>
                      <small>Web Developer</small>
                  </div>
                  <div class="testimonial__body">
                      <p>
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi corporis officiis sint dolore amet voluptatibus perspiciatis animi facere? Sed, rerum. Rem eveniet aut illo!
                      </p>
                  </div>
              </article>

            <!----  <article class="testimonial swiper-slide">
                  <div class="avatar">
                      <img src="./images/avatar3.jpg">
                  </div>
                  <div class="testimonial__info">
                      <h5>Edem Quist</h5>
                      <small>Student</small>
                  </div>
                  <div class="testimonial__body">
                      <p>
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi corporis officiis sint dolore amet voluptatibus perspiciatis animi facere? Sed, rerum. Rem eveniet aut illo!
                      </p>
                  </div>
              </article>

              <article class="testimonial swiper-slide">
                  <div class="avatar">
                      <img src="./images/avatar4.jpg">
                  </div>
                  <div class="testimonial__info">
                      <h5>Hajia Bintu</h5>
                      <small>Student</small>
                  </div>
                  <div class="testimonial__body">
                      <p>
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi corporis officiis sint dolore amet voluptatibus perspiciatis animi facere? Sed, rerum. Rem eveniet aut illo!
                      </p>
                  </div>
              </article>

              <article class="testimonial swiper-slide">
                  <div class="avatar">
                      <img src="./images/avatar5.jpg">
                  </div>
                  <div class="testimonial__info">
                      <h5>Jane Doe</h5>
                      <small>Student</small>
                  </div>
                  <div class="testimonial__body">
                      <p>
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi corporis officiis sint dolore amet voluptatibus perspiciatis animi facere? Sed, rerum. Rem eveniet aut illo!
                      </p>
                  </div>
              </article>-->
         <!-- </div>
          <div class="swiper-pagination"></div>
      </section>-->
      <!--====================== END OF TESTIMONIALS =====================-->








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
	<!---This is script section------->

 <script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='sunil';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}



 </script>

</body>
</html>