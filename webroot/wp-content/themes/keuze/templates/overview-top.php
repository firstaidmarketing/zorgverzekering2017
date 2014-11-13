<div class="top">
	<div class="left sfeer">
		<?php
			$thumb = '<img src="' . keuze_theme_url( 'assets/images/_dummy/sfeer-linksboven.png' ) . '" alt="">';
			if( has_post_thumbnail() ) {
				$thumb = get_the_post_thumbnail();
			}
		?>
		<figure><?php echo $thumb; ?></figure>
	</div>
	<div class="right">
		
	</div>
</div>