<?php
    session_start();
    $_SESSION['CURRENT_PAGE'] = 'EVENT';
?>
<?php 
    include('templates/headings.php');
    include('conn.php');
?>

<section style="background-color:#7c4d0e;" id="section4" class="menu_page">
   <div class="container">
      <div class="">
         <h2 class="section_title">A Catholic may sin and sin as badly as anyone else,
            but no genuine Catholic ever denies he is a sinner.
            A Catholic wants his sins forgiven, not excused or sublimated."
               ~ Ven. Arch. Fulton J. Sheen</h2>
      </div>
      <!-- .end section class -->  
      <div class="clear"></div>
   </div>
   <!-- container -->
</section>
<section id="welcomearea" style="background-color:#f3f3f3;padding: 10px;">
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
                 
            <style type="text/css">
               .styled-list {
                   list-style-type: none; /* Remove default bullets */
                   padding: 0;           /* Remove default padding */
                   margin: 0;            /* Remove default margin */
               }

               .styled-list li {
                   background-color: #f9f9f9; /* Light background for each item */
                   border: 1px solid #ddd;    /* Light border */
                   border-radius: 5px;        /* Rounded corners */
                   padding: 20px;             /* Padding around content */
                   margin: 10px 0;            /* Margin between list items */
                   transition: background-color 0.3s; /* Smooth background change */
               }

               .styled-list li:hover {
                   background-color: #e7f3fe; /* Change background on hover */
               }

               .styled-list h4 {
                   margin: 0 0 10px; /* Margin below headings */
                   font-size: 18px;   /* Heading size */
                   color: #333;       /* Heading color */
               }

               .styled-list p {
                   margin: 0;        /* Remove margin for paragraphs */
                   font-size: 16px;  /* Paragraph size */
                   color: #666;      /* Paragraph color */
               }
            </style>
            <ul class="styled-list">
               <li>
                    <h4><b>Date:</b> Every Thursday, 10am to 11am</h4>
                    <p><b>Activity:</b> Adoration hour for priests with the Rosary</p>
                    <p><b>Venue:</b> Mazzoldi house, Apostle of Jesus, Nsambya</p>
                </li>
                <li>
                    <h4><b>Date:</b> Friday, 15<sup>th</sup> November 2024</h4>
                    <p><b>Activity:</b> Meeting for both spiritual mothers and cenacle members</p>
                    <p><b>Venue:</b> Christ the king Church</p>
                    <p><b>Time:</b> 4:00pm</p>
                </li>                
                <li>
                    <h4><b>Date:</b> Friday, 22<sup>nd</sup> November 2024</h4>
                    <p><b>Activity:</b> Teaching on spiritual motherhood</p>
                    <p><b>Venue:</b> Christ the king Church</p>
                    <p><b>Time:</b> 4:00pm</p>
                </li>
                 <li>
                    <h4><b>Date:</b> Friday, 29<sup>th</sup> November 2024</h4>
                    <p><b>Activity:</b> Teaching on Therese and Vianey Cenacles</p>
                    <p><b>Venue:</b> Christ the king Church</p>
                    <p><b>Time:</b> 4:00pm</p>
                </li>
            </ul>

            <div class="clear"></div>
         </div>
         <div class="clear"></div>
      </div>
   </div>
   <!-- .container -->
</section>

<?php include('templates/foot.php'); ?>
