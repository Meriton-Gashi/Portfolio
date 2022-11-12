<!DOCTYPE html>
<html>
  <head>
    <title>Meriton Gashi</title>
    <meta charset="utf-8" />
    <meta lang="en" />
    <meta name="author" content="Meriton Gashi" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="../images/Iconslogo/rsz_logo_1-150x150.png" />
    <!--The below code is for importing google web fonts in html-->
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Baloo+Tamma|Kelly+Slab|Neucha|Righteous&display=swap" rel="stylesheet" />
    <link href="../css/style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/workslider.css" type="text/css" />
    <script src="../js/formValidate.js" type="text/javascript"></script>
    <script src="../js/main.js" type="text/javascript"></script>
  </head>
  <style>
    /*Internal CSS*/
    #time {
      float: right;
      font-size: 30px;
      margin: 10px;
      font-family: "kelly slab";
      margin-right: 20px;
      font-weight: bold;
    }
    @media only screen and (max-width: 800px) {
      #greet {
        visibility: hidden;
      }
      #time {
        margin: auto;
        font-family: "kelly slab";
      }
    }
    #greet {
      font-size: 25px;
      font-family: audiowide;
      position: absolute;
      left: 2%;
      top: 2%;
      font-weight: bold;
    }

    #center {
      text-align: center;
      padding: 30px;
    }
  </style>
  <body>
    <!--Header Section-->
    <div class="header">
      <!--Inline css in below line-->
      <span
        style="font-size: 40px; cursor: pointer; margin-left: 10px"
        onclick="openNav()"
        id="open"
        >&#9776;
      </span>
      
      <span class="greeting" id="greet"></span>
      <span id="time"></span>
    </div>

    <!--Navigation Section-->
    <div id="myNav" class="navbar">
      <a
        href="javascript:void(0)"
        class="closebtn"
        onclick="closeNav()"
        id="close"
        >&times;</a
      >
      <div class="navbar-content">
        <a href="#home" id="active">Home</a>
        <a href="resume.php">CV</a>
        <a href="contact.php">Contact</a>
      </div>
    </div>

    <!--Banner Section-->
    <div class="banner-area" id="home">
      <div class="title-image"></div>
      <div class="title-name">
        <p class="name">
          <span id="iden-name"></span><br />
          <span class="subtitle1" id="subtitle1">Web Developer</span>
          <span class="subtitle2" id="subtitle2"
            >FrontEnd & &nbsp;BackEnd</span
          >
        </p>
      </div>
    </div>

    <!--Services Section-->
    <div class="service-area" id="services">
      <div class="text-part">
        <h1 id="center" >What can I do?</h1>
        <div class="container">
          <div class="box">
            <div class="icon"></div>
            <div class="content">
              <h3>FrontEnd</h3>
              <h4>(Html, Css, JavaScript)</h4>
              <p>
                Can develop attractive, secure, fast and responsive websites for organization or individuals according to users requirement.
              </p>
            </div>
          </div>
          <div class="box">
            <div class="icon"></div>
            <div class="content">
              <h3>BackEnd</h3>
              <h4>(Php & MySqli)</h4>
              <p>
              I make sure the back-end performs quickly and responsively to front-end user requests. I can write high-quality code: to produce sustainable web applications.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Who do I work with, Section-->
    <div class="corpwork-area" id="corpwork">
      <div class="text-part">
        <!--Aligning header to center using inline css-->
        <h1 style="text-align: center">My projects</h1>
        <center>
          <div class="imgrel fade">
            <img src="../images/imgg/image1.png"/>
            <p>SmartEDU</p>
          </div>

          <div class="imgrel fade">
            <img src="../images/imgg/image2.png"/>
            <p>SmartEDU (dashboard)</p>
          </div>

          <div class="imgrel fade">
            <img src="../images/imgg/image3.png"/>
            <p>Gaming Shop</p>
          </div>

          <div class="imgrel fade">
            <img src="../images/imgg/image5.png"/>
            <p>E Shop (cart)</p>
          </div>

          <div class="imgrel fade">
            <img src="../images/imgg/image6.png"/>
            <p>NewsPortal</p>
          </div>

          <div class="imgrel fade">
            <img src="../images/imgg/image7.png"/>
            <p>NewsPortal (dashboard)</p>
          </div>
        </center>

        <div style="text-align: center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
          <span class="dot" onclick="currentSlide(6)"></span>
        </div>
      </div>
    </div>

    <!--About Section-->
    <div class="about-area" id="about">
      <div class="text-part-abt">
        <h1 style="text-align: center; padding-bottom: 10px">
          <span
            style="
              font-size: 80px;
              text-decoration: none;
              border-bottom: 2px solid rgb(230, 173, 30);
              color: rgb(230, 173, 30);
            "
            >About me</span
          ><!--About Me-->
        </h1>
        <div class="about">
          <div class="abt-content">
            <div class="rem-part">
              <div class="social-media">
                <div class="icons">
                  <a
                    href="https://www.facebook.com/"
                    target="
                            "
                    ><img src="../images/Iconslogo/facebook.png"
                  /></a>
                  <a href="https://twitter.com/" target="_blank"
                    ><img src="../images/Iconslogo/twitter.png"
                  /></a>
                  <a
                    href="https://www.instagram.com/meriton.gashii1/"
                    target="_blank"
                    ><img src="../images/Iconslogo/instagram.png"
                  /></a>
                </div>
              </div>
              <div class="left-part">
                <span class="h2"
                  >I'm
                  <span style="color: orangered">Meriton Gashi</span></span
                ><br />
                <span class="h3">Developer, Programmer</span>
                <hr />
                <p style="font-size: 25px">
                  I started my studies at UBT in 2019 and I am finishing my bachelor's degree in web developer. I managed to gain good knowledge in studies about the program using Html, Css, Javascript, Php, MySQL, Laravel programming languages.Until now, I have not worked in any company, but I have worked in many school projects and in the courses where I participated.
                  <span style="font-size: 25px; color: chocolate">
                </p>
              </div>
              <div class="abt-btn">
                <button
                  type="button"
                  onclick="window.location.href='resume.php';"
                  class="button1"
                >
                  View My CV
                </button>
                <button
                  type="button"
                  onclick="window.location.href='contact.php'"
                  class="button2"
                >
                  Hire Me
                </button>
              </div>
            </div>
            <div class="img-part">
              <div class="img"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    
    
    
    <div class="cta hide" id="goup">
      <a href="#home"><img src="../images/Iconslogo/arrup.png" /></a>
    </div>

    <!--Copyright Information-->
    <div class="copyright">
      <p>
        &copy; 2022
        <a href="https://github.com/Meriton-Gashi">Meriton Gashi</a>
      </p>
    </div>
    <script>
      //handles goup button
      myID = document.getElementById("goup");

      var myScrollFunc = function () {
        var y = window.scrollY;
        if (y >= 800) {
          myID.className = "cta show";
        } else {
          myID.className = "cta hide";
        }
      };
      window.addEventListener("scroll", myScrollFunc);

      //The below line dynamically change the name in banner area.
      document.getElementById("iden-name").innerHTML = "Meriton Gashi";

      /*
                The below code is used to slide/change image infinitely using for loop.
                A single image will be available only for 2.5s and after that it automatically changes another image
            */
      var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("imgrel");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2500);
      }

      //The below is used to make navigation bar sticky
      //when we scroll up the navigation bar will stick on top of page
      window.onscroll = function () {
        stickFunction();
      };
      var navbar = document.getElementById("myNav");
      var sticky = navbar.offsetTop;

      function stickFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky");
        } else {
          navbar.classList.remove("sticky");
        }
      }
    </script>
  </body>
</html>
