
 $(document).ready(function(e) {
	  var t;
	  var l;
	  var main_t;
	  var main_l;
	  var tt;
	  var ll;
     $('.b').mouseenter(function(e) {
		  t = $(this).offset().top;
		 
		  l = $(this).offset().left;
		  main_t = $('#main').offset().top;
		  main_l = $('#main').offset().left;
		  tt = t - main_t - 8;
		  ll = l - main_l - 5;		  
         $(this).animate({height:49,left:ll},10);	
    });
	 $('.b').mouseleave(function(e) {
		  ll = ll + 5;	  
         $(this).animate({left:ll,height:45},10);	
    });
	$('.bb').mouseenter(function(e) {
		  t = $(this).offset().top; 
		  l = $(this).offset().left;
		  main_t = $('.qukuan_right').offset().top;
		  main_l = $('.qukuan_right').offset().left;
		  tt = t - main_t - 8;
		  ll = l - main_l - 5;  
         $(this).animate({height:49,left:ll},10);
    });
	 $('.bb').mouseleave(function(e) {
		  ll = ll + 5;
         $(this).animate({left:ll,height:45},10);	
    });
	 
	 $('#qukuan_middle_submit_input').click(function(e) {
         $('.tishi').show();
    });
	$('#qukuan_middle_submit_input').blur(function(e) {
         $('.tishi').hide(); 	 
    });
	
	$('#qukuan_middle_button_sure').click(function(e) {
         var string =  $('#qukuan_middle_submit_input').val();
		 var strings = string.substr(0,1);
		 /*if(strings == 0){
			 $('.tishi').show();
			   $('.tishi').text("数字开头不能为0或为空值");
			 $('#qukuan_middle_submit_input').val("");
			 }		 
		
	     else  if(string > 5000){
			 $('.tishi').show();
			 $('.tishi').text("单笔取款不能多于5000");
			 $('#qukuan_middle_submit_input').val("");
			 }
			else if(string%100 != 0 ){
				$('.tishi').show();
			 $('.tishi').text("取款值必须为100的整数倍！");
			
				} ;*/
    });
	
	$('.bbb').click(function(e) {
        var value =  $(this).val();
		 $('#qukuan_middle_submit_input').val(value);
    });
});
