<?php include('headings.php');?>        
<div class="innerbanner" >                
	<img src="" alt="">        
</div>
<div class="container content-area">
    <div class="middle-align">
        <div class="site-main sitefull contactpanel">         
			<header class="entry-header">
				<h1 class="entry-title">News Page</h1>
			</header><!-- .entry-header -->   
			<div class="one_half">
		<h2 class="section_title">News Details</h2>
		<div class="m-add-info">				
				<div class="m-addbox">					
					<p>
                    
                    </p>
				</div>
		</div>        	
	</div>
		<div class="one_half last_column">
		<h2 class="section_title">Feed In News</h2>
		<div class="main-form-area" id="contactform_main">		
			<form action="admin_reg.php" method="post" enctype='multipart/form-data'>
				<p style="font-size:18px;text-align:justify;">
				<input type="date" name="news_date" value="" placeholder="Date" 
                    style="width:100%"/></p>
                <div class="clear"></div>
                <p style="font-size:18px;text-align:justify;">
				<input type="text" name="title" value="" placeholder="Title" 
                    style="width:100%"/></p>
                <div class="clear"></div>
                <p style="font-size:18px;text-align:justify;">
				<input type="file" name="photo" style="width:100%"/></p>
                <div class="clear"></div>
				<p style="font-size:18px;text-align:justify;">
				<textarea name="content" placeholder="Message" style="width:100%;"></textarea>
				</p><div class="clear"></div>
				<div class="clear">
				</div>
				<p class="sub">
					<input type="submit" name="submit" value="Add News" 
                    class="search-submit" />
				</p>
			</form>			
			</div>
		</div>              
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php include('foot.php');?>