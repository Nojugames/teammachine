<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'block-hero-subpage-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-hero-subpage';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<div id="<?php echo esc_attr($id); ?>" style="background-image: url('<?php echo esc_url(get_field('background_image')); ?>')" class="<?php echo esc_attr($className); ?> container-fluid">
    <div class="cover-hero">
    </div>
        <div class="container content-container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                    ?>
                    <h1><?php if(get_field('heading')): the_field('heading'); else: the_title(); endif; ?></h1>
                    <p class="hero-text"><?php the_field('text'); ?></p>
                </div>
            </div>
        </div>
</div>