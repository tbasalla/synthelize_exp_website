<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <div class="container">

    <div class="row" data-aos="zoom-in">
      <div class="col-lg-9 text-center text-lg-left">
        <h3>Let's work together!</h3>
        <p>Every organization has data challenges that prevent it from reaching its full potential.  We have decades of experience helping organizations formulate and implement long-term data strategies.  </p>
      </div>
<!--      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="#contact">Contact Us</a>
      </div> -->
    </div>

  </div>
</section><!-- End Cta Section -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact Us</h2>
    </div>

    <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

      <div class="col-lg-5">
<!--        <div class="info">
          <div class="address">
            <i class="icofont-google-map"></i>
            <h4>Location:</h4>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>

          <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Email:</h4>
            <p>info@example.com</p>
          </div>

          <div class="phone">
            <i class="icofont-phone"></i>
            <h4>Call:</h4>
            <p>+1 5589 55488 55s</p>
          </div>

        </div>
-->
      </div>

      <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
            <h3>About Synthelize</h3>
            <p>Providing data integration, data visualization, and data strategy to organizations worldwide. </p>
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
            <li><i class="bx bx-chevron-right"></i> <a href="../introducing-synthelize">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="../our-process">Our Process</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="../what-is-a-data-lake">What is a data lake?</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="../keys-to-bi-success">Keys to BI Success</a></li>
          </ul>
        </div>


<!--      <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>
-->

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
  <script>
    function savecontact()
    {
      var formData = new FormData();

      var contact_string = "";
      contact_string += "name=" + document.getElementById("name").value;
      contact_string += ";email=" + document.getElementById("email").value;
      contact_string += ";message=" + document.getElementById("message").value;
      formData.append("contact_details", contact_string);
  	  var xhr = new XMLHttpRequest();

  	xhr.open("POST", window.location.origin + '/contact-save.php', true);
	  xhr.send(formData);
    }
  </script>
</body>
</html>