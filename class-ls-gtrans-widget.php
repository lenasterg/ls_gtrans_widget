<?php
/**
 *@version 2.0
 */
class Ls_Gtrans_Widget extends WP_Widget {
	public function __construct() {
		$widget_ops = array(
			'classname'   => 'Ls_Gtrans_Widget',
			'description' => __( 'Drop-down with more than 25 languages', 'ls_gtrans_widget' ),
		);
		parent::__construct( 'Ls_Gtrans_Widget', __( 'Translate via Google', 'ls_gtrans_widget' ), $widget_ops );
	}

	/**
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {

		$title = empty( $instance['title'] ) ? 'Translate' : apply_filters( 'widget_title', $instance['title'] );

		// Before widget code, if any
		echo ( isset( $args['before_widget'] ) ? $args['before_widget'] : '' );

		// The title and the text output
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		?>
		<form name="ls_gtrans_form">
					<select id="ls_gtrans_sel" onchange="window.top.location.href = 'http://translate.google.com/translate?hl=en&&sl=auto&tl=' + this.options[this.selectedIndex].value + '&u=' + window.location.href;"
					style="width:200px;padding-left:20px;background-image:url(<?php echo plugins_url( '/images/google_logo.png', __FILE__ ); ?>);background-repeat: no-repeat;">
		<option value="">Select a language</option>
		<option value="sq">Albanian</option>
		<option value="bg">Bulgarian</option>
		<option value="hr">Croatian</option>
		<option value="cs">Czech</option>
		<option value="da">Danish</option>
		<option value="nl">Dutch</option>
		<option value="en">English</option>
		<option value="et">Estonian</option>
		<option value="fi">Finnish</option>
		<option value="fr">French</option>
		<option value="de">German</option>
		<option value="el">Greek</option>
		<option value="hu">Hungarian</option>
		<option value="it">Italian</option>
		<option value="lv">Lativian</option>
		<option value="lt">Lithuanian</option>
		<option value="mt">Maltese</option>
		<option value="no">Norwegian</option>
		<option value="pl">Polish</option>
		<option value="pt">Portuguese</option>
		<option value="ro">Romanian</option>
		<option value="ru">Russian</option>
		<option value="sr">Serbian</option>
		<option value="sk">Slovak</option>
		<option value="sl">Slovenian</option>
		<option value="es">Spanish</option>
		<option value="sv">Swedish</option>
		<option value="tr">Turkish</option>
		<option value="uk">Ukrainian</option>
		</select>
	</form>
		<?php
		// After widget code, if any
		echo ( isset( $args['after_widget'] ) ? $args['after_widget'] : '' );
	}

	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => 'Translate' ) );
		$title    = $instance['title'];
		?>
		<!-- PART 2: Widget Title field START -->
	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title' ); ?>:
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" 
value="<?php echo esc_attr( $title ); ?>" />
		</label>
	</p>
	<!-- Widget Title field END -->
		<?php
	}

	function update( $new_instance, $old_instance ) {
		$instance          = $old_instance;
		$instance['title'] = $new_instance['title'];
		return $instance;
	}

}
