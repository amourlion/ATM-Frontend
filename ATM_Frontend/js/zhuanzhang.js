// JavaScript Document
$(document).ready(function(e) {

	$('#inputs').click(function(e) {
        $('.span1').text("�������˺�");
    });
    $('#inputs').blur(function(e) {
		var str = $(this).val();
		var length = str.length;
		if(str == 0){
			 $('.span1').text("�˺Ų���Ϊ��ֵ"); $(this).val("");
			}
		else if( length < 5 ){
			$('.span1').text("��������Ч�˺�"); $(this).val("");
			}	
			else{$('.span1').text("");}
			;
    });
	
	
	$('#inputsss').click(function(e) {
        $('.span3').text("������ת�˽��");
    });
    $('#inputsss').blur(function(e) {
		var str = $(this).val();
		var strs = str.substr(0,1);
		var length = str.length;
		/*if(str == 0){
			 $('.span3').text("����Ϊ��ֵ");
			 $(this).val("");
			}
	   
		else if( strs == 0 ){
			$('.span3').text("ת�˽�����0��ͷ");
			 $(this).val("");
			}
		
		else if( str >20000){
			$('.span3').text("ת�˽��ܳ���20000"); $(this).val("");
			}	
		else if((str % 100) != 0){$('.span3').text("�����Ϊһ�ٵ�������"); $(this).val("");}		
			else{$('.span3').text("");}
			;*/
    });
});