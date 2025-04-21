<!DOCTYPE html>
<!--
  Girly by FreeHTML5.co
  Twitter: https://twitter.com/fh5co
  Facebook: https://fb.com/fh5co
  URL: https://freehtml5.co
-->
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="icon" type="image/png" sizes="16x16" href="pics/grapes-2032838_1920.jpg">
  <style>
    /* Blog page style */
    .myHeader{
      background: rgba(0, 0, 0, 0.7);
    }
    body {
      background-image: url('pics/vineyard-2331887_1920.jpg');
      background-position: right bottom;
      background-repeat: no-repeat;
      background-size: cover; }
    
    .blog-content-bckg {
      margin: 0 auto;
      padding: 70px 0;
      width: 80%;
      color: #fff; }
      @media (max-width: 992px) {
        .blog-content-bckg {
          padding: 40px 0; } }
    
    .blog-content-inner {
      background-color: rgba(0, 0, 0, 0.3);
      background-color: rgba(0, 0, 0, 0.9);
      padding: 70px;
      border-radius: 15px; }
      .blog-content-inner .card-title {
        margin-bottom: 70px;
        font-size: 45px;
        text-align: center; }
        @media (max-width: 992px) {
          .blog-content-inner .card-title {
            margin-bottom: 40px;
            font-size: 30px; } }
        @media (max-width: 600px) {
          .blog-content-inner .card-title {
            font-size: 18px; } }
      @media (max-width: 767px) {
        .blog-content-inner {
          padding: 40px; } }
      @media (max-width: 600px) {
        .blog-content-inner {
          padding: 20px 0; } }
    
    .single-blog {
      display: flex;
      align-items: center;
      margin-bottom: 50px; }
      .single-blog:last-child {
        margin-bottom: 0; }
      @media (max-width: 1199px) {
        .single-blog .single-blog__img {
          margin-bottom: 30px; } }
      @media (max-width: 600px) {
        .single-blog .single-blog__text {
          font-size: 14px;
          text-align: justify; } }
      @media (max-width: 1199px) {
        .single-blog {
          padding-bottom: 20px;
          border-bottom: 1px solid #fff; }
          .single-blog:last-child {
            padding-bottom: 0;
            border-bottom: none; } }
    </style>
  <title>About Us</title>
</head>

<body>
      <?php  
      include('links.php');
      include('header.php');
      ?>
  <!-- Blog content section -->
  <section style="margin-top: 50px;" class="fh5co-blog-content">
    <div class="blog-content-bckg">
      <div class="blog-content-inner">
        <div class="container-fluid">
          <h2 class="card-title">About Soweto's Finest Winery</h2>
          <div class="row single-blog">
            <div class="col-xl-4 col-lg-12 single-blog__img">
              <img class="card-img w-100" src="pics/barrels-52934_1280 (2).jpg" alt="">
            </div>
            <div class="col-xl-8 col-lg-12 single-blog__text">
              <h2>Lorem ipsum dolor sit amet</h2>
              <p>Based in the Pacific Northwest, Vinbound Marketing provides wineries with a full range of website development, photography, and digital marketing services to grow tasting room traffic and sell more wine direct-to-consumer.</p>
              <p>Vinbound is best known for our winery website development services. In addition to web design and development, we provide the full gamut of digital services to boost your DTC wine sales, including ecommerce consulting and integration, data migrations, photography and video services, SEO, and digital strategy consultation.</p>
            </div>
          </div>
          <div class="row single-blog">
            <div class="col-xl-4 col-lg-12 single-blog__img">
              <img class="card-img w-100" src="pics/wine-1237340_1280.jpg" alt="">
            </div>
            <div class="col-xl-8 col-lg-12 single-blog__text">
              <h2>Lorem ipsum dolor sit amet</h2>
              <p>Since our start in 2014, the quality of our work and attention to the specific nuances of wine marketing has made Vinbound a standout marketing partner for wineries. Over the last six years, we have worked with over 150 wineries throughout North America.</p>
              <p>Our home is among the vineyards of Oregon’s Willamette Valley, yet our services are provided to aspiring wineries everywhere. Vinbound has partnered with amazing talent since our beginnings and offers a full suite of digital marketing services and consulting to help wineries of all sizes.</p>
            </div>
          </div>
          <div class="row single-blog">
            <div class="col-xl-4 col-lg-12 single-blog__img">
              <img class="card-img w-100" src="pics/red-wine-1004255_1920.jpg" alt="">
            </div>
            <div class="col-xl-8 col-lg-12 single-blog__text">
              <h2>Lorem ipsum dolor sit amet</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus tempus lorem sollicitudin sagittis. Vestibulum eu placerat tortor. Sed eu magna quis sapien ultricies euismod. Quisque ligula erat, tempus porttitor sem ac, congue malesuada nunc. Vestibulum lobortis turpis quis nisl commodo, vel scelerisque nisl fermentum. Cras scelerisque lectus eget aliquet auctor. Curabitur vestibulum orci ante, in bibendum dolor euismod quis. Nullam nulla nisi, malesuada vitae accumsan ac, blandit eu dui. Pellentesque ut ligula ex. Donec lacinia eros et arcu rhoncus, sit amet vestibulum justo efficitur. Nulla facilisi. Integer a sem aliquet, dapibus ipsum eu, vehicula dui. Fusce id leo tellus. Ut eu accumsan arcu. Aliquam at vestibulum felis.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus tempus lorem sollicitudin sagittis. Vestibulum eu placerat tortor. Sed eu magna quis sapien ultricies euismod. Quisque ligula erat, tempus porttitor sem ac, congue malesuada nunc. Vestibulum lobortis turpis quis nisl commodo, vel scelerisque nisl fermentum. Cras scelerisque lectus eget aliquet auctor. Curabitur vestibulum orci ante, in bibendum dolor euismod quis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog content section end -->
        <?php
        include('footer.php')
        ?>
  <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
  <script src="assets/js/jquery-3.3.1.slim.min.js"></script> 
  <script src="assets/js/popper.min.js" ></script> 
  <script src="assets/js/bootstrap.min.js"></script> 
  <script src="assets/js/owl.carousel.min.js"></script> 
  <script src="assets/js/main.js"></script>

</body>
</html>