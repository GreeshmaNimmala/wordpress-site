<?php
/**
 * Template for displaying search forms in suraksha-security-guard
 *
 * @package WordPress
 * @subpackage suraksha-security-guard
 * @since 1.0
 * @version 0.3
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label >
		<span class="screen-reader-text"><?php echo esc_attr_x( 'Search for:', 'label', 'suraksha-security-guard' ); ?></span>
	</label>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'suraksha-security-guard' ); ?>" value="<?php echo esc_attr(get_search_query() ); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo esc_attr_x( 'Search', 'submit button', 'suraksha-security-guard' ); ?></button>
</form>