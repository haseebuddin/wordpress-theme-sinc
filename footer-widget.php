<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) {?>
        <div id="footer-widget" class="row m-0 <?php if(!is_theme_preset_active()){ echo 'bg-light'; } ?>">
            <div class="container">
                <div class="row">
<div class="col-md-12">
<?php dynamic_sidebar( 'newsletter' ); ?>
</div>

                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="col-12 col-md-3"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
					<div class="col-12 col-md-9">
						<div class="row">
							<?php if ( is_active_sidebar( 'footer-2' )) : ?>
								<div class="col-6 col-md-4"><?php dynamic_sidebar( 'footer-2' ); ?></div>
							<?php endif; ?>
							<?php if ( is_active_sidebar( 'footer-3' )) : ?>
								<div class="col-6 col-md-4"><?php dynamic_sidebar( 'footer-3' ); ?></div>
							<?php endif; ?>
							<?php if ( is_active_sidebar( 'footer-4' )) : ?>
								<div class="col-6 col-md-4"><?php dynamic_sidebar( 'footer-4' ); ?></div>
							<?php endif; ?>
						</div>
					</div>                 
                </div>
            </div>
        </div>

<?php }