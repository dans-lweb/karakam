<?php get_header(); ?>
			<div class="col-md-12 Head-archive-container">
				<img class="Head-archive" src='http://localhost/karakam/wp-content/uploads/2016/05/alternate_bg.jpg'>
			</div>
			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="archive cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<div class="col-md-6">
									<?php if ( has_post_thumbnail() ) : ?>
                   					<?php the_post_thumbnail('full'); ?>
            						<?php endif; ?>
                				</div>

                				<div class="col-md-6">

									<header class="article-header">
									
										<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
										<p class="byline entry-meta vcard">
	                                                                        <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
	                       								/* the time the post was published */
	                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
	                       								/* the author of the post */
	                       								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
	                    							); ?>
										</p>

									</header>

									<section class="entry-content cf">
										<?php the_content(); ?>
									</section>

								</div>

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

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


						</main>


				</div>

			</div>


<?php get_footer(); ?>
