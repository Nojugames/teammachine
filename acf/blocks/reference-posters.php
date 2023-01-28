<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'reference-posters-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-reference-posters';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p>--- Some references</p>
                <h2>Latest References</h2>
                <p>You may be interested in our references. We want to share more helpful references with you about our digital life and methods.</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-end align-items-center">
                <a href="#">ALL CASES &raquo;</a>
            </div>
            <h3>Prject Name</h3>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="ratio ratio-4x3">
                    <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/demomuffe.jpg" alt="">
                </div>
                <h3>Prject Name</h3>
            </div>
            <div class="col-lg-3">
                <div class="ratio ratio-4x3">
                    <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/demomuffe.jpg" alt="">
                </div>
                <h3>Prject Name</h3>
            </div>
            <div class="col-lg-3">
                <div class="ratio ratio-4x3">
                    <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/demomuffe.jpg" alt="">
                </div>

            </div>
            <div class="col-lg-3">
                <div class="ratio ratio-4x3">
                    <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/demomuffe.jpg" alt="">
                </div>
                <h3>Prject Name</h3>
            </div>

        </div>
    </div>
</div>