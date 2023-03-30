<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EnviroSmartSolutions
 */

get_header();
?>
	<main id="primary" class="site-main soil-gel-page">
		<!-- //Call the Hero function -->
		<?php
			$h1Text = 'Comprehensive Water Treatment Solutions for a Cleaner Future';
			$pText = "Purifying Today's Water for Tomorrow's World";
			$bgImageURL = 'images/water-treatment/hero3.png';

			echo createHeroSection($h1Text, $pText, $bgImageURL);
		?>

		
		<div class="container container__2">
			<?php  get_template_part( 'template-parts/soil-gel/how-it-works' ); ?>
			<?php  get_template_part( 'template-parts/soil-gel/testimonial' ); ?>
			<?php  get_template_part( 'template-parts/soil-gel/applications' ); ?>
		</div>

		<div class="container container__3">
			<?php  get_template_part( 'template-parts/soil-gel/benefits' ); ?>
		</div>

		<div class="container container__4">
			<div class="section section__faq">
				<h2>FAQ</h2>
				<!-- //Calling the accorion function -->
				<?php 
					$items = array(
						array(
							'heading' => 'x',
							'content' => 'y'
						),
						array(
							'heading' => 'x',
							'content' => 'y'
						),
						array(
							'heading' => 'x',
							'content' => 'y'
						),
						// add more items as needed...
					);

					generateAccordion($items); 
				?>	
			</div>
			<?php 
				$countries = 'Whatever proof';
				echo generate_social_proof($countries);				
			?>
		</div>
	</main><!-- #main -->
<?php
get_footer();