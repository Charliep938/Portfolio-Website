<?php
  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email'] !='' ) 
  {

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) 
    {
      $userName = $_POST['name'];
      $userEmail = $_POST['email'];
      $message = $_POST['message'];
    
      $to ="cpates93@gmail.com";
      $body = "";
    
      $body .= "From: ".$userName. "\r\n";
      $body .= "Email: ".$userEmail. "\r\n";
      $body .= "Message: ".$message. "\r\n";
      $subject .= "Subject test";
    
      mail($to,$messageSubject,$body);

      $message_sent = true;
    }
  }
?>
<?php
if($message_sent):
  ?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Charlie Pates</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css" />

</head>

<body>
  <div class="wrapper-container">
    <div class="wrapper">
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="shadow"></div>
      <div class="shadow"></div>
      <div class="shadow"></div>
      <span>Loading</span>
    </div>
  </div>
  <div class="main-page">
    <div class="page-container">
      <!--Navigation Bar-->
      <div class="nav-container">
        <nav>
          <div class="nav-logo"> <img src="" alt="">
            <a href="index.html">CHARLIE PATES</a>
          </div>
          <ul class="nav-center">
            <li><a href="#projects-container-id">PROJECTS</a></li>
            <li><a href="#skills-container-id">SKILLS</a></li>
            <li><a href="#contact-container-id">CONTACT</a></li>
          </ul>
          <div class="nav-socials">
            <li><a href="https://github.com/Charliep938" target="_blank"><i class="fa-brands fa-github"></i></a></li>
            <li><a href="https://www.linkedin.com/in/charlie-pates-a267575b/" target="_blank"><i
                  class="fa-brands fa-linkedin-in"></i></a></li>
          </div>
        </nav>
      </div>
      <!--MAIN SPLASH SECTION-->
      <div class="splash-container">
        <div class="splash-inner">
          <div class="splash-left">
            <div class="splash-header">
              <h1>
                DIGITAL&nbsp;<span style="color:#0984e3">DESIGNER&nbsp;</span><span
                  style="color:#0984e3">/</span>/&nbsp;FRONTEND&nbsp;<span
                  style="color:#0984e3">DEVELOPER&nbsp;</span><span style="color:#0984e3">/</span>/&nbsp;TEAM&nbsp;<span
                  style="color:#0984e3">LEADER</span>
              </h1>
            </div>
            <div class="splash-text">
              <p>
                Hi i'm Charlie.
                <br /><br />
                Seasoned Digital Designer with 3 years experience working with HTML/CSS and Javascript. Offering strong
                coding skills and working experience with SQL (MySQL or Transact-SQL).
                <br /><br />
                I currently work as a team leader for the market leading software company <a
                  href="https://briefyourmarket.com/" target="_blank" class="bym">BriefYourMarket.com</a>.
              </p>
            </div>
            <div class="splash-button-container">
              <div class="splash-button">
                <div class="splash-button-link">
                  <a href="#projects-container-id">MY PROJECTS</a>
                </div>
              </div>
              <div class="splash-button-secondary">
                <div class="splash-button-secondary-link">
                  <a href="#contact-container-id">CONTACT ME</a>
                </div>
              </div>
            </div>
          </div>
          <div class="splash-right hover-rotate">
            <img src="img/portrait.png" width="450" alt="portrait-image">
          </div>
        </div>
      </div>
    </div>
    <div id="projects-container-id" class="bg-top-image">
      <img src="img/bg-top-image.png" alt="">
    </div>
    <!--PROJECTS SECTION-->
    <div class="projects-container-bg">
      <div class="page-container">
        <div class="projects-container">
          <div class="projects-header module">
            <h1>MY PROJECTS</h1>
          </div>
          <div class="projects-intro-text module">
            <p>A showcase of the exciting projects I've worked on. Click on any of the images to view this project and take a tour!</p>
          </div>
          <div class="project-window module">
            <!--Cryptools-->
            <div class="project-box">
              <div class="project-box-inner">
                <div class="project-box-header module">
                  <h2>
                    <a href="CRYPTOOLS/index.html" target="_blank">
                      CRYPTOOLS
                    </a>
                  </h2>
                </div>
                <div class="content module">
                  <a href="../CRYPTOOLS/index.html" target="_blank">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="img/Projects/Crypto2.png">
                    <div class="content-details fadeIn-bottom">
                      <p class="content-text">A website to showcase crypto rates and tools</p>
                      <h3 class="content-title">Click to see more</h3>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-top-image">
      <img src="img/bg-top-image-reverse-white.png" alt="">
    </div>
    <div id="skills-container-id" class="skills-container-bg">
      <div class="page-container">
        <div class="skills-container">
          <div class="skills-header module">
            <h1>
              SKILLS
            </h1>
          </div>
          <div class="skills-languages-container">
            <div class="skills-languages-header module">
              <h1>CODING LANGUAGES</h1>
            </div>
            <div class="skills-languages">
              <div class="skills-languages-item module">
                <h2>
                  HTML
                </h2>
                <img src="img/Skills/html-5.png" alt="">
              </div>
              <div class="skills-languages-item module">
                <h2>
                  CSS
                </h2>
                <img src="img/Skills/css-3.png" alt="">
              </div>
              <div class="skills-languages-item module">
                <h2>
                  JAVASCRIPT
                </h2>
                <img src="img/Skills/js.png" alt="">
              </div>
              <div class="skills-languages-item module">
                <h2>
                  REACT
                </h2>
                <img src="img/Skills/react.png" alt="">
              </div>
              <div class="skills-languages-item module">
                <h2>
                  SQL
                </h2>
                <img src="img/Skills/sql.png" alt="">
              </div>
            </div>
          </div>
          <div class="skills-everyday-container">
            <div class="skills-everyday-header module">
              <h1>EVERYDAY SKILLS</h1>
            </div>
            <div class="skills-languages">
              <div class="skills-everyday-item module">
                <h2>
                  LEADERSHIP
                </h2>
                <img src="img/Skills/leadership.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  MANAGEMENT
                </h2>
                <img src="img/Skills/manager.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  COMMUNICATION
                </h2>
                <img src="img/Skills/chat.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  CUSTOMER SERVICE
                </h2>
                <img src="img/Skills/customer-feedback.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  CREATIVITY
                </h2>
                <img src="img/Skills/brain.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  ORGANISATIONAL
                </h2>
                <img src="img/Skills/task.png" alt="">
              </div>
            </div>
          </div>
          <div class="skills-everyday-container">
            <div class="skills-everyday-header module">
              <h1>APPLICATIONS</h1>
            </div>
            <div class="skills-languages">
              <div class="skills-everyday-item module">
                <h2>
                  PHOTOSHOP
                </h2>
                <img src="img/Apps/photoshop.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  ILLUSTRATOR
                </h2>
                <img src="img/Apps/illustrator.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  AFTER EFFECTS
                </h2>
                <img src="img/Apps/after-effects.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  ADOBE XD
                </h2>
                <img src="img/Apps/xd.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  FIGMA
                </h2>
                <img src="img/Apps/figma.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="contact-container-id" class="bg-top-image">
      <img src="img/bg-top-image-reverse-white-transparent.png" alt="">
    </div>
    <div class="contact-container-bg">
      <div class="page-container">
        <div class="contact-container">
          <div class="contact-header module">
            <h1>
              CONTACT ME
            </h1>
          </div>
          <div class="contact-form module">
            <form method="POST" action="emailform.php" id="contact-form">
              <div class="form-field">
                <input name="name" placeholder="Enter Name" type="text" />
              </div>
              <div class="form-field">
                <input style="cursor: pointer;" name="email" placeholder="Enter Email Address" type="text" />
              </div>
              <div class="form-field">
                <textarea name="message" rows="1" placeholder="Enter your message..." maxlength="400" id="myTextarea" style="resize:none"></textarea>
              </div>
              
              <input class="form-button" type="submit" value="Send" />
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="index.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
    const txt = document.querySelector('#myTextarea');
function setNewSize() {
   this.style.height = "1px";
   this.style.height = this.scrollHeight + "px";
}
txt.addEventListener('keyup', setNewSize);
  </script>
  <script>
    const constraints = {
        name: {
            presence: { allowEmpty: false }
        },
        email: {
            presence: { allowEmpty: false },
            email: true
        },
        message: {
            presence: { allowEmpty: false }
        }
    };
 
    const form = document.getElementById('contact-form');
 
    form.addEventListener('submit', function (event) {
      const formValues = {
          name: form.elements.name.value,
          email: form.elements.email.value,
          message: form.elements.message.value
      };
 
      const errors = validate(formValues, constraints);
 
      if (errors) {
        event.preventDefault();
        const errorMessage = Object
            .values(errors)
            .map(function (fieldValues) { return fieldValues.join(', ')})
            .join("\n");
 
        alert(errorMessage);
      }
    }, false);
 </script>
  <script>
    $('.project-window').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: true,
      autoplaySpeed: 1600,
      dots: true,
      arrows: false,
      responsive: [
    {
      breakpoint: 1840,
      settings: {
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 1600,
        dots: true,
        arrows: false,
      }
    },
    {
      breakpoint: 600,
      settings: {
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 1600,
        dots: true,
        arrows: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 1600,
        dots: true,
        arrows: false,
      }
    }]
    });
  </script>

  <!--SMOOTH SCROLLING jQuery-->
  <script>
    // Select all links with hashes
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function (event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
          &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 350, function () {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });
  </script>
  <script>
    (function ($) {

      /**
       * Copyright 2012, Digital Fusion
       * Licensed under the MIT license.
       * http://teamdf.com/jquery-plugins/license/
       *
       * @author Sam Sehnert
       * @desc A small plugin that checks whether elements are within
       *     the user visible viewport of a web browser.
       *     only accounts for vertical position, not horizontal.
       */

      $.fn.visible = function (partial) {

        var $t = $(this),
          $w = $(window),
          viewTop = $w.scrollTop(),
          viewBottom = viewTop + $w.height(),
          _top = $t.offset().top,
          _bottom = _top + $t.height(),
          compareTop = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

      };

    })(jQuery);
  </script>
  <script>
    $(window).scroll(function (event) {

      $(".module").each(function (i, el) {
        var el = $(el);
        if (el.visible(true)) {
          el.addClass("come-in");
        }
      });

    });
  </script>
  <script type="text/javascript">
    var win = $(window);
    var allMods = $(".module");

    // Already visible modules
    allMods.each(function (i, el) {
      var el = $(el);
      if (el.visible(true)) {
        el.addClass("already-visible");
      }
    });

    win.scroll(function (event) {

      allMods.each(function (i, el) {
        var el = $(el);
        if (el.visible(true)) {
          el.addClass("come-in");
        }
      });

    });
  </script>
  <script>
    $(window).on('load', function () {
      $(".wrapper-container").fadeOut("slow");
    });  
  </script>
</body>

</html>
<?php
else:
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Charlie Pates</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css" />

</head>

<body>
  <div class="wrapper-container">
    <div class="wrapper">
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="shadow"></div>
      <div class="shadow"></div>
      <div class="shadow"></div>
      <span>Loading</span>
    </div>
  </div>
  <div class="main-page">
    <div class="page-container">
      <!--Navigation Bar-->
      <div class="nav-container">
        <nav>
          <div class="nav-logo"> <img src="" alt="">
            <a href="index.html">CHARLIE PATES</a>
          </div>
          <ul class="nav-center">
            <li><a href="#projects-container-id">PROJECTS</a></li>
            <li><a href="#skills-container-id">SKILLS</a></li>
            <li><a href="#contact-container-id">CONTACT</a></li>
          </ul>
          <div class="nav-socials">
            <li><a href="https://github.com/Charliep938" target="_blank"><i class="fa-brands fa-github"></i></a></li>
            <li><a href="https://www.linkedin.com/in/charlie-pates-a267575b/" target="_blank"><i
                  class="fa-brands fa-linkedin-in"></i></a></li>
          </div>
        </nav>
      </div>
      <!--MAIN SPLASH SECTION-->
      <div class="splash-container">
        <div class="splash-inner">
          <div class="splash-left">
            <div class="splash-header">
              <h1>
                DIGITAL&nbsp;<span style="color:#0984e3">DESIGNER&nbsp;</span><span
                  style="color:#0984e3">/</span>/&nbsp;FRONTEND&nbsp;<span
                  style="color:#0984e3">DEVELOPER&nbsp;</span><span style="color:#0984e3">/</span>/&nbsp;TEAM&nbsp;<span
                  style="color:#0984e3">LEADER</span>
              </h1>
            </div>
            <div class="splash-text">
              <p>
                Hi i'm Charlie.
                <br /><br />
                Seasoned Digital Designer with 3 years experience working with HTML/CSS and Javascript. Offering strong
                coding skills and working experience with SQL (MySQL or Transact-SQL).
                <br /><br />
                I currently work as a team leader for the market leading software company <a
                  href="https://briefyourmarket.com/" target="_blank" class="bym">BriefYourMarket.com</a>.
              </p>
            </div>
            <div class="splash-button-container">
              <div class="splash-button">
                <div class="splash-button-link">
                  <a href="#projects-container-id">MY PROJECTS</a>
                </div>
              </div>
              <div class="splash-button-secondary">
                <div class="splash-button-secondary-link">
                  <a href="#contact-container-id">CONTACT ME</a>
                </div>
              </div>
            </div>
          </div>
          <div class="splash-right hover-rotate">
            <img src="img/portrait.png" width="450" alt="portrait-image">
          </div>
        </div>
      </div>
    </div>
    <div id="projects-container-id" class="bg-top-image">
      <img src="img/bg-top-image.png" alt="">
    </div>
    <!--PROJECTS SECTION-->
    <div class="projects-container-bg">
      <div class="page-container">
        <div class="projects-container">
          <div class="projects-header module">
            <h1>MY PROJECTS</h1>
          </div>
          <div class="projects-intro-text module">
            <p>A showcase of the exciting projects I've worked on. Click on any of the images to view this project and take a tour!</p>
          </div>
          <div class="project-window module">
            <!--Cryptools-->
            <div class="project-box">
              <div class="project-box-inner">
                <div class="project-box-header module">
                  <h2>
                    <a href="CRYPTOOLS/index.html" target="_blank">
                      CRYPTOOLS
                    </a>
                  </h2>
                </div>
                <div class="content module">
                  <a href="../CRYPTOOLS/index.html" target="_blank">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="img/Projects/Crypto2.png">
                    <div class="content-details fadeIn-bottom">
                      <p class="content-text">A website to showcase crypto rates and tools</p>
                      <h3 class="content-title">Click to see more</h3>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-top-image">
      <img src="img/bg-top-image-reverse-white.png" alt="">
    </div>
    <div id="skills-container-id" class="skills-container-bg">
      <div class="page-container">
        <div class="skills-container">
          <div class="skills-header module">
            <h1>
              SKILLS
            </h1>
          </div>
          <div class="skills-languages-container">
            <div class="skills-languages-header module">
              <h1>CODING LANGUAGES</h1>
            </div>
            <div class="skills-languages">
              <div class="skills-languages-item module">
                <h2>
                  HTML
                </h2>
                <img src="img/Skills/html-5.png" alt="">
              </div>
              <div class="skills-languages-item module">
                <h2>
                  CSS
                </h2>
                <img src="img/Skills/css-3.png" alt="">
              </div>
              <div class="skills-languages-item module">
                <h2>
                  JAVASCRIPT
                </h2>
                <img src="img/Skills/js.png" alt="">
              </div>
              <div class="skills-languages-item module">
                <h2>
                  REACT
                </h2>
                <img src="img/Skills/react.png" alt="">
              </div>
              <div class="skills-languages-item module">
                <h2>
                  SQL
                </h2>
                <img src="img/Skills/sql.png" alt="">
              </div>
            </div>
          </div>
          <div class="skills-everyday-container">
            <div class="skills-everyday-header module">
              <h1>EVERYDAY SKILLS</h1>
            </div>
            <div class="skills-languages">
              <div class="skills-everyday-item module">
                <h2>
                  LEADERSHIP
                </h2>
                <img src="img/Skills/leadership.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  MANAGEMENT
                </h2>
                <img src="img/Skills/manager.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  COMMUNICATION
                </h2>
                <img src="img/Skills/chat.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  CUSTOMER SERVICE
                </h2>
                <img src="img/Skills/customer-feedback.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  CREATIVITY
                </h2>
                <img src="img/Skills/brain.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  ORGANISATIONAL
                </h2>
                <img src="img/Skills/task.png" alt="">
              </div>
            </div>
          </div>
          <div class="skills-everyday-container">
            <div class="skills-everyday-header module">
              <h1>APPLICATIONS</h1>
            </div>
            <div class="skills-languages">
              <div class="skills-everyday-item module">
                <h2>
                  PHOTOSHOP
                </h2>
                <img src="img/Apps/photoshop.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  ILLUSTRATOR
                </h2>
                <img src="img/Apps/illustrator.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  AFTER EFFECTS
                </h2>
                <img src="img/Apps/after-effects.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  ADOBE XD
                </h2>
                <img src="img/Apps/xd.png" alt="">
              </div>
              <div class="skills-everyday-item module">
                <h2>
                  FIGMA
                </h2>
                <img src="img/Apps/figma.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="contact-container-id" class="bg-top-image">
      <img src="img/bg-top-image-reverse-white-transparent.png" alt="">
    </div>
    <div class="contact-container-bg">
      <div class="page-container">
        <div class="contact-container">
          <div class="contact-header module">
            <h1>
              CONTACT ME
            </h1>
          </div>
          <div class="contact-form module">
            <form method="POST" action="emailform.php" id="contact-form">
              <div class="form-field">
                <input name="name" placeholder="Enter Name" type="text" />
              </div>
              <div class="form-field">
                <input style="cursor: pointer;" name="email" placeholder="Enter Email Address" type="text" />
              </div>
              <div class="form-field">
                <textarea name="message" rows="1" placeholder="Enter your message..." maxlength="400" id="myTextarea" style="resize:none"></textarea>
              </div>
              
              <input class="form-button" type="submit" value="Submission Complete" />
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="index.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
    const txt = document.querySelector('#myTextarea');
function setNewSize() {
   this.style.height = "1px";
   this.style.height = this.scrollHeight + "px";
}
txt.addEventListener('keyup', setNewSize);
  </script>
  <script>
    const constraints = {
        name: {
            presence: { allowEmpty: false }
        },
        email: {
            presence: { allowEmpty: false },
            email: true
        },
        message: {
            presence: { allowEmpty: false }
        }
    };
 
    const form = document.getElementById('contact-form');
 
    form.addEventListener('submit', function (event) {
      const formValues = {
          name: form.elements.name.value,
          email: form.elements.email.value,
          message: form.elements.message.value
      };
 
      const errors = validate(formValues, constraints);
 
      if (errors) {
        event.preventDefault();
        const errorMessage = Object
            .values(errors)
            .map(function (fieldValues) { return fieldValues.join(', ')})
            .join("\n");
 
        alert(errorMessage);
      }
    }, false);
 </script>
  <script>
    $('.project-window').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: true,
      autoplaySpeed: 1600,
      dots: true,
      arrows: false,
      responsive: [
    {
      breakpoint: 1840,
      settings: {
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 1600,
        dots: true,
        arrows: false,
      }
    },
    {
      breakpoint: 600,
      settings: {
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 1600,
        dots: true,
        arrows: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 1600,
        dots: true,
        arrows: false,
      }
    }]
    });
  </script>

  <!--SMOOTH SCROLLING jQuery-->
  <script>
    // Select all links with hashes
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function (event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
          &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 350, function () {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });
  </script>
  <script>
    (function ($) {

      /**
       * Copyright 2012, Digital Fusion
       * Licensed under the MIT license.
       * http://teamdf.com/jquery-plugins/license/
       *
       * @author Sam Sehnert
       * @desc A small plugin that checks whether elements are within
       *     the user visible viewport of a web browser.
       *     only accounts for vertical position, not horizontal.
       */

      $.fn.visible = function (partial) {

        var $t = $(this),
          $w = $(window),
          viewTop = $w.scrollTop(),
          viewBottom = viewTop + $w.height(),
          _top = $t.offset().top,
          _bottom = _top + $t.height(),
          compareTop = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

      };

    })(jQuery);
  </script>
  <script>
    $(window).scroll(function (event) {

      $(".module").each(function (i, el) {
        var el = $(el);
        if (el.visible(true)) {
          el.addClass("come-in");
        }
      });

    });
  </script>
  <script type="text/javascript">
    var win = $(window);
    var allMods = $(".module");

    // Already visible modules
    allMods.each(function (i, el) {
      var el = $(el);
      if (el.visible(true)) {
        el.addClass("already-visible");
      }
    });

    win.scroll(function (event) {

      allMods.each(function (i, el) {
        var el = $(el);
        if (el.visible(true)) {
          el.addClass("come-in");
        }
      });

    });
  </script>
  <script>
    $(window).on('load', function () {
      $(".wrapper-container").fadeOut("slow");
    });  
  </script>
</body>

</html>
<?php
endif;
?>