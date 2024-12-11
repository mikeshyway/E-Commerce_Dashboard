  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- Owl Carousel Theme JS -->
  <script src="assets/js/owl.carousel.min.js"></script>

  <!-- Alertify.js -->
  <script src="assets/js/alertify.min.js"></script>

  <script>

    // To display pop-up when a new record is added successfully
    // unset() function is used to unset a variable, so the pop-up dialogue will not reappear everytime page is refreshed/interacted
    alertify.set('notifier','position', 'top-right');
    
    <?php 
    if(isset($_SESSION['message'])) 
    { 
      ?>
        alertify.success('<?= $_SESSION['message']; ?>');  // equals in php = echoes
      <?php 
      unset($_SESSION['message']);
    } 
    ?>
  </script>

  
    <footer class="py-5 bg-dark mt-auto">
      <body class="d-flex flex-column vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h3 class="text-white">MICSON.mc</h3> 
                    <div class="underline mb-2"></div> <br>
                    <a href="index.php" class="text-white">  <i class="fa fa-angle-right"></i> Home</a> <br>
                    <a href="aboutus.php" class="text-white">  <i class="fa fa-angle-right"></i> About Us</a> <br>
                    <a href="size-chart.php" class="text-white">  <i class="fa fa-angle-right"></i> Footwear Size Chart</a>  <br>
                    <a href="categories.php" class="text-white">  <i class="fa fa-angle-right"></i> All Categories</a>  
                  </div>
                  <div class="col-md-2">
                    <h5 class="text-white">Contact Us</h5>
                    <a href="Tel: +03 1828 7831" class="text-white"><i class="fa fa-phone"> </i> +03 1828 7831</a> <br>
                    <a href="Mail To: mics9@gmail.com" class="text-white"><i class="fa fa-envelope"> </i> mics9@gmail.com</a>  
                  </div>
                <div class="col-md-2">
                        <h5 class="text-white">Address</h5>
                        <p class="text-white">
                            No. 24, Ground Floor, 
                            Lebuh Bandar Utama, 
                            47800 Petaling Jaya, Selangor.
                        </p>
                </div>
                <div class="col-md-5 align-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7974640794228!2d101.61387214014994!3d3.1480732531709004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4ed29f2fe42f%3A0xfd81eb3a4d9eb904!2s1%20Utama%20Shopping%20Centre!5e0!3m2!1sen!2smy!4v1714387257849!5m2!1sen!2smy" class="w-100" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
      </body>
    </footer>

    <div class="py-2 bg-warning">
      <div class="text-center">
          <p class="mb-0">All rights reserved. Copyright @ MICSON.mc Website - <?= date('Y') ?></p>
      </div>
    </div>

  </body>
</html>