<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
</div><!-- .row -->
</div><!-- .container -->
</div><!-- #content -->
<?php get_template_part( 'footer-widget' ); ?>
<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
	<div class="container">
		<div class='row'>
			<div class="col-md-6">
				<div class="site-info -left">
					<?php dynamic_sidebar('copyright-left')?>
				</div>
			</div>
			<div class="col-md-6 mt-1">
				<div class="site-info -left">
					<?php dynamic_sidebar('copyright-right')?>
				</div>
			</div>
		</div>
		<!-- close .site-info -->
	</div>
</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript" src="/wp-content/themes/sinc/inc/assets/js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
	jQuery(document).ready(function( $ ){
		
		var portfolioIsotope = jQuery('.sponsor-sec-section').isotope({
			itemSelector: '.sponsor-sec-row',
			filter: '.sponsor-item-all'
		});
		
// 		var getvisibleitem=$(".sponsor-category-list .all-cat.sponsor-category li:first-child").attr("data-filter");
// 		console.log("getvisibleitem"+getvisibleitem);
setTimeout(function(){
	jQuery('.sponsor-category-list .all-cat.sponsor-category .sponsor-category-item:eq(0)').click();
},200)
// 		$(".sponsor-category-list .all-cat.sponsor-category li:first-child").attr("data-filter").trigger("click");
		$(".sponsor-category-list .all-cat.sponsor-category li:first-child").trigger("click");
		
// 		$(".sponsor-item-all"+getvisibleitem).css("display","none");
		
		jQuery('.sponsor-category-list .all-cat li').on('click', function() {
			jQuery(".sponsor-category-list .all-cat li").removeClass('filter-active');
			jQuery(this).addClass('filter-active');

			portfolioIsotope.isotope({
				filter: jQuery(this).data('filter')

			});

		});	
	jQuery(document).on('scroll', function(){
			if (jQuery(document).scrollTop() > 85) {
				jQuery('#masthead').addClass('sticky');
			}
			else {
				jQuery('#masthead').removeClass('sticky');
			}
		});
		var lastScrollTop = 0;
	jQuery(window).scroll(function(event){
		var st = jQuery(this).scrollTop();
		if (st > lastScrollTop){
			//âíèç
			jQuery('#masthead').addClass('scrolling_down');
			jQuery('#masthead').removeClass('scrolling_up');
		} else {
			// ââåðõ 
			jQuery('#masthead').addClass('scrolling_up');
			jQuery('#masthead').removeClass('scrolling_down');
		}
		lastScrollTop = st;
	});		
	$('#testimonials').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
});
	
	jQuery(document).ready(function( $ ){
	
if($("body").hasClass("archive") && $("body").hasClass("category")){
$(".breadcrumbs h1").text($(".breadcrumbs .current-item").text());    
}
// 	$(".platinum-sponsor").attr('style','display: none !important');    
//     $(".gold-sponsor").attr('style','display: none !important'); 
//     $(".silver-sponsor").attr('style','display: none !important'); 
// 	$("#diamond-sponsor").attr('style','color: #27AAE1');
	
//     $("#diamond-sponsor").click(function(){
//     $(".diamond-sponsor").attr('style','display: block !important');
//     $("#diamond-sponsor").attr('style','color: #27AAE1');
//     $("#platinum-sponsor").attr('style','color:#000');    
//     $("#gold-sponsor").attr('style','color:#000'); 
//     $("#silver-sponsor").attr('style','color:#000'); 
		
//      $(".platinum-sponsor").attr('style','display: none !important');    
//     $(".gold-sponsor").attr('style','display: none !important'); 
//     $(".silver-sponsor").attr('style','display: none !important'); 
// })


// $("#platinum-sponsor").click(function(){
//     $(".diamond-sponsor").attr('style','display: none !important');
//      $(".platinum-sponsor").attr('style','display: block !important'); 
// 	$("#diamond-sponsor").attr('style','color: #000');
//     $("#platinum-sponsor").attr('style','color:#27AAE1');    
//     $("#gold-sponsor").attr('style','color:#000'); 
//     $("#silver-sponsor").attr('style','color:#000'); 
	
//     $(".gold-sponsor").attr('style','display: none !important'); 
//     $(".silver-sponsor").attr('style','display: none !important'); 


// $("#gold-sponsor").click(function(){
//     $(".diamond-sponsor").attr('style','display: none !important');
//      $(".platinum-sponsor").attr('style','display: none !important');    
//     $(".gold-sponsor").attr('style','display: block !important');
// 	$("#diamond-sponsor").attr('style','color: #000');
//     $("#platinum-sponsor").attr('style','color:#000');    
//     $("#gold-sponsor").attr('style','color:#27AAE1'); 
//     $("#silver-sponsor").attr('style','color:#000'); 
	
//     $(".silver-sponsor").attr('style','display: none !important'); 
// })


// })
// $("#silver-sponsor").click(function(){
//     $(".diamond-sponsor").attr('style','display: none !important');
//      $(".platinum-sponsor").attr('style','display: none !important');    
//     $(".gold-sponsor").attr('style','display: none !important'); 
//     $(".silver-sponsor").attr('style','display: block !important'); 
// 	$("#diamond-sponsor").attr('style','color: #000');
//     $("#platinum-sponsor").attr('style','color:#000');    
//     $("#gold-sponsor").attr('style','color:#000'); 
//     $("#silver-sponsor").attr('style','color:#27AAE1'); 
// })
});
// custom css js code shifted
	jQuery(document).ready(function($){
		if(!$(".single-event #form-agenda").is(":visible")){
    $(".single-event .collaborative-check").hide();
}
		
// 		if(!$(".single-event #form-agenda").is(":visible")){
//     $(".single-event .forum-check").hide();
// }
		
		$('<div class="bg-background"></div>').insertBefore('.home-podcast .vc_row-fluid');
		
		jQuery(".itemclick").click(function() {
		 var getid=jQuery(this).attr("data-ref")
			jQuery('html, body').animate({
				scrollTop: jQuery(getid).offset().top-100
			}, 100);
		});
		
		jQuery(".menu-item-has-children.dropdown ").hover(function () {
			jQuery(this).find(".dropdown-menu").toggleClass("show");
		});
		a = $('.jobtile input').val();
		$('label.job-title').text(a);
		// 		jQuery('.events .all-cat li:first-child').addClass('filter-active')
		// 		var portfolioIsotope = jQuery('.sponsor-sec').isotope({
		// 			itemSelector: '.forum-sponsors',
		// 			filter: '.portfolio-all'
		// 		});

		// 		jQuery('.events .all-cat li').on('click', function() {
		// 			jQuery(".events .all-cat li").removeClass('filter-active');
		// 			jQuery(this).addClass('filter-active');

		// 			portfolioIsotope.isotope({
		// 				filter: jQuery(this).data('filter')

		// 			});

		// 		});
		$('.forum-sponsors .sponsors-content a').on('click', function(){
			$('.sponsor-modal.modal .modal-body').html(' ');
			var a = $(this).closest('.forum-sponsors').html();
			$('.sponsor-modal.modal .modal-body').append(a);
		});
		// 		jQuery('.events-carousel').owlCarousel({
		// 			items :3,
		// 			nav:true,
		// 			margin:30,
		// 			loop:true,
		// 			dots:true,
		// 			stagePadding: 150,

		// 		});
		jQuery('.partners-carousel').owlCarousel({
			items :5,
			nav:true,
			margin:30,
			loop:true,
			dots:true,

		});
		jQuery('.single-event-carousel').owlCarousel({
			items :4,
			nav:true,
			margin:30,
			loop:false,
			dots:true,
			responsive  :{ 
				0:{
					items:2,
					margin:10,
				},
				776:{
					items:4
				}

			}


		});
// 		jQuery('.sponsor-sec').owlCarousel({
// 			items :3,
// 			margin:30,
// 			loop:true,
// 			dots:true,
// 			responsive  :{ 
// 				0:{
// 					items:2,
// 					autoWidth:true,
// 					margin:10,
// 				},
// 				776:{
// 					items:3
// 				},  
				

// 			},

// 		});
// 		
		jQuery('.diamond-sponsor').owlCarousel({
			items :3,
			margin:30,
			loop:true,
			dots:true,
			responsive  :{ 
				0:{
					items:2,
					autoWidth:true,
					margin:10,
				},
				776:{
					items:3
				},  
				

			},

		});
		
		jQuery('.platinum-sponsor').owlCarousel({
			items :3,
			margin:30,
			loop:true,
			dots:true,
			responsive  :{ 
				0:{
					items:2,
					autoWidth:true,
					margin:10,
				},
				776:{
					items:3
				},  
				

			},

		});
		
		jQuery('.platinum-sponsor').owlCarousel({
			items :3,
			margin:30,
			loop:true,
			dots:true,
			responsive  :{ 
				0:{
					items:2,
					autoWidth:true,
					margin:10,
				},
				776:{
					items:3
				},  
				

			},

		});
		jQuery('.silver-sponsor').owlCarousel({
			items :3,
			margin:30,
			loop:true,
			dots:true,
			responsive  :{ 
				0:{
					items:2,
					autoWidth:true,
					margin:10,
				},
				776:{
					items:3
				},  
				

			},

		});
				
		jQuery('.solutions-carousel').owlCarousel({
			items :5,
			nav:true,
			margin:30,
			loop:true,
			dots:false,

		});
		jQuery('.partner-sec-home').owlCarousel({
			items :1,
			nav:true,
			margin:30,
			loop:true,
			dots:false,
			responsive: [
				{
					breakpoint: 768,
					settings: {

					}
				}
			]

		});
// 		jQuery('.strategic-partner-sec').owlCarousel({
// 			items :1,
// 			nav:true,
// 			margin:30,
// 			loop:true,
// 			dots:false,
// 			responsive: [
// 				{
// 					breakpoint: 768,
// 					settings: {

// 					}
// 				}
// 			]

// 		});
		jQuery('#related-partner').owlCarousel({
			items :3,
			nav:true,
			margin:30,
			loop:true,
			dots:false,
			responsive:{
				0:{
					items:2,
					autoWidth:true,
					margin:10,
				},
				776:{
					items:2,						   
				},
				991:{
					items:3,						   
				},
			},
		});
		
		
		jQuery('#wis-slides').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			arrows: true,
			infinite:false,
			responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
        
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
		});
		
		if (window.matchMedia('(max-width: 767px)').matches) {
		$('.brain-member-sec .member-sec:nth-child(2)').slick({
			slidesToShow: 2,
			slidesToScroll: 1,
			rows: 2,
			arrows: true,
		});
// 			$('.events-carousel > div').slick({
// 			slidesToShow: 1,
// 			slidesToScroll: 1,
// 			rows: 4,
// 				 variableWidth: true,
// 			arrows: true,
// 		});
		}
		
		if (window.matchMedia('(min-width: 768px)').matches) {
			jQuery('.events-carousel').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: false,
					 variableWidth: true,
				arrows: true,
			});
		jQuery(".events-carousel").append("<div class='arrows'><div class='ab'></div></div>");
			jQuery(".events-carousel button.slick-arrow").insertAfter(".events-carousel .arrows .ab");
			var swiper = new Swiper(".mySwiper", {
				// 			slidesPerView: 3,
				centeredSlides: false,
				slidesPerView: "auto",
				spaceBetween: 30,
				// 			grabCursor: true,
				// 			  loop: true,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
		
			});
		}
		if (window.matchMedia('(max-width: 767px)').matches) {
// 				var swiper = new Swiper(".mySwiper", {
// 				centeredSlides: true,
// 				slidesPerView: 1,
// 				spaceBetween: 10,
// 				navigation: {
// 					nextEl: ".swiper-button-next",
// 					prevEl: ".swiper-button-prev",
// 				},
// 			});
		
			jQuery('.events-carousel').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
// 					 variableWidth: true,
				arrows: true,
			});
			jQuery(".events-carousel").removeClass("swiper mySwiper");
			jQuery(".events-carousel .swiper-wrapper").removeClass("swiper-wrapper");
			jQuery(".events-carousel .event-content").removeClass("swiper-slide");
		}
// 		jQuery('.insta-sec .thumbnails').slick({
// 				slidesToShow: 5,
// 				slidesToScroll: 1,
// 				arrows: true,
// 			});
		jQuery(".blog #content.site-content .container").append('<div class="nav-pagination"><span class="ng"></span></div>');
		jQuery('.blog .navigation').insertAfter(".nav-pagination .ng");
		$('.ult_tab_li').on('click', function(){
			console.log('Hello');
			var $owlCarousel = ('.strategic-partner-sec').owlCarousel({
				items :1,
				nav:true,
				margin:30,
				loop:true,
				dots:true,

			});
			$owlCarousel.trigger('refresh.owl.carousel');
		});
	});
	if (window.matchMedia('(max-width: 1024px)').matches) {
		jQuery('<div class="mob-top-head"></div>').insertBefore('.mobmenu-panel.mobmenu-right-panel .mobmenu-right-bt');
		a = jQuery('.mob-menu-logo-holder').html();
		jQuery('.mobmenu-panel.mobmenu-right-panel .mob-top-head').append(a);
		b = jQuery('#footer-widget #text-6').html();
		jQuery('.mobmenu-panel .menu-mobile-menu-container').append(b);
		jQuery('.mobmenu-panel .menu-mobile-menu-container').append('<div class="mob-bottom-foot"></div>');
		c = jQuery('.site-info.-left').html();
		jQuery('.mobmenu-panel .mob-bottom-foot').append(c);
		d = jQuery('#colophon .col-md-6.mt-1 .site-info.-left').html();
		jQuery('.mobmenu-panel .menu-mobile-menu-container').append(d);
// 		//jQuery("div#main-nav.navbar-collapse #menu-primary-menu .nav-item.menu-item-has-children .dropdown-toggle.nav-link").attr('href', 'javascript:;');
// 		jQuery("div#main-nav.navbar-collapse #menu-main-menu .nav-item.menu-item-has-children .dropdown-toggle.nav-link").on('click', function(){
// 			jQuery(this).toggleClass("active-drop");
// 		});
// // 		jQuery( "#text-6" ).insertAfter( jQuery( "#menu-primary-menu" ) );
// // 		jQuery( "#colophon.site-footer" ).insertAfter( jQuery( "#text-6" ) );
	}

	jQuery('.postid-592.single-event .company-logo img').attr('src', '/wp-content/uploads/2022/06/Equinix_logo.svg-265x128-1.png');
	jQuery('.postid-533 .company-logo img').attr('src', '/wp-content/uploads/2022/06/Image-72.png');
	
	if (window.matchMedia('(max-width: 767px)').matches) {
			jQuery( ".brain-member-sec .member-sec:nth-child(3) .vc_col-sm-3:nth-child(1),.brain-member-sec .member-sec:nth-child(3) .vc_col-sm-3:nth-child(2),.brain-member-sec .member-sec:nth-child(3) .vc_col-sm-3:nth-child(3),.brain-member-sec .member-sec:nth-child(3) .vc_col-sm-3:nth-child(4),.brain-member-sec .member-sec:nth-child(4) .vc_col-sm-3:nth-child(1),.brain-member-sec .member-sec:nth-child(4) .vc_col-sm-3:nth-child(2),.brain-member-sec .member-sec:nth-child(4) .vc_col-sm-3:nth-child(3),.brain-member-sec .member-sec:nth-child(4) .vc_col-sm-3:nth-child(4),.single-event .brain-member-sec .member-sec:nth-child(5) .vc_col-sm-3:nth-child(1),.brain-member-sec .member-sec:nth-child(5) .vc_col-sm-3:nth-child(2),.brain-member-sec .member-sec:nth-child(5) .vc_col-sm-3:nth-child(3),.brain-member-sec .member-sec:nth-child(5) .vc_col-sm-3:nth-child(4)" ).insertAfter( jQuery( ".brain-member-sec .member-sec:nth-child(2) .vc_col-sm-3:nth-child(4)" ) );
	}
	jQuery(".mob-expand-submenu").on("click",function(e){
		e.stopPropagation();
		e.stopimmediatepropagation();
	});
	jQuery(window).on("load",function(){
// 		jQuery('.sponsor-category-list .all-cat.sponsor-category .sponsor-category-item:eq(1)').click();
	});
</script>


</body>
</html>