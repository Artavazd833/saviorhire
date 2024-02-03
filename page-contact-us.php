<?php

/**
 *
 * @package saviorhire
 */

get_header();
?>



<div class="top-sec">
	<h1 class=" headline1"><?php the_field('page_title'); ?></h1>
	<div class="contact-info">
		<div class="contact-info-item">

			<?php if (have_rows('phone')) : ?>
				<?php while (have_rows('phone')) : the_row(); ?>
					<div class="cii-img"><img src="<?php the_sub_field('phone_image'); ?>"></div>
					<div class="cii-desc">
						<div class="cii-desc-title"><?php the_sub_field('phone_headline'); ?></div>
						<div class="cii-desc-text"> <?php the_sub_field('phone_number'); ?></div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>
		<div class="contact-info-item">

			<?php if (have_rows('phone')) : ?>
				<?php while (have_rows('email')) : the_row(); ?>
					<div class="cii-img"><img src="<?php the_sub_field('email_image'); ?>"></div>
					<div class="cii-desc">
						<div class="cii-desc-title"><?php the_sub_field('email_headline'); ?></div>
						<div class="cii-desc-text"> <?php the_sub_field('email_number'); ?></div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>

</div>
<div class="form-sec">

	<?php echo apply_shortcodes('[contact-form-7 id="a448056" title="Contact us"]'); ?>

</div>



<?php
get_footer();
