<?php
/*
	Template Name: Home Page
 */


// Advanced Custom Fields
$code_design_paragraph_1 = get_field('code_design_paragraph_1');
$code_design_paragraph_2 = get_field('code_design_paragraph_2');
$code_design_button_1 = get_field('code_design_button_1');
$code_design_button_2 = get_field('code_design_button_2');
$code_design_button_text_1 = get_field('code_design_button_text_1');
$code_design_button_text_2 = get_field('code_design_button_text_2');
$services_icon = get_field('services_icon');
$about_us_title = get_field('about_us_title');
$about_us_text = get_field('about_us_text');
$portfolio_1 = get_field('portfolio_1');
$portfolio_2 = get_field('portfolio_2');
$portfolio_3 = get_field('portfolio_3');
$portfolio_4 = get_field('portfolio_4');
$portfolio_5 = get_field('portfolio_5');


get_header(); ?>
<section id="code-design-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="box-code-design">
					<h4><span class="light">Best</span>Design</h4>
					<p><?php echo $code_design_paragraph_1; ?></p>
					<a href="#" class="button"><?php echo $code_design_button_text_1; ?></a>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="box-code-design">
					<h4><span class="light">Best</span>Code</h4>
					<p><?php echo $code_design_paragraph_2; ?></p>
					<a href="#" class="button"><?php echo $code_design_button_text_2; ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="whatwedo-section">
	<div class="container">
		<div class="section-header">
			<h2>What we do?</h2>
		</div>
		<div class="row">
			<?php $loop = new WP_Query (array('post_type' => 'services', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post() ?>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 option">
					<i class="<?php the_field('services_icon'); ?>"></i>
					<h4><?php the_title(); ?></h4>
					<p><?php the_field('services_text'); ?></p>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="centered">
			<a href="#" class="button">Click Me!</a>
		</div>
	</div>
</section>
<section id="portfolio-section">
	<!-- Slider -->
	<div id="scroll-feature" class="horiz-scroll">
		<div class="scroller">
			<div class="left-scroll">
				<p class="fa fa-angle-left">&laquo;</p>
			</div>
			<div class="right-scroll">
				<p class="fa fa-angle-right">&raquo;</p>
			</div>
			<div class="scroll-images scrollable-x">
				<?php if( !empty($portfolio_1) ) : ?>
					<img src="<?php echo $portfolio_1['url']; ?>" alt="<?php echo $portfolio_1['alt']; ?>">
				<?php endif; ?>
				<?php if( !empty($portfolio_2) ) : ?>
					<img src="<?php echo $portfolio_2['url']; ?>" alt="<?php echo $portfolio_2['alt']; ?>">
				<?php endif; ?>
				<?php if( !empty($portfolio_3) ) : ?>
					<img src="<?php echo $portfolio_3['url']; ?>" alt="<?php echo $portfolio_3['alt']; ?>">
				<?php endif; ?>
				<?php if( !empty($portfolio_4) ) : ?>
					<img src="<?php echo $portfolio_4['url']; ?>" alt="<?php echo $portfolio_4['alt']; ?>">
				<?php endif; ?>
				<?php if( !empty($portfolio_5) ) : ?>
					<img src="<?php echo $portfolio_5['url']; ?>" alt="<?php echo $portfolio_5['alt']; ?>">
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<section id="about-us-section">
	<div class="container">
		<div class="section-header">
			<h2><?php echo $about_us_title; ?></h2>
			<p class="lead"><?php echo $about_us_text; ?></p>
		</div>
		<div class="row">
			<?php $loop2 = new WP_Query( array( 'post_type' => 'members', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
			<?php while( $loop2->have_posts() ) : $loop2->the_post(); ?>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail(array(116, 115));
						}
					?>
					<h4><?php the_title(); ?></h4>
					<p><?php the_content(); ?></p>
				</div>
			<?php endwhile; wp_reset_query(); ?>
		</div>
		<div class="centered">
			<a href="#" class="button">Click Me!</a>
		</div>
	</div>
</section>
<section id="map">
</section>

<?php
get_footer();
