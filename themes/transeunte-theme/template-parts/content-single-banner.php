<section class="page-banner">
	<div class="wrapper">
		<h1 class="page-banner__title page-banner__title--align-left">
			<?php
			$title_converted_in_array = explode( ' ', get_the_title() );
			$last_word                = array_pop( $title_converted_in_array );
			$first_words              = implode( ' ', $title_converted_in_array );
			echo esc_html( $first_words );
			?>
			<span class="page-banner__line">
			<?php echo esc_html( $last_word ); ?>
			</span>
		</h1>
	</div>
</section>
