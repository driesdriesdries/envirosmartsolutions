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
		
		<div class="container container__1" style="background-image: url(<?php echo get_theme_file_uri("images/hero-desktop.png") ?>);">
			<div class="section">
				<h1>Boost crop yield with Soil Gel while </br> saving on valuable resources</h1>
				<p class="tagline">Grow Smarter, Not Harder with Water-Absorbent Polymers</br> that work in all climates</p>
				<div class="button-box">
					<a href="#" class="button button__primary">CONTACT</a>
					<a href="#" class="button button__secondary">LEARN MORE</a>
				</div>
			</div>

		</div>
		
		<div class="container container__2">
			<div class="section section__how-it-works">
				<h2>How it works</h2>
				
				<div class="content">
					<div class="left">
						<img src="<?php echo get_theme_file_uri("images/polymerplate.png") ?>" alt="image of polymers on a plate">
						<p>Soil-Gel is a Potassium based </br> Super Absorbent Polymer for Agriculture.</p>
					</div>
					<div class="right">
						<img src="<?php echo get_theme_file_uri("images/polymerroot.png") ?>" alt="image of polymer mixed into soil">
						<p>It acts as a water-retaining agent for plants by </br> absorbing, storing and releasing water at the roots when needed.</p>
					</div>
				</div>

			</div>
			
			<div class="section section__testimonial">
				<h4><i>“SoilGel is completely environmentally friendly and does not present any toxins or contamination for plants, soil, humans, or the environment.”</i></h4>
				<a href="#" class="button button__primary">CONTACT</a>
			</div>
			
			<div class="section section__application">
				<div class="copy">
					<h2>Applications</h2>
					<p>Soil-Gel is suited for multiple types of application and can benefit any plant</p>
				</div>
				<div class="image-grid">
					
					<div class="image-grid__grid-item">
						<img class="image-grid__grid-item--image" src="<?php echo get_theme_file_uri('images/seeds.png'); ?>" alt="">
						<p class="image-grid__grid-item--caption">Seeds</p>
					</div>
					<div class="image-grid__grid-item">
						<img class="image-grid__grid-item--image" src="<?php echo get_theme_file_uri('images/nurseries.png'); ?>" alt="">
						<p class="image-grid__grid-item--caption">Nurseries</p>
					</div>
					<div class="image-grid__grid-item">
						<img class="image-grid__grid-item--image" src="<?php echo get_theme_file_uri('images/grasslands.png'); ?>" alt="">
						<p class="image-grid__grid-item--caption">Grasslands</p>
					</div>
					<div class="image-grid__grid-item">
						<img class="image-grid__grid-item--image" src="<?php echo get_theme_file_uri('images/herbaceus.png'); ?>" alt="">
						<p class="image-grid__grid-item--caption">Herbaceus Crops</p>
					</div>
					<div class="image-grid__grid-item">
						<img class="image-grid__grid-item--image" src="<?php echo get_theme_file_uri('images/horticultural.png'); ?>" alt="">
						<p class="image-grid__grid-item--caption">Horticultural Crops</p>
					</div>
					<div class="image-grid__grid-item">
						<img class="image-grid__grid-item--image" src="<?php echo get_theme_file_uri('images/cutflowers.png'); ?>" alt="">
						<p class="image-grid__grid-item--caption">Cut Flowers</p>
					</div>
					<div class="image-grid__grid-item">
						<img class="image-grid__grid-item--image" src="<?php echo get_theme_file_uri('images/reforestation.png'); ?>" alt="">
						<p class="image-grid__grid-item--caption">Reforestation</p>
					</div>
					<div class="image-grid__grid-item">
						<img class="image-grid__grid-item--image" src="<?php echo get_theme_file_uri('images/treecrops.png'); ?>" alt="">
						<p class="image-grid__grid-item--caption">Tree Crops</p>
					</div>
					<div class="image-grid__grid-item">
						<img class="image-grid__grid-item--image" src="<?php echo get_theme_file_uri('images/protectedcrops.png'); ?>" alt="">
						<p class="image-grid__grid-item--caption">Protected Crops</p>
					</div>
					
				</div>
			</div>
		</div>

		<div class="container container__3">
			<div class="section section__benefits">
				<h2>Benefits</h2>
				<div class="card-section">
					<div class="card">
						<img src="<?php echo get_theme_file_uri('images/users.png'); ?>" alt="">
						<h3>Users</h3>
						<ul>
							<li>Save Water</li>
							<li>Irrigate less - Reduce frequency</li>
							<li>Minimise Evaporation</li>
							<li>Store Water</li>
							<li>Save Electricity & Combat loadshedding </li>
						</ul>
					</div>
					<div class="card">
					<img src="<?php echo get_theme_file_uri('images/plants.png'); ?>" alt="">
						<h3>Plants</h3>
						<ul>
							<li>Increase production</li>
							<li>Accelerate and enrich root development</li>
							<li>Improve plant health and seed germination</li>
							<li>Promote early hatching and healthy plant</li>
							<li>Increase rate of survival and delay wilting</li>
							<li>Increase resistance to water stress</li>
							<li>Save Fertilizer, Reduces fertilizer usage</li>
						</ul>
					</div>
					<div class="card">
					<img src="<?php echo get_theme_file_uri('images/soil.png'); ?>" alt="">
						<h3>Soil</h3>
						<ul>
							<li>Improve Soil Structure Soil activator</li>
							<li>Prevent hardening and compaction</li>
							<li>Improve aeration capacity – Provides potassium</li>
							<li>Improve retention capacity up to 85% in sandy soils</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container container__4">
			<div class="section section__faq">
				<h2>FAQ</h2>
			</div>
			
			<div class="section section__social-proof">
				<h4>
					<i>Soil Gel is Utilised worldwide: Europe, North America, China, India, Japan, Australia, Indonesia, Malaysia, South Korea, Brazil, Mexico, South Africa and Middle East</i>
				</h4>
				<a href="#" class="button button__primary">CONTACT</a>
			</div>
		</div>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
