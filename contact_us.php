<?php
    session_start();
    $_SESSION['CURRENT_PAGE'] = 'CONTACT';
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
    <section>
        <div class="container1">
            <!-- Open With Section -->
            <div class="open-with">
                <p>We are here to assist you with any questions or concerns you may have. Feel free to reach out to us via the contact form or use the information below.</p>
                <p><strong>Office Hours:</strong> Monday to Friday, 9:00 AM - 5:00 PM</p>
                <p><strong>Location:</strong> Kampala- Uganda</p>
            </div>

            <h1>Contact Us</h1>

            <div class="contact-info">
                <h2>Our Address</h2>
                <p>Kampala- Uganda</p>
                <p>P.O. Box: 24395, Kampala.</p>
                <p>Email: <a href="mailto:terissalittleflower@gmail.com">terissalittleflower@gmail.com</a></p>
                <p>Phone(s): +256 783 177178, <br/> +256 777164607,+256 704720555</p>
            </div>

            

            <div class="contact-form">
                <h2>Get in touch with Therese the Little Flower Apostolate</h2>
                
                <?php if (!empty($successMessage)): ?>
                    <p style="color: green;"><?php echo $successMessage; ?></p>
                <?php elseif (!empty($errorMessage)): ?>
                    <p style="color: red;"><?php echo $errorMessage; ?></p>
                <?php endif; ?>
                
                <form action="" method="post"> <!-- Action is empty to submit to the same file -->
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                    
                    <button type="submit">Send Message</button>
                </form>
            </div>

        </div>
    </section>
    <?php include('templates/foot.php');?>
