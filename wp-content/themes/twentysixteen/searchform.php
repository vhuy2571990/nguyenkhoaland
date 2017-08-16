<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s" placeholder="Tìm kiếm"/>
	</label>
	<button type="submit" class="search-submit"><i class="icon-magnifier"></i></button>
</form>
