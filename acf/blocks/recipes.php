<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'block-recipes-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-recipes';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
$args = array(
    'post_type' => 'reseptit',
    'posts_per_page' => 12,
);
$the_query = new WP_Query( $args );

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid bg-grey">
    <div class="container">
        <div class="text-center">
            <?php if(get_field('title')): ?>
            <h2><?php the_field('title');?></h2>
            <p class="text-black"><?php the_field('text');?></p>
            <?php endif; ?>
        </div>

        <?php if ( $the_query->have_posts() ) : ?>
            <div class="row py-5">
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
                            <div class="ratio ratio-16x9 img-fluid">
                                <?php echo $thumbnail; ?>
                            </div>
                            <div class="text-container">
                                <h3 class=""><?php echo esc_html($title); ?></h3>
                                <p class="d-inline-flex justify-content-between">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M184 88c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3V245.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5V416c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V389.2C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112h32c24 0 46.2 7.5 64.4 20.3zM448 416V394.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176h32c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2V416c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32zM568 88c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zm8 157.7v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 160c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64zM240 304c0 16.2 6 31 16 42.3V261.7c-10 11.3-16 26.1-16 42.3zm144-42.3v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2V448c0 17.7-14.3 32-32 32H288c-17.7 0-32-14.3-32-32V405.2c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112h32c61.9 0 112 50.1 112 112z"/></svg> 12</span>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 24C0 10.75 10.75 0 24 0H360C373.3 0 384 10.75 384 24C384 37.25 373.3 48 360 48H352V66.98C352 107.3 335.1 145.1 307.5 174.5L225.9 256L269.7 299.8C260.9 320.8 256 343.8 256 368C256 427.5 285.6 480.1 330.8 512H24C10.75 512 0 501.3 0 488C0 474.7 10.75 464 24 464H32V445C32 404.7 48.01 366 76.52 337.5L158.1 256L76.52 174.5C48.01 145.1 32 107.3 32 66.98V47.1H24C10.75 47.1 0 37.25 0 23.1V24zM99.78 128H284.2C296.1 110.4 304 89.03 304 66.98V48H80V66.98C80 89.03 87 110.4 99.78 128H99.78zM576 368C576 447.5 511.5 512 432 512C352.5 512 288 447.5 288 368C288 288.5 352.5 224 432 224C511.5 224 576 288.5 576 368zM415.1 304V368C415.1 376.8 423.2 384 431.1 384H480C488.8 384 496 376.8 496 368C496 359.2 488.8 352 480 352H447.1V304C447.1 295.2 440.8 288 431.1 288C423.2 288 415.1 295.2 415.1 304V304z"/></svg> 60 min</span>
                                </p>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php
        $featured_posts = get_field('recipes');
        if( $featured_posts ): ?>
            <div class="row">
                <?php foreach( $featured_posts as $featured_post ):
                    $permalink = get_permalink( $featured_post->ID );
                    $title = get_the_title( $featured_post->ID );
                    $excerpt = get_the_excerpt( $featured_post->ID );
                    $custom_field = get_field( 'field_name', $featured_post->ID );
                    $thumbnail = get_the_post_thumbnail( $featured_post->ID, 'large' )
                    ?>
                    <div class="col-md-6 col-lg-3 reference-column">
                        <a href="<?php echo esc_url($permalink); ?>">
                            <div class="ratio ratio-1x1 img-fluid">
                                <?php echo $thumbnail; ?>
                            </div>
                            <h3 class="mt-3"><?php echo esc_html($title); ?></h3>
                            <p><?php echo esc_html($excerpt); ?></p>

                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>