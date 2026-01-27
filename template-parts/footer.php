<!-- ===== FOOTER ===== -->
<footer class="pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
        <img src="https://dummyimage.com/200x80/000/fff&text=LOGO">
      </div>
      <div class="col-md-4 mb-3">
        <h5>Services</h5>
        <ul class="list-unstyled">
          <li>Drone Cinematography</li>
          <li>FPV Flights</li>
          <li>Real Estate</li>
          <li>Construction</li>
        </ul>
      </div>
      <div class="col-md-4 mb-3">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Media</a></li>
          <li><a class="scroll-btn">Contact Us</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-bottom">© All rights reserved</div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(".scroll-btn").on("click", function(){
  $("html,body").animate({
    scrollTop: $("#contact").offset().top - 80
  },700);
});
</script>

</body>
</html>
