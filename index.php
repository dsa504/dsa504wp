<?php get_header(); ?>

			<?php 
			if(is_front_page() == true){ 
			?>
				<div class="hero-index" style="background-color:<?php echo the_field("hero_background_color",'option');?>">
					<div class="wrap hero-wrap">
						<img class="hero-index-img" alt="New Orleans Democratic Socialists of America" title="New Orleans Democratic Socialists of America" src="<?php echo the_field("hero_image",'option');?>"/>
					</div>
				</div>
			<?php 
			}; 
			?>

			<div id="content" class="wrap">

				<div id="inner-content" class="cf">

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline vcard">
										<?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
									</p>

								</header>

								<section class="entry-content cf">
									<?php the_content(); ?>
								</section>
							
								<!--
								<footer class="article-footer cf">
                 					<?php printf( __( '<p class="footer-category">Filed under: %1$s</p>', 'bonestheme' ), get_the_category_list(', ') ); ?>
									<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
								</footer>
								-->

							</article>

							<?php endwhile; ?>
								<?php if( is_single() == false) { ?>
								<div class="prev-next-box">
									<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
									<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
								</div>
								<?php }; ?>
							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</div>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
