<?php /* Template Name: About*/ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- 	The hero image. echo the url instead of: http://lorempixel.com/1920/1080-->
		<div class="hero container-full" style="background-image: url(<?php echo the_post_thumbnail_url( 'full' ); ?>);">
			<div class="row middle-xs">
				<div class="col-xs col-sm-11 col-md-9 col-md-offset-1">
					<div class="row">
						<h1 class="col-xs">
							<?php the_title(); ?>
						</h1>
					</div>
					<div class="row">
						<div class="white-bg col-xs-12 col-sm-7 col-lg-6 col-xlg-5">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

<!-- 	The main content -->
		<main class="container-full work-bg">
			<div class="row">
				<div class="svg-overview"></div>
			</div>
			<?php
					$tm_args = array(
						'post_type' => 'team_members',
						'posts_per_page' => 100
					);
					$tm_query = new WP_Query( $tm_args );
				?>
				<?php if( $tm_query->have_posts() ): ?>
			<div class="row" id="show-posts">

				<?php while( $tm_query->have_posts() ) : $tm_query->the_post(); ?>
				<?php
					$figm = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
				?>
				<a href="<?php the_permalink(); ?>" class="col-xs-12 col-md-6 post-item">
					<span></span>
					<img src="<?php echo $figm[0]; ?>" alt="<?php the_title(); ?>">
					<div class="row post-item-inner">
						<div class="col-xs-12">

							<div class="row">
								<h2 class="col-xs-12 col-xlg-11 col-xxlg-10 col-xxxlg-9"><?php the_title(); ?></h2>
							</div>
							<?php if( get_field('quote') ): ?>
							<div class="row">
								<div class="quote col-xs-12 col-lg-8">
									&ldquo;<?php the_field('quote'); ?>&rdquo;
								</div>
							</div>
							<?php endif; ?>
							<div class="row">
								<div class="position col-xs-12"><?php the_field('job_title'); ?></div>
							</div>
						</div>
					</div>
				</a>
				<?php endwhile; ?>

			</div>
			<?php endif; ?>
		    <?php wp_reset_query(); ?>	
		</main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
