<?php

if (!url_is("home")) {

?>
  <br>
  <br>
  <br>
<?php

}

?>
<div>
  <?php
  echo view('alert');
  ?>
</div>



<?php include 'modal.php';
$space_tab = '\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$heading_space = '\n&bullet;&nbsp;';

?>


<!-- ========================= footer style-4 start ========================= -->
<footer class="footer footer-style-4">
  <div class="container">
    <div class="widget-wrapper">
      <div class="row">
        
        <div class='row col-md'>
          <div class="col-md col">
            <div class="footer-widget wow fadeInUp" data-wow-delay=".3s">
              <h6>Quick Links</h6>
              <ul class="links">
                <li> <a href="<?= base_url() . "/home" ?>">Home</a> </li>
                <li> <a href="<?= base_url() . "/home#about" ?>">About</a> </li>
                <li> <a href="<?= base_url() . "/home#departments" ?>">Departments</a> </li>
                <li> <a href="<?= base_url() . "/home#contact" ?>">Contact</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md col">
            <div class="footer-widget wow fadeInUp" data-wow-delay=".4s">
              <h6>&nbsp;</h6>
              <ul class="links">
                
                <li> <a href="<?= base_url() . "/home/gallery" ?>">Gallery</a> </li>
                <li> <a href="<?= base_url() . "/home/staffstrength" ?>">Staff Strength</a> </li>
                <li> <a href="<?= base_url() . "/home/achievements" ?>">Achievements</a> </li>
                <li> <a href="https://premium72.web-hosting.com:2096/webmaillogout.cgi" ?>Staff webmail</a> </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-auto">
          <div class="footer-widget wow fadeInUp" data-wow-delay=".5s">
            <h6>Reach the IT Team</h6>
            <ul class="download-app">
              <li> FMC Asaba IT Team<br>Main Admin Building, <br>Ground Floor, <br>Asaba </li>
              <li>Email: info<i class="fa fa-at"></i>fmcasaba.org</li>
            </ul>
          </div>
        </div>

        <div class="col-md">
          <div class="footer-widget wow fadeInUp" data-wow-delay=".2s">
            <div class='row'>
              <div class='col-md text-right'>

                <p class="desc">Follow us on social media. We are only on the popular social media platforms listed below. </p>
                <ul class="socials text-right">
                  <li>
                    <a href="https://www.facebook.com/fmcasaba"> <i class="lni lni-facebook-filled"></i> </a>
                  </li>
                  <li>
                    <a href="https://www.twitter.com/fmcasaba"> <i class="lni lni-twitter-filled"></i> </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/officialfmcasaba"> <i class="lni lni-instagram-filled"></i> </a>
                  </li>
                </ul>

              </div>
              <div class='col-md-auto'>
                <div class="logo">
                  <a href="<?= base_url() ?>/home#home"> <img class="img" style="width:10rem" src="<?= base_url() ?>/splash/images/logofmcsite.png" alt=""> </a>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
    <div class="copyright-wrapper wow fadeInUp" data-wow-delay=".2s">
      <p><a target="_blank" href="http://www.mozilla.com/en-US/firefox/browsers">Recommended Browser: Mozilla Firefox </a> -
        Designed and Developed by the <a href="<?= base_url() ?>/home/department/13" >FMC Asaba IT Department</a> </p>
    </div>
  </div>
</footer>

<!-- ========================= footer style-4 end ========================= -->

<!-- ========================= scroll-top start ========================= -->
<a href="#" class="scroll-top"> <i class="lni lni-chevron-up"></i> </a>
<!-- ========================= scroll-top end ========================= -->


<!-- ========================= JS here ========================= -->

<!-- Vendor JS Files -->
<script src="<?php echo base_url(); ?>/splash/vendor/bootstrap4/popper.js"></script>
<script src="<?php echo base_url(); ?>/splash/vendor/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/splash/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url(); ?>/splash/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>/splash/vendor/php-email-form/validate.js"></script>
<script src="<?php echo base_url(); ?>/splash/vendor/purecounter/purecounter.js"></script>
<script src="<?php echo base_url(); ?>/splash/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/splash/vendor/DataTables/datatables.js"></script>
<script src="<?php echo base_url(); ?>/splash/vendor/select2/js/select2.full.js"></script>
<script src="<?php echo base_url(); ?>/splash/vendor/croppie/croppie.js"></script>

<script src="<?php echo base_url(); ?>/splash/vendor/bootstrap4/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/splash/vendor/bootstrap-switch-button/bootstrap-switch-button.min.js"></script>

<script src="<?php echo base_url(); ?>/splash/lib/picker.js"></script>
<script src="<?php echo base_url(); ?>/splash/lib/picker.date.js"></script>
<script src="<?php echo base_url(); ?>/splash/lib/picker.time.js"></script>
<script src="<?php echo base_url(); ?>/splash/lib/legacy.js"></script>

<script src="<?= base_url() ?>/splash/vendor/sig/jSignature.min.js"></script>
<script src="<?= base_url() ?>/splash/vendor/trumbowyg/trumbowyg.min.js"></script>

<script src="<?php echo base_url(); ?>/splash/js/randomColor.js"></script>
<!-- Template Main JS File -->
<script src="<?php echo base_url(); ?>/splash/js/jquery.dropotron.min.js"></script>
<script src="<?php echo base_url(); ?>/splash/js/jquery.cookie.js"></script>

<script src="<?php echo base_url(); ?>/splash/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/splash/assets/js/tiny-slider.js"></script>
<script src="<?php echo base_url(); ?>/splash/assets/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>/splash/assets/js/main.js"></script>

<script>
  jQuery(function() {



    jQuery(".datatable_active").DataTable({
      "ordering": false

    });

    jQuery("#close_searcher").click(function() {
      jQuery("#searcher").fadeOut(200);
    });

    jQuery("#searcher_open").click(function() {
      jQuery("#searcher").fadeIn(200);
    });


  });
</script>
</body>

</html>