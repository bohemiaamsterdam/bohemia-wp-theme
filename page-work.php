<?php /* Template Name: Work*/ ?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
$thispost = get_the_ID();
$thispostlink = get_permalink( $thispost );
?>
<!-- 	The hero image. -->
		<div class="hero container-full" style="background-image: url(<?php echo the_post_thumbnail_url( 'full' ); ?>)">
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
		<main class="container-full">
			<div class="row">
				<div class="svg-overview"></div>
			</div>
			<?php
					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
					$work_args = array(
						'post_type' => 'work',
						'posts_per_page' => 8,
						'paged' => $paged
					);
					$work_query = new WP_Query( $work_args );
				?>
				<?php if( $work_query->have_posts() ): ?>
			<div class="row" id="show-posts">
				<?php while( $work_query->have_posts() ) : $work_query->the_post(); ?>
				<?php
					$figm = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
				?>
				<a href="<?php the_permalink(); ?>" class="col-xs-12 col-md-6 post-item">
					<img src="<?php echo $figm[0]; ?>" alt="<?php the_title(); ?>">
					<div class="row post-item-inner">
						<div class="col-xs-12">

							<div class="row">
								<h2 class="col-xs-12 col-xlg-11 col-xxlg-10 col-xxxlg-9" ><?php the_title(); ?></h2>
							</div>

							<div class="row">
								<div class="tags col-xs-12 col-xxxlg-9">
								<?php
									$terms = wp_get_object_terms( $post->ID, 'label' );
									echo '<ul>';
									foreach( $terms as $term ):
										echo '<li>' . $term->name . '</li>';
									endforeach;
									echo '</ul>';
								?>
								</div>
							</div>

							<div class="row">
								<div class="client col-xs-12 col-xxxlg-9">
								<?php
									$clients = get_field('client_name');
									foreach( $clients as $post ):
										setup_postdata($post);
										the_title();
									endforeach;
									wp_reset_postdata();
								?>
								</div>
							</div>

						</div>
					</div>
				</a>
				<?php endwhile; ?>
			</div>
			<div class="row center-xs">
				<div class="col-xs" id="load-more">
					<?php load_more_button(); ?>
				</div>
			</div>
			<?php endif; ?>
		    <?php wp_reset_postdata(); ?>
		</main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
