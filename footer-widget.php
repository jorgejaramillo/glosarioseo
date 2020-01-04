<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) {?>
        <div id="footer-widget" class="row m-0 border border-morado">

                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="col-12 col-md-4 p-3 p-md-5 bg-light border footer-widget border-morado"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="col-12 col-md-4 p-3 p-md-5 bg-light border footer-widget border-morado"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div class="col-12 col-md-4 p-3 p-md-5 bg-light border footer-widget border-morado"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    <?php endif; ?>

        </div>

<?php }