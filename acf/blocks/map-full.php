<?php


// Create id attribute allowing for custom "anchor" value.
$id = 'block-map-full-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-map-full';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.8515253203223!2d23.50082042553227!3d59.95418249767039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468d07e1fff426b5%3A0x5dbf02a6c042157!2sBagg%C3%B6v%C3%A4gen%20401%2C%2010600%20Raseborg!5e1!3m2!1sen!2sfi!4v1674205940904!5m2!1sen!2sfi" width="" height="600" style="border:0;width:100%;display:block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>