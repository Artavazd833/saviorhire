<?php
/**
 *
 * @package saviorhire
 */

get_header();
?>

	<main id="primary" class="site-main">

    <div class="fp-services-items">


<?php if (have_rows('services')) : ?>
    <?php while (have_rows('services')) : the_row(); ?>
        <div class="fp-services-item">
            <h3 class="fp-services-item-name">
                <?php the_sub_field('service_headline'); ?>
            </h3>
            <div class="fp-services-item-img">
               <img src="<?php the_sub_field('services_item_imgae'); ?>" alt=""> 
            </div>
            <div class="fp-services-item-list">
                <?php the_sub_field('services_list'); ?>
            </div>
            <div class="fp-services-item-link">
                <form action="contact-us" method="post">
                    <input type="hidden" name="services" value="<?php the_sub_field('service_headline'); ?>">
                </form>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>
   
	</main><!-- #main -->

<?php
get_footer();
