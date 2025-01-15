 <?php include('templates/header.php');?>
      <div class="container">
        <section class="about section">
            <h3>About Us</h3>
            <p>The Gomba Youth Initiative is dedicated to empowering young people in Gomba through education, mentorship, and community engagement. Our mission is to provide resources and support that enable youth to thrive and become leaders in their communities.</p>
        </section>

       <section class="impact section">
            <h3>Your Impact</h3>
            <p>Every dollar helps us achieve our mission:</p>
            <ul style="list-style-type: none; padding: 0;">
                <li>$10 - Provides educational materials for one student</li>
                <li>$20 - Supplies a month of school meals for a student</li>
                <li>$30 - Offers after-school tutoring for struggling students</li>
                <li>$40 - Covers transportation for students to attend workshops</li>
                <li>$50 - Supports a youth training workshop</li>
                <li>$60 - Provides hygiene kits for youth in need</li>
                <li>$75 - Supplies books for a community library</li>
                <li>$100 - Funds a community project</li>
                <li>$150 - Provides mentorship resources for youth leaders</li>
                <li>$200 - Organizes a skills development seminar</li>
                <li>$250 - Sponsors a youth leadership camp</li>
                <li>$300 - Offers a scholarship for a high school student</li>
                <li>$400 - Funds a summer learning program</li>
                <li>$500 - Provides vocational training for ten youth</li>
                <li>$600 - Launches a health education program</li>
                <li>$750 - Organizes a community health fair</li>
                <li>$800 - Supports environmental cleanup projects</li>
                <li>$900 - Provides technology access for students</li>
                <li>$1,000 - Launches a new educational initiative in Gomba</li>
                <li>$1,500 - Establishes a youth empowerment fund</li>
                <li>$2,000 - Funds a community center for youth activities</li>
            </ul>
        </section>

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

     <section class="donation">
                    <h2>Make a Difference Today</h2>
                    <p>Your contribution helps us provide education, training, and resources to the youth of Gomba. Together, we can create a brighter future!</p>
                <form action="donation_process.php" method="post">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="amount">Donation Amount ($):</label>
                    <input type="number" id="amount" name="amount" required min="1">

                    <input type="hidden" name="amount" id="amount">
                    <input type="submit" value="Donate Now" onclick="document.getElementById('amount').value = document.getElementById('amount').value;">
               
                </form>
     </section>
    <?php include('templates/footer.php');?>