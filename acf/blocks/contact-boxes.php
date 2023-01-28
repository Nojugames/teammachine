<?php


// Create id attribute allowing for custom "anchor" value.
$id = 'block-contact-boxes-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-contact-boxes';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center mb-5">
                <h2>Ta kontakt</h2>
                <p>Fyll i formuläret, ring eller skicka e-post. Man når oss också på Whatsapp, Facebook, Instagram etc. etc.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 order-3 order-lg-1 map-container">

                <?php echo do_shortcode('[gravityform id="1" title="true"]'); ?>
            </div>
            <div class="col-lg-6 offset-lg-1 order-2">
                    <div class="contact-box-container">
                        <div class="contact-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c.2 35.5-28.5 64.3-64 64.3H128.1c-35.3 0-64-28.7-64-64V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L416 100.7V64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V185l52.8 46.4c8 7 12 15 11 24zM248 192c-13.3 0-24 10.7-24 24v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V216c0-13.3-10.7-24-24-24H248z"/></svg>
                            <div class="content-container">
                                <p class="contact-type"><?php echo pll__('Osoite'); ?>:</p>
                                <p><?php the_field('address'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-box-container">
                        <div class="contact-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                            <div class="content-container">
                                <p class="contact-type"><?php echo pll__('Sähköpostiosoite'); ?>:</p>
                                <p><?php the_field('email'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-box-container">
                        <div class="contact-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                            <div class="content-container">
                                <p class="contact-type"><?php echo pll__('Puhelinnumero'); ?>:</p>
                                <p><?php the_field('phone'); ?></p>
                            </div>
                        </div>

                    </div>
            </div>

        </div>
    </div>
</div>