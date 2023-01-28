<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'block-image-lift-3-boxes-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-image-lift-3-boxes';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid my-5 pt-5 pb-3">
    <div class="container">
        <div class="row">

            <?php
            $imageLifts = get_field('imagelifts');
            if ($imageLifts): ?>
                <div class="col-lg-4">

                    <div class="image-lift-box">
                        <div class="ratio ratio-16x9">
                            <?php if ($imageLifts['image_lift_1']['image']): ?>
                                <?php echo wp_get_attachment_image($imageLifts['image_lift_1']['image'], 'large','', array('class' => '')); ?>
                            <?php endif; ?>
                        </div>
                        <a href="<?php echo esc_url($imageLifts['image_lift_1']['link']['url']); ?>" class="content">
                            <span><?php echo esc_html($imageLifts['image_lift_1']['link']['title']); ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image-lift-box">
                        <div class="ratio ratio-16x9">
                        <?php if ($imageLifts['image_lift_2']['image']): ?>
                            <?php echo wp_get_attachment_image($imageLifts['image_lift_2']['image'], 'large','', array('class' => '')); ?>
                        <?php endif; ?>
                        </div>
                        <a href="<?php echo esc_url($imageLifts['image_lift_2']['link']['url']); ?>" class="content">
                            <span><?php echo esc_html($imageLifts['image_lift_2']['link']['title']); ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image-lift-box">
                        <div class="ratio ratio-16x9">
                        <?php if ($imageLifts['image_lift_3']['image']): ?>
                            <?php echo wp_get_attachment_image($imageLifts['image_lift_3']['image'], 'large','', array('class' => '')); ?>
                        <?php endif; ?>
                        </div>
                        <a href="<?php echo esc_url($imageLifts['image_lift_3']['link']['url']); ?>" class="content">
                            <span><?php echo esc_html($imageLifts['image_lift_3']['link']['title']); ?></span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>


        </div>
    </div>
</div>