<div class="single-post-meta__published-date">
	<?php
		// Get the published date
		$published_date = get_the_date( 'F j, Y' );

		// Display the published date
		echo '<p>' .'Published on: ' . $published_date . '</p>';
	?>
</div>