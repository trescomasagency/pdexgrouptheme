<?php // Template Name: Productos ?>
<?php get_header(); ?>

<section class="pdexgroup__services-initial">

    <div class="pdexgroup__services-initial-info">>
        <h2 class="pdexgroup__services-initial-info-title">Nuestros <span>productos</span></h2>
        <h3 class="pdexgroup__services-initial-info-subtitle">Nuestro equipo <span>está listo</span> para atender sus necesidades de <span>adquisición de suministros y equipos,</span> con un tiempo de <span>respuesta y competitividad incomparables.</span></h3>
        <!-- <div class="pdexgroup__services-initial-info-text">
            <p>We represent major brands that are a staple to our commitment to quality and reliability.</p>
        </div> -->
        <div class="pdexgroup__services-initial-info-button">
            <a class="pdexgroup__services-initial-info-button-cta" href="https://wa.me/13053219067" target="_blank">
                <span>Contacto</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg>
            </a>
        </div>
    </div>

    <picture class="pdexgroup__services-initial-picture">
        <source media="(min-width: 1200px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/products-mecanical/desktop.png"/>
        <source media="(min-width: 600px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/products-mecanical/tablet.png" />
        <img src="<?= get_template_directory_uri(); ?>/assets/images/products-mecanical/mobile.png" alt="excavator" />
    </picture>

</section>

<section class="pdexgroup__products">
    <?php
    
        $query_arr = array(
            'post_type'         => 'product',
            'post_status'       => 'publish',
            'posts_per_page'    => 10,
            'order'             => 'DESC',
            'orderby'           => 'date'
        );

        $query = new WP_Query($query_arr);
    
    ?>
    <div class="pdexgroup__products-content">

        <?php if($query->have_posts()): ?>
            <?php while($query->have_posts()): $query->the_post(); ?>
                <div class="pdexgroup__products-content-item">
                    <picture>
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= strtolower(get_the_title()); ?>">
                    </picture>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM288 224C288 206.3 302.3 192 320 192C337.7 192 352 206.3 352 224C352 241.7 337.7 256 320 256C302.3 256 288 241.7 288 224zM280 288L328 288C341.3 288 352 298.7 352 312L352 400L360 400C373.3 400 384 410.7 384 424C384 437.3 373.3 448 360 448L280 448C266.7 448 256 437.3 256 424C256 410.7 266.7 400 280 400L304 400L304 336L280 336C266.7 336 256 325.3 256 312C256 298.7 266.7 288 280 288z"/></svg>
                        <p><?= get_the_title(); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>