<div class="col-md-4">
	<div class="post">
		<?php the_post_thumbnail( "large", array(
			"class" => "img-fluid",
			"alt"   => get_the_title()
		) ); ?>

		<h2>
			<?php the_title(); ?>
		</h2>
		
		<p>
			<strong>
				<?php the_author(); ?>
			</strong><br/>
			<?php echo get_the_date( "dS F, Y" ) ?>
		</p>

		<?php the_excerpt(); ?>
	</div>

</div>