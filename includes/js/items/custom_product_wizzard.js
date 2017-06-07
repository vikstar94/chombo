jQuery(document).ready(function() {
	alert('ready');
  "use strict";
  	
  var tablet_width = 751;

  var top_value;
  var bottom_value;
  
  setValue();
  resizePanel();
  setAffix();  

  jQuery(window).on("resize", function(){
		if (jQuery(window).width()>tablet_width){	  
			resizePanel();	 
			setValue();	
		} else{
			jQuery('.sidebar-affix .panel').removeAttr('style');
		}


  });		  

 

  function setAffix(){
	  jQuery('.sidebar-affix').before('<style>.affix{top:'+top_value+'px; position:fixed !important;} .affix-bottom{position:absolute; }</style>');
	  jQuery('.sidebar-affix .panel').affix({
		offset: {
		  top: top_value,
		  bottom: bottom_value
		}
	  })
  }
  
  function resizePanel(){
	  jQuery('.sidebar-affix .panel').css('width',(jQuery('.vd_content-section').innerWidth()-114)/3+'px');
	  if (jQuery(window).width()<=tablet_width)	{
			jQuery('.sidebar-affix .panel').removeAttr('style');		  
	  }
  }
  function setValue(){
	  top_value = jQuery('#header').outerHeight() + jQuery('.vd_content .vd_head-section').height() + jQuery('.vd_content .vd_title-section').height() - 39;
	  bottom_value = jQuery('#footer').outerHeight() + 61 ;		  
  } 
  function clearAffix(){
	  jQuery('.sidebar-affix .panel').removeClass('affix');
	  jQuery('.sidebar-affix .panel').removeClass('affix-top');
	  jQuery('.sidebar-affix .panel').removeClass('affix-bottom');
	  jQuery('.sidebar-affix .panel').removeAttr('style');	  	  	  
  }
  
  // Bootstrap Wizard
	jQuery('#wizard-1').bootstrapWizard({
		'tabClass': 'nav nav-pills nav-justified',
		'nextSelector': '.wizard .next',
		'previousSelector': '.wizard .prev',
		'onTabShow' :  function(tab, navigation, index){
			jQuery('#wizard-1 .finish').hide();
			jQuery('#wizard-1 .next').show();
			if (jQuery('#wizard-1 .nav li:last-child').hasClass('active')){
				jQuery('#wizard-1 .next').hide();
				jQuery('#wizard-1 .finish').show();
			}
			var $total = navigation.find('li').length;
			var $current = index+1;
			var $percent = ($current/$total) * 100;
			jQuery('#wizard-1').find('.progress-bar').css({width:$percent+'%'});			
		},
		'onTabClick': function(tab, navigation, index) {
			return false;		
		},
		'onNext': function(){
			scrollTo('#wizard-1',-100);
		},
		'onPrevious': function(){
			scrollTo('#wizard-1',-100);
		}		
	});
	jQuery('#wizard-1 .finish').click(function(){
	 jQuery(jQuery(this).parent().parent()).submit();
	});
  
});