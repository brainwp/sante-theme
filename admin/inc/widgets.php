<?php
/*********************************************************************************************

Register Global Sidebars

*********************************************************************************************/
function site5framework_widgets_init() {
	
	register_sidebar( array (
    'name' => __( 'Blog', 'site5framework' ),
    'id' => 'blog',
    'before_widget' => '<div class="sidebarBox widget-container %2$s" id="%1$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
	) );
	register_sidebar( array (
    'name' => __( 'Page', 'site5framework' ),
    'id' => 'page',
    'before_widget' => '<div class="sidebarBox widget-container %2$s" id="%1$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
	) );
}

add_action( 'init', 'site5framework_widgets_init' );

/*********************************************************************************************

Register Contact Widget

*********************************************************************************************/
class site5framework_contact_widget extends WP_Widget {
    function __construct() {
        parent::__construct(false, $name = 'Widget de Contato', array( 'description' => 'Contact widget for your site.' ) );
    }

    /*
     * Displays the widget form in the admin panel
     */
    function form( $instance ) {
    	$widget_title = esc_attr( $instance['widget_title'] );
        $cbsum = esc_attr( $instance['cbsum'] );
        $cphone = esc_attr( $instance['cphone'] );
        $casum = esc_attr( $instance['casum'] );
        $cemail = esc_attr( $instance['cemail'] );
        $caddress = esc_attr( $instance['caddress'] );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'widget_title' ); ?>"><?php _e('T&iacute;tulo:', 'site5framework') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'widget_title' ); ?>" name="<?php echo $this->get_field_name( 'widget_title' ); ?>" type="text" value="<?php echo $widget_title; ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'cbsum' ); ?>"><?php _e('Summary Before Address:', 'site5framework') ?></label>
            <textarea style="height:100px;" class="widefat" id="<?php echo $this->get_field_id( 'cbsum' ); ?>" name="<?php echo $this->get_field_name( 'cbsum' ); ?>"><?php echo $cbsum; ?></textarea>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'caddress' ); ?>"><?php _e('Contact Address:', 'site5framework') ?></label>
            <textarea style="height:100px;" class="widefat" id="<?php echo $this->get_field_id( 'caddress' ); ?>" name="<?php echo $this->get_field_name( 'caddress' ); ?>"><?php echo $caddress; ?></textarea>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'cphone' ); ?>"><?php _e('Contact Phone:', 'site5framework') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'cphone' ); ?>" name="<?php echo $this->get_field_name( 'cphone' ); ?>" type="text" value="<?php echo $cphone; ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'cemail' ); ?>"><?php _e('Contact Email:', 'site5framework') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'cemail' ); ?>" name="<?php echo $this->get_field_name( 'cemail' ); ?>" type="text" value="<?php echo $cemail; ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'casum' ); ?>"><?php _e('Summary After Address', 'site5framework') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'casum' ); ?>" name="<?php echo $this->get_field_name( 'casum' ); ?>" type="text" value="<?php echo $casum; ?>" />
        </p>

<?php
    }
/*
 * Renders the widget in the sidebar
 */
function widget( $args, $instance ) {
echo $args['before_widget'];
?>

            <!-- start contact widget -->
            <?php echo $args['before_title']; ?><?php echo $instance['widget_title']; ?><?php echo $args['after_title']; ?>
        

		
	        <div class="contactmap">
					<p>
						<?php echo $instance['cbsum']; ?>
					</p>
	                <address>
						<span class="address"><?php echo $instance['caddress']; ?></span>
						<span class="phone"><?php echo $instance['cphone']; ?></span>
                        <span class="email"><?php echo $instance['cemail']; ?></span>
					</address>
					<p>
						<?php echo $instance['casum']; ?>
					</p>

	        </div>

        <!-- end contact widget -->


        <?php
        echo $args['after_widget'];
    }
};

// Initialize the widget
add_action( 'widgets_init', create_function( '', 'return register_widget( "site5framework_contact_widget" );' ) );

?>