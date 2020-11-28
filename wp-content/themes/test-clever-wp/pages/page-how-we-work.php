<?php
//Template Name: How We Work
get_header();
$page_title = get_the_title();
$discovery = get_field('discovery_title');
$planing = get_field('planing');
$planing_title = get_field('planing_title');
$development_title_1 = get_field('development_title_1');
$development_title_2 = get_field('development_title_2');
$awards_title = get_field('awards_title')

?>
    <!-- site__content -->
    <div class="site__content">
        <div class="head">
            <div class="head__container">
                <h2><?= $page_title; ?></h2>
            </div>
        </div>
        <div class="breadcrumbs">
            <div class="layout">
                <ul>
                    <li><a href="<?= get_home_url(); ?>">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li>Services Inner</li>
                </ul>
            </div>
        </div>
        <div class="how-we-work">
        <?php if( have_rows('discovery_block') ): ?>
            <div style="padding: 25px 0 95px;" class="container">
                <div class="layout">
                    <h3 class="container__title"><?= $discovery; ?></h3>
                    <div class="container__half">
    <?php while( have_rows('discovery_block') ): the_row(); ?>

                        <div class="container__inner">
                        <?php if (get_row_layout() == 'discovery_text'):
                            $text = get_sub_field('text'); ?>

                            <div class="container__inner--text">
                                <?=  $text; ?>
                            </div>
                        <?php elseif (get_row_layout() == 'discovery_image'):
                            $image = get_sub_field('image'); ?>
                                <div class="container__inner--image">
                                    <img src="<?= $image; ?>" alt="image">
                                </div>
                        <?php endif; ?>
                        </div>
    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
            <?php if ($planing):?>
            <div class="container planning">
                <div class="layout">
                    <h3 class="container__title"><?= $planing_title; ?></h3>
                    <div class="container__full">
                        <?= $planing; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if( have_rows('development_content') ): ?>
                <div class="container">
                    <div class="layout">
                        <h3 class="container__title"><?= $development_title_1; ?></h3>
                        <div class="container__half">
                            <?php while( have_rows('development_content') ): the_row(); ?>

                                <div class="container__inner">
                                    <?php if (get_row_layout() == 'development_text'):
                                        $text = get_sub_field('text'); ?>

                                        <div class="container__inner--text">
                                            <?=  $text; ?>
                                        </div>
                                    <?php elseif (get_row_layout() == 'development_image'):
                                        $image = get_sub_field('image'); ?>
                                        <div class="container__inner--image">
                                            <img src="<?= $image; ?>" alt="image">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( have_rows('development_content_2') ): ?>
                <div class="container">
                    <div class="layout">
                        <h3 class="container__title"><?= $development_title_2; ?></h3>
                        <div class="container__half">
                            <?php while( have_rows('development_content_2') ): the_row(); ?>

                                <div class="container__inner">
                                    <?php if (get_row_layout() == 'development_text'):
                                        $text = get_sub_field('text'); ?>

                                        <div class="container__inner--text">
                                            <?=  $text; ?>
                                        </div>
                                    <?php elseif (get_row_layout() == 'development_image'):
                                        $image = get_sub_field('image'); ?>
                                        <div class="container__inner--image">
                                            <img src="<?= $image; ?>" alt="image">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <?php if( have_rows('awards_images') ): ?>
        <div class="awards">
            <div class="layout">
                <h3 class="awards__title"><?= $awards_title; ?></h3>

                    <ul class="awards__list">
                        <?php while( have_rows('awards_images') ): the_row();
                            $image = get_sub_field('image');
                            ?>
                            <li class="awards__item"><img src="<?= $image; ?>" alt="award"></li>
                        <?php endwhile; ?>
                    </ul>
            </div>
        </div>
        <?php endif; ?>
        <div class="contact-us">
            <div class="layout contact-us__container">
                <div class="contact-us__title container__inner">
                    <p>Get Started with<br>
                        <span>Clever Solution</span></p>
                </div>
                <div class="contact-us__form container__inner">
                    <?php echo  do_shortcode('[contact-form-7 id="71" title="Contact form 1"]')?>
                </div>
            </div>
        </div>
    </div>
    <!-- /site__content -->

<?php get_footer();
