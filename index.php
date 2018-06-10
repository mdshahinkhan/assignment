<?php get_header(); ?>
<div class="posts">
    <div class="container">
        <div class="row">
			<?php $post_count = 0;
			while ( have_posts() ) : the_post(); ?>
				<?php if ( $post_count % 4 == 0 ) : ?>
					<?php get_template_part( "/post-template/full-width" ) ?>
				<?php else : ?>
					<?php get_template_part( "/post-template/three-col" ) ?>
				<?php endif; ?>

				<?php $post_count++;
			endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>