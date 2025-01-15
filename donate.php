<?php
    session_start();
    $_SESSION['CURRENT_PAGE'] = 'DONATE';
?>
<?php 
    include('templates/headings.php');
    include('conn.php');
?>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .container1 {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }
    .open-with {
        background-color: #e7f3e7;
        border-left: 5px solid #5cb85c;
        padding: 20px;
        margin-bottom: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .open-with h2 {
        margin: 0;
        color: #333;
    }
    .open-with p {
        margin: 10px 0;
    }
    .contact-info, .contact-form {
        margin-bottom: 30px;
    }
    .contact-info h2, .contact-form h2 {
        color: #a65418; /* Updated color */
        margin-bottom: 10px;
    }
    .contact-info p {
        margin: 5px 0;
        line-height: 1.6;
    }
    .contact-form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    .contact-form input, .contact-form textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 6px;
    }
    .contact-form button {
        display: block;
        width: 100%;
        padding: 12px;
        background: #a65418; /* Updated background color */
        border: none;
        border-radius: 6px;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
    }
    .contact-form button:hover {
        background: #7c4d0e; /* Darker shade for hover effect */
    }
    .map {
        width: 100%;
        height: 400px;
        border: 0;
        margin-top: 30px;
        border-radius: 8px;
    }
</style>
</head>
<body>
    <section style="background-color:#7c4d0e;" id="section4" class="menu_page">
        <div class="container">
            <div class="">
                <h2 class="section_title">The end for which God has instituted the priesthood has been to appoint on earth public persons to watch over the honor of his divine majesty, and to procure the salvation of souls."  ~ St. Alphonsus Liguori</h2>
            </div>
            <!-- .end section class -->  
            <div class="clear"></div>
        </div>
        <!-- container -->
    </section>
    <section id="welcomearea" style="background-color:#fff;padding: 10px;">
       <div class="container">
          <div class="welcomebx">
             <div class="full last_column">
                <style type="text/css">
                   .image-text-container {
                      overflow: auto; /* Ensure the container wraps around floated elements */
                      margin-bottom: 20px; /* Space below the container */
                   }
                   .float-left-image {
                      max-width: 100%; /* Ensure the image is responsive */
                      height: auto; /* Maintain aspect ratio */
                      margin-right: 20px; /* Space between the image and the text content */
                      float: left; /* Float the image to the left */
                   }
                   .text-content {
                      /* No need for flex here; the text will flow around the floated image */
                   }
                </style>
                <div class="image-text-container">
                   <div class="text-content">
                    <h2 style="color:#a65418;">Become a Spiritual Mother</h2>
                    <p>                        
                        <b>Adopt a Priest:</b> Commit to pray for a specific priest throughout your life. You will receive his name and can offer your prayers, sacrifices, and daily acts for his sanctification. <br>
                        <b>Pray Regularly:</b> Dedicate time each day to pray for priests, particularly those in need of spiritual support. Consider incorporating specific prayers or novenas into your routine.
                    </p>

                    <h2 style="color:#a65418;">Engage in Group Prayer</h2>
                    <p>                        
                        <b>Join a Prayer Group:</b> Participate in local or online prayer groups focused on the sanctification of priests. Share intentions and support one another in prayer. <br>
                        <b>Attend Retreats and Workshops:</b> Look for opportunities to deepen your understanding of spiritual motherhood and enhance your prayer life through retreats and workshops offered by our Apostolate.
                    </p>

                    <h2 style="color:#a65418;">Participate in Events</h2>
                    <p>                        
                        <b>Monthly Gatherings:</b> Attend our monthly meetings to pray together, share experiences, and discuss how to better support our priests. <br>
                        <b>Special Prayer Vigils:</b> Join us for special vigils and events dedicated to praying for the Church and our priests, especially during significant liturgical seasons.
                    </p>

                    <h2 style="color:#a65418;">Spread Awareness</h2>
                    <p>                        
                        <b>Share Our Mission:</b> Help raise awareness by sharing information about our Apostolate with your family, friends, and community. Use social media to spread the word. <br>
                        <b>Invite Others:</b> Encourage others to join our mission, whether they are single, married, widowed, or consecrated religious.
                    </p>

                    <h2 style="color:#a65418;">Offer Your Sufferings and Sacrifices</h2>
                    <p>                        
                        <b>Live a Life of Offering:</b> Dedicate your daily challenges, sufferings, and joys to the sanctification of priests. Consider how you can make small sacrifices for their intentions.
                    </p>

                    <h2 style="color:#a65418;">Contribute Financially</h2>
                    <p>                        
                        <b>Support Our Apostolate:</b> Your financial contributions can help sustain our initiatives, events, and outreach efforts. Consider making a donation or participating in fundraising activities.
                    </p>

                    <h2 style="color:#a65418;">Stay Informed</h2>
                    <p>                        
                        <b>Subscribe to Our Newsletter:</b> Keep up-to-date with our latest activities, prayer intentions, and spiritual resources by signing up for our newsletter.
                    </p>

                    <h2 style="color:#a65418;">Pray for Vocations</h2>
                    <p>                        
                        <b>Encourage Vocations:</b> Pray specifically for an increase in holy vocations to the priesthood and support programs that foster discernment among young people.
                    </p>

                    <p>By engaging in any of these ways, you become a vital part of our mission to uplift and sanctify our priests, ensuring they remain faithful instruments of Christ in the world. Thank you for considering joining us in this important work of prayer and spiritual motherhood!</p>

                      </p>
                   </div>
                </div>
                <div class="clear"></div>
             </div>
             <div class="clear"></div>
          </div>
       </div>
       <!-- .container -->
    </section>

    <?php include('templates/foot.php');?>
