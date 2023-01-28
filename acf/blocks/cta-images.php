<?php


// Create id attribute allowing for custom "anchor" value.
$id = 'block-cta-images-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-cta-images';
if ( ! empty( $block['className'] ) ) {
	$className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$className .= ' align' . $block['align'];
}

?>

<div id="<?php echo esc_attr( $id ); ?>" class="">

	<?php if ( have_rows( 'images' ) ): ?>
        <div class="row cols-<?php echo count( get_field( 'images' ) ); ?>">
			<?php while ( have_rows( 'images' ) ) : the_row(); ?>
                <div class="col">
					<?php $image = get_sub_field( 'image' );
					$size        = 'large'; // (thumbnail, medium, large, full or custom size)
					if ( $image ) {
						echo wp_get_attachment_image( $image, $size, false, array( 'class' => 'img-fluid w-100' ) );
					}

					?>
                    <h2><?php the_sub_field( 'title' ); ?></h2>
                    <p><?php the_sub_field( 'text' ); ?></p>

                </div>
			<?php endwhile; ?>

        </div>
	<?php endif; ?>
</div>