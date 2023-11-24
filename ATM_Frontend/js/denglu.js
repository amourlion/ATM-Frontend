// JavaScript Document
   $(document).ready(function(e) {
	   var this_w = $('.bt').width();
	  var this_h;
	   var l;
	   var ll;
	   var t;
	   var tt;
     $('.bt').mouseenter(function(e) {
		 this_h =  $('.bt').height();
        $(this).animate({height:this_h + 2},10);
		//alert("asdf");
    });
	$('.bt').mouseleave(function(e) {
		 this_h =  $('.bt').height();
        $(this).animate({height:this_h - 2},10);
		//alert("asdf");
    });
});