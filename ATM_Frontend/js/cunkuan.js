// JavaScript Document
 $(document).ready(function(e) {
      $('#cunkuan_box_floor2_input').click(function(e) {
         $('.tishi').show();
    });
	$('.bt').click(function(e) {
         $('.tishi').hide();
		 var str = $('#cunkuan_box_floor2_input').val();
					var strs = str.substr(0,1);
					/*if(strs==0){
						alert("���ֲ�����0��ͷ��Ϊ��ֵ");
						$('#cunkuan_box_floor2_input').val("");
						}
					else if(str%100 != 0){
						alert("��������Ϊ100��������");
						$('#cunkuan_box_floor2_input').val("");
						}	
						else if(str > 10000){
						alert("�����ܴ���10000");
						$('#cunkuan_box_floor2_input').val("");
						}*/
						;
               
    });
});