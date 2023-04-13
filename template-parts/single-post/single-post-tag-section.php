<div class="section section__tag-section">
	<?php
		$tags = get_the_tags();
		if ( $tags ) :
	?>
	<div class="tags-list">
		<span><i>Tagged With:</i></span>
		<?php foreach ( $tags as $index => $tag ) : ?>
			<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="tag-link ghost-button ghost-button--small"><?php echo esc_html( $tag->name ); ?></a><?php if ( $index !== count( $tags ) - 1 )  ?>
		<?php endforeach; ?>
	</div>
		<?php endif; ?>
</div>