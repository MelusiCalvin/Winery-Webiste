<?php
// require "constants.php";
// if(isset($_SESSION["uid"])){
// 	header("location:profile.php");
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soweto's Finest Winery</title>
	  <link rel="icon" type="image/png" sizes="16x16" href="pics/grapes-2032838_1920.jpg">
  <?php
  include('links.php');
  include('header.php');
  ?>

</head>
<body>

    <!-- START OF SLIDER SECTION -->
    <section class="banner">

        <div class="imgBx">
            <img src="pics/mosel-4336787_1920.jpg" alt="" class="active">
            <img src="pics/grapevine.jpg" alt="">
            <img src="pics/vineyard.jpg" alt="">
        </div>

        <div class="contentBx" data-aos="fade-right">
            <div class="active">
                <h2>Vine Yard Of The European Capes</h2>
                <p>“The true character of a site is only revealed through the work and determination of tending each vineyard with meticulous care and vinifying with minimalist winemaking techniques that fully express the terroir.” – Paul Hobbs</p>
            </div>
            <div>
                <h2>Dornier Wine Estate</h2>
                <p>Dornier’s modern cellar and production facility is quite different from the traditional 18th- and 19th-century buildings you’ll see in the winelands. For example, a pool above the cellar regulates the temperature of the wines in an eco-friendly way. Its reflective surface also helps keep the entire subterranean building cool. The cellar’s overall design pays homage to the Dornier family’s history in the aviation industry. Contact the winery in advance to arrange a tour of the facility, then enjoy a tasting of award-winning wines like the Dornier Donatus White (a blend of chenin blanc and rich sémillon), the Dornier Merlot (with hints of plum, mint, and roasted nuts), and the Cocoa Hill Sauvignon Blanc (featuring notes of mulberry, roasted oak, vanilla, and spice).</p>
            </div>
            <div>
                <h2>Waterford Estate</h2>
                <p>Waterford Estate is situated in one of the world's most visually arresting pockets of paradise. Nestled in the picturesque Blaauwklippen Valley, in the world renowned Stellenbosch region, this 120 hectare property owned by Jeremy and Leigh Ord and managed by partner and Cellar master Kevin Arnold. The Estate boasts old citrus groves, rolling lawns, water features and fragrant lavender and rosemary beds.</p>
            </div>
        </div>

        <ul class="controls" data-aos="fade-left">
            <li onclick="prevSlide();prevSlideText()"></li>
            <li onclick="nextSlide();nextSlideText()"></li>
        </ul>
        
    </section>
    <!-- END OF SLIDER SECTION -->

    <!-- START OF THE INTRODUCTION SECTION -->
    <section id="introduction" class="tm-section-pad-top intro" data-aos="fade-in">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <img src="pics/wine-541922_1920.jpg" alt="Image" class="img-fluid tm-intro-img" />
            </div>
            <div class="col-lg-6">
              <div class="tm-intro-text-container">
                <center>
                  <h2 class="tm-text-primary mb-4 tm-section-title">Introduction</h2>
                </center>
                  <p class="mb-4 tm-intro-text">
                  Soweto's Finest Winery Marketing is a digital marketing agency for the wine industry. Soweto's Finest Winery a suite of marketing services to build your wine brand and boost DTC sales, including SEO, photography, ecommerce consulting, and more.
                </p>
                  <div class="tm-next">
                    <center>
                    <a href="blog.php" class="tm-intro-text tm-btn-primary">Read More</a>
                    </center>
                  </div>
              </div>
            </div>
          </div>
    </section>
    <!-- END OF THE INTRODUCTION SECTION -->

    <!-- START OF OUR WORK SECTION -->
    <section id="work" class="tm-section-pad-top" data-aos="fade-in">
        <div class="container tm-container-gallery">
          <div class="row">
            <div class="text-center col-12">
                <h2 class="tm-text-primary tm-section-title mb-4">Our Work</h2>
                <p class="mx-auto tm-work-description">
                  "We are thrilled with Vinbound’s work and highly recommend Soweto's Finest Winery Marketing to anyone looking to improve their online presence."
                </p>
            </div>            
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="mx-auto tm-gallery-container">
                      <div class="grid tm-gallery">
                        <a href="pics/red-wine-2443699_1920.jpg">
                          <figure class="effect-honey tm-gallery-item">
                            <img src="pics/red-wine-2443699_1920.jpg" alt="Image" class="img-fluid">
                            <figcaption>
                              <h2><i>Light-Bodied <span>Red</span> Wines</i></h2>
                            </figcaption>
                          </figure>
                        </a>
                        <a href="pics/red-wine-1004255_1920.jpg">
                          <figure class="effect-honey tm-gallery-item">
                            <img src="pics/red-wine-1004255_1920.jpg" alt="Image" class="img-fluid">
                            <figcaption>
                              <h2><i>Medium-Bodied <span>Red</span> Wines</i></h2>
                            </figcaption>
                          </figure>
                        </a>
                        <a href="pics/wine-bottles-3623697_1920.jpg">
                          <figure class="effect-honey tm-gallery-item">
                            <img src="pics/wine-bottles-3623697_1920.jpg" alt="Image" class="img-fluid">
                            <figcaption>
                              <h2><i>Full-Bodied <span>Red</span> Wines</i></h2>
                            </figcaption>
                          </figure>
                        </a>
                        <a href="pics/glasses-919071_1920.jpg">
                          <figure class="effect-honey tm-gallery-item">
                            <img src="pics/glasses-919071_1920.jpg" alt="Image" class="img-fluid">
                            <figcaption>
                              <h2><i>Full-Bodied <span>White</span> Wines</i></h2>
                            </figcaption>
                          </figure>
                        </a>
                        <a href="pics/grapes-3550733_1920.jpg">
                          <figure class="effect-honey tm-gallery-item">
                            <img src="pics/grapes-3550733_1920.jpg" alt="Image" class="img-fluid">
                            <figcaption>
                              <h2><i>Sparkling Wines</i></h2>
                            </figcaption>
                          </figure>
                        </a>
                        <a href="pics/wine-541922_1920.jpg">
                          <figure class="effect-honey tm-gallery-item">
                            <img src="pics/wine-541922_1920.jpg" alt="Image" class="img-fluid">
                            <figcaption>
                              <h2><i>Dessert or Sweet Wines</i></h2>
                            </figcaption>
                          </figure>
                        </a>
                        <a href="pics/wine-4931923_1920.jpg">
                          <figure class="effect-honey tm-gallery-item">
                            <img src="pics/wine-4931923_1920.jpg" alt="Image" class="img-fluid">
                            <figcaption>
                              <h2><i>Dreamy <span>Honey</span> Now</i></h2>
                            </figcaption>
                          </figure>
                        </a>
                        <a href="pics/glasses-341552_1920.jpg">
                          <figure class="effect-honey tm-gallery-item">
                            <img src="pics/glasses-341552_1920.jpg" alt="Image" class="img-fluid">
                            <figcaption>
                              <h2><i>Fortified Wines</i></h2>
                            </figcaption>
                          </figure>
                        </a>
                      </div>
                  </div>                
              </div>        
            </div>
        </div>
      </section>
  
    <!-- END OF OUR WORK SECTION -->
    
    <!-- OUR TEAM SECTION -->
    <div class="wrapper" id="our-team" data-aos="fade-in">
        <h1>Our Team</h1>
        <div class="team">
          <div class="team_member">
            <div class="team_img">
            <img src="pics/team1.png" alt="Team_image">
          </div>
            <h3>BRIAN RICHARDSON</h3>
            <p class="role">FOUNDER + LEAD DEVELOPER</p>
            <p>Brian Richardson started Soweto's Finest Winery in 2019 to build websites for wineries he had befriended in Oregon’s Willamette Valley (Prior to starting Vinbound, Brian was Assistant Director of the International Pinot Noir Celebration). From day one, Brian has been the lead designer and developer of all Soweto's Finest Winery Marketing websites. 
            He continues to be the first point of contact for new clients and leads overall strategy and vision for Vinbound and our partner wineries.

</p>
        </div>
        <div class="team_member">
          <div class="team_img">
            <img src="pics/team2.png" alt="Team_image">
          </div>
          <h3>ANNEKA MILLER</h3>
            <p class="role">CLIENT SUPPORT</p>
            <p>Anneka grew up immersed in the Oregon wine industry and has worked within the industry for more than a decade. 
            Prior to joining Soweto's Finest Winery in 2020, Anneka spent five years running the International Pinot Noir Celebration. 
            She makes her home in Oregon’s Dundee Hills and is a key resource for Vinbound clie</p></div>
        <div class="team_member">
            <div class="team_img">
              <img src="pics/team3.png" alt="Team_image">
            </div>
            <h3>ALEX FORTSON</h3>
            <p class="role">DEVELOPER / PHOTOGRAPHER</p>
            <p>Alex Fortson is a web developer, photographer, wine aficionado and assistant winemaker at Twill Cellars. 
            Alex runs the data migration business of Soweto's Finest Winery, moving encrypted data from legacy commerce systems into modern wine ecommerce platforms like Commerce7 and Vinespring. 
            He lives in Portland with his fiance Zoë.</p>
        </div>
        </div>
    </div>	
    <!-- END OF OUR TEAM SECTION -->
    
        <!-- about us -->
      <div class="container-fluid fh5co-about-me" id="testimonial" data-aos="fade-in">
        <div id="my-carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="card"> <img class="card-img d-block w-100" src="pics/agriculture-4508637_1920.jpg" alt="">
              <div class="card-img-overlay">
                <!-- <h2>Testimonials</h2> -->
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption d-md-block"> <img src="pics/quote-icon.png" alt="">
                <p>Working with Brian at Vinbound Marketing was a great experience! He built two custom websites for us, each with its own unique brand style. His unrivaled customer support and attentiveness exemplify his dedication and passion for what he does and ensured he met our business’s specific needs promptly. The reaction to both of our new web sites has been overwhelmingly positive, and we couldn’t be happier with the end result!</p>
              </div>
            </div>
            <div class="carousel-item active">
              <div class="carousel-caption d-md-block"> <img src="pics/quote-icon.png" alt="">
                <p>Vinbound was able to quickly with almost no modification design my branding and website to look infinitely better than what I had previously: it is beautiful, clean, and highly usable.</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption d-md-block"> <img src="pics/quote-icon.png" alt="">
                <p>The website is stunning and exactly what we had envisioned! Elegant, powerful, informative and inspiring. A very sincere thank you to Vinbound.</p>
              </div>
            </div>
          </div>
          <ol class="carousel-indicators">
            <li data-target="#my-carousel" data-slide-to="0" > <img src="pics/about-me-img1.png" alt=""> <span>Brian Richardson</span> </li>
            <li class="active" data-target="#my-carousel" data-slide-to="1" aria-current="location"> <img src="pics/about-me-img2.png" alt=""> <span>Kelley Fox</span> </li>
            <li data-target="#my-carousel" data-slide-to="2"> <img src="pics/about-me-img3.png" alt=""> <span>Sherrie Rose</span> </li>
          </ol>
        </div>
      </div>
  
    <?php
    include('footer.php');
    ?>
</body>
</body>
</html>