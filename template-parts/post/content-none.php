<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<section role="post">

	<div class="container">

		<header>
			<?php get_post_header() ?>
		</header>

		<?php if (is_active_sidebar("post-2")): ?>
          	<?php dynamic_sidebar("post-2"); ?>
      	<?php endif; ?>

		<?php the_content(); ?>

		<?php if (is_active_sidebar("post-3")): ?>
          	<?php dynamic_sidebar("post-3"); ?>
      	<?php endif; ?>
	</div>

</section>
