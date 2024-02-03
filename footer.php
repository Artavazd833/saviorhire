<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saviorhire
 */

?>
</main>
<footer id="colophon" class="site-footer">

    <div class="footer-content">
        <div class="footer-logos">
            <div class="footer-logo">
                <a href="<?php get_home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png"></a>
            </div>

            <div class="footer-socila">
                <?php if (have_rows('footer_social', 'option')) : ?>
                    <?php while (have_rows('footer_social', 'option')) : the_row(); ?>

                        <a class="social_item" href="<?php the_sub_field('social_link'); ?>" target="_blank">
                            <img src="<?php the_sub_field('social_icon'); ?>">
                        </a>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="footer-adresses">
                <div class="footer_addres">
                    <?php if (have_rows('footer_address', 'option')) : ?>
                        <?php while (have_rows('footer_address', 'option')) : the_row(); ?>
                            <span class="fa-title"> <?php the_sub_field('arddress_title'); ?></span>
                            <span class="fa-value"> <?php the_sub_field('address_description'); ?></span>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="footer_email">
                    <?php if (have_rows('footer_email', 'option')) : ?>
                        <?php while (have_rows('footer_email', 'option')) : the_row(); ?>
                            <span class="fa-title"> <?php the_sub_field('email_title'); ?></span>
                            <a class="fa-value" href="mailto:<?php the_sub_field('email_n'); ?>"><?php the_sub_field('email_n'); ?></a>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
        <div class="footer-menus">
            <div class="footer-menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-2',
                        'menu_id'        => 'footer-menu',
                        'depth' => 1,
                    )
                );
                ?>
            </div>
            <div class="footer-menu services">
                <h3><?php the_field('footer_services_headline', 'option'); ?></h3>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-3',
                        'menu_id'        => 'services-menu',
                        'depth' => 1,
                    )
                );
                ?>
            </div>
            

        </div>
        <div class="footer-totop">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/totop.svg" alt="">
            <span><?php the_field('footer_scroll_text', 'option'); ?></span>
        </div>
    </div>
    <div class="footer-copyrigt">
        <span><?php the_field('copyright_text', 'option'); ?></span>&nbsp&nbsp<?php echo date('Y') ?>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
             <script>
               
				
                $(document).ready(function() {
                    $("#subject").val("<?php echo  $_POST['services'];?>").change();

                    
                })


			 </script>

</body>

</html>