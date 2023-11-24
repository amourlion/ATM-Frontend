// JavaScript Document
$(document).ready(function(e) {

	$('#inputs').click(function(e) {
        $('.span1').text("请输入账号");
    });
    $('#inputs').blur(function(e) {
		var str = $(this).val();
		var length = str.length;
		if(str == 0){
			 $('.span1').text("账号不能为空值"); $(this).val("");
			}
		else if( length < 5 ){
			$('.span1').text("请输入有效账号"); $(this).val("");
			}	
			else{$('.span1').text("");}
			;
    });
	
	
	$('#inputsss').click(function(e) {
        $('.span3').text("请输入转账金额");
    });
    $('#inputsss').blur(function(e) {
		var str = $(this).val();
		var strs = str.substr(0,1);
		var length = str.length;
		/*if(str == 0){
			 $('.span3').text("不能为空值");
			 $(this).val("");
			}
	   
		else if( strs == 0 ){
			$('.span3').text("转账金额不能以0开头");
			 $(this).val("");
			}
		
		else if( str >20000){
			$('.span3').text("转账金额不能超过20000"); $(this).val("");
			}	
		else if((str % 100) != 0){$('.span3').text("金额须为一百的整数倍"); $(this).val("");}		
			else{$('.span3').text("");}
			;*/
    });
});