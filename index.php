<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />

    <title>Dashboard</title>
 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
 
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
  
  </head>

  <body>
  <!-- Top Menu -->
    <div id="page-wraper">
        <div class="topnav" >
         <nav class=" navbar  fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav  "id="topnav">
         <div class="name" >
              <h4 style=" color:white"><a href="index.html">Let's Get Hired</a></h4>
            </div>
           <ul class=" nav navbar-nav nav-flex-icons ml-auto ">
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                  Account Setting
                </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                   <a class="dropdown-item" href="#">Change Account Password</a>
                   <a class="dropdown-item" href="#">Sign Out</a>
                 </div>
              </li>
           </ul>
         </nav>
        </div>  
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
         
        <div id="menu" class="menu">
           

          <div class="container">
            
            <div class="image">
              <img src="assets/images/userimage/username.jpg" alt="" /> 
              <a href="#"><p class="img_description">Upload image</p></a>
            </div>

            <div class="username">
              <h4><?php echo "$username" ?></h4>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1">Profile</a></li>
                <li><a href="#section2">List Of Companies</a></li>
                <li><a href="#section3">Scoreboard</a></li>
              </ul>
            </nav>
             
          </div>
        </div>
      </div>
       
      <!-- Form section -->
      <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <h2>Dashboard</h2>
            <div class="line-dec"></div>
          </div>
          <div class="row">
            <div class="About">
              <div class="container" id="about">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        Name
                        <input
                          name="name"
                          type="text"
                          class="form-control"
                          id="name"
                          placeholder="Your name..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        Email Id
                        <input
                          name="email"
                          type="text"
                          class="form-control"
                          id="email"
                          placeholder="Your email..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                       College
                        <input
                          name="college"
                          type="text"
                          class="form-control"
                          id="college"
                          placeholder="College..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                       Course
                        <input
                          name="Course"
                          class="form-control"
                          id="message"
                          placeholder="course..."
                          required=""
                        ></input>
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                       Branch
                        <input
                          name="branch"
                          class="form-control"
                          id="message"
                          placeholder="Branch..."
                          required=""
                        ></input>
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                       Year Of Passing
                        <input
                          name="passing"
                          class="form-control"
                          id="message"
                          placeholder="passing..."
                          required=""
                        ></input>
                      </fieldset>
                    </div>
                     <div class="col-md-6">
                      <fieldset>
                       Phone Number
                        <input
                          name="number"
                          class="form-control"
                          id="message"
                          placeholder="add phone number..."
                          required=""
                        ></input>
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                       Gender
                        <input
                          name="gender"
                          class="form-control"
                          id="gender"
                          placeholder="gender..."
                          required=""
                        ></input>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">
                          Update profile
                        </button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
  </body>
</html>
