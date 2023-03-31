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
		<!-- //Call the hero function -->
		<?php
			$h1Text = 'Boost crop yield with Soil Gel while saving on valuable resources';
			$pText = 'Grow Smarter, Not Harder with Water-Absorbent Polymers</br> that work in all climates';
			$bgImageURL = 'images/soil-gel/hero-desktop.png';

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
							'heading' => 'Why should I use soil gel?',
							'content' => 'You should use Soil Gel because it offers numerous benefits to both users and plants, including water savings, increased crop yield, improved soil structure, and reduced fertilizer usage. It is an environmentally friendly and cost-effective solution that can significantly enhance the growth and health of your plants, making it an ideal choice for a wide range of applications.'
						),
						array(
							'heading' => 'What makes soil gel unique?',
							'content' => 'Soil Gel is unique because it is a potassium-based super absorbent polymer designed specifically for agricultural use. It has the ability to absorb, store, and release water directly at the roots of the plants when needed, ensuring optimal hydration and nutrient delivery. Soil Gel is completely environmentally friendly, non-toxic, and safe for plants, soil, humans, and the environment. Its versatile application and proven success in various climates and regions worldwide make it a highly effective and reliable solution for a variety of agricultural needs.'
						),
						array(
							'heading' => 'How do I use Soil Gel for different types of plants and applications?',
							'content' => '							
							<p>The application of Soil Gel varies depending on the type of plant and the specific requirements of each situation. Here are some general guidelines for using Soil Gel in different scenarios:</p>
							<ul>
							  <li><strong>Seeds:</strong> Mix Soil Gel with the planting soil or substrate at a ratio of 1:100 (1 part Soil Gel to 100 parts soil/substrate) before sowing the seeds.</li>
							  <li><strong>Nurseries:</strong> Incorporate Soil Gel into the potting mix at a ratio of 1:100 (1 part Soil Gel to 100 parts soil/substrate).</li>
							  <li><strong>Transplanting:</strong> When transplanting seedlings or plants, create a small hole in the soil, apply a layer of Soil Gel, and then place the plant\'s roots on top. Fill the hole with soil and water thoroughly to activate the Soil Gel.</li>
							  <li><strong>Established plants:</strong> Apply Soil Gel by making small holes around the base of the plant (approximately 10-15 cm deep) and filling them with the Soil Gel. Water the area thoroughly to activate the Soil Gel.</li>
							</ul>
							<p>Always remember to pre-hydrate the Soil Gel with water before mixing it with soil or applying it to plants, following the manufacturer\'s recommendations for the specific product. The recommended ratios and application methods may vary depending on the specific needs of your plants and local conditions, so be sure to consult an expert or conduct a small-scale trial before applying Soil Gel to your entire crop.</p>
							'
						),
						// add more items as needed...
					);

					generateAccordion($items); 
				?>
			</div>
		
			<!-- //Calling the social proof function -->
			<?php 
				$countries = 'Europe, North America, China, India, Japan, Australia, Indonesia, Malaysia, South Korea, Brazil, Mexico, South Africa and Middle East';
				echo generate_social_proof($countries);				
			?>
		</div>
	</main><!-- #main -->
<?php
get_footer();


