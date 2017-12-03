<?php get_header( );?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
          <h1><?php the_title();?></h1>
          <p><?php the_content(); ?></p>
		<?php // Individual Post Styling ?>

	<?php endwhile; ?>

		<?php // Navigation ?>

	<?php else : ?>

		<?php // No Posts Found ?>

<?php endif; ?>



<?php get_footer( );?>
