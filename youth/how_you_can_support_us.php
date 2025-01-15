<?php include('templates/header.php');?>
        <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px;">
                <h1 class="display-6 mb-5">What They Say About Our Insurance</h1>
            </div>            
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-1.jpg" alt="">
                            <h2 class="fs-5">  Online</h2>
                            <h5>Make a secure donation through our website using a credit or debit card.</h5>
                            <span>contribute</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-2.jpg" alt="">
                            <h2 class="fs-5">  Bank Transfer</h2>
                            <h5>Directly transfer funds to our bank account. Please contact us for the account details</h5>
                            <span>contribute</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-3.jpg" alt="">
                            <h2 class="fs-5"> Mail</h2>
                            <h5> Send a check or money order to our office address. For more information, please reach out to us.</h5>
                            <span>contribute</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-3.jpg" alt="">
                            <h2 class="fs-5">  In-Kind Contributions</h2>
                            <h5> We also welcome donations of goods, services, or volunteer time. Contact us to discuss how you can get involved.</h5>
                            <span>contib</span>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Slider Start -->
<div id="carouselExampleIndicators" class="carousel slide my-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/name2.jpg" class="d-block w-100" alt="Slider Image 1">
            <div class="carousel-caption d-none d-md-block text-center">
                <div class="bg-light p-3 rounded" style="display: inline-block; background-color: rgba(255, 255, 255, 0.7);">
                    <h5 class="text-success">Inspiring Future Leaders</h5>
                    <p style="color: #008000;">Empower youth through education and mentorship.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/name2.jpg" class="d-block w-100" alt="Slider Image 2">
            <div class="carousel-caption d-none d-md-block text-center">
                <div class="bg-light p-3 rounded" style="display: inline-block; background-color: rgba(255, 255, 255, 0.7);">
                    <h5 class="text-success">Building Skills for Tomorrow</h5>
                    <p style="color: #008000;">Join us in providing training and resources for young minds.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/name.jpg" class="d-block w-100" alt="Slider Image 3">
            <div class="carousel-caption d-none d-md-block text-center">
                <div class="bg-light p-3 rounded" style="display: inline-block; background-color: rgba(255, 255, 255, 0.7);">
                    <h5 class="text-success">Empowering Voices</h5>
                    <p style="color: #008000;">Support initiatives that uplift and inspire the youth.</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Slider End -->


      <style>
      .carousel-item {
          height: 100vh; /* Adjust height as needed */
          background: #000; /* Fallback color */
      }

      .carousel-item img {
          object-fit: cover; /* Ensures the image covers the entire slide */
          height: 100%;
      }

      .carousel-caption {
          position: absolute;
          bottom: 20px; /* Adjust positioning as needed */
          left: 50%;
          transform: translateX(-50%);
          text-align: center;
      }

      h5.text-success {
          color: green; /* Green color for headings */
          font-size: 50px; /* Font size set to 50 pixels */
      }
      </style>
    <?php include('templates/footer.php');?>