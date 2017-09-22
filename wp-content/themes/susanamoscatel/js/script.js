jQuery(document).ready(function(){

	var scroll_pos = 0;
        jQuery(document).scroll(function() { 
            scroll_pos = jQuery(this).scrollTop();
            if(scroll_pos > 210) {
                jQuery("header").css('background-color', 'rgb(255, 255, 255)');
                jQuery("header").css('border-bottom', '2px solid rgb(198, 198, 198)');
                jQuery(".nombreHeader").removeClass('desaparece');
                jQuery(".nombreHeader").addClass('aparece');
            } else {
                jQuery("header").css('background-color', 'fadeIn');
                jQuery("header").css('border-bottom', 'fadeIn');
                jQuery(".nombreHeader").removeClass('aparece');
                jQuery(".nombreHeader").addClass('desaparece');
            }
        });

        jQuery(".buscadorMobile").click (function() {
		    jQuery(".cajaBuscador").fadeIn("slow");
		});

		jQuery(".close").click (function() {
		    jQuery(".cajaBuscador").fadeOut("slow");
            jQuery(".cajaMenu").fadeOut("slow");
            jQuery(".foto1, .foto2, .foto3, .foto4").fadeOut("slow");
		});

        jQuery("#menu").click (function() {
            jQuery(".cajaMenu").fadeIn("slow");
        });

        jQuery("#ver1").click (function() {
            jQuery(".foto1").fadeIn("slow");
        });

        jQuery("#ver2").click (function() {
            jQuery(".foto2").fadeIn("slow");
        });

        jQuery("#ver3").click (function() {
            jQuery(".foto3").fadeIn("slow");
        });

        jQuery("#ver4").click (function() {
            jQuery(".foto4").fadeIn("slow");
        });

        jQuery("#sig1").click (function() {
            jQuery(".foto1").fadeOut("slow");
            jQuery(".foto3").fadeOut("slow");
            jQuery(".foto4").fadeOut("slow");
            jQuery(".foto2").fadeIn("slow");
        });

        jQuery("#sig2").click (function() {
            jQuery(".foto1").fadeOut("slow");
            jQuery(".foto2").fadeOut("slow");
            jQuery(".foto4").fadeOut("slow");
            jQuery(".foto3").fadeIn("slow");
        });

        jQuery("#sig3").click (function() {
            jQuery(".foto1").fadeOut("slow");
            jQuery(".foto2").fadeOut("slow");
            jQuery(".foto3").fadeOut("slow");
            jQuery(".foto4").fadeIn("slow");
        });

    


});
