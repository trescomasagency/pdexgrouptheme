    </main>
    <footer class="pdexgroup__footer">
        <div class="pdexgroup__footer-content">
            <div class="pdexgroup__footer-content-info">
                <div class="pdexgroup__footer-content-info-brand">
                    <picture class="pdexgroup__footer-content-info-brand-logo">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/front-footer/logo-white.png" alt="logo-white">
                    </picture>
                    <div class="pdexgroup__footer-content-info-brand-text">
                        <!-- <p>Let us walk towards the future, your best partner, also in networks</p> -->
                    </div>
                </div>
                <div class="pdexgroup__footer-content-info-menu">
                    <h3 class="pdexgroup__footer-content-info-menu-title">Pdex Group</h3>
                    <div class="pdexgroup__footer-content-info-menu-text">
                        <p>We are a leading international provider in manufacturing, exporting and distributing procurement products for the Telecommunications, systems, energy and oil & mining</p>
                    </div>
                    <ul class="pdexgroup__footer-content-info-menu-list">
                        <li><a href="<?= home_url(); ?>">Home</a></li>
                        <li><a href="<?= home_url('about-us'); ?>">Aubout Us</a></li>
                        <li><a href="<?= home_url('services'); ?>">Services</a></li>
                        <li><a href="<?= home_url('contact-us'); ?>">Contact Us</a></li>
                    </ul>
                </div>
                <div class="pdexgroup__footer-content-info-menu">
                    <h3 class="pdexgroup__footer-content-info-menu-title">Do you need more Information?</h3>
                    <div class="pdexgroup__footer-content-info-menu-text">
                        <!-- <p>3301 NE 1st ave Apt. 2501 Miami-Fl. 33137</p> -->
                        <p>T: + 1 305 321 9067</p>
                        <p>info@pdexgroup.com</p>
                    </div>
                </div>
            </div>
            <div class="pdexgroup__footer-content-end">
                <p>2018 © Pdex Group USA, LLC.</p>
            </div>
        </div>
    </footer>
</body>
<?php wp_footer(); ?>
</html>