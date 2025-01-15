<?php include('templates/header.php');?>
       <!-- Appointment Start -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 mb-5">Become a Sponsor</h1>
                    <p class="mb-5"> Join our community of supporters by becoming a sponsor. Whether you choose to support individually or through an organization, your contribution will directly impact the development and success of the youth in Gomba.</p>
                   <div class="border-top mt-4 pt-4">
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 rounded-circle me-3" src="img/name.jpg" alt="" style="width: 50px; height: 50px;">
                            <h5 class="mb-0">Call Us: +256761982917</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-light rounded p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="gname" placeholder="Gurdian Name">
                                        <label for="gname">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="gmail" placeholder="Gurdian Email">
                                        <label for="gmail">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cname" placeholder="Child Name">
                                        <label for="cname">Your Mobile</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cage" placeholder="Child Age">
                                        <label for="cage">Service Type</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 80px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">join  our team</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
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