<?php get_header(); ?>
<?php
// the query
$args = array(
  'post_type' => 'post',
  'orderby'        => 'rand',
  'posts_per_page' => 3,
);
$the_query = new WP_Query( $args ); ?>


    <div class="block-hero-subpage container-fluid p-0">
        <div style="background-position:center; background-size:cover;background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID)) ?>')">
            <div class="d-flex justify-content-center align-items-center flex-column py-5 hero-info-container"
                 style="min-height: 400px; ">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
                    <h1 class="text-white" style="font-size:60px;"><?php the_title(); ?></h1>

            </div>
        </div>
    </div>

    <main id="content" role="main" class="container-xl">
        <div class="row my-5">
            <div class="col-12">
                <?php the_content(); ?>
            </div>

        </div>
    </main>
    <div id="" class="container-fluid bg-black">
        <div class="container">
            <div class="text-center">
                <h2><?php echo pll__('Muut julkaissut'); ?></h2>
            </div>
            <?php if ( $the_query->have_posts() ) : ?>
                <div class="row my-5">
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                        $currentPost = get_the_ID();
                        $permalink = get_permalink( $currentPost );
                        $title = get_the_title( $currentPost );
                        $excerpt = get_the_excerpt( $currentPost );
                        $custom_field = get_field( 'field_name', $currentPost );
                        $thumbnail = get_the_post_thumbnail( $currentPost, 'medium' )
                        ?>
                        <div class="col-md-12 col-lg-4 recipe-column">
                            <a class="recipe-card" href="<?php echo esc_url($permalink); ?>">
                                <div class="ratio ratio-4x3 img-fluid">
                                    <?php echo $thumbnail; ?>
                                </div>
                                <div class="text-container">
                                    <h3 class=""><?php echo esc_html($title); ?></h3>
                                    <?php the_excerpt(); ?>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>