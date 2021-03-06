<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package magicmakar
 */

?>

    <footer id="colophon" class="site-footer">
      <?php if ( has_nav_menu( 'menu-2' ) ) {
        // User has assigned menu to this location;
        // output it
        wp_nav_menu( array( 
            'theme_location' => 'menu-2',
            'menu_id'        => 'footer_menu',
            'menu_class'     => 'footer-menu'
        ) );
      }
      ?>
      <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
      <div id="footer-sidebar" class="footer-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'footer-1' ); ?>
      </div><!-- #footer-sidebar -->
      <?php else: ?>
      <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'magic-makar' ) ); ?>">
        <?php
          /* translators: %s: CMS name, i.e. WordPress. */
          printf( esc_html__( 'Proudly powered by %s', 'magic-makar' ), 'WordPress' );
          ?>
        </a>
        <span class="sep"> | </span>
          <?php
          /* translators: 1: Theme name, 2: Theme author. */
          printf( esc_html__( 'Theme: %1$s by %2$s.', 'magic-makar' ), 'magic-makar', '<a href="http://joshmakar.com">Josh Makar</a>' );
          ?>
        </div><!-- .site-info -->
      <?php endif; ?>
    </footer><!-- #colophon -->

  </div><!-- #content -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
