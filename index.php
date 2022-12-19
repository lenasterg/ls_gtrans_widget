<?php
/**
*Plugin Name: Ls Gtrans Widget
*Author: lenasterg, NTS on cti.gr, sch.gr
*Version: 2.0.1
*License:  GNU General Public License 3.0 or newer (GPL) http://www.gnu.org/licenses/gpl.html
*Last Updated: December 19, 2022
*Description:  Widget with selectbox to Google translation for the current page. Contains more than 25 European languages.
*
*/

require_once 'class-ls-gtrans-widget.php';

add_action( 'widgets_init', 'ls_gtrans_widget_register' );

/**
 *
 * @return type
 * @since 2.0
 * @author lenasterg
 */
function ls_gtrans_widget_register() {
	return register_widget( 'Ls_Gtrans_Widget' );
}
