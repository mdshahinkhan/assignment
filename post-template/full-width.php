<div class="post">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="post-title">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<p>
					<strong>
						<?php the_author(); ?>
					</strong><br/>
					<?php echo get_the_date( "dS F, Y" ) ?>
				</p>
				<?php echo get_the_tag_list( "<ul class=\"list-unstyled\">
                                <li>", "</li><li>", "</ul>" ); ?>
			</div>
			<div class="col-md-8">
				<p>
					<?php the_post_thumbnail( "large", array(
						"class" => "img-fluid",
						"alt"   => get_the_title()
					) ); ?>
				</p>
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>
</div>
