<?php


// Create id attribute allowing for custom "anchor" value.
$id = 'block-contact-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-contact';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column py-5">

            </div>
        </div>
    </div>
</div>