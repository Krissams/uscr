<footer class="page-footer indigo darken-3  fadeInUp wow ">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Visit Us</h5>
          <p class="grey-text text-lighten-4">100 Industrial Way, Little Ferry NJ 07643</p>
          <p class="grey-text text-lighten-4">info@uscrtechnology.com</p>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Partner With Us</h5>
          <ul>
            <li><a class="white-text" href="about.php">About Us</a></li>
            <li><a class="white-text" href="services.php">Services</a></li>
            <li><a class="white-text" href="gallery.php">Gallery</a></li>
            <li><a class="white-text" href="contact.php">Contact Us</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Follow us</h5>
          <ul>
            <li><a class="white-text" href="https://www.facebook.com/pages/USCR-Technology/1445156405705358">Facebook</a></li>
            <li><a class="white-text" href="#!">Twitter</a></li>
            <li><a class="white-text" href="#!">Instagram</a></li>
            <li><a class="white-text" href="#!">Google Plus</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        All Right Reserved © 2016 Copyright USCR Technology.
      </div>
    </div>
  </footer>

  <script src="assets/js/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>

  <script src="assets/js/wow.js"></script>
  <script src="assets/js/init.js"></script>
    <?php
      if(isset($_GET['send'])){
          ?>
          <script>
          alert('Message Sent');
          </script>
          <?php
      }
    ?>
  </body>
</html>
