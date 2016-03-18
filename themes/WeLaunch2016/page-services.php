<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Name
 */

get_header(); ?>

<div class="hero-lg" style="background-image: url('<?php the_field('hero_img'); ?>');'">
	<div class="hero-lg__overlay">
		<em><?php the_title(); ?></em>
		<h1><?php the_field('hero_header'); ?></h1>
	</div>
</div>
<section class="clearfix sr pad" id="services-block">
	<div class="clearfix">
		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sr">
				<div class="panel panel-default panel-services eq-height">
					<img src="<?php echo content_url(); ?>/uploads/2014/08/hero-filler.jpg" class="img-responsive panel-services-img" style="height:285px;">
					<h4>Branding</h4>
					<p>We work with a multitude of businesses from start-up companies to large corporates ensuring that their visual communication is a reflection of their current and future business aspirations.</p>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sr">
				<div class="panel panel-default panel-services eq-height">
					<img src="<?php echo content_url(); ?>/uploads/2014/08/hero-filler.jpg" class="img-responsive panel-services-img" style="height:285px;">
					<h4>Digital</h4>
					<p>We are a different kind of agency for different times. Products are being purchased increasingly through mobile devices year on year and e-commerce sites need to adapt to a vast array of platforms, search engines and devices. </p>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sr">
				<div class="panel panel-default panel-services eq-height">
					<img src="<?php echo content_url(); ?>/uploads/2014/08/hero-filler.jpg" class="img-responsive panel-services-img" style="height:285px;">
					<h4>Print</h4>
					<p>We have worked across a diverse number of industries from international airlines and government organisations to entertainment and luxury travel brands, and a whole lot more over the years.</p>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sr">
				<div class="panel panel-default panel-services eq-height">
					<img src="<?php echo content_url(); ?>/uploads/2014/08/hero-filler.jpg" class="img-responsive panel-services-img" style="height:379px;">
					<h4>Motion</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. </p>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sr">
				<div class="panel panel-default panel-services eq-height">
					<img src="<?php echo content_url(); ?>/uploads/2014/08/hero-filler.jpg" class="img-responsive panel-services-img" style="height:379px;">
					<h4>Strategy</h4>
					<p>At We Launch, we create brands. We launch new ones, evolve existing ones and reinvigorate those that have lost their way.</p>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sr">
				<div class="panel panel-default panel-services eq-height">
					<img src="<?php echo content_url(); ?>/uploads/2014/08/hero-filler.jpg" class="img-responsive panel-services-img" style="height:379px;">
					<h4>Events</h4>
					<p>We understand the importance of maximising the potential of an event.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
