<?php
    session_start();
    $_SESSION['CURRENT_PAGE'] = 'PRAYER';
?>
<?php 
    include('templates/headings.php');
    include('conn.php');
?>

    <section style="background-color:#7c4d0e;" id="section4" class="menu_page">
       <div class="container">
          <div class="">
             <h2 class="section_title">O my Jesus, I beg you on behalf of the whole Church:
                Grant it love and the light of your Spirit, and give power to the words of priests so that hardened hearts might be brought to repentance and return to you, O Lord."</h2>
          </div>
          <!-- .end section class -->  
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
    <div class="container1">
            <div class="row-wrapper">
                <!-- Box 1 -->
                <div class="box-content">
                    <h3 style="color:#a65418;"> How is a priest assigned to a spiritual mother?</h3>
                    <p>
                        A priest is anonymously assigned to each spiritual mother to maintain privacy and confidentiality. This ensures that the focus remains on prayer and spiritual support rather than personal connections. Each spiritual mother will receive the name of a priest to pray for, but the identity of the spiritual mother remains unknown to the priest.
                    </p>
                </div>
                <!-- Box 2 -->
                <div class="box-content">
                    <h3 style="color:#a65418;">What topics are covered in the conferences and seminars for spiritual mothers?</h3>
                    <p>
                        Our conferences and seminars cover a variety of topics, including the significance of Eucharistic Adoration for priests, understanding the spiritual challenges priests face, the role of spiritual motherhood in the Church, practical ways to offer prayers and sacrifices for priests, and testimonials from other spiritual mothers.
                    </p>
                </div>
                <!-- Box 3 -->
                <div class="box-content">
                    <h3 style="color:#a65418;"> How can I sign up to become a spiritual mother for priests?</h3>
                    <p>
                        You can sign up online by visiting our website. You will find a registration form here to fill out with your contact information. If you need any assistance, feel free to contact us via email or phone numbers provided here below.
                    </p>
                </div>
                <!-- Box 4 -->
                <div class="box-content">
                    <h3 style="color:#a65418;">Our Lady of Kibeho’s Call</h3>
                    <p>
                        Our Lady of Kibeho’s messages emphasize the need for fervent prayer for the Church, particularly for priests. Her calls to pray unceasingly for the faithful and priests underscore the urgency of our apostolate’s mission, highlighting the significant role of intercessory prayer in safeguarding the Church’s spiritual health.
                    </p>
                </div>
                <!-- Box 5 -->
                <div class="box-content">
                    <h3 style="color:#a65418;"> The Role of Eucharistic Adoration</h3>
                    <p>
                        Eucharistic Adoration is a powerful means of supporting priests. By spending time in Adoration, we offer our prayers and petitions directly to Jesus, asking for His grace and protection for priests. This practice not only deepens our spiritual life but also fortifies the priesthood through divine intercession.
                    </p>
                </div>
                <!-- Box 6 -->
                <div class="box-content">
                    <h3 style="color:#a65418;">Our Apostolate’s Impact</h3>
                    <p>
                        The Therese the Little Flower Apostolate has made a significant impact on priests and the Church through dedicated prayer and support. By sharing real stories of transformation and testimonials from priests and spiritual mothers, we highlight the positive effects of our mission and encourage others to join our efforts.
                    </p>
                </div>
            </div>
        </div>
</section>
<?php include('templates/foot.php');?>