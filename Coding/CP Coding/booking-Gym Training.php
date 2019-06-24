<?php include 'includes/header.php'; ?>
<body class="body">
	<header class="mainHeader">
    	<div class="company_logo">
    		<a href="index-2.php"><img src="template/bulls_club/images/company_logo.png"></a>
        </div>
		<?php include 'includes/nav.php'; ?>
    </header>
    
    <header class="imageSlider">
    	<div id="ftHolder"><div id="ft"><img src="images/slideshow/1396329736.jpg" alt="<i>banner1</i>" /><a href="#"></a><img src="images/slideshow/1396329759.jpg" alt="<i>banner2</i>" /><a href="#"></a><img src="images/slideshow/1396329773.jpg" alt="<i>banner 3</i>" /><a href="#"></a><img src="images/slideshow/1396329784.jpg" alt="<i>banner 4</i>" /><a href="#"></a><img src="images/slideshow/1396329798.jpg" alt="<i>banner 5</i>" /><a href="#"></a></div></div><script>$('#ft').jqFancyTransitions({  width:1665, height:440, position: 'curtain' });</script>
    </header>
    
    <div class="mainContent">
		<div class="content_inner">
            <script type="text/javascript" src="js/time_picker/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="js/time_picker/jquery.timepicker.css" />
<script type='text/javascript'>
function getLocation(){
		
	return 'includes/controllers/ajax.booking.php';
}

function sendToDatabase(_queryString, _location, _postId)
{
	$('div.success_error').show().html('<span style="color:#FFC600;">Loading...</span>');	  
$.ajax({
	   type: 'POST',
	   url:  _location,
	   data: _queryString,
	   success: function(msg){
		   	if(msg == 1){
			$('div.success_error').show().html('<span style="color:#FFC600;">Your request has been successfully sent.</span>');
			$('#book_training').each(function(){
               this.reset();  
            });
			}else if(msg==2){
				$('div.success_error').show().html('<span style="color:#F00;">Sorry your request couldn\'t be submitted!</span>'); 
			}else if(msg==3){
				$('div.success_error').show().html('<span style="color:#FFC600;">Your request has been successfully sent.</span>'); 
				$('#book_sports').each(function(){
               this.reset();  
            });
			}else if(msg==4){
				$('div.success_error').show().html('<span style="color:#F00;">Sorry your request couldn\'t be submitted!</span>'); 
			}
			else{
			$('div.success_error').html('<span style="color:#F00;">Sorry</span>');
		}
	   }
	});
}

$(document).ready(function(){	
 $('#book_training').submit(function(){
	if($('#book_training').validationEngine({returnIsValid:true})){
			var action = 'action=book_training&';
			queryString = action + prepareQuerystring(this);
			sendToDatabase(queryString, getLocation(), 'mainFieldset');
	}
		return false;
	});
	
	$('#book_sports').submit(function(){
	if($('#book_sports').validationEngine({returnIsValid:true})){
			var action = 'action=book_sports&';
			queryString = action + prepareQuerystring(this);
			sendToDatabase(queryString, getLocation(), 'mainFieldset');
	}
		return false;
	});
	
	
	
});
</script><article class="top_content">
        	<header><h2>Training Booking</h2></header>
            <content class="left_content"><p>Kindly fill the following form. Thank you</p></content>
         </article>
       	 <article class="form">
		 <div class="success_error" style="display:none;"></div>
		 <form name="book_training" id="book_training" method="post" action="#">
         	<div class="form_row">
            	<span id="label">Training you would like to book:</span>
                <span id="field"><input type="text" name="sport_type" id="sport_type" value="Gym Training" readonly="readonly"></span>
              </div>
                           
              <div class="form_row">
                 <span id="label">Organization:</span>
                 <span id="field"><input type="text" name="organization" id="organization" value=""></span>
              </div>
                 
             <div class="form_row">
                 <span id="label"><span id="required">*  &nbsp;  &nbsp;</span>Contact Person:</span>
                 <span id="field"><input type="text" name="name" id="name" value="" class="validate[required]"></span>
             </div>
                 
             <div class="form_row">
                 <span id="label"><span id="required">*  &nbsp; &nbsp; </span>Contact No:</span>
                 <span id="field"><input type="text" name="contact_no" id="contact_no" value="" class="validate[required]"></span>
             </div>
                 
             <div class="form_row">
                 <span id="label"><span id="required">* &nbsp; &nbsp;  </span>Contact Email:</span>
                 <span id="field"><input type="text" name="email" id="email" value="" class="validate[required]"></span>
             </div>
                 
              <div class="form_row">
                 <span id="label"><span id="required">*  </span>Total Person:</span>
                 <span id="field"><input type="text" name="total_person" id="total_person" value="" class="validate[required]"></span>
              </div>
              
               <div class="form_row">
                 <span id="label"><span id="required">* </span>Booking Date:</span>
                 <span id="field"><input type="text" name="booking_date" id="booking_date" value="" class="validate[required]"></span>
               </div>
               
                <div class="form_row" >
                 <span id="label"><span id="required">*  </span>Booking Time:</span>
                 <span id="field"><input type="text" name="booking_time" id="booking_time" value=""class="validate[required]"></span>
               </div>
               
                <div class="form_row">
                 <span id="label">&nbsp;</span>
                 <span id="field" style="width:41.4%;"><input type="submit" id="submit_booking" value=""/></span>
               </div>
			   </form>
         </article>
     	</div>
        <aside class="sidebar_inner">
        	<h2>LATEST NEWS</h2>
             <ul class="module_newslist"><article class="new_hold">
                     <div class="news_date"><span class="small_size">December</span> <span class="big_size">09</span> <span class="small_size">2017</span></div>
                     <div class="news_short_dtl">
                         <a href="news-8.php"><img src="images/news/company_logo_jp_1512798787.jpg" /></a>
                         <header class="title"><p><a href="news-8.php">Promotional Offer From Bulls Club, Nakkhu, Lalitpur</a></p></header>
                     </div>
                </article><article class="new_hold">
                     <div class="news_date"><span class="small_size">August</span> <span class="big_size">31</span> <span class="small_size">2016</span></div>
                     <div class="news_short_dtl">
                         <a href="news-5.php"><img src="images/news/bulls_4th_badmi_1472445287.png" /></a>
                         <header class="title"><p><a href="news-5.php">4th Bulls Inter Member Badminton Tournament coming soon!</a></p></header>
                     </div>
                </article></ul>
				<a class="all_news" href="news.php">View All News</a>
            </section>
        </aside>
     </div>
    <?php include 'includes/footer.php'; ?>