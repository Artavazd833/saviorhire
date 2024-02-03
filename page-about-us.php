<?php

/**
 *
 * @package saviorhire
 */

get_header();
?>

<div class="top-section">
    <div class="top-img"><img src="<?php the_field('top_image'); ?>"></div>
    <h1 class=" headline1"><?php the_field('page_title'); ?></h1>
    <div class="fp-top-paragraph"><?php the_field('top_description'); ?></div>
    <div class="top-btn">
        <?php
        $link = get_field('top_button');

        if ($link) :

            $link_url = $link['url'];

            $link_title = $link['title'];

            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

            <a class="contact-main " href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                <?php echo esc_html($link_title); ?></a>

        <?php endif; ?>
    </div>
</div>

<section class="joinus">
    <h2 class="  headline2"> <?php the_field('headlin'); ?></h2>

    <div class="vacancy-sec">
        <?php if (have_rows('vacancy')) : ?>
            <?php while (have_rows('vacancy')) : the_row(); ?>
                <div class="vacancy">

                    <div class="vacancy-short">
                        <div class="vs-top">

                            <div class="vs-top-name"><?php the_sub_field('vacancy_name'); ?></div>
                            <div class="vs-top-count"><?php the_sub_field('vacancy_country'); ?></div>

                        </div>

                        <div class="vs-desk"><?php the_sub_field('vacancy_short_description'); ?></div>


                        <div class="vs-bottom">
                            <div class="vs-bottom-date"><?php the_sub_field('vacancy_date'); ?></div>
                            <div class="vs-bottom-link"><?php the_sub_field('vacancy_more_button_text'); ?></div>
                        </div>
                    </div>

                    <div class="vacancy-hiddn">
                        <div class="vacancy-full">
                            <div class="vs-top-name"><?php the_sub_field('vacancy_name'); ?></div>
                            <div class="vs-top-count"><?php the_sub_field('vacancy_country'); ?></div>
                            <div class="vs-desk"><?php the_sub_field('vacancy_full_description_copy'); ?></div>
                            <div class="vs-bottom-date"><?php the_sub_field('vacancy_date'); ?></div>

                            <div class="vacancy-form">

                                <div class="vs-top-name"><?php the_field('vacancy_form_title'); ?></div>
                                <?php echo apply_shortcodes('[contact-form-7 id="eed8226" title="Apply Form"]'); ?>


                            </div>
                        </div>


                    </div>
                </div>

    </div>
<?php endwhile; ?>
<?php endif; ?>
</div>
</section>

<section class="our-core-values-sec">
    <h2 class=" ocv headline2"> <?php the_field('our_core_values_title'); ?></h2>
    <div class="ocv-items">
        <?php if (have_rows('our_core_values')) : ?>
            <?php while (have_rows('our_core_values')) : the_row(); ?>
                <div class="ocv-item">
                    <div class="ocv-item-desc">
                        <div class="ocv-item-title"><?php the_sub_field('core_values_title'); ?></div>
                        <div class="ocv-item-text"><?php the_sub_field('core_values_text'); ?></div>
                    </div>
                    <div class="ocv-item-img">
                        <img src="<?php the_sub_field('core_values_image'); ?>" alt="<?php the_sub_field('core_values_title'); ?>">
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <div class="fp-top-btns ocv">

        <?php
        $link = get_field('contact_button');

        if ($link) :

            $link_url = $link['url'];

            $link_title = $link['title'];

            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

            <a class="contact-main" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                <?php echo esc_html($link_title); ?></a>

        <?php endif; ?>


    </div>


</section>


<?php
get_footer();
