<!-- Posts destacados -->
<div class="row__large-2">
	<section class="featured-posts">
<?php
$featured_posts = new WP_Query(
	array(
		'posts_per_page' => 2,
		'post_type'      => 'post',
		'meta_key'       => 'post_views_count',
		'orderby'        => 'meta_value_num',
		'order'          => 'DESC',
	)
);
while ( $featured_posts->have_posts() ) {
	$featured_posts->the_post();
	?>
		<a href="<?php echo esc_url( get_the_permalink() ); ?>">
			<article class="featured-posts__post generic-content-container">
				<picture>
					<source
						media="(min-width: 992px)"
						srcset="<?php echo esc_url( get_the_post_thumbnail_url( get_the_id(), 'postPortraitLarge' ) ); ?>"
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
						class="featured-posts__post__image"
						src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_id(), 'postLandscapeExtraSmall' ) ); ?>"
					>
				</picture>
				<p class="featured-posts__post__label">
					Destacado
				</p>
				<div class="featured-posts__post__text wrapper">
				<h2 class="featured-posts__post__text__title">
					<?php echo esc_html( get_the_title() ); ?>
				</h2>
				</div>
			</article>
		</a>
		<?php
}
wp_reset_postdata();
?>
	</section>
</div>
<!-- Posts destacados -->
