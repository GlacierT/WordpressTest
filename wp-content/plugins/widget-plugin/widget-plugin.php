<?php
/*
Plugin Name: My Widget Plugin
Plugin URI: https://github.com/GlacierT
Description: Displae painting post.
Version: 1.0.0
Author: Tanya
Author URI: https://github.com/GlacierT
*/

class Post_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'post_widget', // Base ID
			esc_html__( 'Post Painting', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Widget for painting post', 'text_domain' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		$args = array(
    		'post_type'      => 'painting',
    		'posts_per_page' => 10,
        );$loop = new WP_Query($args);
		while ( $loop->have_posts() ) {
			$loop->the_post();
		?>
		<style>
			.card {
			background-color: white;
			padding: 20px;
			margin-top: 20px;
			background: #ddd;
			}
		</style>
		<div class="card">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<p><?php echo get_the_date(__('j F Y в H:i')); ?></p>
		</div>
		<?php
		}
	}

	/*public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		echo esc_html__( 'Hello, World!', 'text_domain' );
		echo $args['after_widget'];
	}*/
    
    public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} 

function register_post_widget() {
    register_widget( 'Post_Widget' );
}
add_action( 'widgets_init', 'register_post_widget' );