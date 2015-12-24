<?php
	// Creating the widget 
class footer_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'footer_widget', 

// Widget name will appear in UI
__('Footer', 'footer_widget_domain'), 

// Widget description
array( 'description' => __( 'Input the information for footer', 'footer_widget_domain' ) ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$mainOff = apply_filters( 'widget_mainOff', $instance['mainOff'] );
$showRoom = apply_filters( 'widget_showRoom', $instance['showRoom'] );
$phone = apply_filters( 'widget_phone', $instance['phone'] );
$fax = apply_filters( 'widget_fax', $instance['fax'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
echo '<address>';
if ( ! empty( $mainOff )){
	echo '<p><i class="icon-home2"></i><strong>Main Office :  </strong> <span>'.$args['before_mainOff'] . $mainOff . $args['after_mainOff'].'</span></p>';
}
if ( ! empty( $showRoom )){
	echo '<p><i class="icon-leaf"></i><strong>Show Room : </strong> '.$args['before_showRoom'] . $showRoom . $args['after_showRoom'].'</p>';
}
if ( ! empty( $phone )){
	echo '<p><i class="icon-phone"></i><strong>Tel :</strong> '.$args['before_phone'] . $phone . $args['after_phone'].'</p>';
}
if ( ! empty( $fax )){
	echo '<p><i class="icon-printer"></i><strong>Fax : </strong>'.$args['before_fax'] . $fax . $args['after_fax'].'</p>';
}
echo '</address>';
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'mainOff' ])){
	$mainOff = $instance[ 'mainOff' ];
}
if ( isset( $instance[ 'showRoom' ])){
	$showRoom = $instance[ 'showRoom' ];
}
if ( isset( $instance[ 'phone' ])){
	$phone = $instance[ 'phone' ];
}
if ( isset( $instance[ 'fax' ])){
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
$instance['mainOff'] = ( ! empty( $new_instance['mainOff'] ) ) ? strip_tags( $new_instance['mainOff'] ) : '127/97 Ni Su Huynh Lien, F.12, Q.Tan Binh';
$instance['showRoom'] = ( ! empty( $new_instance['showRoom'] ) ) ? strip_tags( $new_instance['showRoom'] ) : '270A Bac Hai, F.12, Q.10';
$instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '+(08) 39747047';
$instance['fax'] = ( ! empty( $new_instance['fax'] ) ) ? strip_tags( $new_instance['fax'] ) : '+(08) 39747052';
return $instance;
}
} // Class footer_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'footer_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
?>