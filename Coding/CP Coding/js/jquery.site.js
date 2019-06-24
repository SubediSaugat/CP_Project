// jquery site 
$(document).ready(function(){
/*
| for form field input control
*/
 	$('.noSpaces').alphanumeric();
	$('.numericOnly').numeric();
	$('.emailOnly').alphanumeric({allow:'@_-'});
	$('.grpEmail').alphanumeric({allow:'@;_-.'});

/*
| for article mailto friends popup.
*/
	// Open the email popup when click in the mailto icon.s
	$('.article_email').click(function(){
		$('#mailto_container').show('fast');
		alert();
	});
	// article mailto friends close
	$('.closeBtn').click(function(){
		$('#mailto_container').hide('fast');
	});
// end of article mailto functions.

/*
| for bar of the poll options.
*/
	// get graph
	getOptionGraph();
	// when view button is clicked.
	$('.poll_results').click(function(){
		var id = $(this).attr('name');
		var state = $(this).attr('state');
		if(state == 0){
			$(this).attr({'state':'1'});
			$(this).val('Cast Vote');
			$('#poll_result_list'+id).show('slow');
			$('#poll_options_list'+id).hide('fast');
			$('#poll_submit_'+id).hide('fast');
		} else {
			$(this).attr({'state':'0'});
			$(this).val('View Results');
			$('#poll_result_list'+id).hide('fast');
			$('#poll_options_list'+id).show('slow');
			$('#poll_submit_'+id).show('fast');
		}
	});
	// when vote cast button is clicked.
	$('.poll_submit').click(function(){
		var id = $(this).attr('name');
		var option = $('#polling_'+id).find('input[type="radio"]:checked').val();
		$('#poll_submitBtn'+id).html('<img src="images/frontend/wait.gif" alt="wait ..." />');
		$.ajax({
		   type: "POST",
		   url:  "includes/controllers/ajax.poll.php",
		   data: "action=castvote&id="+id+"&option="+option,
		   success: function(msg){
			 if(msg == 1)
			 {
				 // add hit
				 var initHits  = Number($('#pollBar_'+option).attr('hits'))+1;
				 var initTotal = Number($('#pollBar_'+option).attr('totalHits'))+1;
				 $('#pollBar_'+option).attr({'hits':(initHits)});
				 $('#pollBar_'+option).attr({'totalHits':(initTotal)});
				 // change label too
				 $('#span_option_result_'+option).html(initHits);
				 
			 }
			 getOptionGraph();
			 $('#poll_submitBtn'+id).remove();
			 $('#poll_result_list'+id).show('slow');
			 $('#poll_options_list'+id).hide('fast');
		   }
		});
		return false;
	});
	
	dropDownMenu();
});

// ui functions
function getOptionGraph(){
	$('.totalBar').each(function(){
		//var share = $(this).attr('share');
		var hits = $(this).attr('hits');
		var total= $(this).attr('totalHits');
		var share= (hits/total)*100;
		$(this).find('span').css({width:share+'%'});
	});
}

function dropDownMenu() {
	
	$("#menu ul ul").css({display: "none"});
	  
	$("#menu ul li").hover(function() {
		$(this).find('ul:first').css({display: "block", opacity: 0}).stop().animate({ opacity: 1 }, 200); //Slides down when hover the UL
		$(this).children('a').addClass("hovered"); //Adds a hovered class, so you can see the menu path you are following
	}
	,function() {
		$(this).find('ul:first').css({display: "none"}); //Slides up on mouseleave
		$(this).children('a').removeClass("hovered"); //removes the hovered class.
	});
	
}