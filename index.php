<?php
/**
 * 
 * @package traveler-fse
 */

/**
 * Load constants.
 */
require_once get_template_directory() . '/inc/constants.php';

if ( current_user_can( 'activate_plugins' ) ) {
	esc_html_e( 'A custom Marriott Traveler theme built for WordPress with Full Site Editing (FSE) capabilities.', TEXT_DOMAIN );
}

