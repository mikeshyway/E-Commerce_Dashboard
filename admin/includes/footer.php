<footer class="footer pt-5">
    
</footer>
    </main>


    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/js/smooth-scrollbar.min.js"></script>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <!-- Developer Customizable JS -->
    <script src="assets/js/custom.js"></script>

    <!-- Alertify.js -->
    <script src="assets/js/alertify.min.js"></script>

    <script>

      // To display pop-up when a new category is added successfully
      // unset() function is used to unset a variable, so the pop-up dialogue will not reappear everytime page is refreshed/interacted
      <?php 
      if(isset($_SESSION['message'])) 
      { 
        ?>
        alertify.set('notifier','position', 'top-right');
        alertify.success('<?= $_SESSION['message']; ?>');  // equals in php = echoes
        <?php 
        unset($_SESSION['message']);
      } 
      ?>
    </script>


</body>
</html>