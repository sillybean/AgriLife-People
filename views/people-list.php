<?php

if ( $people->have_posts() ) : ?>

	<ul class="people-listing-ul">
		
	<?php while ( $people->have_posts() ) : $people->the_post(); ?>

		<?php
		if ( get_field( 'ag-people-photo' ) ) {
			$image = get_field( 'ag-people-photo' );
			$image_src = $image['sizes']['people_archive'];
			$image_alt = the_title( '', '', false );
		} else {
			$image_src = PEOPLE_PLUGIN_DIR_URL . 'img/agrilife-default-people-image-single.png';
			$image_alt = 'No photo found';
		}

		?>
		<li class="people-listing-item">
			<div class="role people-container">
				<div class="people-image">
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<img src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_alt; ?>" width="70" height="70" />
					</a>
				</div>
				<div class="people-head">
					<h2 class="people-name" title="<?php the_title(); ?>">
						<a href="<?php the_permalink(); ?>">
							<?php the_field( 'ag-people-first-name' ); ?> <?php the_field( 'ag-people-last-name' ); ?>
						</a>
					</h2>
					<h3 class="people-title"><?php the_field( 'ag-people-title' ); ?></h3>
				</div>                                  
				<div class="people-contact-details">
					<p class="people-phone tel"><?php the_field( 'ag-people-phone' ); ?></p>
					<p class="people-email email"><a href="mailto:<?php the_field( 'ag-people-email' ); ?>"><?php the_field( 'ag-people-email' ); ?></a></p>
				</div>
			</div>
			</a>
		</li>

	<?php endwhile; ?>

	</ul>

<?php endif;