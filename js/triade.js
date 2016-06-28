$(document).ready(function(){
	var cards 			= new Array("t1.png","t2.png","t3.png","t4.png","t5.png","t6.png","t7.png","t8.png","t9.png","t10.png","t11.png","t12.png"
								,"t13.png","t14.png","t15.png","t16.png","t17.png","t18.png","t19.png","t20.png","t21.png","t22.png","t23.png"
								,"t24.png","t25.png","t26.png","t27.png","t28.png","t29.png","t30.png","t31.png","t32.png","t33.png","t34.png"
								,"t35.png","t36.png");
	var shuffled 		= shuffle(cards);
	var alreadyPicked 	= 0 ;
	var w = $(window).width();

	if(w > 480){
		$('.paquet img')
	.mouseenter(function() {
		// on descend la carte
		if(!$(this).data('hasBeenClicked')){
			$(this).animate({top: "+=20px"}, 150);
		}
	}).mouseleave(function() {
		// On remonte la carte à sa position de départ
		if(!$(this).data('hasBeenClicked')){
			$(this).animate({top: "="+$(this).data('pos')}, 150);
		}
	});
	}else{	
		$('.paquet img')
	.mouseenter(function() {
		// on descend la carte
		if(!$(this).data('hasBeenClicked')){
			$(this).animate({top: "+=5px"}, 150);
		}
	}).mouseleave(function() {
		// On remonte la carte à sa position de départ
		if(!$(this).data('hasBeenClicked')){
			$(this).animate({top: "="+$(this).data('pos')}, 150);
		}
	});
	}

	$('.paquet img').on('click',function(){
		var w = $(window).width();

		if(!$(this).data('hasBeenClicked') && alreadyPicked < 5){
			
			$(this).animate({width:"0px"},150);
			var picked = shuffled.shift();
			
			$('form').append('<input type="hidden" name="cards[]" value="'+picked+'" />');
			$(this).attr('src','http://www.myastro.fr/tarot/cartes/triade/'+picked);
			$(this).animate({width:"97px"},800);
				var Itemposition 	= $(this).position();
				var Relativeposition = $('.relative').position();
				var Finalposition 	= $('.donneHandler').children().eq(alreadyPicked).offset();
				$(this).css({'webkit-transform':'rotate(0deg)','-ms-transform':'rotate(0deg)','transform':'rotate(0deg)'});
			if(w >= 480){
				if(w > 979){
					$(this).animate({top:'201',left:Finalposition.left - Relativeposition.left - 103},800);
				}else if(w >= 800 ){
					$(this).animate({top:'201',left:Finalposition.left - Relativeposition.left - 104},800);	
				}else{
					$(this).animate({top:'201',left:Finalposition.left - Relativeposition.left-17},800);
				}
				
			}else{
				$(this).animate({width:"89px",height:"170",top:'0',left:Itemposition.left},800);
			}

			$(this).data('hasBeenClicked','true');
			alreadyPicked += 1;
		}

		if(alreadyPicked == 5){
			if (w > 480) {
				$('form.hidden').removeClass('hidden');
				$('#img-first').addClass('hidden');
				$('input').removeAttr('disabled');

				$('html,body').delay(2000).animate({scrollTop: $('#secondpart').offset().top}, 1000);
			} else{
				$('form.hidden').removeClass('hidden');
				$('#img-first').addClass('hidden');
				$('input').removeAttr('disabled');
			}
			
		}
	});
	$('input').click(function(){
		if(alreadyPicked < 5){
			alert('Veuillez d\'abord tirer vos cartes');
		}
	});
	$('select').click(function(){
		if(alreadyPicked < 5){
			alert('Veuillez d\'abord tirer vos cartes');
		}
	});

	$(function(){
	  $('.control-date').mask('99/99/9999', {
	    completed:function()
	    {
	      var $this = $(this);
	      var reg = /^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/g;
	      if(!reg.test($this.val()))
	      {
	        $this.tooltip({ trigger: 'focus' }).attr('data-original-title', 'Merci de renseigner une date au format JJ/MM/AAAA').focus();
			
	        $this.parent().addClass('has-error');
	      }
	    }
	  });

  
});
});

// - Tools
function shuffle(o){ //v1.0
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
};