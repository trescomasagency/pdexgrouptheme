<?php // Template Name: Nosotros ?>
<?php get_header(); ?>

<section class="pdexgroup__about">

    <div class="pdexgroup__about-info">
        <h2 class="pdexgroup__about-info-title">Nuestra historia</h2>
        <h3 class="pdexgroup__about-info-subtitle">Pdex USA llc., una corporación dedicada a la <span>exportación, fabricación, distribución y adquisición de productos</span> para las industrias de telecomunicaciones, energía, petróleo y minería y sistemas.</h3>
        <div class="pdexgroup__about-info-text">
            <p><strong>Tras más de 20 años sirviendo a la industria con experiencia y dedicación</strong>, hemos forjado una sólida reputación y confianza entre las empresas que operan en dichos sectores. Esto nos permite ofrecer una <strong>gama de productos completos e integrados</strong>, que crece día a día gracias a nuestro compromiso de apoyar permanentemente las tecnologías nuevas y futuras.</p>
        </div>
        <div class="pdexgroup__about-info-button">
            <a class="pdexgroup__about-info-button-cta" href="https://wa.me/13053219067" target="_blank">
                <span>Contacto</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg>
            </a>
        </div>
    </div>

    <picture class="pdexgroup__about-picture">
        <source media="(min-width: 1200px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/about-us/desktop.png"/>
        <source media="(min-width: 600px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/about-us/tablet.png" />
        <img src="<?= get_template_directory_uri(); ?>/assets/images/about-us/mobile.png" alt="excavator" />
    </picture>

</section>

<?php get_template_part('./template-parts/content', 'cartas'); ?>

<section class="pdexgroup__about-quality">

    <div class="pdexgroup__about-quality-info">
        <h2 class="pdexgroup__about-quality-info-title"><span>Calidad</span> de productos</h2>
        <h3 class="pdexgroup__about-quality-info-subtitle">Todos los productos pasan por una <span>certificación internacional estándar.</span></h3>
        <div class="pdexgroup__about-quality-info-text">
            <p>Todos los productos pasan por un proceso de <strong>certificación internacional estándar dentro de laboratorios de última generación</strong>, lo que garantiza que todos los productos, ya sean fabricados por PDEX o distribuidos a través de otros recursos, lleguen a usted con la misma confiabilidad y calidad que garantiza PDEX.</p>
        </div>
        <div class="pdexgroup__about-quality-info-button">
            <a class="pdexgroup__about-quality-info-button-cta" href="<?= home_url('productos'); ?>">
                <span>Productos</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"/></svg>
            </a>
        </div>
    </div>

    <picture class="pdexgroup__about-quality-picture">
        <source media="(min-width: 1200px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/about-quality/desktop.png"/>
        <source media="(min-width: 600px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/about-quality/tablet.png" />
        <img src="<?= get_template_directory_uri(); ?>/assets/images/about-quality/mobile.png" alt="excavator" />
    </picture>

</section>

<?php get_footer(); ?>