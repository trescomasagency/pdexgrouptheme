<?php // Template Name: Contacto ?>
<?php get_header(); ?>

<section class="contact-us">
    <article class="contact-us-article">
        <picture class="contact-us-article-picture"><img src="<?= get_template_directory_uri(); ?>/assets/images/thiings/usa.png" alt="USA"></picture>
        <div class="contact-us-article-title"><p>USA</p></div>
        <div class="contact-us-article-subtitle"><p>Miami</p></div>
        <div class="contact-us-article-text"><p>3301 NE 1st ave Apt. 2501 Miami-Fl. 33137.</p></div>
        <div class="contact-us-article-link"><a target="_blank" href="https://wa.me/13053219067">+ 1 305 321 9067</a></div>
        <div class="contact-us-article-link"><a target="_blank" href="mailto:info@pdexgroup.com">info@pdexgroup.com</a></div>
    </article>
    <article class="contact-us-article">
        <picture class="contact-us-article-picture"><img src="<?= get_template_directory_uri(); ?>/assets/images/thiings/venezuela.png" alt="Venezuela"></picture>
        <div class="contact-us-article-title"><p>Venezuela</p></div>
        <div class="contact-us-article-subtitle"><p>Caracas</p></div>
        <div class="contact-us-article-text"><p>Calle Negrín, Edf. Alto Centro, piso 14. Ofic. 14D. Sabana Grande.</p></div>
        <div class="contact-us-article-link"><a target="_blank" href="https://wa.me/584143125812">+58 414 312 5812</a></div>
        <div class="contact-us-article-link"><a target="_blank" href="mailto:info@pdexgroup.com">info@pdexgroup.com</a></div>
    </article>
    <article class="contact-us-article">
        <picture class="contact-us-article-picture"><img src="<?= get_template_directory_uri(); ?>/assets/images/thiings/chile.png" alt="Chile"></picture>
        <div class="contact-us-article-title"><p>Chile</p></div>
        <div class="contact-us-article-subtitle"><p>Santiago de Chile</p></div>
        <div class="contact-us-article-text"><p>Pehuen 7293 Las Condes. Santiago de Chile, Chile.</p></div>
        <div class="contact-us-article-link"><a target="_blank" href="https://wa.me/56962259368">+ 56 9 6225 9368</a></div>
        <div class="contact-us-article-link"><a target="_blank" href="mailto:I.michelena@pdexgroup.com">I.michelena@pdexgroup.com</a></div>
    </article>
    <article class="contact-us-article">
        <picture class="contact-us-article-picture"><img src="<?= get_template_directory_uri(); ?>/assets/images/thiings/peru.png" alt="Perú"></picture>
        <div class="contact-us-article-title"><p>Perú</p></div>
        <div class="contact-us-article-subtitle"><p>Lima</p></div>
        <div class="contact-us-article-text"><p>Jr. Montemar 202 Dpto 302 Santiago de Surco.</p></div>
        <div class="contact-us-article-link">
            <a target="_blank" href="https://wa.me/51989095482">+ 51 989 095 482</a>
            <a target="_blank" href="https://wa.me/51962388302">+ 51 962 388 302</a>
        </div>
        <div class="contact-us-article-link">
            <a target="_blank" href="mailto:cesar.cruzsaco@pdexgroup.com">cesar.cruzsaco@pdexgroup.com</a>
            <a target="_blank" href="mailto:jorge.maura@pdexgroup.com">jorge.maura@pdexgroup.com</a>
        </div>
    </article>
</section>

<?php get_template_part('./template-parts/content', 'cartas'); ?>

<?php get_footer(); ?>