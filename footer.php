<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <div class="container">

    <div class="row">
      <div class="col-lg-9 text-center text-lg-left">
        <h3>Let's work together!</h3>
        <p>Every organization has data challenges that prevent it from reaching its full potential.  We have decades of experience helping organizations formulate and implement long-term data strategies.  </p>
      </div>
    </div>
  </div>
</section><!-- End Cta Section -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Contact Us</h2>
    </div>

    <div class="row mt-1 d-flex justify-content-end">

      <div class="col-lg-5">
      </div>

      <div class="col-lg-6 mt-5 mt-lg-0">

        <form action="../forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" onclick="javascript:savecontact()">Send Message</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
</main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 footer-info">
            <h4>About Synthelize</h4>
            <p>Providing data integration, data visualization, and data strategy to organizations of all shapes and sizes. </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> Data Strategy Formulation</li>
            <li><i class="bx bx-chevron-right"></i> Data Integration</li>
            <li><i class="bx bx-chevron-right"></i> BI Tools and Dashboards</li>
            <li><i class="bx bx-chevron-right"></i> Data Lake Development</li>
            <li><i class="bx bx-chevron-right"></i> Cloud Data Management</li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Key Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="../">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="../privacy-policy">Privacy Policy</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="../introducing-synthelize">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="../our-process">Our Process</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="../what-is-a-data-lake">What is a data lake?</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="../keys-to-bi-success">Keys to BI Success</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>
</body>
</html>