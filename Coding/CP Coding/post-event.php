<?php include 'includes/header.php'; ?>
<body class="body">
	<header class="mainHeader">
    	<div class="company_logo">
    		<a href="index-2.php"><img src="template/bulls_club/images/company_logo.png"></a>
        </div>
		<?php include 'includes/nav.php'; ?>
    </header>
    
 <header class="imageSlider">
  <div class="imageSlider img">
   <div id="ftHolder"><div id="ft"><img src="images/slideshow/1396329736.jpg" alt="<i>banner1</i>" /><a href="#"></a><img src="images/slideshow/1396329759.jpg" alt="<i>banner2</i>" /><a href="#"></a><img src="images/slideshow/1396329773.jpg" alt="<i>banner 3</i>" /><a href="#"></a><img src="images/slideshow/1396329784.jpg" alt="<i>banner 4</i>" /><a href="#"></a><img src="images/slideshow/1396329798.jpg" alt="<i>banner 5</i>" /><a href="#"></a></div></div><script>$('#ft').jqFancyTransitions({  width:1665, height:440, position: 'curtain' });</script>
 </div>
</header>
    
    <div class="mainContent">
		<div class="content_inner">
            <script type="text/javascript" src="js/ajaxupload.js"></script>
<!-- END REQUIRED JS FILES -->
<script type="text/javascript" src="js/time_picker/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="js/time_picker/jquery.timepicker.css" />
<script>
 $(function() {
	 $("#event_time").timepicker({ "timeFormat": "h:i A", "step": 30 });
 });
 
</script>
<script type='text/javascript'>
function getLocation(){
		
	return 'includes/controllers/ajax.events.php';
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
			  $('#event_form').each(function(){
               this.reset();
			   $('div.success_error').show().html('<span style="color:#FFC600;">Your event has been successfully submitted.</span>');  
            });
			}else{
			$('div.success_error').html('<span style="color:#F00;">Sorry, Event listing couldnot be submitted!</span>');
		}
	   }
	});
}

$(document).ready(function(){	
 $('#event_form').submit(function(){
	if($('#event_form').validationEngine({returnIsValid:true})){
			var action = 'action=listEvent&';
			queryString = action + prepareQuerystring(this);
			sendToDatabase(queryString, getLocation(), 'mainFieldset');
	}
		return false;
	});
	
});
</script><article class="top_content">
        	<header><h2>Submit your event</h2></header>
            <content class="left_content"><p>Kindly fill the following form. Thank you</p></content>
         </article>
       	 <article class="form">
		 <div class="success_error" style="display:none;"></div>
               <form name="event_form" id="event_form" action="#" method="post">
			   <div class="form_row">
                 <span id="label"><span id="required">*</span>Your Name:</span>
                 <span id="field"><input type="text" name="name" id="name" value="" class="validate[required]"></span>
              </div>
			  <div class="form_row">
                 <span id="label"><span id="required">*</span>Your E-mail:</span>
                 <span id="field"><input type="text" name="email" id="email" value="" class="validate[required, custom[email]]"></span>
              </div>
			  <div class="form_row">
                 <span id="label"><span id="required">*</span>Your Contact No:</span>
                 <span id="field"><input type="text" name="contact_no" id="contact_no" value="" class="validate[required]"></span>
              </div>                     
              <div class="form_row">
                 <span id="label"><span id="required">*</span>Sport Event Title:</span>
                 <span id="field"><input type="text" name="title" id="title" value="" class="validate[required]"></span>
              </div>
                 
             <div class="form_row">
                 <span id="label"><span id="required">*</span>Starting Time:</span>
                 <span id="field"><input type="text" name="event_time" id="event_time" value="" class="validate[required]"></span>
             </div>
                 
             <div class="form_row">
                 <span id="label"><span id="required">*</span>Event Date:</span>
                 <span id="field"><input type="text" name="event_date" id="event_date" value="" class="validate[required]"></span>
             </div>
             
             <div class="form_row">
                 <span id="label"><span id="required">*</span>Event Venue:</span>
                 <span id="field"><input type="text" name="event_venue" id="event_venue" value="" class="validate[required]"></span>
             </div>
			 
			 
			 <div class="form_row">
                 <span id="label"><span id="required">*</span>Banner Image:</span>				<input name="MAX_FILE_SIZE" value="9999999999" type="hidden" />
                <input type="hidden" name="maxW" value="950" />
                <input type="hidden" name="fullPath" value="images/event/index.html" />
                <input type="hidden" name="relPath" value="../../images/event/" />
                <input type="hidden" name="colorR" value="255" />
                <input type="hidden" name="colorG" value="255" />
                <input type="hidden" name="colorB" value="255" />
                <input type="hidden" name="maxH" value="278" />
                <input type="hidden" name="image" value="image" />
                <input type="file" name="image" onchange="ajaxUpload(this.form,'includes/helpers/ajaxupload136d.html?filename=name&amp;maxSize=9999999999&amp;maxW=950&amp;fullPath=http://www.bullsclub.com.np/images/event/&amp;relPath=../../images/event/&amp;colorR=255&amp;colorG=255&amp;colorB=255&amp;maxH=278','upload_area','File Uploading Please Wait...&lt;br /&gt;&lt;img src=\'../images/apanel/wait.gif\' width=\'128\' height=\'15\' border=\'0\' /&gt;','&lt;img src=\'../images/apanel/cross.png\' width=\'16\' height=\'16\' border=\'0\' /&gt; Error in Upload, check settings and path info in source code.'); return false;" />
                <br /><div id="upload_area" style="display:none"></div>
                
             </span></div><div class="form_row_text_area">
                 <span id="label"><span id="required">*</span>Event Description:</span>
                 <span id="field_textarea"><textarea id="content" name="content" rows="8" cols="40" class="validate[required]"></textarea></span>
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