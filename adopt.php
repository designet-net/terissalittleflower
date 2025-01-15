<?php
    session_start();
    $_SESSION['CURRENT_PAGE'] = 'ADOPT';
?>
<?php 
    include('templates/headings.php');
    include('conn.php');
?>
<section style="background-color:#fff;" id="section3" class="menu_page">
    <div class="container">
        <div class="">
            <div class="fourpagebox">
                    <a href="#" target="_self">
                        <img src="images/black_priest1.jpg" style="width:100%;height:auto;">
                    </a>
            </div>
            <div class="fourpagebox">
               <a href="#" target="_self">
                  <img src="images/black_priest7.jpg" style="width:100%;height:auto;">
               </a>
            </div>
            <div class="fourpagebox">
                 <a href="#" target="_self">
                     <img src="images/black_priest4.jpg" style="width:100%;height:auto;">
                 </a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- container -->
</section>
<section id="pagearea">
    <style type="text/css">
        /* Basic container and row styling */
        .container1 {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px; /* Padding around the container */
        }

        .row-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Space between boxes */
            margin: -10px; /* Negative margin to offset padding */
            padding: 10px; /* Padding for the row */
        }

        .box-content {
            background: #f9f9f9; /* Light background color */
            padding: 20px;
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            flex: 1 1 calc(50% - 20px); /* Two columns layout */
            box-sizing: border-box; /* Include padding in width */
            margin: 10px 0; /* Margin for each box */
        }

        h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #a65418; /* Heading color */
        }

        p {
            line-height: 1.6;
            margin: 0;
            font-size: 16px;
            text-align: left;
        }

        @media (max-width: 768px) {
            .box-content {
                flex: 1 1 100%; /* Full width on smaller screens */
            }
        }
    </style>
    <section style="background-color:#7c4d0e;" id="section4" class="menu_page">
        <div class="container">
            <div class="">
                <h2 class="section_title">Who is going to save our Church? Not our bishops, not our priests and religious. It is up to you, the people. You have the minds, the eyes, the ears to save the Church. Your mission is to see that your priests act like priests, your bishops, like bishops, and your religious act like religious." ~ Ven. Archbishop Fulton J. Sheen</h2>
            </div>
            <!-- .end section class -->  
            <div class="clear"></div>
        </div>
        <!-- container -->
    </section>
    <div class="container1">
        <div class="row-wrapper">
            <!-- Box 1 -->
            <div class="box-content">
                <h3>How is a priest assigned to a spiritual mother?</h3>
                <p>
                    A priest is anonymously assigned to each spiritual mother to maintain privacy and confidentiality. This ensures that the focus remains on prayer and spiritual support rather than personal connections. Each spiritual mother will receive the name of a priest to pray for, but the identity of the spiritual mother remains unknown to the priest.
                </p>
            </div>
            <!-- Box 2 -->
            <div class="box-content">
                <h3>What topics are covered in the conferences and seminars for spiritual mothers?</h3>
                <p>
                    Our conferences and seminars cover a variety of topics, including the significance of Eucharistic Adoration for priests, understanding the spiritual challenges priests face, the role of spiritual motherhood in the Church, practical ways to offer prayers and sacrifices for priests, and testimonials from other spiritual mothers.
                </p>
            </div>
            <!-- Box 3 -->
            <div class="box-content">
                <h3>How can I sign up to become a spiritual mother for priests?</h3>
                <p>
                    You can sign up online by visiting our website. You will find a registration form here to fill out with your contact information. If you need any assistance, feel free to contact us via email or phone numbers provided here below.
                </p>
            </div>
            <!-- Box 4 -->
            <div class="box-content">
                <h3>Our Lady of Kibeho’s Call</h3>
                <p>
                    Our Lady of Kibeho’s messages emphasize the need for fervent prayer for the Church, particularly for priests. Her calls to pray unceasingly for the faithful and priests underscore the urgency of our apostolate’s mission, highlighting the significant role of intercessory prayer in safeguarding the Church’s spiritual health.
                </p>
            </div>
            <!-- Box 5 -->
            <div class="box-content">
                <h3>The Role of Eucharistic Adoration</h3>
                <p>
                    Eucharistic Adoration is a powerful means of supporting priests. By spending time in Adoration, we offer our prayers and petitions directly to Jesus, asking for His grace and protection for priests. This practice not only deepens our spiritual life but also fortifies the priesthood through divine intercession.
                </p>
            </div>
            <!-- Box 6 -->
            <div class="box-content">
                <h3>Our Apostolate’s Impact</h3>
                <p>
                    St. Therese the Little Flower Apostolate has made a significant impact on priests and the Church through dedicated prayer and support. By sharing real stories of transformation and testimonials from priests and spiritual mothers, we highlight the positive effects of our mission and encourage others to join our efforts.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
$successMessage = '';
$errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validation
    if (empty($name) || empty($email)) {
        $errorMessage = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = 'Invalid email format.';
    } else {
        $to = 'terissalittleflower@gmail.com'; // Replace with your email address
        $subject = 'New Contact Submission';
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $emailMessage = "Name: $name\n";
        $emailMessage .= "Email: $email\n";
        if (!empty($message)) {
            $emailMessage .= "Message:\n$message\n";
        }

        if (mail($to, $subject, $emailMessage, $headers)) {
            $successMessage = 'Thank you for reaching out! Your message has been sent.';
        } else {
            $errorMessage = 'There was a problem sending your message. Please try again later.';
        }
    }
}
?>

<section id="contact-page">
    <div class="container1">
        <div class="header">
            <h1 style="color:#a65418;">Fill in the form to adopt a priest</h1>
        </div>
        <div class="content">
            <?php if (!empty($successMessage)): ?>
                <p style="color: green;"><?php echo $successMessage; ?></p>
            <?php elseif (!empty($errorMessage)): ?>
                <p style="color: red;"><?php echo $errorMessage; ?></p>
            <?php endif; ?>
            
            <form class="contact-form" action="" method="post" style="display: flex; flex-direction: column; gap: 15px;">
                <label for="name" style="width: 100%;">Full Name</label>
                <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;">

                <label for="email" style="width: 100%;">Email Address</label>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;">

                <label for="message" style="width: 100%;">Additional Message (Optional)</label>
                <textarea id="message" name="message" rows="4" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;"></textarea>

                <button type="submit" style="width: 100%; padding: 15px; border: none; border-radius: 5px; background-color: red; color: #fff; font-size: 1.2em; cursor: pointer;">Send Message</button>
            </form>
        </div>
    </div>
</section>





<?php include('templates/foot.php');?>
