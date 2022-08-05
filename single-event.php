<?php
/**
	 * The template for displaying all single posts
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
	 *
	 * @package WP_Bootstrap_Starter
	 */

get_header(); ?>

</div>
</div>
</div>
<section class="head-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php if(get_field('layout') == "Forum" || get_field('layout') == "Virtual Executive Briefing" || get_field('layout') == "Virtual Roundtable") { 	
				if(get_field('address')){ ?>
					<h5><?php the_field('address'); ?></h5>
				<?php }
				}
				elseif(get_field('layout') == "Dinner" ) {
					if(get_field('dinner_for')){ ?>
					<h5><?php the_field('dinner_for'); ?></h5>
				<?php }
				 }
				elseif(get_field('layout') == "Learn & Go" ) { ?>
					<h5><?php the_field('layout');?></h5>
				<?php }
				elseif(get_field('layout') == "Virtual Forum" ) { ?>
					<h5><?php the_field('layout');?></h5>
				<?php }
				elseif(get_field('layout') == "Collaborative" ) { ?>
					<h5><?php the_field('event_title');?></h5>
				<?php }?>
				<h3><?php the_field('event_title'); ?></h3>
				<?php
				if(get_field('layout') == "Virtual Roundtable" ) { ?>
					<div class="row">
						<?php if( get_field('address')){ ?>
					<div class="col-lg-4 col-6">
						<span>Venue</span>
						<p><?php if(get_field('address_link')) {?> <a href="<?php the_field('address_link')?>" target="_blank"><?php the_field('address'); ?></a> <?php } else { the_field('address'); } ?></p>
					</div>
					<?php } 
						if(get_field('event_date') && get_field('display_date')){ ?>
						<div class="col-lg-4 col-6">
							<span>Date</span>
							<p><?php the_field('display_date')?></p>
						</div>	
						<?php } 
						 if(get_field('time')){ ?>
						<div class="col-lg-4 col-6">
							<span>Time</span>
							<p ><?php the_field('time')?> </p>
						</div>	
						<?php }
							?>
					</div>
					<div class="row">
						<?
						if( have_rows('forum_sponsors') ){?>
					<div class="col-md-3">
						<a href="javascript:;" data-ref="#form-sponsor" class="itemclick">Sponsor</a>
					</div>
					<?	}
					?>
					<?if( have_rows('speakers') ){?>
						<div class="col-md-3">
						<a href="javascript:;" data-ref="#form-speaker" class="itemclick">Speakers</a>
					</div>
				<?	}
					?>
					</div>
				<?php }
				if(get_field('layout') == "Virtual Forum" ) { ?>
						<div class="row">
							<?php if( get_field('address')){ ?>
							<div class="col-md-3">
								<span>Venue</span>
								<p><?php if(get_field('address_link')) {?> <a href="<?php the_field('address_link')?>" target="_blank"><?php the_field('address'); ?></a> <?php } else { the_field('address'); } ?></p>
							</div>
							<?php }
							if( get_field('event_date') && get_field('display_date')){?>
							<div class="col-md-3">
								<span>Date</span>
								<p ><?php the_field('display_date')?></p>
							</div>	
							<?php }
							if( get_field('time')){ ?>
							<div class="col-md-3">
								<span>Time</span>
								<p ><?php the_field('time')?> </p>
							</div>
							<?php } ?>
						</div>
					<div class="row">
					<div class="col-md-3 forum-check">
						<a href="javascript:;" data-ref="#form-agenda" class="itemclick">Forum Agenda</a>
					</div>	
					<?php
					if( have_rows('speakers') ){?>
						<div class="col-md-3">
							<a href="javascript:;" data-ref="#form-speaker" class="itemclick">Forum Speakers</a>
						</div>
					<?	}
					if( have_rows('forum_sponsors') ){?>
						<div class="col-md-3">
							<a href="javascript:;" data-ref="#form-sponsor" class="itemclick">Forum Sponsors</a>
						</div>
					<?	} ?>
						<div class="register_button">
							<?php 
								$link = get_field('register_forum_button');
								if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['_blank'] ? $link['target'] : '_blank';?>
								<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
								<?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
						</div>
					</div>
				<?php }
				if(get_field('layout') == "Collaborative" ) { ?>
				<div class="row">
					<?php if( get_field('address')){ ?>
					<div class="col-md-3">
						<span>Venue</span>
						<p><?php if(get_field('address_link')) {?> <a href="<?php the_field('address_link')?>" target="_blank">
							<?php the_field('address'); ?></a> <?php } else { the_field('address'); } ?></p>
					</div>
					<?php }
					if( get_field('event_date') && get_field('display_date')){?>
					<div class="col-md-4">
						<span>Date</span>
						<p ><?php the_field('display_date')?></p>
					</div>	
					<?php }
					if( get_field('time')){ ?>
					<div class="col-md-3">
						<span>Time</span>
						<p ><?php the_field('time')?> </p>
					</div>
					<?php }?>
				</div>
				<div class="row">
					<div class="col-md-3 collaborative-check">
						<a href="javascript:;" data-ref="#form-agenda" class="itemclick">Collaborative Agenda</a>
					</div>
					<?if( have_rows('forum_sponsors') ){?>
					<div class="col-md-3">
						<a href="javascript:;" data-ref="#form-sponsor" class="itemclick">Collaborative Sponsor</a>
					</div>
					<?	}
					?>
					<?if( have_rows('speakers') ){?>
						<div class="col-md-3">
						<a href="javascript:;" data-ref="#form-speaker" class="itemclick">Collaborative Speakers</a>
					</div>
				<?	}
					?>	
				</div>
				<?php } 
				if(get_field('layout') == "Forum" ) { ?>
				<div class="row forum">
					<?php if( get_field('address')) { ?>
						<div class="col-md-4 col-sm-4 ">
							<span>Venue</span>
							<p><?php if(get_field('address_link')) {?> <a href="<?php the_field('address_link')?>" target="_blank">
								<?php the_field('address'); ?></a> <?php } else { the_field('address'); } ?></p>
						</div>	
					<?php }
					if( get_field('event_date') && get_field('display_date')){?>
						<div class="col-md-4">
							<span>Date</span>
							<p><?php the_field('display_date')?></p>
						</div>	
					<?php }
					if( get_field('time')){
					?>
						<div class="col-md-4">
							<span>Time</span>
							<p style="text-transform:uppercase;"> <?php the_field('time')?></p>
						</div>
					<?php } ?>
				</div>
				<div class="row forum">		
					<div class="col-md-3 forum-check">
						<a href="javascript:;" data-ref="#form-agenda" class="itemclick">Forum Agenda</a>
					</div>	
					<?php
					if( have_rows('speakers') ){?>
						<div class="col-md-3">
							<a href="javascript:;" data-ref="#form-speaker" class="itemclick">Forum Speakers</a>
						</div>
					<?	}
					if( have_rows('forum_sponsors') ){?>
						<div class="col-md-3">
							<a href="javascript:;" data-ref="#form-sponsor" class="itemclick">Forum Sponsors</a>
						</div>
					<?	} ?>
					<div class="col-md-3">
						<a href="javascript:;" data-ref="#form-advisory-counsil" class="itemclick">Advisory Council</a>
					</div>
				</div>
				<?php } 
				if(get_field('layout') == "Dinner" ) { ?>
				<div class="row">
					<?php if(get_field('address')) {?>
						<div class="col-md-3">
							<span>Venue</span>
							<p><?php the_field('address'); ?></p>
						</div>
					<?php } 
					if(get_field('event_date') && get_field('display_date')) {
					?>
						<div class="col-md-3">
							<span>Date</span>
							<p><?php the_field('display_date')?></p>
						</div>
					<?php }
					if( get_field('time')){ ?>
					<div class="col-md-3">
						<span>Time</span>
						<p ><?php the_field('time')?> </p>
					</div>
					<?php } ?>
				</div>
				<div class="row">	
					<?if( have_rows('forum_sponsors') ){?>
					<div class="col-md-3">
						<a href="javascript:;" data-ref="#form-sponsor" class="itemclick">Dinner Sponsor</a>
					</div>
					<?	}
					?>
					<?if( have_rows('speakers') ){?>
						<div class="col-md-3">
						<a href="javascript:;" data-ref="#form-speaker" class="itemclick">Dinner Speakers</a>
					</div>
				<?	}
					?>
				</div>
				<?php }
				if(get_field('layout') == "Virtual Executive Briefing" ) { ?>
				<div class="row">	
					<?php if(get_field('address')) {?>
						<div class="col-md-3">
							<span>Venue</span>
							<p><?php if(get_field('address_link')) {?> <a href="<?php the_field('address_link')?>" target="_blank"><?php the_field('address'); ?></a> <?php } else { the_field('address'); } ?></p>
						</div>
					<?php } 
					if(get_field('event_date') && get_field('display_date')) {
					?>
						<div class="col-md-3">
							<span>Date</span>
							<p><?php the_field('display_date')?></p>
						</div>
					<?php }
					if( get_field('time')){ ?>
					<div class="col-md-3">
						<span>Time</span>
						<p ><?php the_field('time')?> </p>
					</div>
					<?php } ?>
					<?if( have_rows('forum_sponsors') ){?>
					<div class="col-md-3">
						<a href="javascript:;" data-ref="#form-sponsor" class="itemclick">Dinner Sponsor</a>
					</div>
					<?	}
					?>
					<?if( have_rows('speakers') ){?>
						<div class="col-md-3">
						<a href="javascript:;" data-ref="#form-speaker" class="itemclick">Dinner Speakers</a>
					</div>
				<?	}
					?>
				</div>
				<?php }
				if(get_field('layout') == "Learn & Go" ) { ?>
				<div class="row">
					<?php if(get_field('address')) {?>
						<div class="col-md-3">
							<span>Venue</span>
							<p><?php if(get_field('address_link')) {?> <a href="<?php the_field('address_link')?>" target="_blank"><?php the_field('address'); ?></a> <?php } else { the_field('address'); } ?></p>
						</div>
					<?php } 
					if(get_field('event_date') && get_field('display_date')) {
					?>
						<div class="col-md-3">
							<span>Date</span>
							<p><?php the_field('display_date')?></p>
						</div>
					<?php }
					if( get_field('time')){ ?>
					<div class="col-md-3">
						<span>Time</span>
						<p ><?php the_field('time')?> </p>
					</div>
					<?php } ?>
				</div>
				<div class="row">	
					<?if( have_rows('forum_sponsors') ){?>
					<div class="col-md-3">
						<a href="javascript:;" data-ref="#form-sponsor" class="itemclick">Sponsor</a>
					</div>
					<?	}
					?>
					<?if( have_rows('speakers') ){?>
						<div class="col-md-3">
						<a href="javascript:;" data-ref="#form-speaker" class="itemclick">Speakers</a>
					</div>
				<?	}
					?>
				</div>
				<?php } ?>
			</div>
			<div class="col-md-4 align-self-center">
				<?php 
				if(get_field('layout') != "Forum" && get_field('layout') != "Collaborative" ) { 
                $image = get_field('company_logo');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif;
				 $image = get_field('sinc_banner_logo');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
				<?php }?>
			</div>
		</div>
	</div>
	
</section>
<div id="content" class="site-content">
	<div class="container">
		<div class="row">
    <section class="content-area col-sm-12 col-lg-12">
		<div class="single-case-study-section">
			<div class="single-content">
				<?php the_content(); ?> 
				<?php if( get_field('layout') == "Forum" || get_field('layout') == "Collaborative" || get_field('layout') == "Dinner" || get_field('layout') == "Virtual Executive Briefing" || get_field('layout') == "Learn & Go" || get_field('layout') == "Virtual Roundtable" || get_field('layout') == "Virtual Forum" ) { ?>
				<div class="speaker-slider <?php the_field('layout') ?> <?php if( have_rows('speakers') ){ echo 'speaker-exists'; } else{ echo 'speaker-notexists'; } ?>" id="form-speaker">
					<?php if( get_field('layout') == "Collaborative" ) { 
						if( have_rows('speakers') ){ ?>
							<h2>Speakers</h2>
						<?php }?> 
					<?php }?>
					<?php if( get_field('layout') == "Virtual Forum" ) { 
						if( have_rows('speakers') ){ ?>
							<h2>Speakers</h2>
						<?php }?> 
					<?php }?>
					<?php if( get_field('layout') == "Dinner" ) { 
						if( have_rows('speakers') ){ ?>
							<h2>Speakers</h2>
						<?php }?>
					<?php }?>
					<?php if( get_field('layout') == "Virtual Executive Briefing" ) { 
	                	if( have_rows('speakers') ){ ?>
							<h2>Speakers</h2>
						<?php }?>
					<?php }?>
					<?php if( get_field('layout') == "Learn & Go" ) {
						if( have_rows('speakers') ){ ?>
							<h2>Speakers</h2>
						<?php }?>
					<?php }?>
					<?php if( get_field('layout') == "Virtual Roundtable" ) {
						if( have_rows('speakers') ){ ?>
							<h2>Speakers</h2>
						<?php }?>
					<?php }?>
					<?php if(get_field('layout') == "Forum" ) { 
						if( have_rows('speakers') ){ ?>
							<h2>Forum Speakers</h2>
						<?php }?>
					<?php }?>
					<div class="single-event-carousel owl-carousel owl-theme owl-loaded owl-drag">
			<?php

			// Check rows exists.
			if( have_rows('speakers') ):

				// Loop through rows.
				while( have_rows('speakers') ) : the_row(); ?>

					<div class="speaker-profile">
						<div class="speaker-thumb">
							<?php 
						$image = get_sub_field('speakers_image');
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>				
						</div>
						<div class="speaker-content">
							<h3><?php the_sub_field('speakers_name'); ?></h3>
							<h4><?php the_sub_field('speakers_designation'); ?>	</h4>
							<p><?php the_sub_field('speakers_from'); ?></p>
						</div>
					</div>

				<?php endwhile;

			// No value.
			else :
				// Do something...
			endif; ?>
			</div>
				</div>
				<?php if( get_field('speaker_request_heading')) {?>
					<div class="speaker-request">
						<h4><?php the_field('speaker_request_heading'); ?></h4>
						<div class="space-mange"></div>
						<a href="#">Submit Request</a>
					</div>
				<?php }?>
				<?php }
				if( have_rows('forum_sponsors') ){
// 				 if(get_field('layout') == "Forum" ||  get_field('layout') == "Collaborative") { ?>
					<div class="modal fade sponsor-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							
						  </div>
						</div>
					  </div>
					</div>
				<div class="sponser-sec" id="form-sponsor">
					
				
				<div class="sponsor-heading-sec">
					<h2>Forum Sponsors</h2>
					
					
					<div class="sponsor-category-list">
						
						<ul class="all-cat sponsor-category" id="portfolio-flters">
							<?php 
					$arrsponsortype=array();
					if( have_rows('forum_sponsors') ){
				// Loop through rows.
				while( have_rows('forum_sponsors') ) { 
					the_row(); 
				if(get_sub_field('sponsors_type')){ 
					$filtr_var = get_sub_field('sponsors_type');
                // compare current value in saved array
                if( !in_array( $filtr_var, $PreValue ) )
                {
                        echo '<li id="'.$filtr_var.'-sponsor" data-filter=".item-'. $filtr_var .'-sponsor" class="sponsor-category-item" style="text-transform:capitalize;">'. $filtr_var .' Sponsor</li>' ;                                 
                }
                // save value in array
                $PreValue[] = $filtr_var;									
				}}}			?>
						</ul>		
					</div> 
					<!-- Modal -->
				</div>
					
		<div class="row sponsor-sec sponsor-sec-section">
			<?php 
			// Check rows exists.
			if( have_rows('forum_sponsors') ){
				// Loop through rows.
				while( have_rows('forum_sponsors') ) { the_row(); ?>
				
					<div class="col-md-4 forum-sponsors sponsor-item-all sponsor-sec-row item-<?php the_sub_field('sponsors_type')?>-sponsor portfolio-all portfolio-<?php the_sub_field('sponsors_type'); ?>">
						<div class="sponsors-thumb">
							<?php 
						$image = get_sub_field('sponsors_logo');
						if( !empty( $image ) ){ ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php }; ?>
							<img>						
							<p style="background-color:<?php echo get_sub_field('sponsors_color'); ?>"  class="
							<?php the_sub_field('sponsors_type'); ?>"><?php the_sub_field('sponsors_type'); ?></p>
						</div>
						<div class="sponsors-content">
							<h3><?php the_sub_field('sponsors_name'); ?></h3>
							<h4><?php the_sub_field('forum_description'); ?>	</h4>
							<a data-toggle="modal" data-target="#exampleModal" href="<?php the_sub_field('sponsors_link'); ?>">Learn More</a>
						</div>
					</div>
				<?php } ;
				 } 
				?>
				
				
				</div>
					
					
			<div class="sponsor-sec owl-carousel owl-theme owl-loaded owl-drag diamond-sponsor" style="display:none !important;">
			<?php 
			// Check rows exists.
			if( have_rows('forum_sponsors') ){
				// Loop through rows.
				while( have_rows('forum_sponsors') ) { the_row(); 
				if(get_sub_field('sponsors_type') == "diamond"){ ?>
					<div class="forum-sponsors portfolio-all portfolio-<?php the_sub_field('sponsors_type'); ?>">
						<div class="sponsors-thumb">
							<?php 
						$image = get_sub_field('sponsors_logo');
						if( !empty( $image ) ){ ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php }; ?>
							
							<p class="<?php the_sub_field('sponsors_type'); ?>"><?php the_sub_field('sponsors_type'); ?></p>
						</div>
						<div class="sponsors-content">
							<h3><?php the_sub_field('sponsors_name'); ?></h3>
							<h4><?php the_sub_field('forum_description'); ?>	</h4>
							<a data-toggle="modal" data-target="#exampleModal" href="<?php the_sub_field('sponsors_link'); ?>">Learn More</a>
						</div>
					</div>
				<?php }
				?>
					
				<?php } ;
				 } ?>
				</div>
			<div class="sponsor-sec owl-carousel owl-theme owl-loaded owl-drag platinum-sponsor" style="display:none !important;">
			<?php 
			// Check rows exists.
			if( have_rows('forum_sponsors') ){
				// Loop through rows.
				while( have_rows('forum_sponsors') ) { the_row(); 
				if(get_sub_field('sponsors_type') == "platinum"){ ?>
					<div class="forum-sponsors portfolio-all portfolio-<?php the_sub_field('sponsors_type'); ?>">
						<div class="sponsors-thumb">
							<?php 
						$image = get_sub_field('sponsors_logo');
						if( !empty( $image ) ){ ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php }; ?>
							<img>
							<p class="<?php the_sub_field('sponsors_type'); ?>"><?php the_sub_field('sponsors_type'); ?></p>
						</div>
						<div class="sponsors-content">
							<h3><?php the_sub_field('sponsors_name'); ?></h3>
							<h4><?php the_sub_field('forum_description'); ?>	</h4>
							<a data-toggle="modal" data-target="#exampleModal" href="<?php the_sub_field('sponsors_link'); ?>">Learn More</a>
						</div>
					</div>
				<?php }
					} 
				 } ?>
				</div>
				<div class="sponsor-sec owl-carousel owl-theme owl-loaded owl-drag gold-sponsor" style="display:none !important;">
			<?php 
			// Check rows exists.
			if( have_rows('forum_sponsors') ){
				// Loop through rows.
				while( have_rows('forum_sponsors') ) { the_row(); 
				if(get_sub_field('sponsors_type') == "gold"){ ?>
					<div class="forum-sponsors portfolio-all portfolio-<?php the_sub_field('sponsors_type'); ?>">
						<div class="sponsors-thumb">
							<?php 
						$image = get_sub_field('sponsors_logo');
						if( !empty( $image ) ){ ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php }; ?>
							<img>
							<p class="<?php the_sub_field('sponsors_type'); ?>"><?php the_sub_field('sponsors_type'); ?></p>
						</div>
						<div class="sponsors-content">
							<h3><?php the_sub_field('sponsors_name'); ?></h3>
							<h4><?php the_sub_field('forum_description'); ?></h4>
							<a data-toggle="modal" data-target="#exampleModal" href="<?php the_sub_field('sponsors_link'); ?>">Learn More</a>
						</div>
					</div>
				<?php }
				?>
					
				<?php } ;
				 } ?>
				</div>
			<div class="sponsor-sec owl-carousel owl-theme owl-loaded owl-drag silver-sponsor" style="display:none !important;">
			<?php 
			// Check rows exists.
			if( have_rows('forum_sponsors') ){
				// Loop through rows.
				while( have_rows('forum_sponsors') ) { the_row(); 
				if(get_sub_field('sponsors_type') == "silver"){ ?>
					<div class="forum-sponsors portfolio-all portfolio-<?php the_sub_field('sponsors_type'); ?>">
						<div class="sponsors-thumb">
							<?php 
						$image = get_sub_field('sponsors_logo');
						if( !empty( $image ) ){ ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php }; ?>
							<img>
							<p class="<?php the_sub_field('sponsors_type'); ?>"><?php the_sub_field('sponsors_type'); ?></p>
						</div>
						<div class="sponsors-content">
							<h3><?php the_sub_field('sponsors_name'); ?></h3>
							<h4><?php the_sub_field('forum_description'); ?>	</h4>
							<a data-toggle="modal" data-target="#exampleModal" href="<?php the_sub_field('sponsors_link'); ?>">Learn More</a>
						</div>
					</div>
				<?php }
				?>
					
				<?php } ;
				 } 
				?>
				</div>
					<div class="forum-btn">
						<a href="#">Sponsorship Request</a>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</section>
	<?php if(get_field('layout') != "Forum" ) { 
	if( get_field('company_title') && get_field('company_logo') && get_field('company_paragraph' )){ ?>
    <section class="content-area col-sm-12 col-lg-12">
		<div class="company-info">
			<div class="company-name">
				<h4><?php the_field('company_title')?></h4>
			</div>
			<div class="company-logo">
				<?php 
                $image = get_field('about_logo');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
			</div>
			<div class="company-paragraph">
				<p><?php the_field('company_paragraph')?></p>
			</div>
		</div>
    </section>
	<?php }?>
<?php 
}
get_footer();
