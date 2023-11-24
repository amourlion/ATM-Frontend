// JavaScript Document
// JavaScript Document
   $(document).ready(function(e) {
	   var this_w ;
	  var this_h;
	  var _this_w;
	  var _this_h;
	   var l;
	   var ll;
	   var t;
	   var tt;
     $('.bt').mouseenter(function(e) {
		 this_h =  $('.bt').height();
		 this_w =  $('.bt').width();
        $(this).animate({height:this_h + 2,width:this_w + 10},10);
		//alert("asdf");
    });
	$('.bt').mouseleave(function(e) {
		 this_h =  $('.bt').height();
		 this_w=  $('.bt').width();
        $(this).animate({height:this_h - 2,width:this_w - 10},10);
		//alert("asdf");
    });
	$('.btt').mouseenter(function(e) {
		 _this_h =  $('.btt').height();
		 _this_w =  $('.btt').width();
        $(this).animate({height:45},10);
		//alert("asdf");
    });
	$('.btt').mouseleave(function(e) {
		 _this_h =  $('.btt').height();
		 _this_w=  $('.btt').width();
        $(this).animate({height:40},10);
		//alert("asdf");
    });
	

});