<div class="single-post-meta__social-icons">
	<!-- WhatsApp Share Icon -->										
	<a href="https://api.whatsapp.com/send?text=<?php echo urlencode(get_the_title() . ' - ' . get_the_permalink()); ?>" target="_blank" rel="noopener noreferrer">
		<img src="<?php echo get_theme_file_uri('images/social-whatsapp.svg'); ?>" alt="Share on WhatsApp" />
	</a>
	<!-- Email Share Icon -->
	<a href="mailto:?subject=<?php echo rawurlencode(get_the_title()); ?>&amp;body=<?php echo rawurlencode(get_the_permalink()); ?>" target="_blank" rel="noopener noreferrer">
		<img src="<?php echo get_theme_file_uri('images/social-mail.svg'); ?>" alt="Share via Email" />
	</a>
	<!-- Twitter Share Icon -->
	<a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title() . ' - ' . get_the_permalink()); ?>" target="_blank" rel="noopener noreferrer">
		<img src="<?php echo get_theme_file_uri('images/social-twitter.svg'); ?>" alt="Share on Twitter" />
	</a>
	<!-- Facebook Share Icon -->
	<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_the_permalink()); ?>" target="_blank" rel="noopener noreferrer">
		<img src="<?php echo get_theme_file_uri('images/social-facebook.svg'); ?>" alt="Share on Facebook" />
	</a>
</div>