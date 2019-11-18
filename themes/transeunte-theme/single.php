<?php
get_header( 'blog' );
transeunte_set_post_view();
?>
<main class="main-blog">
<!-- Título del post -->
<?php get_template_part( 'template-parts/content', 'single-banner' ); ?>
<!-- Título del post -->

<!-- Posts -->
<div class="wrapper wrapper--no-padding-until-large">
	<div class="meta-info">
		<p class="meta-info__text">
			<a href="<?php echo esc_url( site_url( '/blog' ) ); ?>">Ir al blog</a>
		</p>
	</div>
	<div class="row row--gutters-large">
		<!-- Contenido del post -->
		<div class="row__large-10">
			<section class="post-content">
				<?php get_template_part( 'template-parts/content', 'single-common' ); ?>
				<div class="post-content__author">
					<div class="row row--gutters-large">
						<div class="row__medium-4">
							<img
								class="post-content__author__image"
								src="
								<?php
								echo esc_url(
									get_avatar_url(
										get_the_author_meta( 'ID' ),
										array(
											'size' => 160,
										)
									)
								);
								?>
								"
								alt="María Laura Padrón"
								title="María Laura Padrón"
							>  
						</div>
						<div class="row__medium-8">
							<div class="post-content__author__text">
								<h3 class="post-content__author__text__name"><?php echo get_the_author(); ?></h3>
								<p class="post-content__author__text__bio">
								<?php echo esc_html( get_the_author_meta( 'description' ) ); ?>
								</p>
								<div class="post-content__author__text__social-icons">
								<?php
								$author_social_links = array(
									'facebook'   => get_the_author_meta( 'facebook' ),
									'instagram'  => get_the_author_meta( 'instagram' ),
									'linkedin'   => get_the_author_meta( 'linkedin' ),
									'pinterest'  => get_the_author_meta( 'pinterest' ),
									'soundcloud' => get_the_author_meta( 'soundcloud' ),
									'tumblr'     => get_the_author_meta( 'tumblr' ),
									'twitter'    => get_the_author_meta( 'twitter' ) ? 'https://twitter.com/' . get_the_author_meta( 'twitter' ) : get_the_author_meta( 'twitter' ),
									'youtube'    => get_the_author_meta( 'youtube' ),
								);
								foreach ( $author_social_links as $social_network => $url ) {
									if ( $url ) {
										?>
									<a href="<?php echo esc_url( $url ); ?>">
										<i class="fa fa-<?php echo esc_attr( $social_network ); ?>"></i>
									</a>
										<?php
									}
								}
								?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- Contenido del post -->
		<hr class="separator separator--visible-until-large">
		<!-- Posts destacados -->
		<?php get_template_part( 'template-parts/content', 'destacados' ); ?>
	</div>
</div>
<!-- Posts -->

<div class="social-icons social-icons--blog-home social-icons--background-dark-gray social-icons--light-gray">
	<p class="social-icons__text">Síguenos</p>
	<a href="https://www.instagram.com/transeuntehabla/"><i class="fa fa-instagram"></i></a>
	<a href="https://www.linkedin.com/company/transeuntehabla"><i class="fa fa-linkedin"></i></a>
	<a href="https://www.facebook.com/transeuntehabla"><i class="fa fa-facebook"></i></a>
</div>

</main>


<?php get_footer(); ?>
