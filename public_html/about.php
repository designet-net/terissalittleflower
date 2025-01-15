<?php
	session_start();
	$_SESSION['CURRENT_PAGE'] = 'ABOUT';
?>
<?php 
	include('templates/header.php');
	include('conn.php');
?> 
<section style="background-color:#f3f3f3;">
	<div class="innerbanner" >                
		<img src="" alt="">        
	</div>
	<div class="container content-area">
		<div class="middle-align">
			<div class="site-main sitefull">							
				<article id="post-790" class="post-790 page type-page status-publish hentry">
					<header class="entry-header">
						<h1 class="entry-title">About Us</h1>
					</header><!-- .entry-header -->
					<div class="entry-content">
						<p style="font-size:18px;text-align:justify;">
							Grace Christian Fellowship established in November of 2008. 
							We join a highly successful network of over  GCF worldwide. 
							Since last year we have been establishing key leadership, 
							meeting, planning, and saving, to establish a healthy and 
							successful fellowship in the Uganda area and Rwanda.
						</p>
						<p style="font-size:18px;text-align:justify;">
							Our vision is to be the most Loving people Possible.
						</p>
						<p style="font-size:18px;text-align:justify;">
							As a fellowship, we work to help people realize their true identity and purpose in Life.
						</p>
						<p style="font-size:18px;text-align:justify;">
							Grace Christian fellowship is not just a ministry and what
							church can do! is Christ in the communities in our time and 
							generation. We are a mandate for the total evangelize and 
							outreach of the entire region of Western Uganda.
						</p>
						<p style="font-size:18px;text-align:justify;">
							Through this ministry we see God raising ordinary men and women 
							in the church today, Operating in His Best to do Extra-ordinary
							works as the gospel of Jesus Christ is preached in its fullness Amen.
						</p>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->	
			</div>
			<div class="clear"></div>
		</div>
	</div>
</section>   
	

<!-- Pastors New Section -->
<?php include('pastors.php');?>
<!-- End Pastors New -->

<?php include('templates/footer.php');?>