require('./styles/styles.scss');
import 'bootstrap';


jQuery(window).scroll(function(){
  var scroll = jQuery(window).scrollTop();
  if (scroll > 100) {
    jQuery("#navbar").css("background-color" , "#152D4e");
  }
  else{
    jQuery("#navbar").css("background-color" , "rgba(0,0,0,0)");
  }
});
