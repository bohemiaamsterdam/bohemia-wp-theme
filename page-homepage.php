<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- 	The main content -->
		<main>

			<div class="floating-img-container rellax" data-rellax-speed="-4" data-rellax-percentage="0.5">
				<img class="bg-img bg-img-usp" src="<?php bloginfo('template_directory');?>/img/hero_usp.jpg">
			</div>

			<!-- USPS -->
			<section id="usps" class="container">
					<div class="row header center-xs">
					  <div class="header-text col-xs-12 rellax" data-rellax-speed="0">
					    <h1>The Brilliant Customer Journey Company</h1>
					  </div>
					</div>
					<div class="row">
					  <div class="usp col-xs-6 col-sm-4">
							<div class="row rellax" data-rellax-speed="2" data-rellax-percentage="0.7">
								<div class="col-xs-12 col-lg-3"><img src="<?php bloginfo('template_directory');?>/img/trend_icon.svg"></div>
								<div class="col-xs-12 col-lg-9"><h6>Op de hoogte van de trends</h6></div>
							 </div>
					  </div>
					  <div class="usp col-xs-6 col-sm-4">
							<div class="row rellax" data-rellax-speed="2" data-rellax-percentage="0.7">
								<div class="col-xs-12 col-lg-3"><img src="<?php bloginfo('template_directory');?>/img/buyer_persona_icon.svg"></div>
								<div class="col-xs-12 col-lg-9"><h6>98% matching Buyer Personas</h6></div>
							 </div>
					  </div>
						<div class="usp col-xs-6 col-sm-4">
							<div class="row rellax" data-rellax-speed="2" data-rellax-percentage="0.7">
								<div class="col-xs-12 col-lg-3"><img src="<?php bloginfo('template_directory');?>/img/target_icon.svg"></div>
								<div class="col-xs-12 col-lg-9"><h6>Spot-on in alle middelen</h6></div>
							</div>
						</div>
					  <div class="usp col-xs-6 col-sm-4">
							<div class="row rellax" data-rellax-speed="2" data-rellax-percentage="0.5">
								<div class="col-xs-12 col-lg-3"><img src="<?php bloginfo('template_directory');?>/img/magnet_icon.svg"></div>
								<div class="col-xs-12 col-lg-9"><h6>Gepassioneerd over verleiden</h6></div>
							</div>
						</div>
					  <div class="usp col-xs-6 col-sm-4">
							<div class="row rellax" data-rellax-speed="2" data-rellax-percentage="0.5">
								<div class="col-xs-12 col-lg-3"><img src="<?php bloginfo('template_directory');?>/img/creative_icon.svg"></div>
								<div class="col-xs-12 col-lg-9"><h6>Crazy creatief werk</h6></div>
							</div>
						</div>
					  <div class="usp col-xs-6 col-sm-4">
							<div class="row rellax" data-rellax-speed="2" data-rellax-percentage="0.5">
								<div class="col-xs-12 col-lg-3"><img src="<?php bloginfo('template_directory');?>/img/rocket_icon.svg"></div>
								<div class="col-xs-12 col-lg-9"><h6>Maximale conversie door heldere structuur</h6></div>
							</div>
						</div>
					</div>

					<div class="row center-xs rellax" data-rellax-speed="3" data-rellax-percentage="0.3">
					  <a class="red-gradient-btn" href="#case-studies">Bewijs dat maar eens</a>
					</div>
			</section>

			<div class="floating-img-container" >
				<img class="bg-img bg-img-hashtags rellax" data-rellax-speed="-4" data-rellax-percentage="0.5" data-rellax-zindex="-1" src="<?php bloginfo('template_directory');?>/img/hero_hashtags.jpg">
			</div>

			<!-- HASHTAGS -->
			<section id="hashtags">
				<div class="skewed-bg"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div class="hashtags-slider rellax" data-rellax-speed="2" data-rellax-percentage="0.2">
								<div>
									<h4>#Customer & Sales Journeys</h4>
									<h4>#Buyer Persona Ontwikkeling</h4>
									<h4>#Campagnes</h4>
									<h4>#Communicatiestrategieën</h4>
									<h4>#Contentontwikkeling</h4>
								</div>
								<div>
									<h4>#Display Advertising</h4>
									<h4>#Grafisch Design</h4>
									<h4>#Inboundmarketing</h4>
									<h4>#Marketingcommunicatie</h4>
									<h4>#Omnichannel</h4>
								</div>
								<div>
									<h4>#Positionering</h4>
									<h4>#SEO & SEA Support</h4>
									<h4>#Social Media Strategieën</h4>
									<h4>#Videocontent</h4>
									<h4>#Website-ontwikkeling</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- SALES FUNNEL -->
			<section id="sales-funnel" class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-md-7">
						<h2>Ons succes begint bij jouw Customer Journey</h2>
					</div>
					<div class="col-xs-12 col-md-6 rellax" data-rellax-speed="0">
						<p>Wij zorgen ervoor dat jouw doelgroep jou vindt op het moment dat die jou nodig heeft. Dat doen we door samen met jouw en je team nauwgezet jouw customer journey in kaart te brengen, te verbeteren en te zorgen voor traffic. Dat doen we onder andere succesvol voor klanten als Staatsbosbeheer, Sasma en KONE. <br> In elk niveau van de journey kunnen we je helpen met Attract, Capture en Nurture van jouw (potential) customers. Uiteraard om te komen tot een Close.</p>
					</div>
					<div class="col-xs-12 col-md-6 rellax" data-rellax-speed="2" data-rellax-percentage="0.2">
						<img src="<?php bloginfo('template_directory');?>/img/sales-funnel_bohemia-asmterdam.png" alt="Sales Funnel - Bohemia Amsterdam">
					</div>
				</div>
			</section>

			<div class="floating-img-container">
				<img class="bg-img bg-img-work rellax" data-rellax-speed="-4" data-rellax-percentage="0.3" src="<?php bloginfo('template_directory');?>/img/hero_work.jpg">
			</div>

			<!-- CASE STUDIES -->
			<section id="case-studies" class="container-full rellax" data-rellax-speed="0">
				<div class="skewed-bg rellax" style="transform: skewY(-3deg);" data-rellax-speed="0"></div>
				<div class="row">
					<div class="col-xs-12">
						<?php
								$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
								$work_args = array(
									'post_type' => 'work',
									'posts_per_page' => 6,
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
							<a href="<?php the_permalink(); ?>" class="col-xs-12 col-md-6 col-xlg-4 post-item">
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
												foreach( array_slice($terms,0,3) as $term ):
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
					</div>
					<?php endif; ?>
				    <?php wp_reset_postdata(); ?>
				</div>
				<div class="row center-xs">
					<div class="col-xs">
						<a class="white-btn" href="<?php echo get_page_link(10); ?>">See our work</a>
					</div>
				</div>
			</section>

			<div class="floating-img-container">
				<img class="bg-img bg-img-whitepaper rellax" data-rellax-speed="-4" data-rellax-percentage="0.3" src="<?php bloginfo('template_directory');?>/img/hero_whitepaper.jpg">
			</div>

			<!-- WHITEPAPERS -->
			<section id="whitepapers" class="container-fluid">
				<div class="row center-xs rellax" data-rellax-speed="0">
					<h2 class="col-xs-12 col-lg-6">Whitepapers & Werkboeken</h2>
				</div>
				<div class="row center-xs rellax"  data-rellax-speed="0">
					<p class="col-xs-12 col-md-6">Wil je weten hoe we de dingen aanpakken en wat je zelf kunt doen? Download dan één van onze whitepapers of werkboeken.</p>
				</div>
				<div class="row rellax" data-rellax-speed="2" data-rellax-percentage="0.1">
					<div class="whitepaper whitepaper-left post-item col-md-6">
						<img src="https://bohemiaamsterdam.com/nl/wp-content/themes/bohemia-amsterdam/img/whitepaper-left.jpg" alt="">
						<span class="close">&times;</span>
						<div class="row">
							<div class="post-item-inner col-xs-12">
								<div class="col-xs-12 col-lg-10">
									<h3>Whitepaper: Hoe ontwikkel je de perfecte Customer Journey?</h3>
									<button class="whitepaper-button white-btn">Download</button>
									<div class="row">
										<div class="col-xs-12 col-sm-8 col-md-10">
											<div class="whitepaper-form">
												<?php echo do_shortcode( '[contact-form-7 id="813" title="Downloadable Left"]' ); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="whitepaper whitepaper-right post-item col-md-6">
						<img src="https://bohemiaamsterdam.com/nl/wp-content/themes/bohemia-amsterdam/img/whitepaper-right.jpg" alt="">
						<span class="close">&times;</span>
						<div class="row">
							<div class="post-item-inner col-xs-12">
								<div class="col-xs-12 col-lg-10">
									<h3>Werkboek: Leer jouw Buyer Persona kennen in 5 stappen.</h3>
									<button class="whitepaper-button white-btn">Download</button>
									<div class="row">
										<div class="col-xs-12 col-sm-8 col-md-10">
											<div class="whitepaper-form">
												<?php echo do_shortcode( '[contact-form-7 id="814" title="Downloadable Right"]' ); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- TESTIMONIALS -->
			<section id="testimonials" class="container-full">
				<div class="skewed-bg"></div>
				<div class="row testimonials-slider center-xs rellax" data-rellax-speed="3" data-rellax-percentage="0.1">
					<div class="col-xs-12">
						<div class="row center-xs">
							<p class="col-xs-10 col-lg-8">Saksia en Emma, onze buyer persona’s, zijn echt voor ons gaan leven.</p>
						</div>
						<div class="row center-xs bottom-xs">
							<span class="col-xs-12">BTN</span>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="row center-xs">
							<p class="col-xs-10 col-lg-8">De workshops gaven onverwachte inzichten.</p>
						</div>
						<div class="row center-xs bottom-xs">
							<span class="col-xs-12">KONE</span>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="row center-xs">
							<p class="col-xs-10 col-lg-8">Bohemia Amsterdam heeft mij een koers en een gezicht gegeven.</p>
						</div>
						<div class="row center-xs bottom-xs">
							<span class="col-xs-12">aatvos</span>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="row center-xs">
							<p class="col-xs-10 col-lg-8">Just Smart.</p>
						</div>
						<div class="row center-xs bottom-xs">
							<span class="col-xs-12">ReedElsevier</span>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="row center-xs">
							<p class="col-xs-10 col-lg-8">We zochten structuur en die hebben we gekregen.</p>
						</div>
						<div class="row center-xs bottom-xs">
							<span class="col-xs-12">Staatsbosbeheer</span>
						</div>
					</div>
				</div>
			</section>

			<!-- LOGO WALL -->
			<section id="logo-wall" class="conainter-full rellax" data-rellax-speed="0" data-rellax-percentage="0.1">
				<div class="row logo-wall-slider">
					<?php
						$temp_query = $wp_query;  // store it
						$args = array(
						'post_type' => 'clients',
						'posts_per_page' => 12
						);
						$wp_query = new WP_Query($args);
						while ($wp_query->have_posts()) : $wp_query->the_post();
							$figm = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
							$clientlink = get_the_permalink();
							$clientid = get_the_ID();
							$countwork = 0;
							global $post; // required
							$args = array('post_type' => 'work', 'posts_per_page' => 300);
							$custom_posts = get_posts($args);
							$items = array();
							foreach($custom_posts as $post) : setup_postdata($post);
								$client2 = get_field('client_name');
								if ($clientid == $client2[0] ){
									$countwork += 1;
									$items[] = $post->ID;
								}
							endforeach;
							wp_reset_postdata();
							if ($countwork == 0){
					?>
					<div><img src="<?php echo $figm[0]; ?>" alt="<?php the_title(); ?>"></div>
					<?php
							} else if ($countwork == 1){
					?>
					<div><a href="<?php echo get_permalink( $items[0] ) ?>"><img src="<?php echo $figm[0]; ?>" alt="<?php the_title(); ?>"></a></div>
					<?php } else if ($countwork >= 2) { ?>
					<div><a href="<?php echo $clientlink; ?>"><img src="<?php echo $figm[0]; ?>" alt="<?php the_title(); ?>"></a></div>
					<?php
						wp_reset_postdata(); } endwhile;
						if (isset($wp_query)) {$wp_query = $temp_query;} // restore loop
					?>
				</div>
			</section>

			<!-- 	Contact form -->
			<section id="contact-form" class="contact-form container-fluid">
					<div class="row center-xs">
						<h2 class="col-xs-12"><?php the_field('formulier_titel', get_option('page_on_front')); ?></h2>
					</div>
					<div class="row center-xs">
						<div class="col-xs-12 col-sm-5">
							<?php the_field('contactformulier', get_option('page_on_front')); ?>
						</div>
					</div>
			</section>

		</main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
