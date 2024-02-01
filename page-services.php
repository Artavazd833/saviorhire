<?php

/**
 *
 * @package saviorhire
 */

get_header();
?>

<main id="primary" class="site-main services">
    <div class="top-section">
        <h1 class=" headline1"><?php the_field('page_title'); ?></h1>
        <div class="fp-top-paragraph"><?php the_field('top_description'); ?></div>
    </div>

    <div class="services-list">
        <?php if (have_rows('services_page_items')) : ?>
            <?php while (have_rows('services_page_items')) : the_row(); ?>
                <div class="service-item">

                    <div class="service-img"><img src=" <?php the_sub_field('item_image'); ?>"></div>

                    <div class="service-desc">

                        <div class="service-title"> <?php the_sub_field('item_headline'); ?></div>
                        <div class="service-list"> <?php the_sub_field('item_list'); ?></div>
                        <div class="service-text"> <?php the_sub_field('item_text'); ?></div>
                        <div class="service-btn">
                            <?php
                            $link = get_field('item_button');

                            if ($link) :

                                $link_url = $link['url'];

                                $link_title = $link['title'];

                                $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                                <a class="contact-main " href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

                            <?php endif; ?>
                        </div>

                    </div>

                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
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


</main><!-- #main -->

<?php
get_footer();
