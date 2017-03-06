<?php
class ican_partner_widget extends WP_Widget {
 
 
    /** constructor -- name this the same as the class above  */
    function ican_partner_widget() {
        parent::WP_Widget(false, $name = 'ICAN Partner Widget');	
    }
 
    /** @see WP_Widget::widget -- do not rename this */
    function widget($args, $instance) {	
        extract( $args );
        $title 		= '440 Partner in 100 L&auml;ndern';
        $url 	= $instance['url'];
        ?>
              <?php echo $before_widget; ?>
                  <?php if ( $title )
                        echo $before_title . $title . $after_title; ?>
							<a href="<?php echo $url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-map.png" alt="ICAN Partner Weltkarte" /></a></p>
              <?php echo $after_widget; ?>
        <?php
    }
 
    /** @see WP_Widget::update -- do not rename this */
    function update($new_instance, $old_instance) {		
		$instance = $old_instance;
		$instance['url'] = strip_tags($new_instance['url']);
        return $instance;
    }
 
    /** @see WP_Widget::form -- do not rename this */
    function form($instance) {	
 
        $message	= esc_attr($instance['url']);
        ?>
		<p>
          <label for="<?php echo $this->get_field_id('url'); ?>"><?php _e('Link URL'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('url'); ?>" name="<?php echo $this->get_field_name('url'); ?>" type="text" value="<?php echo $url; ?>" />
        </p>
        <?php 
    }
 
}

add_action('widgets_init', create_function('', 'return register_widget("ican_partner_widget");'));
?>