<?php
session_start();
$_SESSION['CURRENT_PAGE'] = 'ABOUT';
?>
<?php 
include('templates/headings.php');
include('conn.php');
?>
<section id="pagearea">
    <style type="text/css">

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

    <section style="background-color:#7c4d0e;" id="section4" class="menu_page">
       <div class="container">
          <div class="">
             <h2 class="section_title">"A good shepherd, a pastor after God's heart, is the greatest treasure which the good Lord can grant to a parish, and one of the most precious gifts of divine mercy." ~St. John Mary Vianney</h2>
          </div>
          <!-- .end section class -->  
          <div class="clear"></div>
       </div>
       <!-- container -->
    </section>
    <div class="container">
            <style type="text/css">
                .row-wrapper {
                    
                    margin: 0 auto;   /* Center the content */
                    padding: 20px;    /* Add padding around the content */
                    font-family: Arial, sans-serif; /* Font family */
                    line-height: 1.6; /* Improve readability */
                    color: #333;      /* Dark text color */
                    background-color: #f8f8f8; /* Light background */
                    border-radius: 8px; /* Rounded corners */
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
                }

                .row-wrapper p {
                    margin-bottom: 15px; /* Space between paragraphs */
                }

                .row-wrapper blockquote {
                    background-color: #e9f5fe; /* Light blue background for blockquotes */
                    border-left: 5px solid #007bff; /* Blue left border */
                    padding: 15px; /* Padding inside blockquote */
                    margin: 20px 0; /* Margin above and below */
                    border-radius: 5px; /* Rounded corners */
                    font-style: italic; /* Italicize the text */
                }

                .row-wrapper blockquote p {
                    margin: 0; /* Remove margin for blockquote paragraphs */
                    color: #007bff; /* Blue text for blockquote content */
                }

                .row-wrapper h4 {
                    font-size: 20px; /* Heading size */
                    margin-top: 20px; /* Space above headings */
                    color: #0056b3; /* Darker blue for headings */
                }

                .row-wrapper strong {
                    color: #d9534f; /* Highlight strong text in red */
                }

            </style>
            <div class="row-wrapper">
                <p>
                    We are The Apostolate of Spiritual Motherhood for the Sanctification of Priests at the heart of the Church in Kampala Archdiocese. We dedicate our entire lives through our humble prayers, works, sufferings, and renunciations for the sanctification of our priests and praying for vocations.
                </p>
                <p>
                    Priests are really under attack today. The devil hates them because of their spiritual role, and he is ever on the prowl to tempt them to sin and to abandon their ordained vocation. Everyone in the Church needs to support them with prayer, as well as with encouragement whenever possible.
                </p>

                <blockquote>
                    <p><strong>Venerable Archbishop Fulton Joseph Sheen said:</strong></p>
                    <p class="quote">
                        “Every worldly priest hinders the growth of the Church; every saintly priest promotes it. If only all priests realized how their holiness makes the Church holy and how the Church begins to decline when the level of holiness among priests falls below that of the people!”
                    </p>
                    <p style="text-align: left;color: #000;">He added that:</p>
                    <p class="quote">
                        “Holy Christians guarantee holy priests!”
                    </p>
                </blockquote>

                <p>
                    The Name of Our Apostolate is: <strong>“St. Therese the Little Flower Apostolate”</strong>. We follow St. Therese the Little Flower’s “Little Way of Spiritual Childhood” in praying for the sanctification of our priests with childlike trust and total surrender to the Divine Will of God by offering our little acts of everyday life with simplicity and humility; through Our Blessed Mother to Our Lord Jesus Christ for His beloved priests. St. Therese dedicated herself to pray for sinners and priests. She is also the patron saint of missionaries.
                </p>

                <p>
                    The principal aim of the Reform of Carmel is devotion to prayer for preachers and theologians. St. Therese was puzzled by this need to pray for the souls of priests whom she said: “I believed to be as pure as crystal.”
                </p>

                <p>
                    Following a trip to Italy, before she entered Carmel, she fully understood the necessity of such prayer for the souls of priests who she described as “weak and fragile men.” If holy priests, whom Jesus in His Gospel calls the “salt of the earth,” show in their conduct their extreme need for prayers, what is to be said of those who are tepid? Didn’t Jesus say too: “If the salt loses its savour, wherewith will it be salted?” (Matthew 5:13)
                </p>

                <p>
                    How beautiful, is the vocation, which has as its aim the preservation of the salt destined for souls! This is Carmel’s vocation since the sole purpose of our prayers and sacrifices is to be the apostle of the apostles. We are to pray for them while they are preaching to souls through their words and especially their example.” (Story of a Soul, p.122).
                </p>

                <blockquote>
                    <p class="quote">
                        “...Let us be apostles…let us save especially the souls of priests; these souls should be more transparent than crystal …Alas there are many bad priests, priests who are not holy enough. …let us pray, let us suffer for them, and, on the last day, Jesus will be grateful.”
                    </p>
                </blockquote>

                <p>
                    Our Lady of Kibeho requested us to pray fervently for the Church. One of the messages she gave to the 1st visionary Alfonsine Mumureke on the 15th of August 1983 and repeated it on the 28th of November 1983 was:
                </p>
                <blockquote>
                    <p class="quote">
                        “Pray unceasingly for the Church because terrible tribulations are awaiting it in times to come.”
                    </p>
                </blockquote>
                <p>
                    With this message from our Lady, repeating it several times also to the visionary Natalie, shows her emphasis, calling us to pray for the church. She requested Natalie to pray so much for priests because most of them were becoming unfaithful and breaking their promises.
                </p>

                <p>
                    Pope Benedict XVI encouraged us to form apostolates of praying for the sanctification of priests because scandals in the church have been spreading across America, Europe, Australia and other continents.
                </p>

                <p>
                    This call has been heeded and several groups of the faithful around the world have formed apostolates of “adopt a priest”, where Christian ladies of all ages anonymously adopt a priest by being given his name and prays for him throughout her entire life, even after he passed on. The priest will not know his spiritual mother until he is in heaven. The apostolate is yielding fruits as the prayers of these spiritual mothers obtain for them graces to overcome temptations and strengthen them in their sublime vocations.
                </p>

                <p>
                    Our Apostolate of Spiritual Motherhood for the Sanctification of Priests is to support our priests in the same way of “adopt a priest”, by mature Catholic spiritual mothers who are in full communion with the Church. They can be single, married, widowed or consecrated religious. A spiritual mother dedicates herself to live a life of offering her prayers, works, joys and sufferings in union with the Immaculate Heart of Mary, to assist priests to desire only the Divine Will of God, embrace their cross courageously, overcome temptations and thus be holy instruments and faithful representatives of Jesus Christ as Head, Shepherd and Spouse of the Church.
                </p>
            </div>
    </div>
</section>
<section style="background-color:#fff;" id="section3" class="menu_page">
    <div class="container">
        <div class="">
            <div class="fourpagebox">
                    <a href="#" target="_self">
                        <img src="images/black_priest5.jpg" style="width:100%;height:auto;">
                    </a>
            </div>
            <div class="fourpagebox">
               <a href="#" target="_self">
                  <img src="images/black_priest6.jpg" style="width:100%;height:auto;">
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


<?php include('templates/foot.php'); ?>