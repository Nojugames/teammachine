<?php get_header(); ?>

    <main id="content" role="main" class="wrapper">
        <header class="block-hero-subpage container-fluid" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/lehma.jpg')">

            <div class="cover-hero">
            </div>
            <div class="container content-container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                        }
                        ?>
                        <h1 class="entry-title" itemprop="name"><?php echo pll__('Reseptit'); // the_archive_title(); ?></h1>
                    </div>
                </div>
            </div>

        </header>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('entry'); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part('nav', 'below'); ?>
    </main>
<?php get_footer(); ?>