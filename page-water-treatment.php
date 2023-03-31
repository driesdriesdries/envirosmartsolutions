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
			<?php //  get_template_part( 'template-parts/soil-gel/testimonial' ); ?>
			<?php // get_template_part( 'template-parts/soil-gel/applications' ); ?>
		</div>

		<div class="container container__3">
			<?php  // get_template_part( 'template-parts/soil-gel/benefits' ); ?>
		</div>

		<div class="container container__4">
			<div class="section section__faq">
				<h2>FAQ</h2>
				<!-- //Calling the accorion function -->
				<?php 
					$items = array(
						array(
							'heading' => 'How does water treatment help remove harmful contaminants from drinking water?',
							'content' => 'Water treatment is designed to remove harmful contaminants from drinking water by using physical, chemical, or biological methods to purify the water. Contaminants can include bacteria, viruses, chemicals, and other harmful substances. Treatment methods may include filtration, chlorination, ozonation, and ultraviolet (UV) radiation to remove these contaminants and make the water safe for consumption.'
						),
						array(
							'heading' => 'What types of water treatment systems are available for home use?',
							'content' => 'There are many types of water treatment systems available for home use, depending on the specific needs of the household. These include point-of-entry systems, which treat all water entering the home, and point-of-use systems, which treat water at a specific location, such as a faucet or showerhead. Popular systems for home use include activated carbon filters, reverse osmosis systems, and UV purification systems.'
						),
						array(
							'heading' => 'Is it necessary to treat well water, or is it already safe for consumption?',
							'content' => 'Whether well water needs to be treated depends on a number of factors, including the quality of the water and the presence of contaminants. While some well water may be safe for consumption, it is important to have the water tested regularly to ensure that it is free from harmful substances. If testing reveals that the water is contaminated, treatment may be necessary to remove the contaminants and make the water safe to drink.'
						),
						// add more items as needed...
					);

					generateAccordion($items); 
				?>	
			</div>
			<?php 
				//$countries = 'Whatever proof';
				// echo generate_social_proof($countries);				
			?>
		</div>
	</main><!-- #main -->
<?php
get_footer();