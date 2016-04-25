<?php get_header(); ?>

<div class='container'>

	<div class='row'>

		<div class='col-md-3'>

			<?php get_sidebar(); ?>

		</div>


		<div class='col-md-9'>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>


			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

		</div>

	</div>

</div>

<?php get_footer(); ?>