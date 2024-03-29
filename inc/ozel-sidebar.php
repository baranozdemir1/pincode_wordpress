<?php
add_action( 'widgets_init', 'pincode_widgets_init' );
function pincode_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Detay Sayfası Yan Bar', 'pincode' ),
        'id' => 'pincode_bilesen',
        'description' => __( 'Yazı detay sayfasındaki yan bar.', 'pincode' ),
        'before_widget' => '<div class="widget-sidebar" style="background-color:'. cs_get_option('pincode_body_background_color') .'!important">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title-widget-sidebar cursor-default">',
        'after_title'   => '</h2>',
    ) );
}



/**
 * Recent_Posts widget class
 *
 * @since 2.8.0
 */
class PinCode_SonGonderiler_Widget extends WP_Widget {

    function __construct() {
        $widget_ops = array('classname' => 'widget_recent_entries', 'description' => __( "PinCode Temasına Özel Son Yazılar") );
        parent::__construct('recent-posts', __('PinCode Son Yazılar'), $widget_ops);
        $this->alt_option_name = 'widget_recent_entries';

        add_action( 'save_post', array($this, 'flush_widget_cache') );
        add_action( 'deleted_post', array($this, 'flush_widget_cache') );
        add_action( 'switch_theme', array($this, 'flush_widget_cache') );
    }

    function widget($args, $instance) {
        $cache = wp_cache_get('widget_recent_posts', 'widget');

        if ( !is_array($cache) )
            $cache = array();

        if ( ! isset( $args['widget_id'] ) )
            $args['widget_id'] = $this->id;

        if ( isset( $cache[ $args['widget_id'] ] ) ) {
            echo $cache[ $args['widget_id'] ];
            return;
        }

        ob_start();
        extract($args);

        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 10;
        if ( ! $number )
            $number = 10;
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

        $r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
        if ($r->have_posts()) :
        ?>
        <?php echo $before_widget; ?>
        <?php if ( $title ) echo $before_title . $title . $after_title; ?>
        <div class="content-widget-sidebar">
            <ul>
                <?php while ( $r->have_posts() ) : $r->the_post(); ?>

                    <li class="recent-post">
                        <div class="post-img">
                            <?php
                                    if ( has_post_thumbnail() )
                                    {
                                        $post_title = get_the_title();
                                        the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'alt' => $post_title]);
                                    }
                                    else
                                    {?>
                                    <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/empty-thumbnail.png" alt="">
                                <?php } ?>
                        </div>
                        <a href="<?php the_permalink() ?>" title="<?php echo esc_attr( get_the_title() ? get_the_title() : get_the_ID() ); ?>">  <h6>
                        
                        <?php if ( get_the_title() ) the_title(); else the_ID(); ?>
                        
                        </h6>  </a> 
                        <?php if ( $show_date ) : ?>
                        <p><small class="cursor-default"><i class="fa fa-calendar" data-original-title="" title=""></i> <?php echo get_the_date(); ?></small></p> 
                        <?php endif; ?>
                    </li>


                <?php endwhile; ?>
            </ul>
        </div>
        <?php echo $after_widget; ?>
        <?php
        // Reset the global $the_post as this query will have stomped on it
        wp_reset_postdata();

        endif;

        $cache[$args['widget_id']] = ob_get_flush();
        wp_cache_set('widget_recent_posts', $cache, 'widget');
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = (int) $new_instance['number'];
        $instance['show_date'] = (bool) $new_instance['show_date'];
        $this->flush_widget_cache();

        $alloptions = wp_cache_get( 'alloptions', 'options' );
        if ( isset($alloptions['widget_recent_entries']) )
            delete_option('widget_recent_entries');

        return $instance;
    }

    function flush_widget_cache() {
        wp_cache_delete('widget_recent_posts', 'widget');
    }

    function form( $instance ) {
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
        $show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
        ?>
        <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

        <p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
        <input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>

        <p><input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
        <label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Display post date?' ); ?></label></p>
        <?php
    }
}

add_action( 'widgets_init', function(){
    register_widget( 'PinCode_SonGonderiler_Widget' );
});





?>