jQuery(document).ready(function(e) {
       
	
		
        /* ------------------------------------------------------------------------ */
        /* ANIMATIONS *///
        /* ------------------------------------------------------------------------ */	
         
        if (document.documentElement.clientWidth > 768) {
          
			var fadeDelayAttr;
			var fadeDelay;
			jQuery(".animate-on-load").each(function(){
				if (jQuery(this).data("delay")) {
					
					fadeDelayAttr = jQuery(this).data("delay");
					fadeDelay = fadeDelayAttr;			
				} else {
					fadeDelay = 0;
				}
							
				jQuery(this).delay(fadeDelay).queue(function(){	
					jQuery(this).addClass('animated').clearQueue();
				});			
			});	
			
			
			jQuery('.animate-it').appear();
			jQuery(document.body).on('appear', '.animate-it', function(e, jQueryaffected) {
				var fadeDelayAttr;
				var fadeDelay;
				jQuery(this).each(function(){
					if (jQuery(this).data("delay")) {
						fadeDelayAttr = jQuery(this).data("delay")
						fadeDelay = fadeDelayAttr;				
					} else {
						fadeDelay = 0;
					}			
					jQuery(this).delay(fadeDelay).queue(function(){
						jQuery(this).addClass('animated').clearQueue();
					});			
				})			
			});
            
        }

		
					
		jQuery(window).scroll(function() {    
			var scroll = jQuery(window).scrollTop();
			if (scroll >= 350) {				
				jQuery('body').addClass('fixed-header');
				if (scroll >= 400) {				
					jQuery('body').addClass('active');
				}
				else{
					jQuery('body').removeClass('active');
				}
			}else{
				jQuery('body').removeClass('fixed-header');
			} if (scroll >= 600) {				
			 		jQuery('body').addClass('show-apply-btn');
			 	}
			 	else{
			 		jQuery('body').removeClass('show-apply-btn');
			 	}
		});		


		// var distance = jQuery('.secondary-nav').offset().top,
	 //    $window = jQuery(window);

		// $window.scroll(function() {
		//     if ( $window.scrollTop() >= distance ) {
		//         jQuery('body').addClass('show-apply-btn');
		//     }
		//     else{
		// 	 		jQuery('body').removeClass('show-apply-btn');
		// 	 	}
		// });
		
		

		// === search
		jQuery( ".search-btn" ).on( "click", function() {
			jQuery('.search-container').fadeIn();
		});
		jQuery( ".search-close-btn" ).on( "click", function() {
			jQuery('.search-container').fadeOut();
		});

		// === radio btn
		jQuery( ".styled-radio" ).on( "click", function() {
			jQuery(this).parent().find( ".styled-radio" ).removeClass("active");
			jQuery(this).toggleClass("active");
		});


		// === parallax
		jQuery('.parallax-window').parallax();


		// === nav
		jQuery( ".mobile-nav-toggle" ).on( "click", function() {
			jQuery(".main-nav").slideToggle();
		});


		// === footer mobile nav
		jQuery( ".site-footer .mobile-toggle" ).on( "click", function() {
			jQuery(this).parent().find("ul").slideToggle();
			jQuery(this).toggleClass("active");
		});



		// === key sector
		jQuery('.key-sector-carousel').owlCarousel({
			margin:0,
			loop:false,
			dots:true,
			responsive:{
				0:{
					items:1
				},
				601:{
					items:2
				},
				1100:{
					items:5
				}
			}
		});

		
		// === our-stories-carousel
		jQuery('.our-stories-carousel').owlCarousel({
			margin:29,
			loop:false,
			dots:true,
			nav:true,
			responsive:{
				0:{
					items:1,
					margin:0
				},
				481:{
					items:2
				},
				601:{
					items:3
				},
				900:{
					items:3
				},
				1100:{
					items:4
				}
			}
		});


		// === sectors-carousel
		jQuery('.sectors-carousel').owlCarousel({
			margin:8,
			loop:false,
			dots:false,
			nav:true,
			responsive:{
				0:{
					items:2
				},
				601:{
					items:3
				},
				900:{
					items:4
				},
				1100:{
					items:5
				}
			}
		});


		// === featured projects
		jQuery('.featured-projects-carousel').owlCarousel({
			margin:8,
			loop:false,
			dots:true,
			responsive:{
				0:{
					items:1
				},
				601:{
					items:2
				},
				1100:{
					items:3
				}
			}
		});
		/*jQuery( ".footer h3" ).on( "click", function() {
			jQuery(this).parent().find("ul").slideToggle();
			jQuery(this).toggleClass("active");
		});
		
		
		jQuery('.product-selector-tabs').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
			closed:'accordion'
            
        });
		
		// Slideshow 3
		jQuery("#product-detail-slider").responsiveSlides({
			manualControls: '#product-detail-slider-pager',
			maxwidth: 1000
		});
		
		
		
		jQuery('.scroll').each( function() {
			var $this = jQuery(this), 
				target = this.hash;
				jQuery(this).click(function (e) { 
					e.preventDefault();
					if( $this.length > 0 ) {
						if($this.attr('href') == '#' ) {
							// Do nothing   
						} else {
						   jQuery('html, body').animate({ 
								scrollTop: (jQuery(target).offset().top) - -1
							}, 1000);
						}  
					}
				});
			});
		
		
		
		
		jQuery('.products-carousel').owlCarousel({
			margin:44,
			loop:false,
			dots:true,
			responsive:{
				0:{
					items:1
				},
				601:{
					items:2
				},
				1100:{
					items:3
				}
			}
		});
		
		
		jQuery(".testimonials-carousel").responsiveSlides({
			maxwidth: 1200,
			speed: 800,
			pager: true
		  });
		
		jQuery(".social li:eq(1)").attr('data-delay', '300');
		
		jQuery(".fancybox").fancybox({
			maxWidth	: '90%',
			maxHeight	: '90%',
			fitToView	: true,
			width		: '70%',
			height		: '70%',
			autoSize	: true,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
		});
		
		jQuery('.fancybox-media').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			width		: '80%',
			height		: '80%',
			type 		: 'iframe',
			helpers : {
				media : {}
			}
		});
		
		*/
    

 // tabbed content
	jQuery(".tab_content").hide();

    jQuery(".firs-active .tab_content:first").show();
	//jQuery(".tab_container.two .tab_content:first").show();
    //jQuery("#tab6").show();
  	/* if in tab mode */
    jQuery("#tabs1 li").click(function() {
  	
      jQuery("#tab_container1 .tab_content").hide();
      var activeTab = jQuery(this).attr("rel"); 
      jQuery("#"+activeTab).fadeIn();		
		
      jQuery("#tabs1 li").removeClass("active");
      jQuery(this).addClass("active");

	  jQuery(".tab_drawer_heading").removeClass("d_active");
	  jQuery(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });


     jQuery("#tabs2 li").click(function() {
  	
      //jQuery(".tab_content").hide();
      jQuery("#tab_container2 .tab_content").hide();
      var activeTab = jQuery(this).attr("rel"); 
      jQuery("#"+activeTab).fadeIn();		
		
      jQuery("#tabs2 li").removeClass("active");
      jQuery(this).addClass("active");

	  jQuery(".tab_drawer_heading").removeClass("d_active");
	  jQuery(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });


     jQuery("#tabs3 li").click(function() {
  	
      //jQuery(".tab_content").hide();
      jQuery("#tab_container3 .tab_content").hide();
      var activeTab = jQuery(this).attr("rel"); 
      jQuery("#"+activeTab).fadeIn();		
		
      jQuery("#tabs3 li").removeClass("active");
      jQuery(this).addClass("active");

	  jQuery(".tab_drawer_heading").removeClass("d_active");
	  jQuery(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });



	
	/* if in drawer mode */
	jQuery(".tab_drawer_heading").click(function() {
      
      jQuery(".tab_content").hide();
      var d_activeTab = jQuery(this).attr("rel"); 
      jQuery("#"+d_activeTab).fadeIn();
	  
	  jQuery(".tab_drawer_heading").removeClass("d_active");
      jQuery(this).addClass("d_active");
	  
	  jQuery("ul.tabs li").removeClass("active");
	  jQuery("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	jQuery('ul.tabs li').last().addClass("tab_last");
    
	



    });
	
	
	
	
	