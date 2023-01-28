<?php


// Create id attribute allowing for custom "anchor" value.
$id = 'block-cta-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-cta';
if ( ! empty( $block['className'] ) ) {
	$className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$className .= ' align' . $block['align'];
}
$button = get_field('button');
if( $button ) {
    $button_url = $button['url'];
    $button_title = $button['title'];
    $button_target = $button['target'] ? $button['target'] : '_self';
}

$button_2 = get_field('button_2');
if( $button_2 ) {
    $button_2_url = $button_2['url'];
    $button_2_title = $button_2['title'];
    $button_2_target = $button_2['target'] ? $button_2['target'] : '_self';
}

?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr($className); ?> container-fluid py-5">
    <div class="container d-flex flex-column flex-lg-row justify-content-lg-between align-items-lg-center">
        <div class="d-flex flex-column text-center text-lg-start">
            <h2><?php the_field( 'heading' ); ?></h2>
            <p><?php the_field( 'ingress' ); ?></p>
        </div>
        <div class="d-flex justify-content-center align-items-center flex-column flex-sm-row mt-4">
            <?php if( $button ): ?>
                <a class="btn btn-outline-black text-black btn-lg me-sm-5" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?> &raquo;</a>
            <?php endif; ?>
            <?php if( $button_2 ): ?>
                <a class="btn mt-5 mt-sm-0 btn-primary btn-lg bg-green text-white" href="<?php echo esc_url( $button_2_url ); ?>" target="<?php echo esc_attr( $button_2_target ); ?>"><?php echo esc_html( $button_2_title ); ?> &raquo;</a>
            <?php endif; ?>
        </div>
    </div>
</div>