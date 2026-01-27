<?php
// Vars
$page = "home";
$pagetitle = "Home | Drone Services<";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non euismod dolor. Integer sapien ipsum, dapibus eget bibendum sed nullam sodales.";




include("template-parts/header.php");
?>


<!-- ===== HERO ===== -->
<section class="hero separator">
  <div class="hero-card text-center shadow">
    <h1>Drone Services</h1>
    <p>
      We create cinematic drone and FPV footage for filmmakers, brands, and builders
      seeking bold, high-impact visuals. Our FAA-certified pilots operate cutting-edge
      systems to deliver immersive aerials from angles traditional cameras can’t reach.
    </p>

    <div class="stars mb-3">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <span class="ms-2">5.0 Customer Rating</span>
      </div>

    <a class="btn cta-btn scroll-btn">
      <span>Book your shoot now</span>
    </a>
  </div>
</section>

<!-- ===== WHAT WE DO ===== -->
<section class="py-5 separator" style="background:#f0f0f0;">
  <div class="container">
    <h2 class="section-title text-center">What We Do</h2>
    <div class="row align-items-center">
      <div class="col-md-6 mb-3">
        <img src="https://dummyimage.com/500x300/000/fff&text=US+Map" class="img-fluid rounded">
      </div>
      <div class="col-md-6">
        <h4>Managed Vending Machine Services for All 50 States</h4>
        <p>We provide vending services for businesses all across the United States.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="py-5 separator" style="background:#F4F4F4;">
  <div class="container">
    <h2 class="section-title text-center">FAQ</h2>

    <div class="accordion" id="faq">
      <div class="accordion-item"><h2 class="accordion-header">
        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#f1">
          Are you FAA certified?
        </button></h2>
        <div id="f1" class="accordion-collapse collapse show">
          <div class="accordion-body">Yes, all pilots are FAA Part 107 certified.</div>
        </div>
      </div>

      <div class="accordion-item"><h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f2">
          What industries do you serve?
        </button></h2>
        <div id="f2" class="accordion-collapse collapse">
          <div class="accordion-body">Film, real estate, construction, events, and brands.</div>
        </div>
      </div>

      <div class="accordion-item"><h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f3">
          Do you offer FPV flights?
        </button></h2>
        <div id="f3" class="accordion-collapse collapse">
          <div class="accordion-body">Yes, cinematic FPV with experienced pilots.</div>
        </div>
      </div>

      <div class="accordion-item"><h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f4">
          How much does it cost?
        </button></h2>
        <div id="f4" class="accordion-collapse collapse">
          <div class="accordion-body">Pricing depends on scope, location, and complexity.</div>
        </div>
      </div>

      <div class="accordion-item"><h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f5">
          Do you travel nationwide?
        </button></h2>
        <div id="f5" class="accordion-collapse collapse">
          <div class="accordion-body">Yes, we operate across the United States.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== WHY FLY ===== -->
<section class="py-5 separator" style="background:#f0f0f0;">
  <div class="container">
    <h2 class="section-title text-center">Why Fly?</h2>
    <p>Welcome to our drone and FPV portfolio, featuring a curated selection of aerial cinematography projects created for film, television, real estate, and commercial clients. Each project reflects our commitment to creative storytelling, technical excellence, and the precision that defines our FAA-certified pilots.</p>

	<p>From fast-paced FPV flights capturing the energy of live events to polished cinematic aerials used in national advertising campaigns, our work showcases the power of drones to reshape visual storytelling. We collaborate with home builders, real estate professionals, production teams, and brands throughout Southern Utah and across the country, delivering visuals that engage audiences and communicate value.</p>

	<p>This collection includes real estate showcases, construction progress coverage, sweeping natural landscapes, and dynamic FPV sequences through intricate environments. Every project is crafted with purpose—whether the goal is to attract buyers, elevate a brand, or enhance a marketing campaign with unforgettable visuals.</p>
  </div>
</section>

<!-- ===== IMAGE + TEXT ===== -->
<section class="py-5 separator" style="background:#F4F4F4;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-3">
        <img src="https://dummyimage.com/600x400/000/fff&text=City+Top+View" class="img-fluid rounded">
      </div>
      <div class="col-md-6">
        <h3>See your project from a new perspective.</h3>
        <p>No two projects are the same, which is why we take a thoughtful, tailored approach to every production. We combine technical precision with creative vision, giving each project the attention and care it deserves from planning through final delivery.</p>

		<p>Whether you’re producing a feature film, rolling out a marketing campaign, or exploring a location for your next shoot, our team works closely with you to understand your goals and bring your ideas to life through cinematic drone and FPV visuals.</p>

		<p>Reach out to start a conversation about your project. We offer custom quotes and production consultations designed to ensure the right aerial solution for your vision, timeline, and budget.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== CONTACT ===== -->
<section id="contact" class="py-5" style="background:#f0f0f0;">
  <div class="container">
    <h2 class="section-title text-center">Contact Us</h2>

    <form class="row g-3 main-form">

      <div class="response-container">
      </div>

      <div class="col-md-6"><input class="form-control firstname" placeholder="First Name"></div>
      <div class="col-md-6"><input class="form-control lastname" placeholder="Last Name"></div>
      <div class="col-md-6"><input class="form-control email" placeholder="Email"></div>
      <div class="col-md-6"><input class="form-control phone" placeholder="Phone"></div>
      <div class="col-md-6"><input class="form-control zipcode" placeholder="Zip Code"></div>
      <div class="col-12"><textarea class="form-control message-data" rows="4" placeholder="Message"></textarea></div>
      <div class="col-12 text-center">
        <button class="btn cta-btn submit-btn"><span>Request a Call</span></button>
      </div>
    </form>
  </div>
</section>






<script type="text/javascript">
  jQuery( document ).ready(function(){


    jQuery(".submit-btn").on("click", function(e){
      e.preventDefault();

      var firstname = jQuery(".main-form .firstname").val();
      var lastname = jQuery(".main-form .lastname").val();

      var phone = jQuery(".main-form .phone").val();
      var email = jQuery(".main-form .email").val();
      var zipcode = jQuery(".main-form .zipcode").val();
      var messagedata = jQuery(".main-form .message-data").val();


      $.ajax({
        method: "POST",
        url: "",
        data: { 
          action:"entry", 
          firstname: firstname, 
          lastname: lastname , 
          email: email, 
          zipcode: zipcode, 
          phone: phone,
          messagedata: messagedata

        }
      }).done(function( response ) {
          if( response == "success" ){
            //location.reload();


            jQuery(".main-form .firstname").val("");
            jQuery(".main-form .lastname").val("");
            jQuery(".main-form .email").val("");
            jQuery(".main-form .phone").val("");
            jQuery(".main-form .zipcode").val("");
            jQuery(".main-form .message-data").val("");

            jQuery(".response-container").show();
            jQuery(".response-container").html("<p>Your form submitted successfully, we will send you an email shortly. <br>Thank you</p>");

          } else {
            jQuery(".response-container").show();
            jQuery(".response-container").html(response);
          }
      });



    });



  });
</script>


<?php include("template-parts/footer.php"); ?>