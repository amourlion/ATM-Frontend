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
			$('.font2_son').text("�����������벻ͬ");
			$('.font3_son').text("�����������벻ͬ");
			};
		if(str_l < 6){
			$('.font2_son').text("������Ϊ��λ����");
			$('.font3_son').text("������Ϊ��λ����");
			};	
		if(str == strs){
			$('.font2_son').text("");
			$('.font3_son').text("");
			};
    });
		 

		$('.inputs').click(function(e) {
			 $('.font1_son').text("�������û���");
 
        });	
		
		$('.inputs').blur(function(e) {
            var str = $(this).val();
			var string = str.length;
			/*if(str ==0){
				 $('.font1_son').text("�û�������Ϊ��ֵ");
				}
			else if( string < 2){
				$('.font1_son').text("�û�������������2��");
				}	
			else{$('.font1_son').text("");}	;*/
        });
		$('.inputss').click(function(e) {
 
			 $('.font2_son').text("��������λ��������");
        });		
		
		$('.inputss').blur(function(e) {
            var str = $(this).val();
			code = str;
			var string = str.length;
			if(str ==0){$('.font2_son').text("���벻��Ϊ��ֵ");}
		   else	if(string <6){
				$('.font2_son').text("������6λ��Ч����");
				$('.inputsss').val();
				}
			else if( codes == code){$('.font3_son').text(" ");}
			else{$('.font2_son').text("");
			  code = str;
			}	;
        });
		$('.inputsss').click(function(e) {
 
			$('.font3_son').text("��ȷ������");
 
        });	
		$('.inputsss').blur(function(e) {
            var str = $(this).val();
			codes = str;
			var string = str.length;
			if(str ==0){$('.font3_son').text("���벻��Ϊ��ֵ");}
			
		   else	if(string <6){
				$('.font3_son').text("������6λ��Ч����");
				}
			 	
			else{$('.font3_son').text("");
			  
			}	;
        });
		$('.inputssss').click(function(e) {
 
			 $('.font4_son').text("��������Ч����");
         });	
		$('.inputssss').blur(function(e) {
             var str = $(this).val();
			 var strs = str.substr(0,3);
			if(str == 0){$('.font4_son').text("���䲻��Ϊ��ֵ");} 
			else if(strs == 0 ){
				  $('.font4_son').text("���ֲ�����0��ͷ");
				 }
			else if(strs > 120 ){
				  $('.font4_son').text("��Ч���䣡");
				 }	
				else{ $('.font4_son').text("");}  ;
        });
            });
		 