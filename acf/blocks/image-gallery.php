<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'block-image-gallery-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-image-gallery';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid py-5">
    <div class="container">
        <h2 class="mb-3">Galleria</h2>
        <p>This is a gallery</p>
        <?php
        $images = get_field('images');
        $size = 'large'; // (thumbnail, medium, large, full or custom size)
        if ($images): ?>
            <div class="row" id="teammachine-gallery">
                <?php foreach ($images as $image_id):
                    $imageSrc = wp_get_attachment_image_src($image_id,$size);
                    ?>
                    <div class="col-md-6 col-lg-3 p-2">
                        <div class="image-lift-box">

                                <a class="d-block ratio ratio-1x1" href="<?php echo $imageSrc[0]; ?>"
                                   data-pswp-width="<?php echo $imageSrc[1]; ?>"
                                   data-pswp-height="<?php echo $imageSrc[2]; ?>"
                                   target="_blank">
                                    <?php echo wp_get_attachment_image($image_id, 'medium'); ?>
                                </a>


                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <script type="module">
        import PhotoSwipeLightbox from '<?php echo get_stylesheet_directory_uri(); ?>/photoswipe/photoswipe-lightbox.esm.min.js';
        const lightbox = new PhotoSwipeLightbox({
            // may select multiple "galleries"
            gallery: '#teammachine-gallery',

            // Elements within gallery (slides)
            children: 'a',

            // setup PhotoSwipe Core dynamic import
            pswpModule: () => import('<?php echo get_stylesheet_directory_uri(); ?>/photoswipe/photoswipe.esm.min.js')
        });
        lightbox.init();
    </script>
</div>
