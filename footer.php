
<!-- This is for modal  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Welcome To JP Optical
</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="row">
           <div class="col-12 col-md-6 my-2">
               <input type="text" class="form-control name" value="" placeholder="Enter Your Name" required>
           </div>
            <div class="col-12 col-md-6 my-2">
               <input type="number" class="form-control number" value="" placeholder="Enter Your Number" required>
           </div>
           <div class="col-12  my-2">
               <input type="email" class="form-control email" value="" placeholder="Enter Your Email" required>
           </div>
         
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" onclick="go()" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<script>
        function go() {
            var name = document.querySelector(".name").value;
            var email = document.querySelector(".email").value;
            var number = document.querySelector(".number").value;
            var url = "https://wa.me/919910806428?text=" +
            "Name: " +
            name + " " +
            "Number: " +
            number + " " +
            "Email :" + email;
            window.open(url,"_blank").focus();
        }
    </script>


<script>
        function contact() {
            var na = document.querySelector(".name").value;
            var em = document.querySelector(".email").value;
            var phone = document.querySelector(".phone").value;
            var mes = document.querySelector(".message").value;
            var url1 = "https://wa.me/919910806428?text=" +
                "Name: " +
                na + " " +
                "Email: " +
                em + " " +
                "Phone :" + phone +
                "Message :" + mes;
            window.open(url1, "_blank").focus();
        }
    </script>




<footer id="footer" class="footer accent-background">

<div class="container footer-top">
  <div class="row gy-4 justify-content-center">
    <div class="col-12 col-lg-5 col-md-6 col-sm-12 footer-about">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="sitename">Jp Optical Industries</span>
      </a>
      <p>At JP Optical Industries, we specialize in providing high-quality optical products designed to enhance
        vision and improve the quality of life. With a commitment to innovation, precision, and customer
        satisfaction, we have established ourselves as a leader in the optical industry.</p>
    </div>

    <div class="col-12 col-lg-2 col-md-6 col-sm-12 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="testimonials">Testimonials</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>

    <div class="col-12 col-lg-3 col-md-6 col-sm-12 footer-contact text-md-start">
      <h4>Contact Us</h4>
      <p>Factory- C47/2 ,Rampura industrial area,lawerance road, tri nagar
        Reg add
      </p>
      <p>India</p>
      <p class="mt-4"><strong>Phone:</strong> <span>+91 9212567105</span></p>
      <p><strong>Email:</strong> <span>Jpopticalind.2016@gmail.com</span></p>
    </div>

    <div class="col-12 col-lg-2 col-md-6 col-sm-12 footer-links ">
      <h4>Our Services</h4>
      <div class="social-links d-flex mt-4">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="pt-4">
        <img src="./assets/img/logo.webp" alt="" height="60px" width="150px">
      </div>
    </div>

  </div>
</div>

<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="px-1 sitename">Jp Optical Industries</strong> <span>All Rights
      Reserved</span></p>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you've purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
    Designed by <a href="https://web2export.com/">Web2Export</a>
  </div>
</div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
  class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>