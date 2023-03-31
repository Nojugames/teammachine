<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'block-product-cards-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-product-cards';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$args = array(
    'post_type' => 'product',
    'posts_per_page' => 12,
);
$the_query = new WP_Query( $args );

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid mt-5 py-5"
     style="background-color:black;">
    <div class="container">
        <div class="text-center">
            <h2><?php the_field('title'); ?></h2>
            <p><?php the_field('text'); ?></p>
        </div>

        <?php if ( $the_query->have_posts() ) : ?>
            <div class="row">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                    $currentPost = get_the_ID();
                    $permalink = get_permalink( $currentPost );
                    $title = get_the_title( $currentPost );
                    $excerpt = get_the_excerpt( $currentPost );
                    $custom_field = get_field( 'field_name', $currentPost );
                    $thumbnail = get_the_post_thumbnail( $currentPost, 'medium' )
                    ?>
                    <div class="col-md-6 col-lg-3 product-card">
                        <a href="<?php the_permalink(); ?>" class="product-inner" title="<?php the_sub_field('product_name'); ?>">
                            <div class="ratio ratio-1x1 img-fluid">
                                <?php the_post_thumbnail('medium');?>
                            </div>
                            <div class="product-info">
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                                    <?php the_excerpt(); ?>

                                <span class="fake-link">
                                    Lue lisää &raquo;
                                </span>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
