<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'block-image-text-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-image-text';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
if (get_field('background_color')) {
    $className .= ' background-' . get_field('background_color');
}

$image = get_field('image');
$size = 'large'; // (thumbnail, medium, large, full or custom size)
$button = get_field('button');
if ($button) {
    $button_url = $button['url'];
    $button_title = $button['title'];
    $button_target = $button['target'] ? $button['target'] : '_self';
}
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container">
    <div class="row">
        <div class="col-lg-6 pe-3 mb-3 mb-lg-0">
            <?php if ($image): ?>
                <?php echo wp_get_attachment_image($image, $size); ?>
            <?php endif; ?>
        </div>
        <div class="ps-3 col-lg-6 d-flex justify-content-center align-items-start flex-column">
            <div class="content-container">
                <p class="mb-4"><?php the_field('top_title'); ?></p>
                <h2 class="mb-4"><?php the_field('title'); ?></h2>
                <?php the_field('text'); ?>
                <?php if ($button): ?>
                    <a class="btn btn-primary bg-green btn-lg" href="<?php echo esc_url($button_url); ?>"
                       target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>