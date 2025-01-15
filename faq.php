<?php
   session_start();
   $_SESSION['CURRENT_PAGE'] = 'FAQ';
   ?>
<?php 
   include('templates/headings.php');
   include('conn.php');
   ?>
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
      flex: 1 1 calc(33.333% - 20px); /* Three columns layout */
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
   <section style="background-color:#7c4d0e;" id="section4" class="menu_page">
   <div class="container">
      <div class="">
         <h2 class="section_title">"Mass badly celebrated is an enormous evil. Ah! it is not a matter of indifference how it is said! ... I have had a great vision on the mystery of Holy Mass and I have seen that whatever good has existed since creation is owing to it."
            ~ Blessed Anne Catherine Emmerich</h2>
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
            <h3 style="color:#a65418;">Why is Eucharistic Adoration important for the sanctification of priests?</h3>
            <p>
                Eucharistic Adoration is vital for the sanctification of priests because, without priests, there is no Eucharist. Our prayers, works, sufferings, and renunciations are dedicated to supporting and sanctifying priests, ensuring they remain steadfast in their vocation and holy in their mission.
            </p>
         </div>
         <!-- Box 2 -->
         <div class="box-content">
            <h3 style="color:#a65418;"> What is the main focus of the “Therese the Little Flower Apostolate”?</h3>
            <p>
               The primary focus of “The Therese the Little Flower Apostolate” is spiritual motherhood for the sanctification of priests within Kampala Archdiocese and beyond. Inspired by St. Therese the Little Flower’s “Little Way of Spiritual childhood,” we dedicate our lives to praying for priests and vocations through humble prayers, works, and sacrifices.
            </p>
         </div>
         <!-- Box 3 -->
         <div class="box-content">
            <h3 style="color:#a65418;">Why do priests need special prayers and support today?</h3>
            <p> 
                Priests need special prayers and support today because they face significant spiritual attacks. The devil particularly targets them due to their crucial role in the Church. They are tempted to sin and abandon their vocations, which is why they require the Church’s collective prayers and encouragement to remain strong and holy.
            </p>
         </div>
         <!-- Box 4 -->
         <div class="box-content">
            <h3 style="color:#a65418;">How does the holiness of priests impact the Church?</h3>
            <p>
               The holiness of priests profoundly impacts the Church. Venerable Archbishop Fulton Joseph Sheen emphasized that saintly priests promote the growth of the Church, while worldly priests hinder it. A higher level of holiness among priests elevates the entire Church, and conversely, a decline in their holiness can lead to the Church’s decline. Holy Christians help ensure the holiness of priests, reinforcing the spiritual integrity of the Church.
            </p>
         </div>
         <!-- Box 5 -->
         <div class="box-content">
            <h3 style="color:#a65418;">Who can become a spiritual mother to priests?</h3>
            <p>
                Any mature Catholic woman, already fully engaged in the sacramental life of the Church, can discern a call to the spiritual motherhood of priests. This spiritual motherhood can be lived in any state of life; it is open to single women, married women, mothers of families, widows, grandmothers, and religious in both the active and enclosed forms of consecrated life. None of its obligations bind under pain of sin. The vocation to the spiritual motherhood of priests is also compatible with the spirituality and obligations of Benedictine Oblates and of those who belong to one or another of the Third Orders: Franciscan, Dominican, Carmelite, Servite, etc.
            </p>
         </div>
         <!-- Box 6 -->
         <div class="box-content">
            <h3 style="color:#a65418;"> Who is the Virgin Mary in the context of spiritual motherhood? </h3>
            <p>
               God formed Mary to bring Jesus Christ into the world. She became the Mother of the Eternal High Priest, but the Incarnation also set the stage for her spiritual motherhood of all priests who would follow Him. At the foot of the Cross, Jesus entrusted all priests to His mother through John the Apostle. Mary’s love for Jesus and John is given today to all priests and will last for all eternity.
            </p>
         </div>
         <!-- Box 6 -->
         <div class="box-content">
            <h3 style="color:#a65418;">How are women called to imitate Mary as spiritual mothers of souls?</h3>
            <p>    
                By God’s design, all women are called to behold the Virgin Mary as Mother of Jesus, Mother of the Church, Mother of Grace, Mother of Priests, and Mother of all God’s family. God created all women with a unique feminine dignity and the potential to bear life, both physically and spiritually. Spiritual mothers are women of the Church, women of grace, and women of Marian virtue—the greatest of which is charity. Love, by its nature, is self-giving, and spiritual mothers place themselves at the service of God’s plan for the salvation of souls. Spiritual motherhood includes birth pangs, but the offering of suffering in union with Jesus brings forth new life for priests, families, and the entire world.
            </p>
         </div>
         <!-- Box 6 -->
         <div class="box-content">
            <h3 style="color:#a65418;">How do spiritual mothers transmit spiritual life to priests? </h3>
            <p>    
               It is through the sacramental rivers of grace that a woman, as a daughter of the Church, receives her spiritual life. In turn, she, as a spiritual mother, becomes a vessel of life-giving grace. A spiritual mother encounters the Eternal High Priest in the Eucharist and then, like Mary, carries Christ to others, offering prayers and sacrifices along the way. To priests, she mirrors Mary. The vocation to spiritual motherhood of priests is at the heart of the New Evangelization since, by the intercession of spiritual mothers, graces are obtained to renew priests and strengthen them in spreading the Gospel.
            </p>
         </div>
      </div>
   </div>
</section>


<?php include('templates/foot.php'); ?>
