<?php get_header() ?>

<section class="fp-top">
    <div class="fp-top-content">
        <h1 class="fp-top-title headline1"><?php the_field('page_title'); ?></h1>
        <div class="fp-top-paragraph"><?php the_field('top_description'); ?></div>
        <div class="fp-top-btns">

            <?php
            $link = get_field('contact_button');

            if ($link) :

                $link_url = $link['url'];

                $link_title = $link['title'];

                $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                <a class="contact-main" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

            <?php endif; ?>

            <?php
            $link = get_field('about_us_button');

            if ($link) :

                $link_url = $link['url'];

                $link_title = $link['title'];

                $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                <a class="about-link no-border" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

            <?php endif; ?>
        </div>

    </div>
    <div class="fp-top-img">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/home-top.png" alt="">
    </div>

</section>
<section class="fp-services" id="services">

    <h2 class="headline2"><?php the_field('srevices_title'); ?></h2>

    <div class="fp-services-text">
        <?php the_field('srevices_text'); ?>
    </div>
    <div class="fp-services-items">


        <?php if (have_rows('services')) : ?>
            <?php while (have_rows('services')) : the_row(); ?>
                <div class="fp-services-item">

                    <div class="fp-services-item-img">
                        <img src="<?php the_sub_field('services_item_imgae'); ?>" alt="">
                    </div>

                    <div class="fp-services-item-name">
                        <h3> <?php the_sub_field('service_headline'); ?> </h3>
                    </div>

                    <div class="fp-services-item-list">
                        <?php the_sub_field('services_list'); ?>
                    </div>

                    <div class="fp-services-item-link">
                        <form action="contact-us" method="post">
                            <input type="hidden" name="services" value="<?php the_sub_field('service_headline'); ?>">
                            <button class="fp-services-btn" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="16" viewBox="0 0 46 16" fill="none">
                                    <path d="M45.2071 8.70711C45.5976 8.31658 45.5976 7.68342 45.2071 7.29289L38.8431
                                     0.928932C38.4526 0.538408 37.8195 0.538408 37.4289 0.928932C37.0384 1.31946
                                      37.0384 1.95262 37.4289 2.34315L43.0858 8L37.4289 13.6569C37.0384 14.0474
                                       37.0384 14.6805 37.4289 15.0711C37.8195 15.4616 38.4526 15.4616 38.8431 
                                       15.0711L45.2071 8.70711ZM0.5 9L44.5 9V7L0.5 7L0.5 9Z" fill="#fff" />
                                </svg>
                            </button>
                        </form>
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

        <?php
        $link = get_field('about_us_button');

        if ($link) :

            $link_url = $link['url'];

            $link_title = $link['title'];

            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

            <a class="about-link " href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                <?php echo esc_html($link_title); ?></a>

        <?php endif; ?>
    </div>


</section>
<section class="company-logos-sec">
    <h2 class=" cl headline2"> <?php the_field('cts_title'); ?></h2>
    <div class="fp-services-text">
        <?php the_field('cts_text'); ?>
    </div>

    <div class="company-logos">
        <?php if (have_rows('logos_slide_show')) : ?>
            <?php while (have_rows('logos_slide_show')) : the_row(); ?>
                <div class="company-logo-item">
                    <img src="<?php the_sub_field('cts_logo'); ?>">
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="fp-top-btns ocv">

        <?php
        $link = get_field('about_us_button');

        if ($link) :

            $link_url = $link['url'];

            $link_title = $link['title'];

            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

            <a class="contact-main " href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                <?php echo esc_html($link_title); ?></a>

        <?php endif; ?>
    </div>
</section>
<section class="testimonials">
    <h2 class=" cl headline2"> <?php the_field('cts_title'); ?></h2>
    <div class="fp-services-text">
        <?php the_field('cts_text'); ?>
    </div>
    <div class="ts-map">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.svg">
        <div class="point p1">
            <div class="ts-item t1">
                <div class="ts-toop">
                    <div class="ts-toop-left">
                        <div class="ts-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bidz.png">
                        </div>
                        <div class="ts-cont">
                            <div class="ts-company">Company name</div>
                            <div class="ts-name">Full Name, CEO</div>
                        </div>
                    </div>
                    <div class="ts-toop-in">
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                <g clip-path="url(#clip0_58_2842)">
                                    <path d="M4.2997 6.33594H0.375V18.9999H4.2997V6.33594Z" fill="#5C5C5C" />
                                    <path d="M2.31805 4.6741C3.59697 4.6741 4.6361 3.62742 4.6361 2.33305C4.6361
                                     1.03869 3.60496 0 2.31805 0C1.03113 0 0 1.04668 0 2.34104C0 3.63541 
                                     1.03912 4.68209 2.31805 4.68209V4.6741Z" fill="#5C5C5C" />
                                    <path d="M10.5677 12.3525C10.5677 10.5707 11.3911 9.50808 12.9577
                                     9.50808C14.3965 9.50808 15.0919 10.5228 15.0919
                                      12.3525V19.0001H18.9927V10.9782C18.9927 7.58251 17.0663 
                                      5.94458 14.3805 5.94458C11.6948
                                     5.94458 10.5598 8.03794 10.5598 8.03794V6.3281H6.79492V18.9921H10.5598V12.3525H10.5677Z" fill="#5C5C5C" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_58_2842">
                                        <rect width="19" height="19" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></a>
                    </div>
                </div>
                <div class="ts-text">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's
                        Lorem Ipsum is simply dummy text of the printing and
                        S Lorem Ipsum is simply</p>
                </div>
            </div>
        </div>

        <div class="point p2">
            <div class="ts-item t2">
                <div class="ts-toop">
                    <div class="ts-toop-left">
                        <div class="ts-img"></div>
                        <div class="ts-cont">
                            <div class="ts-company">Company name</div>
                            <div class="ts-name">Full Name, CEO</div>
                        </div>
                    </div>
                    <div class="ts-toop-in">
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                <g clip-path="url(#clip0_58_2842)">
                                    <path d="M4.2997 6.33594H0.375V18.9999H4.2997V6.33594Z" fill="#5C5C5C" />
                                    <path d="M2.31805 4.6741C3.59697 4.6741 4.6361 3.62742 4.6361 2.33305C4.6361
                                     1.03869 3.60496 0 2.31805 0C1.03113 0 0 1.04668 0 2.34104C0 3.63541 
                                     1.03912 4.68209 2.31805 4.68209V4.6741Z" fill="#5C5C5C" />
                                    <path d="M10.5677 12.3525C10.5677 10.5707 11.3911 9.50808 12.9577
                                     9.50808C14.3965 9.50808 15.0919 10.5228 15.0919
                                      12.3525V19.0001H18.9927V10.9782C18.9927 7.58251 17.0663 
                                      5.94458 14.3805 5.94458C11.6948
                                     5.94458 10.5598 8.03794 10.5598 8.03794V6.3281H6.79492V18.9921H10.5598V12.3525H10.5677Z" fill="#5C5C5C" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_58_2842">
                                        <rect width="19" height="19" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></a>
                    </div>
                </div>
                <div class="ts-text">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's
                        Lorem Ipsum is simply dummy text of the printing and
                        S Lorem Ipsum is simply</p>
                </div>
            </div>
        </div>

        <div class="point p3">
            <div class="ts-item t3"></div>
        </div>
        <div class="point p4">
            <div class="ts-item t2"></div>
        </div>
    </div>
    <h2 class=" cl headline2"> <?php the_field('cts_title'); ?></h2>
    <div class="fp-top-btns ocv">

        <?php
        $link = get_field('contact_button');

        if ($link) :

            $link_url = $link['url'];

            $link_title = $link['title'];

            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

            <a class="contact-main " href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                <?php echo esc_html($link_title); ?></a>

        <?php endif; ?>
    </div>

</section>

<?php
get_footer();
?>