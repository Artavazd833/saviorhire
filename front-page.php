<?php get_header() ?>

<div class="fp-top">
    <div class="fp-top-content">
        <h1 class="fp-top-title headline1">
        <?php the_field('page_title'); ?>
        </h1>
        <p class="fp-top-paragraph">
            Whether you're a job seeker looking for your next
            career move or an employer looking to fill a critical role in your company,
            we're here to help you every step of the way.
        </p>
        <div class="fp-top-btns">
            <a class="contact-main" href="">Contuct us</a>
            <a class="learn-more" href="">Learn about services</a>
        </div>

    </div>
    <div class="fp-top-img">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/home-top.png" alt="">
    </div>

</div>
<div class="fp-services">

    <h2 class="headline2">Services</h2>
    <p class="fp-services-text">Lorem Ipsum is simply dummy text of the
        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it
    </p>
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


</div>

<?php
get_footer();
?>