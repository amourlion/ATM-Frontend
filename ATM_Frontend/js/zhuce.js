// JavaScript Document


 $(document).ready(function(e) {
	 var code;
	 var codes;
   	$('.button').click(function(e) {
        var str = $('.inputss').val();
		var str_l = str.length;
		var strs = $('.inputsss').val();
		var strs_l = strs.length;
		if(str  != strs ){
			$('.font2_son').text("两次输入密码不同");
			$('.font3_son').text("两次输入密码不同");
			};
		if(str_l < 6){
			$('.font2_son').text("密码须为六位数字");
			$('.font3_son').text("密码须为六位数字");
			};	
		if(str == strs){
			$('.font2_son').text("");
			$('.font3_son').text("");
			};
    });
		 

		$('.inputs').click(function(e) {
			 $('.font1_son').text("请输入用户名");
 
        });	
		
		$('.inputs').blur(function(e) {
            var str = $(this).val();
			var string = str.length;
			/*if(str ==0){
				 $('.font1_son').text("用户名不能为空值");
				}
			else if( string < 2){
				$('.font1_son').text("用户名字数不少于2个");
				}	
			else{$('.font1_son').text("");}	;*/
        });
		$('.inputss').click(function(e) {
 
			 $('.font2_son').text("请输入六位数字密码");
        });		
		
		$('.inputss').blur(function(e) {
            var str = $(this).val();
			code = str;
			var string = str.length;
			if(str ==0){$('.font2_son').text("密码不能为空值");}
		   else	if(string <6){
				$('.font2_son').text("请输入6位有效密码");
				$('.inputsss').val();
				}
			else if( codes == code){$('.font3_son').text(" ");}
			else{$('.font2_son').text("");
			  code = str;
			}	;
        });
		$('.inputsss').click(function(e) {
 
			$('.font3_son').text("请确认密码");
 
        });	
		$('.inputsss').blur(function(e) {
            var str = $(this).val();
			codes = str;
			var string = str.length;
			if(str ==0){$('.font3_son').text("密码不能为空值");}
			
		   else	if(string <6){
				$('.font3_son').text("请输入6位有效密码");
				}
			 	
			else{$('.font3_son').text("");
			  
			}	;
        });
		$('.inputssss').click(function(e) {
 
			 $('.font4_son').text("请输入有效年龄");
         });	
		$('.inputssss').blur(function(e) {
             var str = $(this).val();
			 var strs = str.substr(0,3);
			if(str == 0){$('.font4_son').text("年龄不能为空值");} 
			else if(strs == 0 ){
				  $('.font4_son').text("数字不能以0开头");
				 }
			else if(strs > 120 ){
				  $('.font4_son').text("无效年龄！");
				 }	
				else{ $('.font4_son').text("");}  ;
        });
            });
		 