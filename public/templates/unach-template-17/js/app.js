//$.noConflict();
//
jQuery(document).ready(function () {
   jQuery('.js-drilldown-back >a').text("REGRESAR");
    jQuery(document).foundation();
    
    jQuery('.separador').css("height",jQuery('#contenido').height() -110 + 'px');
jQuery(".icon-search").click(function (event) {
            event.preventDefault();
            jQuery(".buscador").slideToggle("slow", function () {
              
            });
        });


        jQuery(".icon-search").keypress(function (event) {
            if (e.which == 13) {
                event.preventDefault();
                jQuery(".buscador").slideToggle("slow", function () {
                    
                });
            }
        });
        
        
        

jQuery(".icon-mail").click(function (event) {
            event.preventDefault();
            //jQuery(".login-correo").slideToggle("slow", function () {
           //    
           // });
           window.location.href = "https://mail.google.com/a/unach.mx";
        });
        
jQuery(".icon-unet").click(function (event) {
            event.preventDefault();
            jQuery(".login-unet").slideToggle("slow", function () {
               
            });
        });
        
jQuery(".icon-share").click(function (event) {
            event.preventDefault();
            jQuery(".itemSocialSharing").slideToggle("slow", function () {
               
            });
        });
        jQuery(".icon-mail").keypress(function (event) {
            if (e.which == 13) {
                event.preventDefault();
                jQuery(".login-correo").fadeToggle("slow", function () {
                    // Animation complete.
                });
            }
        });
        
        jQuery(".show-mapa").click(function (event) {
            event.preventDefault();
            jQuery(".mapa").slideToggle("slow", function () {
                // Animation complete.
            });
            if(jQuery('iframe.mp-goo').length==0)
            {
                jQuery('<iframe class="mp-goo" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1910.2252919200375!2d-93.15474525326096!3d16.754243629849935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTbCsDQ1JzEzLjgiTiA5M8KwMDknMTMuOCJX!5e0!3m2!1ses-419!2smx!4v1498593792199" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>').appendTo('.mapa');
            }
            
        });
        	jQuery('#fontDecrease').click(function(event){
		event.preventDefault();
		jQuery('.txt_content').removeClass('largerFontSize');
		jQuery('.txt_content').addClass('smallerFontSize');
	});
	jQuery('#fontIncrease').click(function(event){
		event.preventDefault();
		jQuery('.txt_content').removeClass('smallerFontSize');
		jQuery('.txt_content').addClass('largerFontSize');
	});
        
        
        
         jQuery(".js-drilldown-back a").text("Regresar");
});

