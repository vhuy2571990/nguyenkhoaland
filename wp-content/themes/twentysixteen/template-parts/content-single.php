<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<?php
if(in_category('du-an')){
		get_template_part('detail-prj', get_post_format());
}else if (in_category('tt')) {
	  get_template_part('detail-new', get_post_format());
}else {
	  get_template_part('detail-new', get_post_format());
}
?>
