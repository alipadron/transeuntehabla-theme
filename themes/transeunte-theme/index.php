<?php
get_header( 'blog' );
?>
<main class="main-blog">
<?php get_template_part( 'template-parts/content', 'blog-banner' ); ?>

<!-- Posts -->
	<div class="wrapper wrapper--no-padding-until-large">
		<div class="row row--gutters-large">
			<div class="row__large-10">
				<section class="blog-posts">
				<?php
				// Obtener la editorial.
				$editorial_post    = new WP_Query(
					array(
						'posts_per_page' => 1,
						'category_name'  => 'editoriales',
						'post_type'      => 'post',
					)
				);
				$editorial_post_id = null;
				if ( $editorial_post->have_posts() ) {
					$editorial_post->the_post();
					$editorial_post_id = get_the_ID();
					?>
				<!-- Editorial -->
					<article class="blog-posts__most-recent">
						<div class="row row--gutters-large">
							<div class="row__large-8">
								<picture>
									<source
									media="(min-width: 992px)"
									srcset="<?php echo esc_url( get_the_post_thumbnail_url( get_the_id(), 'postLandscapeLarge' ) ); ?>"
									>
									<source
									media="(min-width: 768px)"
									srcset="<?php echo esc_url( get_the_post_thumbnail_url( get_the_id(), 'postLandscapeMedium' ) ); ?>"
									>
									<source
									media="(min-width: 576px)"
									srcset="<?php echo esc_url( get_the_post_thumbnail_url( get_the_id(), 'postLandscapeSmall' ) ); ?>"
									>
									<img
									alt="<?php echo esc_attr( get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ) ); ?>"
									title="<?php echo esc_attr( get_the_title( get_post_thumbnail_id() ) ); ?>"
									class="blog-posts__most-recent__image"
									src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_id(), 'postLandscapeExtraSmall' ) ); ?>"
									>
								</picture>
							</div>
							<div class="row__large-4">
								<div class="blog-posts__most-recent__text wrapper generic-content-container">
									<h2 class="blog-posts__most-recent__text__title">
									<a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a>
									</h2>
									<p class="blog-posts__most-recent__text__content">
									<?php echo esc_html( has_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 18 ) ); ?>
									</p>
									<p class="blog-posts__most-recent__text__meta-info">
									<span><?php echo get_the_category_list( ', ' ); ?></span> - 
									<?php echo get_the_date( 'd/m/Y' ); ?>
									</p>
								</div>
							</div>
						</div>
					</article>
				<!-- Editorial -->
					<hr class="separator separator--one-third-up-to-large">
					<?php
				}
				wp_reset_postdata();
				// Obtener posts relacionados a la editorial.
				$is_paged                   = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$relationed_editorial_posts = new WP_Query(
					array(
						'posts_per_page' => get_option( 'posts_per_page' ),
						'post_type'      => 'post',
						'meta_query'     => array(
							array(
								'key'     => 'editorial',
								'compare' => 'LIKE',
								'value'   => '"' . $editorial_post_id . '"',
							),
						),
						'paged'          => $is_paged,
					)
				);
				$post_counter               = 0;
				if ( $relationed_editorial_posts->have_posts() ) {
					echo '<!-- Posts relacionados con la editorial -->';
					echo '<div class="blog-posts__others">';
					while ( $relationed_editorial_posts->have_posts() ) {
						$relationed_editorial_posts->the_post();
						if ( 0 === $post_counter % 3 ) {
							echo '<div class="row row--gutters-large row--equal-height-at-large">';
						}
						get_template_part( 'template-parts/content', 'blog-post' );
						if ( ( $post_counter + 1 ) % 3 === 0 || $post_counter + 1 === $relationed_editorial_posts->post_count ) {
							echo '</div>';
						}
						$post_counter++;
					}
					echo '</div>';
					echo '<!-- Posts relacionados con la editorial -->';
				}
				?>
				</section>
			</div>
			<?php get_template_part( 'template-parts/content', 'destacados' ); ?>
		</div>
	<?php
	if ( $relationed_editorial_posts->max_num_pages > 1 ) {
		?>
		<div class="archive__pagination">
			<div class="archive__pagination__line"></div>
			<div class="archive__pagination__links">
			<?php
				echo esc_html(
					paginate_links(
						array(
							'total'     => $relationed_editorial_posts->max_num_pages,
							'prev_text' => __( '&laquo;' ),
							'next_text' => __( '&raquo;' ),
						)
					)
				);
				wp_reset_postdata();
			?>
			</div>
		</div>
		<?php
	}
	?>

	</div>
<!-- Posts -->

<?php get_template_part( 'template-parts/content', 'social-icons' ); ?>

</main>


<?php
get_template_part( 'template-parts/content', 'modal' );
get_footer();
?>
