<footer class="site-footer">
    <div class="site-footer__layout">
        <div class="site-footer__container">
            <div class="logo">
                <a href="#"><img src="<?= DIRECT ?>img/logo.png" alt="logo"></a>
            </div>
            <div class="more-info">
                <p><a href="mailto:info@domain.com">info@domain.com</a></p>
                <p>Mon-Fri: 09:00 am - 06:00 pm</p>
            </div>
        </div>

        <div class="site-footer__container">
            <p class="site-footer__title">SERVICES</p>
            <?php $locations = get_nav_menu_locations();
            $menu_items = wp_get_nav_menu_items( $locations['footer-menu'] ); ?>
            <nav>
                <ul>
                    <?php foreach ( (array) $menu_items as $key => $menu_item ): ?>
                    <li><a href="<?= $menu_item->url; ?>"><?= $menu_item->title; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
        <div class="site-footer__container">
            <p class="site-footer__title">TWITTER</p>
            <div class="social">
                <p><a href="#">@crucio</a> I What an aweosme theme!  We love it, tons of options and
                    great design, thank you!  :) <span>12 minutes ago</span></p>
                <p><a href="#">@crucio</a> you’ve got to check this one out, very cool looking!
                    <span>25 minutes ago</span></p>
            </div>
        </div>
        <div class="site-footer__container">
            <p class="site-footer__title">Flickr</p>
            <ul class="list">
                <li><a href="#"><img src="http://placehold.it/52x52/b0b0b0" alt="list"></a></li>
                <li><a href="#"><img src="http://placehold.it/52x52/b0b0b0" alt="list"></a></li>
                <li><a href="#"><img src="http://placehold.it/52x52/b0b0b0" alt="list"></a></li>
                <li><a href="#"><img src="http://placehold.it/52x52/b0b0b0" alt="list"></a></li>
                <li><a href="#"><img src="http://placehold.it/52x52/b0b0b0" alt="list"></a></li>
                <li><a href="#"><img src="http://placehold.it/52x52/b0b0b0" alt="list"></a></li>
                <li><a href="#"><img src="http://placehold.it/52x52/b0b0b0" alt="list"></a></li>
                <li><a href="#"><img src="http://placehold.it/52x52/b0b0b0" alt="list"></a></li>
            </ul>
        </div>
    </div>
    <div class="site-footer__copyright">
        <div class="layout">
            <p>Copyright 2019 <a href="#">Clever Solunion</a> <span>|</span>  All Rights Reserved</p>
            <ul class="social-links">
                <li><a href="#"><img src="<?= DIRECT ?>img/facebook.png" alt="facebook"></a></li>
                <li><a href="#"><img src="<?= DIRECT ?>img/twitter.png" alt="twitter"></a></li>
                <li><a href="#"><img src="<?= DIRECT ?>img/linked-in.png" alt="linked-in"></a></li>
                <li><a href="#"><img src="<?= DIRECT ?>img/rss.png" alt="res"></a></li>
                <li><a href="#"><img src="<?= DIRECT ?>img/dribbble.png" alt="dribbble"></a></li>
            </ul>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
