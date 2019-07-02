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
            <script type='text/javascript'>
function getLocation()
{
		
	return 'includes/controllers/ajax.members.php';
}

$('#email').live('blur', function(){
		var email = $.trim($('#email').val());
		if(email != '') 
		{
			$.ajax({
			   type: 'POST',
			   url:  getLocation(),
			   data: 'action=checkAvilability&email='+email,
			   success: function(msg){
				 if(msg == 1) {
				 	$('div.success_error').show().html('<span style="color:#F00; padding-bottom:1%; float:left;">Email <b>'+email+'</b> already exists. Please select different email.</span>');
					$('#error_input').val('1');
				 } else if(msg == 0) {
					 $('#error_input').val('');
				 	if($('.notification')) {
						$('.notification').fadeOut('slow');
					}
				 }
			   }
			});
		}
	});	


function sendToDatabase(_queryString, _location, _postId)
{
	$('div.success_error').show().html('<span style="color:#FFC600;">Loading...</span>');	  
    $.ajax({
	   type: 'POST',
	   url:  _location,
	   data: _queryString,
	   success: function(msg){
		   	if(msg == 1){
			window.location.href='members.html';
			$('#login_frm').each(function(){
               this.reset();  
            });
			}else if(msg==3){
				$('div.success_error').show().html('<span style="color:#FFC600;">Your Password has been successfully changed.</span>');
				$('#password_change').each(function(){
                this.reset();  
            });
			}else if(msg==4){
				$('div.success_error').show().html('<span style="color:#F00;">Sorry password couldn\'t be changed!</span>');
			}else if(msg==5){
				$('div.success_error').show().html('<span style="color:#FFC600;">Thank you, your membership request has been successfully sent.</span>');
				$('#apply_membership').each(function(){
               this.reset();  
            });
			}else if(msg==6){
				$('div.success_error').show().html('<span style="color:#F00;">Sorry, your membership request couldn\'t be sent.</span>');
			}else{
			$('div.success_error').html('<span style="color:#F00;">Wrong E-mail or Password!</span>');
		}
	   }
	});
}

$(document).ready(function(){	
 $('#login_frm').submit(function(){
	if($('#login_frm').validationEngine({returnIsValid:true})){
			var action = 'action=checkLogin&';
			queryString = action + prepareQuerystring(this);
			sendToDatabase(queryString, getLocation(), 'mainFieldset');
	}
		return false;
	});
	
	$('#apply_membership').submit(function(){
	if($('#apply_membership').validationEngine({returnIsValid:true})){
		if($('#error_input').val()=='1'){
			$('div.success_error').show().html('<span style="color:#F00; padding-bottom:1%; float:left;">Please select different email.</span>');
		}
		else
		{
			var action = 'action=applyMembership&';
			queryString = action + prepareQuerystring(this);
			sendToDatabase(queryString, getLocation(), 'mainFieldset');
	}
	}
		return false;
	});
	
	$('#password_change').submit(function(){
	if($('#password_change').validationEngine({returnIsValid:true})){
		if($('#password').val() == $('#confirm_password').val()){
			var action = 'action=changePassword&';
			queryString = action + prepareQuerystring(this);
			sendToDatabase(queryString, getLocation(), 'mainFieldset');
	}else{
		$('div.success_error').show().html('<span style="color:#F00;">Password did not Match</span>');
	}
	
	}
		return false;
	});	

});
</script><article class="top_content">
        	<header><h2>Members</h2></header>
            <content class="content_left"><p><a href="members-apply.php">Apply for Membership</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;</span>Member's Login </p></content>
         </article>
       	 <article class="member_dtl">
		 <div class="success_error" style="display:none;"></div>
         	<form name="login_frm" id="login_frm" method="post">
			<div class="login_row">
			    <div id="form_row">E-mail:</br>
                <input type="text" name="email" id="email_login" value="" class="validate[required,custom[email]]"/>
                </div>
                <div id="form_row">Password:</br>
                <input type="password" name="password" id="password" value="" class="validate[required]"/>
                </div>
                <div id="form_row">&nbsp;&nbsp;<br/>
                <input type="submit" id="submit" value=""/>
                </div>
				</form>
            </div>
           <!-- <a href="#">Forget Password?</a>-->
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
     