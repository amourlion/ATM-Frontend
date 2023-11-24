// JavaScript Document
 $(document).ready(function(e) {
        $('.inputs').click(function(e) {
            $('.font2_son').show();
			$('.font2_son').text("请输入6位数字");
        });
		$('.inputs').blur(function(e) {
           
			var str = $(this).val();
				
					if(str==0){
						$('.font2_son').text("不能为空值");
						}
					else{
						 $('.font2_son').hide();
						}	;
        });
		$('.inputss').click(function(e) {
            $('.font3_son').show();
			$('.font3_son').text("请输入6位数字");
        });
		$('.inputss').blur(function(e) {
           var str = $(this).val();
				
					if(str==0){
						$('.font3_son').text("不能为空值");
						}
					else{
						 $('.font3_son').hide();
						}	;
        });
		$('.inputsss').click(function(e) {
            $('.font4_son').show();
			$('.font4_son').text("请输入6位数字");
        });
		$('.inputsss').blur(function(e) {
             var str = $(this).val();
				
					if(str==0){
						$('.font4_son').text("不能为空值");
						}
					else{
						 $('.font4_son').hide();
						}	;
        });
		
		$('.button').click(function(e) {
           var st = $('.inputs').val();
		   var st_l = st.length;
		    var str = $('.inputss').val();
			var str_l = str.length;
			 var string = $('.inputsss').val();
			 var string_l = string.length;
			 if(str == 0){
			   $('.font3_son').show();
			$('.font3_son').text("请输入密码");
			   };	
		 if(string == 0){
			   $('.font4_son').show();
			$('.font4_son').text("请输入密码");
			   };
			 if(st_l < 6){
				 $('.font2_son').show();
			$('.font2_son').text("密码须为六位数字");
				 };
				 
		   	   	 
		     if(str != string){
			$('.font3_son').show();
			$('.font3_son').text("两次密码不同");
			$('.font4_son').show();
			$('.font4_son').text("两次密码不同");
				 };	
			 
				if(str_l < 6 ){
				$('.font3_son').show();
			$('.font3_son').text("密码须为六位数字");
			$('.font4_son').show();
			$('.font4_son').text("密码须为六位数字");	
					};
		       if((str == string) & str !=0){
		  
			$('.font3_son').text(" ");
		 
			$('.font4_son').text("");
				   };		  	 
        });
    });