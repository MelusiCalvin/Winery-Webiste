<?php
  include('links.php');
  include('header.php');

?>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	  <link rel="icon" type="image/png" sizes="16x16" href="pics/grapes-2032838_1920.jpg">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
  </head>

  <body>
    <style>
      .myHeader{
        background: rgba(0, 0, 0, 0.7);
      }
    </style>
    <div id="page-wraper">
      

      <section class="section my-work" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2>Products In Store</h2>
            <div class="line-dec"></div>
            <span></span>
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <div class="isotope-box">
                <?php
                $query = "SELECT * FROM tblproduct";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0)
                {
                  while($row = mysqli_fetch_assoc($query_run))
                  {
                    ?>
                    
                <div class="isotope-item" data-type="animals">
                  <figure class="snip1321">
                    <img
                      src="product-images/<?php echo $row['image']; ?>"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="product-images/<?php echo $row['image']; ?>"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4><?php echo $row['name']; ?></h4>
                      <span><?php echo 'R'.$row['price']; ?></span>
                    </figcaption>
                  </figure>
                  </div>
                  <?php
                  }
                }
                else
                {
                  echo "<h1 style='color:#fff;'>No records!!!</h1>";
                }
                ?>
             
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>

    <?php
    include('footer.php');
    ?>
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
 
  </body>
</html>
