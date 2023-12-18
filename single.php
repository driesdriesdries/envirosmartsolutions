<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EnviroSmartSolutions
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<?php my_custom_breadcrumbs(); ?>
			
			<?php 
			$image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'banner-image')[0];
			?>
			<div class="single-post-banner" style="background-image: url('<?php echo $image_url; ?>');">
			</div>


			<div class="article-container">
				<div class="left">
					<!-- table of contents-->
					<div class="table-of-contents"></div>
				</div>
				<div class="right">
					<div class="section section__article-body">
						<?php
							if (have_posts()) :
								while (have_posts()) :
									the_post(); ?>
									<h1><?php the_title();?></h1>
									<div class="single-post-meta">
										<div class="single-post-meta__published-date">
											<?php
											// Get the published date
											$published_date = get_the_date( 'F j, Y' );

											// Display the published date
											echo '<p>' .'Published on: ' . $published_date . '</p>';
											?>
										</div>
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

									</div>
									<?php  the_content();
								endwhile;
							endif;
						?>
						<?php
						// Check if there are any rows in the 'sources' repeater field
						if( have_rows('sources') ): 
						?>
							<div class="article_sources">
								<h3 class="sources_heading">Article Sources</h3>
								<ul>
									<?php 
									// Loop through each row (source) and display its details
									while( have_rows('sources') ): the_row(); 
										$title = get_sub_field('source_title');
										$url = get_sub_field('source_url');
										$description = get_sub_field('source_description');
									?>
										<li>
											<strong><?php echo esc_html($title); ?></strong>
											<a href="<?php echo esc_url($url); ?>" target="_blank">Source Link</a>
											<p><?php echo esc_html($description); ?></p>
										</li>
									<?php 
									endwhile; 
									?>
								</ul>
							</div>
						<?php 
						// End if - only render the div and its contents if there are sources
						endif; 
						?>


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
					
						<div class="section section__post-navigation">
							<?php
								// Get the current post's category
								$categories = get_the_category();
								$category_id = ( ! empty( $categories ) ) ? $categories[0]->term_id : 0;

								// Get the next and previous posts in the same category
								$next_post = get_next_post( true, '', 'category' );
								$prev_post = get_previous_post( true, '', 'category' );

								// Output the links
								if ( $prev_post || $next_post ) {
									echo '<div class="post-navigation">';

									if ( $prev_post ) {
										echo '<div class="previous-post-link">';
										echo '<a class="ghost-button ghost-button--small" href="' . get_permalink( $prev_post->ID ) . '">&laquo; ' . esc_html( $prev_post->post_title ) . '</a>';
										echo '</div>';
									}

									if ( $next_post ) {
										echo '<div class="next-post-link">';
										echo '<a class="ghost-button ghost-button--small" href="' . get_permalink( $next_post->ID ) . '">' . esc_html( $next_post->post_title ) . ' &raquo;</a>';
										echo '</div>';
									}

									echo '</div>';
								}
							?>

						</div>

					</div>
				</div>
			</div>
			<?php  get_template_part( 'template-parts/newsletter'); ?>
		</div>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
