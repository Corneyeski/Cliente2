/**
  * if($(asteroide).hittest($('#subject'))){      }
  * @param {type} param
  */
 
 /*Hittest para Jquery por Salvador Gonzalez (@sgb004)*/
jQuery.fn.extend({
	hittest: function(elmB){
		var elmA_Obj = jQuery(this);
		var elmA_pos = elmA_Obj.offset();
		var elmA_posTop = elmA_pos.top;	
		var elmA_hei = elmA_posTop + elmA_Obj.height();
		var elmA_posLeft = elmA_pos.left;
		var elmA_Wid = elmA_posLeft + elmA_Obj.width();

		var elmB_Obj = $(elmB);
		var elmB_pos = elmB_Obj.offset();
		var elmB_posTop = elmB_pos.top;
		var elmB_hei = elmB_posTop + elmB_Obj.height();
		var elmB_posLeft = elmB_pos.left;
		var elmB_Wid = elmB_posLeft + elmB_Obj.width();
$('result').add('elmB_Wid:'+elmB_Wid+'elmA_Wid'+elmA_Wid);
		var choque = false;
		var choTop = false;
		var choLeft = false;
		
		if((elmB_posTop >= elmA_posTop && elmB_posTop <= elmA_hei) || (elmB_hei >= elmA_posTop && elmB_hei <= elmA_hei)){
			choTop = true; 
		}else if((elmA_posTop >= elmB_posTop && elmA_posTop <= elmB_hei) || (elmA_hei >= elmB_posTop && elmA_hei <= elmB_hei)){
			choTop = true; 
		}
		if((elmB_posLeft >= elmA_posLeft && elmB_posLeft <= elmA_Wid) || (elmB_Wid >= elmA_posLeft && elmB_Wid <= elmA_Wid)){
			choLeft = true;
		}else if((elmA_posLeft >= elmB_posLeft && elmA_posLeft <= elmB_Wid) || (elmA_Wid >= elmB_posLeft && elmA_Wid <= elmB_Wid)){
			choLeft = true;
		}
		if(choTop == true && choLeft == true){choque = true;}
		return choque;
	}
});