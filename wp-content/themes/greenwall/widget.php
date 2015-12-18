<?php
	// Creating the widget 
class footer_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'footer_widget', 

// Widget name will appear in UI
__('Footer Widget', 'footer_widget_domain'), 

// Widget description
array( 'description' => __( 'Input the information for footer', 'footer_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$mainOff = apply_filters( 'footer_mainOff', $instance['mainOff'] );
$showRoom = apply_filters( 'footer_showRoom', $instance['showRoom'] );
$phone = apply_filters( 'footer_phone', $instance['phone'] );
$fax = apply_filters( 'footer_fax', $instance['fax'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( (! empty( $mainOff ))&& (! empty( $showRoom ))&& (! empty( $phone ))&& (! empty( $fax )))
echo $args['before_mainOff'] . $mainOff . $args['after_mainOff'];
echo $args['before_showRoom'] . $showRoom . $args['after_showRoom'];
echo $args['before_phone'] . $phone . $args['after_phone'];
echo $args['before_fax'] . $fax . $args['after_fax'];

echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( (isset( $instance[ 'mainOff' ])) && (isset( $instance[ 'showRoom' ]))&& (isset( $instance[ 'phone' ]))&&( isset( $instance[ 'fax' ])) ) {
$mainOff = $instance[ 'mainOff' ];
$showRoom = $instance[ 'showRoom' ];
$phone = $instance[ 'phone' ];
$fax = $instance[ 'fax' ];
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'mainOff' ); ?>"><?php _e( 'Main Office :' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'mainOff' ); ?>" name="<?php echo $this->get_field_name( 'mainOff' ); ?>" type="text" value="<?php echo esc_attr( $mainOff ); ?>" />
<label for="<?php echo $this->get_field_id( 'showRoom' ); ?>"><?php _e( 'Show Room :' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'showRoom' ); ?>" name="<?php echo $this->get_field_name( 'showRoom' ); ?>" type="text" value="<?php echo esc_attr( $showRoom ); ?>" />
<label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php _e( 'Phone :' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />
<label for="<?php echo $this->get_field_id( 'fax' ); ?>"><?php _e( 'Fax :' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'fax' ); ?>" name="<?php echo $this->get_field_name( 'fax' ); ?>" type="text" value="<?php echo esc_attr( $fax ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['mainOff'] = ( ! empty( $new_instance['mainOff'] ) ) ? strip_tags( $new_instance['mainOff'] ) : '';
$instance['showRoom'] = ( ! empty( $new_instance['showRoom'] ) ) ? strip_tags( $new_instance['showRoom'] ) : '';
$instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
$instance['fax'] = ( ! empty( $new_instance['fax'] ) ) ? strip_tags( $new_instance['fax'] ) : '';
return $instance;
}
} // Class footer_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'footer_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
?>