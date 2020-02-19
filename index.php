<!DOCTYPE html>
<html lang="en">

<head>
  <title>Youri Gruiters | Personal Portfolio</title>
  <meta charset="UTF-8">
  <meta name="description" content="Youri Gruiters personal portfolio displaying multiple projects that he has worked on over the last decade for personal work and client work.">
  <link rel="canonical" href="http://yourigruiters.com/" />
  <meta name="robots" content="index, follow">
  <meta name="author" content="Youri Gruiters">
  <meta name="keywords" content="Frontend,front-end,developer,designer,development,javascript,jQuery,react">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/logo/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <link rel="stylesheet" type="text/css" href="assets/css/default-min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/styles-min.css">
</head>

<body>
  <!-- HEADER -->
  <header class="container-fluid introduction mb-0" id="top">
    <div class="container">
      <div class="row">
        <div class="col-8 offset-2 text-center white">
          <h1 class="mt-5 font-weight-light">Hello, my name is <span class="second">Youri Gruiters</span>.</h1>
          <h2 class="font-weight-light">Dutch front-end developer based in Stockholm, Sweden.</h2>
        </div>
      </div>
    </div>
  </header>
  <!-- END HEADER -->

  <div class="container story mb-5 mt-5 pt-5 fadeIn" id="story">
    <div class="row">
      <div class="col-10 offset-1 text-center introduction">
        <h4 class="mb-5">My story</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-6">
        <img src="images/story/self.png" alt="self" class="img-fluid mx-auto" />
      </div>
      <div class="col-12 col-sm-10 offset-sm-1 col-lg-6 offset-lg-0">
        <p class="grey">
          I am a passionate and
          self-motivated individual with a keen interest in webdesign, web development, coding and coaching.
          I have a BA Degree in IT & Media design and a BA Degree in IT & Education.
          <br><br>
          As my personal vision in life has always been '<span class="second font-weight-bold">personal development</span>', I am always looking to find ways that
          will provide me the opportunity to learn, grow and contribute significantly.
          <br><br>
          Building well-structured web applications with a focus on good design is a true passion of mine.
          I am skilled in building the above using the React framework, Wordpress or plain web languages.
          I’m focused and motivated on improving the quality of my work and have gained great programming
          knowledge on Redux, TypeScript, GraphQL and Node. 
        </p>
      </div>
    </div>
    <div class="row d-md-none">
      <div class="col-12">
        <a href="files/CV-2019.pdf" target="_blank" class="effect"><button class="button bg-gradient mx-auto">View my resume</button></a>
      </div>
    </div>
  </div>

  <div class="container portfolio mb-5 fadeIn" id="portfolio">
    <div class="row">
      <div class="col-10 offset-1 text-center introduction">
        <h4 class="mb-2">Portfolio items</h4>
        <p class="grey mb-5">
          <span>Check my <a href="https://github.com/yourigruiters" target="_blank" class="font-weight-bold"><i class="fab fa-github second"></i> </a> for more projects...</span>
        </p>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-sm"> <!--spacer--> </div>
      <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
          <div class="row h-50">
              <div class="col"></div>
              <div class="col"></div>
          </div>
          <h5 class="m-2">
            <a href="#webshop"><span class="badge badge-pill bg-second">&nbsp;</span></a>
          </h5>
          <div class="row h-50">
              <div class="col border-right"></div>
              <div class="col"></div>
          </div>
      </div>
      <div class="col-sm py-2">
        <div class="card shadow" id="webshop">
          <a href="http://webshop.yourigruiters.com" target="_blank" class="effect"><div class="card-body">
              <div class="float-right text-muted small">November 2019</div>
              <h4 class="card-title text-muted">Simple React Webshop</h4>
              <img src="images/portfolio/webshop.jpg" alt="webshop" class="mb-4 img-fluid shadow">
              <h4 class="first small">React</h4>
              <p class="card-text grey">First basic React application made using a previously designed webshop. React-router-dom is the only library used. </p>
          </div></a>
        </div>
      </div>
    </div>

    <div class="row no-gutters">
      <div class="col-sm py-2">
        <div class="card shadow" id="dashboard">
          <a href="http://nli.yourigruiters.com" target="_blank" class="effect"><div class="card-body">
            <div class="float-right text-muted small">August 2019</div>
            <h4 class="card-title text-muted">NLI Dashboard</h4>
            <img src="images/portfolio/nli.jpg" alt="nli" class="mb-4 img-fluid shadow">
            <h4 class="first small">HTML - CSS - Bootstrap</h4>
            <p class="card-text grey">Dashboard designed and coded for NLI, South Africa. Application will be finalized with responsiveness and functionalities using the React framework.</p>
          </div></a>
        </div>
      </div>
      <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
          <div class="row h-50">
              <div class="col border-right"></div>
              <div class="col"></div>
          </div>
          <h5 class="m-2">
            <a href="#dashboard"><span class="badge badge-pill bg-second">&nbsp;</span></a>
          </h5>
          <div class="row h-50">
              <div class="col border-right"></div>
              <div class="col"></div>
          </div>
      </div>
      <div class="col-sm"> <!--spacer--> </div>
    </div>

    <div class="row no-gutters">
      <div class="col-sm"> <!--spacer--> </div>
      <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
          <div class="row h-50">
              <div class="col border-right"></div>
              <div class="col"></div>
          </div>
          <h5 class="m-2">
            <a href="#ceedlearning"><span class="badge badge-pill bg-second">&nbsp;</span></a>
          </h5>
          <div class="row h-50">
              <div class="col border-right"></div>
              <div class="col"></div>
          </div>
      </div>
      <div class="col-sm py-2">
        <div class="card shadow" id="ceedlearning">
          <a href="http://www.ceedlearning.com" target="_blank" class="effect"><div class="card-body">
              <div class="float-right text-muted small">June 2019</div>
              <h4 class="card-title text-muted">Ceed Learning Website</h4>
              <img src="images/portfolio/ceedlearning.jpg" alt="ceedlearning" class="mb-4 img-fluid shadow">
              <h4 class="first small">Wordpress</h4>
              <p class="card-text grey">Wordpress website created for Ceed Learning, South Africa. Website created from scratch using the Elementor plugin and custom CSS/JavaScript.</p>
          </div></a>
        </div>
      </div>
    </div>


    <div class="row no-gutters">
      <div class="col-sm py-2">
        <div class="card shadow" id="ceedapp">
          <a href="http://ceedapp.yourigruiters.com" target="_blank" class="effect"><div class="card-body">
            <div class="float-right text-muted small">June 2018</div>
            <h4 class="card-title text-muted">Ceed APP</h4>
            <img src="images/portfolio/ceedapp.jpg" alt="ceedapp" class="mb-4 img-fluid shadow">
            <h4 class="first small">HTML - CSS - jQuery - AJAX - PHP - MySQL</h4>
            <p class="card-text grey">Fully functional E-Learning application created for Ceed Learning during my internship in South Africa. Created using vanilla coding in plain programming languages. </p>
        </div></a>
        </div>
      </div>
      <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
          <div class="row h-50">
              <div class="col border-right"></div>
              <div class="col"></div>
          </div>
          <h5 class="m-2">
            <a href="#ceedapp"><span class="badge badge-pill bg-second">&nbsp;</span></a>
          </h5>
      </div>
      <div class="col-sm"> <!--spacer--> </div>
    </div>

  </div> <!-- CONTAINER END -->

  <div class="container-fluid bg-gradient pb-5 bg-gradient mt-5 projects" id="clients">
    <div class="container">
      <div class="row">
        <div class="col-10 offset-1 text-center">
          <h4 class="mb-3 font-weight-bold white">Proudly worked with</h4>
          <hr class="bg-white mx-auto mt-1 mb-5">
        </div>
      </div>
      <div class="row companies mb-0">
        <div class="col-6 offset-0 col-sm-3 col-lg-2 offset-lg-2 offset-xl-1 mb-4">
          <img src="images/clients/ceedlearning.png" class="img-fluid" alt="ceedlearning" />
        </div>
        <div class="col-6 col-sm-3 col-lg-2 mb-4">
          <img src="images/clients/roc.png" class="img-fluid" alt="roc" />
        </div>
        <div class="col-xl-2 d-none d-xl-block mb-4">
          <img src="images/clients/pg.png" class="img-fluid" alt="pg" />
        </div>
        <div class=" col-6 col-sm-3 col-lg-2 mb-4">
          <img src="images/clients/elzendaalcollege.png" class="img-fluid" alt="elzendaalcollege" />
        </div>
        <div class=" col-6 col-sm-3 col-lg-2 mb-4">
          <img src="images/clients/nli.png" class="img-fluid" alt="nli" />
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer id="form">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-6 p-0">
          <img src="images/background/coding.jpg" alt="coding" class="img-fluid coding-image" />
        </div>
        <div class="col-12 col-lg-6 form bg-black">
          <div class="content text-center">
            <h5 class="font-weight-bold white">Contact</h5>
            <hr class="bg-white mx-auto mt-1 mb-4">
            <p class="second mb-4 font-weight-bold">Have a question or want to work together?</p>
          </div>
          <?php
          if (isset($_GET["completed"])) {
            $result = $_GET["completed"];
            if ($result == "yes") {
              echo "<p class='formMessage text-center mx-auto'>Thank you very much for reaching out to me, I will ensure to contact you as soon as possible.</p>";
            }
          } else {
            ?>
            <form class="mx-auto mb-4" id="contactForm" autocomplete="off" action="assets/php/mail.php" method="POST">
              <input class="white" type="text" name="name" placeholder="Enter name" autocomplete="name-new" required>
              <input class="white" type="email" name="email" placeholder="Enter email" autocomplete="email-new" required>
              <textarea class="white" placeholder="Your message" name="message" required></textarea>
            </form>
            <div>
              <button form="contactForm" type="submit" class="button bg-gradient mx-auto mt-3" name="submit">Submit</button>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="logo mb-5">
            <img src="images/logo/logo.png" alt="logo" class="img-fluid mx-auto" />
          </div>
          <div class="social mx-auto mb-5">
            <ul>
              <li class="bg-first float-left"><a href="https://www.instagram.com/yourigruiters/" target="_blank"><i class="fab fa-instagram mr-3 white"></i></a></li>
              <li class="bg-second float-left"><a href="https://www.github.com/yourigruiters" target="_blank"><i class="fab fa-github mr-3 white"></i></a></li>
              <li class="bg-third float-left"><a href="https://www.linkedin.com/in/youri-gruiters-09677071/" target="_blank"><i class="fab fa-linkedin-in mr-3 white"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-6 text-right">
          <p class="mb-0 contact-smaller font-weight-bold">+31 681 320 452</p>
        </div>
        <div class="col-6">
          <p class="mb-0 contact-smaller font-weight-bold">i-youri-i@<span class="d-sm-none"> </span>hotmail.com</p>
        </div>
      </div>
      <div class="row mb-3 links">
        <div class="col-3 col-sm-2 col-md-1 offset-0 offset-sm-2 offset-md-4 text-center">
          <p class="mb-0 font-weight-bold text-uppercase"><a href="#top" class="effect">Home</a></p>
        </div>
        <div class="col-3 col-sm-2 col-md-1 text-center">
          <p class="mb-0 font-weight-bold text-uppercase"><a href="#story" class="effect">Story</a></p>
        </div>
        <div class="col-3 col-sm-2 col-md-1 text-center">
          <p class="mb-0 font-weight-bold text-uppercase"><a href="#portfolio" class="effect">Projects</a></p>
        </div>
        <div class="col-3 col-sm-2 col-md-1 text-center">
          <p class="mb-0 font-weight-bold text-uppercase"><a href="#form" class="effect">Contact</a></p>
        </div>
      </div>
      <div class="row pb-3 copyright">
        <div class="col-12 text-center">
          <p class="mb-0 font-weight-bold">Copyright © 2020 | Youri Gruiters</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- FOOTER END -->


  <!-- OVERLAYS -->
  <nav id="navbar" class="container-fluid white">
    <div class="container">

      <a href="#top" class="logo float-left">
        <img src="images/logo/logo-150.png" alt="logo" class="img-fluid float-left" />
        <span class="float-left d-none d-sm-block font-weight-bold text-uppercase">Youri Gruiters</span>
      </a>
      <ul class="ml-auto float-right">
        <li class="float-left"><a href="#top" class="effect font-weight-bold text-uppercase text-right">Home</a></li>
        <li class="d-none d-md-block float-left"><a href="#story" class="effect font-weight-bold text-uppercase text-right">Story</a></li>
        <li class="d-none d-md-block float-left"><a href="#portfolio" class="effect font-weight-bold text-uppercase text-right">Projects</a></li>
        <li class="d-none d-md-block float-left"><a href="#form" class="effect font-weight-bold text-uppercase text-right">Contact</a></li>
        <li class="d-none d-md-block float-left"><a href="files/CV-2019.pdf" target="_blank" class="effect font-weight-bold text-uppercase text-right"><button class="button bg-gradient navbutton">Resume</button></a></li>
      </ul>
      <div class="clear"></div>
  </nav>

  <div id="overlay-contact" class="d-none d-md-block">
    <a href="#form" id="content" class="bg-first">
      <p class="text-center font-weight-bold">Get in touch!</p>
    </a>
    <div id="contact" class="bg-second">
      <a href="#form"><i class="fa fa-envelope mr-3 white"></i></a>
    </div>
  </div>
  <!-- OVERLAYS END -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="assets/js/main-min.js"></script>
</body>

</html>
