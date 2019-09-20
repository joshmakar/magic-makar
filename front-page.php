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
 * @package magicmakar
 */

get_header();
?>

  <div class="greeter_outer-wrapper">
    <div class="greeter_inner-wrapper">
			<div class="greeter_image">
				<img src="<?php echo get_template_directory_uri() . '/media/images/joshmakar-glasses-mobile.png'; ?>" alt="That's me">
			</div>
      <div class="greeter_text">
        <span>I'm a Designer</span>
        <span>I'm a Coder</span>
        <span>I'm a Developer</span>
      </div>
    </div>
  </div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page-alt' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
