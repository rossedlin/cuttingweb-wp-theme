<?php

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 27/06/2017
 * Time: 13:46
 *
 * Class ImageLinkWidget
 */
class ImageLinkWidget extends WP_Widget
{
    function __construct()
    {
        $widget_ops = array('description' => 'ImageLink Widget');
        $control_ops = array('width' => 400, 'height' => 300);
        parent::__construct(false, $name = 'ImageLink Widget', $widget_ops, $control_ops);
    }

    /* Displays the Widget in the front-end */
    function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', empty($instance['title']) ? 'ImageLink Me' : esc_html($instance['title']));
        $imagePath = empty($instance['imagePath']) ? '' : esc_attr($instance['imagePath']);
        $imageLinkLinkPath = empty($instance['imageLinkLinkPath']) ? '' : esc_attr($instance['imageLinkLinkPath']);
        $imageLinkText = empty($instance['imageLinkText']) ? '' : $instance['imageLinkText'];
        $imageLinkEnabled = (trim($imageLinkLinkPath) == '' ? false : true);
        
        ?>
        <!-- Widget Container -->
        <div class="widget imageLink-widget text-center">
            <div class="widget-wrap">
                <?= ($imageLinkEnabled ? '<a href="' . $imageLinkLinkPath . '">' : '') ?>
                <!-- Title -->
                <h3 class="widgettitle imageLink-widget-title text-center"><?= $title ?></h3>
                <hr>
                <img src="<?= $imagePath ?>" id="imageLink-image" class="imageLink-widget-img" alt=""/>
                <div class="textwidget imageLink-widget-content">
                    <!-- Content of Widget -->
                    <?= $imageLinkText ?>
                </div>
                <?= ($imageLinkEnabled ? '</a>' : '') ?>
            </div>
        </div>
        <!-- end imageLink widget section -->
        <?php
    }

    /*Saves the settings. */
    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['imagePath'] = esc_url($new_instance['imagePath']);
        $instance['imageLinkLinkPath'] = esc_url($new_instance['imageLinkLinkPath']);
        $instance['imageLinkText'] = current_user_can('unfiltered_html') ? $new_instance['imageLinkText'] : stripslashes(wp_filter_post_kses(addslashes($new_instance['imageLinkText'])));

        return $instance;
    }

    /*Creates the form for the widget in the back-end. */
    function form($instance)
    {
        //Defaults
        $instance = wp_parse_args((array)$instance, array('title' => 'Currently Reading', 'imagePath' => '', 'imageLinkLinkPath' => '', 'imageLinkText' => ''));

        $title = esc_attr($instance['title']);
        $imagePath = esc_url($instance['imagePath']);
        $imageLinkLinkPath = esc_url($instance['imageLinkLinkPath']);
        $imageLinkText = esc_textarea($instance['imageLinkText']);

        # Title
        echo '<p><label for="' . $this->get_field_id('title') . '">' . 'Title:' . '</label><input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></p>';
        # Image
        echo '<p><label for="' . $this->get_field_id('imagePath') . '">' . 'Image:' . '</label><textarea cols="20" rows="2" class="widefat" id="' . $this->get_field_id('imagePath') . '" name="' . $this->get_field_name('imagePath') . '" >' . $imagePath . '</textarea></p>';
        # Link
        echo '<p><label for="' . $this->get_field_id('imageLinkLinkPath') . '">' . 'Link:' . '</label><textarea cols="20" rows="2" class="widefat" id="' . $this->get_field_id('imageLinkLinkPath') . '" name="' . $this->get_field_name('imageLinkLinkPath') . '" >' . $imageLinkLinkPath . '</textarea></p>';
        # About Text
        echo '<p><label for="' . $this->get_field_id('imageLinkText') . '">' . 'Text:' . '</label><textarea cols="20" rows="5" class="widefat" id="' . $this->get_field_id('imageLinkText') . '" name="' . $this->get_field_name('imageLinkText') . '" >' . $imageLinkText . '</textarea></p>';
    }

}

function ImageLinkWidgetInit()
{
    register_widget('ImageLinkWidget');
}

add_action('widgets_init', 'ImageLinkWidgetInit'); ?>